<?php
class ClassesController extends AppController {

	var $name = 'Classes';

	function index() {
		$this->Classe->recursive = 0;
		$this->set('classes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid classe', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('classe', $this->Classe->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Classe->create();
			if ($this->Classe->save($this->data)) {
				$this->Session->setFlash(__('The classe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classe could not be saved. Please, try again.', true));
			}
		}
		$annees = $this->Classe->Annee->find('list');
		$etablissements = $this->Classe->Etablissement->find('list');
		$matieres = $this->Classe->Matiere->find('list');
		$notes = $this->Classe->Note->find('list');
		$personnels = $this->Classe->Personnel->find('list');
		$salleCours = $this->Classe->SalleCours->find('list');
		$this->set(compact('annees', 'etablissements', 'matieres', 'notes', 'personnels', 'salleCours'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid classe', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Classe->save($this->data)) {
				$this->Session->setFlash(__('The classe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classe could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Classe->read(null, $id);
		}
		$annees = $this->Classe->Annee->find('list');
		$etablissements = $this->Classe->Etablissement->find('list');
		$matieres = $this->Classe->Matiere->find('list');
		$notes = $this->Classe->Note->find('list');
		$personnels = $this->Classe->Personnel->find('list');
		$salleCours = $this->Classe->SalleCours->find('list');
		$this->set(compact('annees', 'etablissements', 'matieres', 'notes', 'personnels', 'salleCours'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for classe', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Classe->delete($id)) {
			$this->Session->setFlash(__('Classe deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Classe was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
