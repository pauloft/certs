<?php
class CertificatesController extends AppController {

	var $name = 'Certificates';
	
	function test() {
	
	}

	function index() {
		$this->Certificate->recursive = 0;
		$this->set('certificates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid certificate', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('certificate', $this->Certificate->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Certificate->create();
			if ($this->Certificate->save($this->data)) {
				$this->Session->setFlash(__('The certificate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The certificate could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid certificate', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Certificate->save($this->data)) {
				$this->Session->setFlash(__('The certificate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The certificate could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Certificate->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for certificate', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Certificate->delete($id)) {
			$this->Session->setFlash(__('Certificate deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Certificate was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
}
?>
