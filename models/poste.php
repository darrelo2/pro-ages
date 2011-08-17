<?php
class Poste extends AppModel {
	var $name = 'Poste';
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
		'Personnel' => array(
			'className' => 'Personnel',
			'joinTable' => 'personnels_postes',
			'foreignKey' => 'poste_id',
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
