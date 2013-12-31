<?php

	require_once("SingletonConf.class.php");
	$SingletonConf   = SingletonConf::getSingletonConf();
	require_once($SingletonConf->get_library_path().'User.class.php');

	session_start();
	$context = isset($_SESSION['context']) ? $_SESSION['context'] : null;
	
	if(is_null($context)){
		$context = new User('hoge');
	}
	
	$mode = (isset($_GET['mode']) ? $_GET['mode'] : '');
	
	switch ($mode){
	
		case 'state':
			echo '<p style = color:#aa0000>状態を遷移します</p>';
			$context->switchState();
		break;

		case 'inc':
			echo '<p style = color:#aa0000>カウントアップします</p>';
		break;

		case 'reset':
			echo '<p style = color:#aa0000>カウントリセットします</p>';
		break;

	}

	$_SESSION['context'] = $context;

	echo '$context = ';
	var_dump($context);
	
	echo 'ようこそ'.$context->getUserName() . 'さん<br />';
	echo '現在ログインして' . ($context->isAuthenticated() ? 'います' : 'いません') . '<br />';
	
	echo '現在のカウント<br />';

	echo $context->getMenu() . '<br />';
?>
