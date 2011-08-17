<?php
class TuteursController extends AppController {

	var $name = 'Tuteurs';

	function index() {
		$this->Tuteur->recursive = 0;
		$this->set('tuteurs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tuteur', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tuteur', $this->Tuteur->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tuteur->create();
			if ($this->Tuteur->save($this->data)) {
				$this->Session->setFlash(__('The tuteur has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tuteur could not be saved. Please, try again.', true));
			}
		}
		$annees = $this->Tuteur->Annee->find('list');
		$eleves = $this->Tuteur->Eleve->find('list');
		$this->set(compact('annees', 'eleves'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tuteur', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tuteur->save($this->data)) {
				$this->Session->setFlash(__('The tuteur has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tuteur could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tuteur->read(null, $id);
		}
		$annees = $this->Tuteur->Annee->find('list');
		$eleves = $this->Tuteur->Eleve->find('list');
		$this->set(compact('annees', 'eleves'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tuteur', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tuteur->delete($id)) {
			$this->Session->setFlash(__('Tuteur deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tuteur was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
