<?php
class BatimentsController extends AppController {

	var $name = 'Batiments';

	function index() {
		$this->Batiment->recursive = 0;
		$this->set('batiments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid batiment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('batiment', $this->Batiment->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Batiment->create();
			if ($this->Batiment->save($this->data)) {
				$this->Session->setFlash(__('The batiment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The batiment could not be saved. Please, try again.', true));
			}
		}
		$annees = $this->Batiment->Annee->find('list');
		$etablissements = $this->Batiment->Etablissement->find('list');
		$this->set(compact('annees', 'etablissements'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid batiment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Batiment->save($this->data)) {
				$this->Session->setFlash(__('The batiment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The batiment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Batiment->read(null, $id);
		}
		$annees = $this->Batiment->Annee->find('list');
		$etablissements = $this->Batiment->Etablissement->find('list');
		$this->set(compact('annees', 'etablissements'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for batiment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Batiment->delete($id)) {
			$this->Session->setFlash(__('Batiment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Batiment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
