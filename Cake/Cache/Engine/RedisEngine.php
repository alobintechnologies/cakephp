<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 2.2
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Cake\Cache\Engine;

use Cake\Cache\CacheEngine;

/**
 * Redis storage engine for cache.
 *
 */
class RedisEngine extends CacheEngine {

/**
 * Redis wrapper.
 *
 * @var Redis
 */
	protected $_Redis = null;

/**
 * Settings
 *
 *  - server = string URL or ip to the Redis server host
 *  - database = integer database number to use for connection
 *  - port = integer port number to the Redis server (default: 6379)
 *  - timeout = float timeout in seconds (default: 0)
 *  - persistent = boolean Connects to the Redis server with a persistent connection (default: true)
 *
 * @var array
 */
	protected $_config = [];

/**
 * Initialize the Cache Engine
 *
 * Called automatically by the cache frontend
 *
 * @param array $config array of setting for the engine
 * @return boolean True if the engine has been successfully initialized, false if not
 */
	public function init($config = []) {
		if (!class_exists('Redis')) {
			return false;
		}
		parent::init(array_merge([
			'prefix' => null,
			'server' => '127.0.0.1',
			'database' => 0,
			'port' => 6379,
			'password' => false,
			'timeout' => 0,
			'persistent' => true
			], $config)
		);

		return $this->_connect();
	}

/**
 * Connects to a Redis server
 *
 * @return boolean True if Redis server was connected
 */
	protected function _connect() {
		$return = false;
		try {
			$this->_Redis = new \Redis();
			if (empty($this->_config['persistent'])) {
				$return = $this->_Redis->connect($this->_config['server'], $this->_config['port'], $this->_config['timeout']);
			} else {
				$persistentId = $this->_config['port'] . $this->_config['timeout'] . $this->_config['database'];
				$return = $this->_Redis->pconnect($this->_config['server'], $this->_config['port'], $this->_config['timeout'], $persistentId);
			}
		} catch (RedisException $e) {
			return false;
		}
		if ($return && $this->_config['password']) {
			$return = $this->_Redis->auth($this->_config['password']);
		}
		if ($return) {
			$return = $this->_Redis->select($this->_config['database']);
		}
		return $return;
	}

/**
 * Write data for key into cache.
 *
 * @param string $key Identifier for the data
 * @param mixed $value Data to be cached
 * @param integer $duration How long to cache the data, in seconds
 * @return boolean True if the data was successfully cached, false on failure
 */
	public function write($key, $value, $duration) {
		if (!is_int($value)) {
			$value = serialize($value);
		}
		if ($duration === 0) {
			return $this->_Redis->set($key, $value);
		}

		return $this->_Redis->setex($key, $duration, $value);
	}

/**
 * Read a key from the cache
 *
 * @param string $key Identifier for the data
 * @return mixed The cached data, or false if the data doesn't exist, has expired, or if there was an error fetching it
 */
	public function read($key) {
		$value = $this->_Redis->get($key);
		if (ctype_digit($value)) {
			$value = (int)$value;
		}
		if ($value !== false && is_string($value)) {
			$value = unserialize($value);
		}
		return $value;
	}

/**
 * Increments the value of an integer cached key
 *
 * @param string $key Identifier for the data
 * @param integer $offset How much to increment
 * @return New incremented value, false otherwise
 */
	public function increment($key, $offset = 1) {
		return (int)$this->_Redis->incrBy($key, $offset);
	}

/**
 * Decrements the value of an integer cached key
 *
 * @param string $key Identifier for the data
 * @param integer $offset How much to subtract
 * @return New decremented value, false otherwise
 */
	public function decrement($key, $offset = 1) {
		return (int)$this->_Redis->decrBy($key, $offset);
	}

/**
 * Delete a key from the cache
 *
 * @param string $key Identifier for the data
 * @return boolean True if the value was successfully deleted, false if it didn't exist or couldn't be removed
 */
	public function delete($key) {
		return $this->_Redis->delete($key) > 0;
	}

/**
 * Delete all keys from the cache
 *
 * @param boolean $check
 * @return boolean True if the cache was successfully cleared, false otherwise
 */
	public function clear($check) {
		if ($check) {
			return true;
		}
		$keys = $this->_Redis->getKeys($this->_config['prefix'] . '*');
		$this->_Redis->del($keys);

		return true;
	}

/**
 * Returns the `group value` for each of the configured groups
 * If the group initial value was not found, then it initializes
 * the group accordingly.
 *
 * @return array
 */
	public function groups() {
		$result = [];
		foreach ($this->_config['groups'] as $group) {
			$value = $this->_Redis->get($this->_config['prefix'] . $group);
			if (!$value) {
				$value = 1;
				$this->_Redis->set($this->_config['prefix'] . $group, $value);
			}
			$result[] = $group . $value;
		}
		return $result;
	}

/**
 * Increments the group value to simulate deletion of all keys under a group
 * old values will remain in storage until they expire.
 *
 * @return boolean success
 */
	public function clearGroup($group) {
		return (bool)$this->_Redis->incr($this->_config['prefix'] . $group);
	}

/**
 * Disconnects from the redis server
 */
	public function __destruct() {
		if (!$this->_config['persistent']) {
			$this->_Redis->close();
		}
	}
}