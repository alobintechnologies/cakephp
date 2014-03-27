<?php
App::uses('AppController', 'Controller');
/**
 * Listings Controller
 *
 * @property Listing $Listing
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ListingsController extends AppController {

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
		$this->Listing->recursive = 0;
		$this->set('listings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Listing->exists($id)) {
			throw new NotFoundException(__('Invalid listing'));
		}
		$options = array('conditions' => array('Listing.' . $this->Listing->primaryKey => $id));
		$this->set('listing', $this->Listing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Listing->create();
			if ($this->Listing->save($this->request->data)) {
				$this->Session->setFlash(__('The listing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listing could not be saved. Please, try again.'));
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
		if (!$this->Listing->exists($id)) {
			throw new NotFoundException(__('Invalid listing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Listing->save($this->request->data)) {
				$this->Session->setFlash(__('The listing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Listing.' . $this->Listing->primaryKey => $id));
			$this->request->data = $this->Listing->find('first', $options);
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
		$this->Listing->id = $id;
		if (!$this->Listing->exists()) {
			throw new NotFoundException(__('Invalid listing'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Listing->delete()) {
			$this->Session->setFlash(__('The listing has been deleted.'));
		} else {
			$this->Session->setFlash(__('The listing could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Listing->recursive = 0;
		$this->set('listings', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Listing->exists($id)) {
			throw new NotFoundException(__('Invalid listing'));
		}
		$options = array('conditions' => array('Listing.' . $this->Listing->primaryKey => $id));
		$this->set('listing', $this->Listing->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Listing->create();
			if ($this->Listing->save($this->request->data)) {
				$this->Session->setFlash(__('The listing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listing could not be saved. Please, try again.'));
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
		if (!$this->Listing->exists($id)) {
			throw new NotFoundException(__('Invalid listing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Listing->save($this->request->data)) {
				$this->Session->setFlash(__('The listing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Listing.' . $this->Listing->primaryKey => $id));
			$this->request->data = $this->Listing->find('first', $options);
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
		$this->Listing->id = $id;
		if (!$this->Listing->exists()) {
			throw new NotFoundException(__('Invalid listing'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Listing->delete()) {
			$this->Session->setFlash(__('The listing has been deleted.'));
		} else {
			$this->Session->setFlash(__('The listing could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
