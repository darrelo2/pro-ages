<?php
/* Note Fixture generated on: 2011-08-15 19:19:20 : 1313435960 */
class NoteFixture extends CakeTestFixture {
	var $name = 'Note';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'note' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'annees_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_notes_annees1' => array('column' => 'annees_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'note' => 1,
			'annees_id' => 1
		),
	);
}
