<?php
class Role extends AppModel {
	var $name = 'Role';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Utilisateur' => array(
			'className' => 'Utilisateur',
			'foreignKey' => 'role_id',
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

}
