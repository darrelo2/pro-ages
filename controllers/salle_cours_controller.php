<?php
class SalleCoursController extends AppController {

	var $name = 'SalleCours';

	function index() {
		$this->SalleCours->recursive = 0;
		$this->set('salleCours', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid salle cours', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('salleCours', $this->SalleCours->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SalleCours->create();
			if ($this->SalleCours->save($this->data)) {
				$this->Session->setFlash(__('The salle cours has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salle cours could not be saved. Please, try again.', true));
			}
		}
		$batiments = $this->SalleCours->Batiment->find('list');
		$annees = $this->SalleCours->Annee->find('list');
		$classes = $this->SalleCours->Classe->find('list');
		$this->set(compact('batiments', 'annees', 'classes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid salle cours', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SalleCours->save($this->data)) {
				$this->Session->setFlash(__('The salle cours has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salle cours could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SalleCours->read(null, $id);
		}
		$batiments = $this->SalleCours->Batiment->find('list');
		$annees = $this->SalleCours->Annee->find('list');
		$classes = $this->SalleCours->Classe->find('list');
		$this->set(compact('batiments', 'annees', 'classes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for salle cours', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SalleCours->delete($id)) {
			$this->Session->setFlash(__('Salle cours deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Salle cours was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
