<?php
    //composerのautoloadを読み込み
	require_once __DIR__.'/../vendor/autoload.php';
	//設定ファイル
	require_once("SingletonConf.class.php");
	$SingletonConf  = SingletonConf::getSingletonConf();	
	$library_path   = $SingletonConf->get_library_path();
	
	//認証クラス
	require_once('User.class.php');
	
	//ログイン状態を保存したオブジェクトが存在するなら受け取る
	$context = isset($_COOKIE['context']) ? $_COOKIE['context'] : null;
	$context = unserialize($context);
	
	//ないならログアウト状態で作っておく
	if(is_null($context) || $context === false){
		$context = new User('ゲスト');
	}

/*
	//debugcode 絶対ログイン状態になる
	if(!$context->isAuthenticated()){
		$context->switchState();
	}
*/
	//今のログイン状態をクッキーに保存
	setcookie("context", serialize($context), time()+3600);
	$library = 'DailyReport';
	$context->bootIcicle($library);
	?>
