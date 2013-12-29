<?php
	
	require_once("SingletonConf.class.php");
	$SingletonConf       = SingletonConf::getSingletonConf();
	$library_path = $SingletonConf->get_library_path();
	require_once($library_path.'SpDisplay.class.php');
	
	class SpContents extends SpDisplay {

		/*
		 * コンテンツ表示準備
		 */
		protected function executeUniqueAction(){
			echo 'ユニークな処理内容';
 		}

		/*
		 * メタタグ設定
		 */
		protected function setMeta(){
			echo 'メタタグ設定';
 		}

		/*
		 * CSS設定
		 */
		protected function setStyleSheet(){
			echo 'スタイル設定';
 		}

		/*
		 * JS設定
		 */
		protected function setJavascript(){
			echo'JSの設定';
 		}

		/*
		 * タイトル設定
		 */
		protected function setTitle(){
			echo'タイトルの設定';
 		}

		/*
		 * タイトル設定
		 */
		protected function displayContents(){
			echo'コンテンツの設定';
 		}
	}
?>
