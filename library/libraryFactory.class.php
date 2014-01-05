<?php
	
	require_once("SingletonConf.class.php");
	$SingletonConf = SingletonConf::getSingletonConf();
	$library_path  = $SingletonConf->get_library_path();

	require_once('AbstractDisplay.class.php');
	
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

			require_once('userAgent.class.php');
			$deviceType = userAgent::getInstance()->getDeviceType();
			$libraryFullName = $deviceType . $libraryName . '.class.php' ; 
			$libraryName = $deviceType . $libraryName ; 
			
			require_once($libraryFullName);
			$library = new $libraryName();
			
			return $library;
		}
	}



?>
