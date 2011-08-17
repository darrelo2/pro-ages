<?php
class BulletinsController extends AppController {

	var $name = 'Bulletins';

	function index() {
		$this->Bulletin->recursive = 0;
		$this->set('bulletins', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid bulletin', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bulletin', $this->Bulletin->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Bulletin->create();
			if ($this->Bulletin->save($this->data)) {
				$this->Session->setFlash(__('The bulletin has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bulletin could not be saved. Please, try again.', true));
			}
		}
		$annees = $this->Bulletin->Annee->find('list');
		$eleves = $this->Bulletin->Eleve->find('list');
		$this->set(compact('annees', 'eleves'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid bulletin', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Bulletin->save($this->data)) {
				$this->Session->setFlash(__('The bulletin has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bulletin could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Bulletin->read(null, $id);
		}
		$annees = $this->Bulletin->Annee->find('list');
		$eleves = $this->Bulletin->Eleve->find('list');
		$this->set(compact('annees', 'eleves'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for bulletin', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Bulletin->delete($id)) {
			$this->Session->setFlash(__('Bulletin deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bulletin was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
