<?php
class Note extends AppModel {
	var $name = 'Note';
	var $validate = array(
		'annee_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Annee' => array(
			'className' => 'Annee',
			'foreignKey' => 'annee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Classe' => array(
			'className' => 'Classe',
			'joinTable' => 'classes_notes',
			'foreignKey' => 'note_id',
			'associationForeignKey' => 'classe_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Eleve' => array(
			'className' => 'Eleve',
			'joinTable' => 'eleves_notes',
			'foreignKey' => 'note_id',
			'associationForeignKey' => 'eleve_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Matiere' => array(
			'className' => 'Matiere',
			'joinTable' => 'matieres_notes',
			'foreignKey' => 'note_id',
			'associationForeignKey' => 'matiere_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Personnel' => array(
			'className' => 'Personnel',
			'joinTable' => 'notes_personnels',
			'foreignKey' => 'note_id',
			'associationForeignKey' => 'personnel_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
