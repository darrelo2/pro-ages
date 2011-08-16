<?php
class Note extends AppModel {
	var $name = 'Note';
	var $validate = array(
		'note' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'annees_id' => array(
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
		'Annees' => array(
			'className' => 'Annees',
			'foreignKey' => 'annees_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'HasClass' => array(
			'className' => 'HasClass',
			'joinTable' => 'notes_has_classes',
			'foreignKey' => 'note_id',
			'associationForeignKey' => 'has_class_id',
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
		'HasEleve' => array(
			'className' => 'HasEleve',
			'joinTable' => 'notes_has_eleves',
			'foreignKey' => 'note_id',
			'associationForeignKey' => 'has_eleve_id',
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
		'HasMatiere' => array(
			'className' => 'HasMatiere',
			'joinTable' => 'notes_has_matieres',
			'foreignKey' => 'note_id',
			'associationForeignKey' => 'has_matiere_id',
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
		'HasPersonnel' => array(
			'className' => 'HasPersonnel',
			'joinTable' => 'notes_has_personnels',
			'foreignKey' => 'note_id',
			'associationForeignKey' => 'has_personnel_id',
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
