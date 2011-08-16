<?php
/* Etablissement Test cases generated on: 2011-08-15 19:17:16 : 1313435836*/
App::import('Model', 'Etablissement');

class EtablissementTestCase extends CakeTestCase {
	var $fixtures = array('app.etablissement', 'app.academies');

	function startTest() {
		$this->Etablissement =& ClassRegistry::init('Etablissement');
	}

	function endTest() {
		unset($this->Etablissement);
		ClassRegistry::flush();
	}

}
