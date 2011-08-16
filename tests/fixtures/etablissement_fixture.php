<?php
/* Etablissement Fixture generated on: 2011-08-15 19:17:16 : 1313435836 */
class EtablissementFixture extends CakeTestFixture {
	var $name = 'Etablissement';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'etab_nom' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'etab_adresse' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 245, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'etab_ville' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'etab_province' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'etab_departement' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'etab_fax' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'etab_email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'etab_boite_postale' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'etab_code_acces' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'eta_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'academies_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_etablissements_academies' => array('column' => 'academies_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'etab_nom' => 'Lorem ipsum dolor sit amet',
			'etab_adresse' => 'Lorem ipsum dolor sit amet',
			'etab_ville' => 'Lorem ipsum dolor sit amet',
			'etab_province' => 'Lorem ipsum dolor sit amet',
			'etab_departement' => 'Lorem ipsum dolor sit amet',
			'etab_fax' => 1,
			'etab_email' => 'Lorem ipsum dolor sit amet',
			'etab_boite_postale' => 1,
			'etab_code_acces' => 'Lorem ipsum dolor sit amet',
			'eta_type' => 'Lorem ipsum dolor sit amet',
			'academies_id' => 1
		),
	);
}
