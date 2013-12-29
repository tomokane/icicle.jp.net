<?php
	
	require_once("SingletonConf.class.php");
	$SingletonConf   = SingletonConf::getSingletonConf();
	require_once($SingletonConf->get_library_path().'PcDisplay.class.php');



	
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
//			echo 'メタタグ設定';
 		}

		/*
		 * CSS設定
		 */
		protected function setStyleSheet(){
			echo'<link rel="stylesheet" href="/js/jquery-ui/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" type="text/css" media="screen" />';
			echo'<link rel="stylesheet" href="/css/DailyReport.css"                                           type="text/css" />';
 		}

		/*
		 * JS設定
		 */
		protected function setJavascript(){
			echo'<script src="http://code.jquery.com/jquery.min.js"></script>';
			echo'<script src="/js/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"></script>';
			echo'<script src="/js/jquery-ui/development-bundle/ui/i18n/jquery.ui.datepicker-ja.js"></script>';
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
