<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
	public $validate = array(
		'email_address' => array(
			'rule' => 'nonEmpty'
		)
	);
}
