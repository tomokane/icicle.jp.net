<?php

	require_once("SingletonConf.class.php");

	$SingletonConf  = SingletonConf::getSingletonConf();	
	$library_path   = $SingletonConf->get_library_path();

	require_once($library_path.'SpContents.class.php');
	$SpContentsLibrary = new SpContents();
	$SpContentsLibrary->display();

?>
