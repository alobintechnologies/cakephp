<?php
App::uses('AppController', 'Controller');
/**
 * Masters Controller
 *
 * @property Master $Master
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MastersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Master->recursive = 0;
		$this->set('masters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Master->exists($id)) {
			throw new NotFoundException(__('Invalid master'));
		}
		$options = array('conditions' => array('Master.' . $this->Master->primaryKey => $id));
		$this->set('master', $this->Master->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Master->create();
			if ($this->Master->save($this->request->data)) {
				$this->Session->setFlash(__('The master has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The master could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Master->exists($id)) {
			throw new NotFoundException(__('Invalid master'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Master->save($this->request->data)) {
				$this->Session->setFlash(__('The master has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Master.' . $this->Master->primaryKey => $id));
			$this->request->data = $this->Master->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Master->id = $id;
		if (!$this->Master->exists()) {
			throw new NotFoundException(__('Invalid master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Master->delete()) {
			$this->Session->setFlash(__('The master has been deleted.'));
		} else {
			$this->Session->setFlash(__('The master could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Master->recursive = 0;
		$this->set('masters', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Master->exists($id)) {
			throw new NotFoundException(__('Invalid master'));
		}
		$options = array('conditions' => array('Master.' . $this->Master->primaryKey => $id));
		$this->set('master', $this->Master->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Master->create();
			if ($this->Master->save($this->request->data)) {
				$this->Session->setFlash(__('The master has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The master could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Master->exists($id)) {
			throw new NotFoundException(__('Invalid master'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Master->save($this->request->data)) {
				$this->Session->setFlash(__('The master has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Master.' . $this->Master->primaryKey => $id));
			$this->request->data = $this->Master->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Master->id = $id;
		if (!$this->Master->exists()) {
			throw new NotFoundException(__('Invalid master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Master->delete()) {
			$this->Session->setFlash(__('The master has been deleted.'));
		} else {
			$this->Session->setFlash(__('The master could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
