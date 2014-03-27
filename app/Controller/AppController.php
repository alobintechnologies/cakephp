<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $uploadDir = "uploads";
	public $helpers = array('Wysiwyg.Nicedit');
	/**
	 * This is used for rendering the theme for public site
	 * @since v1.0
	 */
	function beforeRender() {
		$this->theme = "TwentyFourteen";
	}

	/**
	 * This is used for setting the user session exisits and admin layout setting
	 * @since v1.0
	 */
	function beforeFilter() {
		if(isset($this->params['admin']) && $this->params['admin']) {
			$this->layout = "admin";
		}
	}
}
