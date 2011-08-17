<?php
class PostesController extends AppController {

	var $name = 'Postes';

	function index() {
		$this->Poste->recursive = 0;
		$this->set('postes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid poste', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('poste', $this->Poste->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Poste->create();
			if ($this->Poste->save($this->data)) {
				$this->Session->setFlash(__('The poste has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The poste could not be saved. Please, try again.', true));
			}
		}
		$annees = $this->Poste->Annee->find('list');
		$personnels = $this->Poste->Personnel->find('list');
		$this->set(compact('annees', 'personnels'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid poste', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Poste->save($this->data)) {
				$this->Session->setFlash(__('The poste has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The poste could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Poste->read(null, $id);
		}
		$annees = $this->Poste->Annee->find('list');
		$personnels = $this->Poste->Personnel->find('list');
		$this->set(compact('annees', 'personnels'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for poste', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Poste->delete($id)) {
			$this->Session->setFlash(__('Poste deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Poste was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
