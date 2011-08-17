<?php
class AbsencesController extends AppController {

	var $name = 'Absences';

	function index() {
		$this->Absence->recursive = 0;
		$this->set('absences', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid absence', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('absence', $this->Absence->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Absence->create();
			if ($this->Absence->save($this->data)) {
				$this->Session->setFlash(__('The absence has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The absence could not be saved. Please, try again.', true));
			}
		}
		$annees = $this->Absence->Annee->find('list');
		$etablissements = $this->Absence->Etablissement->find('list');
		$eleves = $this->Absence->Eleve->find('list');
		$personnels = $this->Absence->Personnel->find('list');
		$this->set(compact('annees', 'etablissements', 'eleves', 'personnels'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid absence', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Absence->save($this->data)) {
				$this->Session->setFlash(__('The absence has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The absence could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Absence->read(null, $id);
		}
		$annees = $this->Absence->Annee->find('list');
		$etablissements = $this->Absence->Etablissement->find('list');
		$eleves = $this->Absence->Eleve->find('list');
		$personnels = $this->Absence->Personnel->find('list');
		$this->set(compact('annees', 'etablissements', 'eleves', 'personnels'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for absence', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Absence->delete($id)) {
			$this->Session->setFlash(__('Absence deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Absence was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
