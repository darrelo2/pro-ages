<?php
class EtablissementsController extends AppController {

	var $name = 'Etablissements';

	function index() {
		$this->Etablissement->recursive = 0;
		$this->set('etablissements', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid etablissement', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('etablissement', $this->Etablissement->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Etablissement->create();
			if ($this->Etablissement->save($this->data)) {
				$this->Session->setFlash(__('The etablissement has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etablissement could not be saved. Please, try again.', true));
			}
		}
		$academies = $this->Etablissement->Academie->find('list');
		$this->set(compact('academies'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid etablissement', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Etablissement->save($this->data)) {
				$this->Session->setFlash(__('The etablissement has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etablissement could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Etablissement->read(null, $id);
		}
		$academies = $this->Etablissement->Academie->find('list');
		$this->set(compact('academies'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for etablissement', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Etablissement->delete($id)) {
			$this->Session->setFlash(__('Etablissement deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Etablissement was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
