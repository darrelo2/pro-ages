<?php
class AnneesController extends AppController {

	var $name = 'Annees';

	function index() {
		$this->Annee->recursive = 0;
		$this->set('annees', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid annee', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('annee', $this->Annee->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Annee->create();
			if ($this->Annee->save($this->data)) {
				$this->Session->setFlash(__('The annee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The annee could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid annee', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Annee->save($this->data)) {
				$this->Session->setFlash(__('The annee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The annee could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Annee->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for annee', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Annee->delete($id)) {
			$this->Session->setFlash(__('Annee deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Annee was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
