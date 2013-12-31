<?php

	require_once("SingletonConf.class.php");
	$SingletonConf   = SingletonConf::getSingletonConf();
	require_once($SingletonConf->get_library_path().'UserState.class.php');
	require_once($SingletonConf->get_library_path().'UnauthorizedState.class.php');

	/*
	 * ConcreteStateクラスに相当
	 * 認証後の状態を表すクラス
	 */

	class AuthorizedState implements UserState {
		
		private static $singleton = null;

		//Singleton設定
		private function __construct(){
		}

		public static function getInstance(){
		
			if(self::$singleton == null){
				self::$singleton = new AuthorizedState();
			}
			return self::$singleton;
		}
		
		//ログイン状態なのでtrueを返却
		public function isAuthenticated(){
			return true;
		}
		
		public function nextState(){
			//次の状態(ログアウト状態)を返す
			return UnauthorizedState::getInstance();
		}

		public function showDailyReportInput(){
			//日報入力フォームへ※ファクトリークラス要実装
			require_once(SingletonConf::getSingletonConf()->get_library_path().'PcDailyReport.class.php');
			$PcDailyReportLibrary = new PcDailyReport();
			$PcDailyReportLibrary->display();
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
