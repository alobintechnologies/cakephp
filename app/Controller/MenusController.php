<?php

App::uses('AppController', 'Controller');

/**
 * This class is used for managing the Menus which will be placed
 * across the website both for public and admin web pages.
 * @since v1.0
 */
class MenusController extends AppController {
	/**
	 * This function is used for retrieving the list of menus
	 * from the database.
	 */
	public function getByType($type) {
		if(empty($this->request->params['requested'])) {
			throw new ForbiddenException();
		}		
		return $this->Menu->findByType($type); // returns the list of menus having type value $type
	}
}
?>