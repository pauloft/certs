<?php
class CertificationsController extends AppController {

	var $name = 'Certifications';

	function index() {
		$this->Certification->recursive = 0;
		$this->set('certifications', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid certification', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('certification', $this->Certification->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Certification->create();
			if ($this->Certification->save($this->data)) {
				$this->Session->setFlash(__('The certification has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The certification could not be saved. Please, try again.', true));
			}
		}
		$certificationTypes = $this->Certification->CertificationType->find('list');
		$users = $this->Certification->User->find('list');
		$this->set(compact('certificationTypes', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid certification', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Certification->save($this->data)) {
				$this->Session->setFlash(__('The certification has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The certification could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Certification->read(null, $id);
		}
		$certificationTypes = $this->Certification->CertificationType->find('list');
		$users = $this->Certification->User->find('list');
		$this->set(compact('certificationTypes', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for certification', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Certification->delete($id)) {
			$this->Session->setFlash(__('Certification deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Certification was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>