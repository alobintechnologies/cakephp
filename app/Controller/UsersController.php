<?php
App::uses('AppController', 'Controller');

/**
 * This class is used for handling the user related tasks
 * @since v1.0
 */
class UsersController extends AppController {

	var $displayField = "first_name";
	
	/**
	 * This action is used for logging in authentication handling
	 * @since v1.0
	 */
	public function login() {
		if ($this->Session->check('User')) { // if user logged in redirect to ldashboard
			$this->redirect(array('controller'=>'pages', 'action'=>'index', 'admin'=>true));	
		}

		if (!empty($this->data)) { // if user not logged in and signing now
			$this->User->set($this->data); // sets the user data for form validation
			if ($this->User->validates()) { // check the validation
				$result = $this->User->checkUser($this->data); // return if user exists

				if ($result !== false) {
					// update the login time
					$this->User->id = $result['User']['id'];
					$this->User->saveField('last_login_time', date("Y-m-d H:i:s"));

					// save user to session
					$this->Session->write('User', $result);
					$this->redirect(array('controller'=>'pages', 'action'=>'index', 'admin'=>true));
				} else {
					$this->Session->setFlash('Either your username or password is invalid.', 'invalid');
				}
			}
		}
		$this->layout = "login";
	} // end  of login function

	/**
	 * This method is used for logout
	 * @since v1.0
	 */
	public function logout() {
		if($this->Session->check('User')) {
			$this->Session->destroy();
		}
		$this->redirect(array('action'=>'login'));
	}

	public function register() {
		$this->layout = "login";
	}
}
?>