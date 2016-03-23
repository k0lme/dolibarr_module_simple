<?php

class TSimple208000 extends TObjetStd {

	function __construct() {
		
		parent::set_table(MAIN_DB_PREFIX.'simple208000');

		parent::add_champs('title',array('type'=>'string','index'=>true,'length'=>80));
		parent::add_champs('fk_contact',array('type'=>'integer','index'=>true));

		parent::_init_vars();

		parent::start();

	}

}

