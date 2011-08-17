<?php
/* Classe Fixture generated on: 2011-08-17 05:50:37 : 1313560237 */
class ClasseFixture extends CakeTestFixture {
	var $name = 'Classe';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'clas_nom' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'clas_code' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'annee_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'etablissement_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_classes_annees1' => array('column' => 'annee_id', 'unique' => 0), 'fk_classes_etablissements1' => array('column' => 'etablissement_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'clas_nom' => 'Lorem ipsum dolor sit amet',
			'clas_code' => 'Lorem ipsum dolor sit amet',
			'annee_id' => 1,
			'etablissement_id' => 1
		),
	);
}
