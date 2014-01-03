<?php
	
	require_once("SingletonConf.class.php");
	$SingletonConf   = SingletonConf::getSingletonConf();
	require_once('PcDisplay.class.php');



	
	class PcDailyReport extends PcDisplay {

		/*
		 * 日付
		 */

		private $today;

		/*
		 * コンテンツ表示準備
		 */
		protected function executeUniqueAction(){
			$date   = new DateTime();
			$this->today  = $date->format('Y/m/d');
 		}

		/*
		 * メタタグ設定
		 */
		protected function setMeta(){
			echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
			echo '<meta name="format-detection" content="telephone=no">';
 		}

		/*
		 * CSS設定
		 */
		protected function setStyleSheet(){
			echo'<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen" />';
			echo'<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">';
			echo'<link rel="stylesheet" href="/css/DailyReport.css"                                           type="text/css" />';
			echo'<link rel="stylesheet" href="/css/accordion.css"                                             type="text/css" />';
 		}

		/*
		 * JS設定
		 */
		protected function setJavascript(){
			echo'<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>';
			echo'<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>';
			echo'<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.19/jquery-ui.min.js"></script>';
			echo'<script src="/js/calender.js"></script>';
		}

		/*
		 * タイトル設定
		 */
		protected function setTitle(){
			echo'<title>入力画面|日報</title>';
 		}

		/*
		 * タイトル設定
		 */
		protected function displayContents(){

//		require_once(SingletonConf::getSingletonConf()->get_template_path().'PcDailyReportInput.inc');

			$smarty               = new Smarty();
			$smarty->template_dir = SingletonConf::getSingletonConf()->get_template_path();
			$smarty->compile_dir  = SingletonConf::getSingletonConf()->get_template_cache_path();
			$smarty->assign('today',$this->today);
			$smarty->display('PcDailyReportInput.inc');
 		}
	}
?>
