<?php
class SalleCours extends AppModel {
	var $name = 'SalleCours';
	var $validate = array(
		'batiment_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'Batiment' => array(
			'className' => 'Batiment',
			'foreignKey' => 'batiment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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
			'joinTable' => 'classes_salle_cours',
			'foreignKey' => 'salle_cours_id',
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
		)
	);

}
