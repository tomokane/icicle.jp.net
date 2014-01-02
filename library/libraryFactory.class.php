<?php
	
	require_once("SingletonConf.class.php");
	$SingletonConf = SingletonConf::getSingletonConf();
	$library_path  = $SingletonConf->get_library_path();

	require_once(SingletonConf::getSingletonConf()->get_library_path().'AbstractDisplay.class.php');
	
	class libraryFactory {

		/*
		 * 与えられたライブラリ名称から
		 * ライブラリを生成し返却する
		 */
		public function create($libraryName){

			$library = $this->createLibrary($libraryName);
			return $library;
		}

		/*
		 * プラットフォーム別に最適なオブジェクトを生成する
		 */
		private function createLibrary($libraryName){

			require_once(SingletonConf::getSingletonConf()->get_library_path().'userAgent.class.php');
			$deviceType = userAgent::getInstance()->getDeviceType();
			$libraryFullName = $deviceType . $libraryName . '.class.php' ; 
			$libraryName = $deviceType . $libraryName ; 
			
			//目的のライブラリの存在チェック + あれば読み込み
			if(file_exists(SingletonConf::getSingletonConf()->get_library_path().$libraryFullName)){
				require_once(SingletonConf::getSingletonConf()->get_library_path().$libraryFullName);
				$library = new $libraryName();
			}else{
				//なかったら。。プラットフォーム別共通エラ-画面を呼び出す。
				echo '$libraryFullName = ' . $libraryFullName;
				echo 'そんなライブラないです';
				exit;
			}
			
			return $library;
		}
	}



?>
