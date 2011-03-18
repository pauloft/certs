<?php
class CertificationTypesController extends AppController {

	var $name = 'CertificationTypes';
	var $components = array('RequestHandler');
	var $helpers = array('Js' => array('Jquery'));

	function index() {
		$this->CertificationType->recursive = 0;
		$this->set('certificationTypes', $this->paginate());
	}
	
	// list certifications for a given type
	function listCertifications(){
		$this->set('cert_types', $this->CertificationType->find('list'));
	}
	
	function getCertificationsAjax(){
		Configure::write('debug', 0);
		if($this->RequestHandler->isAjax()) {
			$this->set('mycerts', $this->CertificationType->Certification->find('list',
						array('conditions'=>array(
							'Certification.certification_type_id'=>$this->params['url']['cert_type_id']),
							'recursive' => -1)));
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid certification type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('certificationType', $this->CertificationType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CertificationType->create();
			if ($this->CertificationType->save($this->data)) {
				$this->Session->setFlash(__('The certification type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The certification type could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid certification type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CertificationType->save($this->data)) {
				$this->Session->setFlash(__('The certification type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The certification type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CertificationType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for certification type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CertificationType->delete($id)) {
			$this->Session->setFlash(__('Certification type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Certification type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
