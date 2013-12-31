<?php

	require_once("SingletonConf.class.php");
	$SingletonConf   = SingletonConf::getSingletonConf();
	require_once($SingletonConf->get_library_path().'UserState.class.php');
	require_once($SingletonConf->get_library_path().'AuthorizedState.class.php');

	/*
	 * ConcreteStateクラスに相当
	 * 未認証の状態を表すクラス
	 */

	class UnauthorizedState implements UserState {
		
		private static $singleton = null;
		
		//Singleton設定
		private function __construct(){
		}

		public static function getInstance(){
		
			if(self::$singleton == null){
				self::$singleton = new UnauthorizedState();
			}
			return self::$singleton;
		}

		//ログアウト状態なのでfalseを返却
		public function isAuthenticated(){
			return false;
		}
		
		public function nextState(){
			//次の状態(ログイン状態)を返す
			return AuthorizedState::getInstance();
		}

		public function showDailyReportInput(){
			//ファクトリークラス要実装
			echo 'ログイン画面';
			exit;
		}

		/*
		 * 複製禁止
		 * @throw RuntimeException
		 */
		public final function __clone(){
			throw new RuntimeException('clone is not allowed against' . get_class($this));
		}
	}
?>
