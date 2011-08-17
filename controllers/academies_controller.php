<?php
class AcademiesController extends AppController {

	var $name = 'Academies';

	function index() {
		$this->Academie->recursive = 0;
		$this->set('academies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
		$this->Session->setFlash(__('Invalid academie', true));
			$this->redirect(array('action' => 'index'));
			}
		if($this->Academie->findById($id)!=0){
			$this->set('academie', $this->Academie->read(null, $id));
			}else{
			$this->Session->setFlash(__('Invalid academie', true));
			$this->cakeError('error404', array(array('url' => $this->action)));
			$this->redirect($this->referer());
			}
		
		
	}

	function add() {
		if (!empty($this->data)) {
			$this->Academie->create();
			if ($this->Academie->save($this->data)) {
				$this->Session->setFlash(__('The academie has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The academie could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid academie', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Academie->save($this->data)) {
				$this->Session->setFlash(__('The academie has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The academie could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Academie->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for academie', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Academie->delete($id)) {
			$this->Session->setFlash(__('Academie deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Academie was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
