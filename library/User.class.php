<?php

	require_once("SingletonConf.class.php");
	$SingletonConf   = SingletonConf::getSingletonConf();
	require_once($SingletonConf->get_library_path().'UnauthorizedState.class.php');

	class User {

		/*
		 * contextクラスに相当
		 */

		private $name;
		private $state;

		public function __construct($name){

			$this->name = $name;
			//初期値は必ずログアウト状態
			$this->state = UnauthorizedState::getInstance();
		}
		
		/*
		 * 状態切替
		 */
		public function switchState(){

			//ログイン状態に変更
			$this->state = $this->state->nextState();
		}

		/*
		 * ログイン状態を確認
		 */
		public function isAuthenticated(){
			return $this->state->isAuthenticated();
		}

		public function showDailyReportInput(){
			return $this->state->showDailyReportInput();
		}

		/*
		 * メンバ変数取得
		 */
		public function getUserName(){
			return $this->name;
		}
	}
?>
