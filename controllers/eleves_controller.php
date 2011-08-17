<?php
class ElevesController extends AppController {

	var $name = 'Eleves';

	function index() {
		$this->Eleve->recursive = 0;
		$this->set('eleves', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid eleve', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('eleve', $this->Eleve->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Eleve->create();
			if ($this->Eleve->save($this->data)) {
				$this->Session->setFlash(__('The eleve has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eleve could not be saved. Please, try again.', true));
			}
		}
		$classes = $this->Eleve->Classe->find('list');
		$annees = $this->Eleve->Annee->find('list');
		$etablissements = $this->Eleve->Etablissement->find('list');
		$absences = $this->Eleve->Absence->find('list');
		$bulletins = $this->Eleve->Bulletin->find('list');
		$notes = $this->Eleve->Note->find('list');
		$tuteurs = $this->Eleve->Tuteur->find('list');
		$this->set(compact('classes', 'annees', 'etablissements', 'absences', 'bulletins', 'notes', 'tuteurs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid eleve', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Eleve->save($this->data)) {
				$this->Session->setFlash(__('The eleve has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eleve could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Eleve->read(null, $id);
		}
		$classes = $this->Eleve->Classe->find('list');
		$annees = $this->Eleve->Annee->find('list');
		$etablissements = $this->Eleve->Etablissement->find('list');
		$absences = $this->Eleve->Absence->find('list');
		$bulletins = $this->Eleve->Bulletin->find('list');
		$notes = $this->Eleve->Note->find('list');
		$tuteurs = $this->Eleve->Tuteur->find('list');
		$this->set(compact('classes', 'annees', 'etablissements', 'absences', 'bulletins', 'notes', 'tuteurs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for eleve', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Eleve->delete($id)) {
			$this->Session->setFlash(__('Eleve deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Eleve was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
