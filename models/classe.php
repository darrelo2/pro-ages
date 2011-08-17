<?php
class Classe extends AppModel {
	var $name = 'Classe';
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
		'etablissement_id' => array(
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
		),
		'Etablissement' => array(
			'className' => 'Etablissement',
			'foreignKey' => 'etablissement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Eleve' => array(
			'className' => 'Eleve',
			'foreignKey' => 'classe_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


	var $hasAndBelongsToMany = array(
		'Matiere' => array(
			'className' => 'Matiere',
			'joinTable' => 'classes_matieres',
			'foreignKey' => 'classe_id',
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
		'Note' => array(
			'className' => 'Note',
			'joinTable' => 'classes_notes',
			'foreignKey' => 'classe_id',
			'associationForeignKey' => 'note_id',
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
			'joinTable' => 'classes_personnels',
			'foreignKey' => 'classe_id',
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
		),
		'SalleCours' => array(
			'className' => 'SalleCours',
			'joinTable' => 'classes_salle_cours',
			'foreignKey' => 'classe_id',
			'associationForeignKey' => 'salle_cours_id',
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
