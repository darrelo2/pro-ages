<?php
class PersonnelsController extends AppController {

	var $name = 'Personnels';

	function index() {
		$this->Personnel->recursive = 0;
		$this->set('personnels', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid personnel', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('personnel', $this->Personnel->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Personnel->create();
			if ($this->Personnel->save($this->data)) {
				$this->Session->setFlash(__('The personnel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personnel could not be saved. Please, try again.', true));
			}
		}
		$annees = $this->Personnel->Annee->find('list');
		$etablissements = $this->Personnel->Etablissement->find('list');
		$absences = $this->Personnel->Absence->find('list');
		$classes = $this->Personnel->Classe->find('list');
		$notes = $this->Personnel->Note->find('list');
		$postes = $this->Personnel->Poste->find('list');
		$this->set(compact('annees', 'etablissements', 'absences', 'classes', 'notes', 'postes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid personnel', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Personnel->save($this->data)) {
				$this->Session->setFlash(__('The personnel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personnel could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Personnel->read(null, $id);
		}
		$annees = $this->Personnel->Annee->find('list');
		$etablissements = $this->Personnel->Etablissement->find('list');
		$absences = $this->Personnel->Absence->find('list');
		$classes = $this->Personnel->Classe->find('list');
		$notes = $this->Personnel->Note->find('list');
		$postes = $this->Personnel->Poste->find('list');
		$this->set(compact('annees', 'etablissements', 'absences', 'classes', 'notes', 'postes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for personnel', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Personnel->delete($id)) {
			$this->Session->setFlash(__('Personnel deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Personnel was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
