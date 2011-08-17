<?php
class MatieresController extends AppController {

	var $name = 'Matieres';

	function index() {
		$this->Matiere->recursive = 0;
		$this->set('matieres', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid matiere', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('matiere', $this->Matiere->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Matiere->create();
			if ($this->Matiere->save($this->data)) {
				$this->Session->setFlash(__('The matiere has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The matiere could not be saved. Please, try again.', true));
			}
		}
		$annees = $this->Matiere->Annee->find('list');
		$classes = $this->Matiere->Classe->find('list');
		$notes = $this->Matiere->Note->find('list');
		$this->set(compact('annees', 'classes', 'notes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid matiere', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Matiere->save($this->data)) {
				$this->Session->setFlash(__('The matiere has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The matiere could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Matiere->read(null, $id);
		}
		$annees = $this->Matiere->Annee->find('list');
		$classes = $this->Matiere->Classe->find('list');
		$notes = $this->Matiere->Note->find('list');
		$this->set(compact('annees', 'classes', 'notes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for matiere', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Matiere->delete($id)) {
			$this->Session->setFlash(__('Matiere deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Matiere was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
