<?php
class DepartmentsController extends AppController {

	var $name = 'Departments';
	var $components = array('RequestHandler');
	var $helpers = array('Js' => array('Jquery'));
	
	function listDepartments() {
		$this->set('listofdepartments', $this->Department->find('list'));
	}
	
	function getUsersAjax(){
		Config::write('debug', 0);
		if($this->RequestHandler->isAjax()) {
			$this->set('usersAjax', $this->Department->User->find('list',
				array('conditions'=>array('User.department_id'=>$this->params['url']['userID']), 'recursive'=>-1)
			));
		}
	}

	function index() {
		$this->Department->recursive = 0;
		$this->set('departments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid department', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('department', $this->Department->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Department->create();
			if ($this->Department->save($this->data)) {
				$this->Session->setFlash(__('The department has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The department could not be saved. Please, try again.', true));
			}
		}
	}
	
	// called to validate creation of a department
	function ajax_validate() {
		Configure::write('debug', 0);
		if($this->RequestHandler->isAjax()) {
			$this->data['Department'][$this->params['form']['field']] = $this->params['form']['value'];
			$this->Department->set($this->data);
			if($this->Department->validates()) {
				$this->autoRender = false;
			} else {
				$errorArray = $this->validateErrors($this->Department);
				$this->set('error', $errorArray[$this->params['form']['field']]);
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid department', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Department->save($this->data)) {
				$this->Session->setFlash(__('The department has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The department could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Department->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for department', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Department->delete($id)) {
			$this->Session->setFlash(__('Department deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Department was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
