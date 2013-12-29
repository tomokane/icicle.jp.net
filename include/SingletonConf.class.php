<?php

	class SingletonConf{
		
		/*
		 * ドメインパス
		 */
		private $icicle_path;

		/*
		 * ドキュメントルート
		 */
		private $document_root;

		/*
		 * インクルードパス
		 */
		private $include_path;

		/*
		 * ライブラリパス
		 */
		private $library_path;

		/*
		 * 唯一のインスタンス
		 */
		 private static $instance;
		 
		/*
		 * コンストラクタ
		 * 無二の設定
		 */
		 
		private function __construct(){

			$this->icicle_path  = '/var/www/icicle.jp.net/';
			$this->document_root = $this->icicle_path.'html/';
			$this->include_path  = $this->icicle_path.'include/';
			$this->library_path  = $this->icicle_path.'library/';
		}

		/*
		 * 唯一のインスタンス取得
		 * return SingletonConfインスタンス
		 */
		 public static function getSingletonConf(){
		 	if(!isset(self::$instance)){
		 		self::$instance = new SingletonConf();
		 	}
			return self::$instance;
		}            
		
		/*
		 * ドキュメントルートを返す
		 */
		public function getDocument_root(){
			return $this->document_root;
		}

		/*
		 * インクルードパスを返す
		 */
		public function get_include_path(){
			return $this->include_path;
		}

		/*
		 * インクルードパスを返す
		 */
		public function get_library_path(){
			return $this->library_path;
		}


		/*
		 * このインスタンスを複製禁止に
		 * @throws RuntimeException
		 */
		public final function __clone(){
			throw new RuntimeException('Clone is not allowed against'.get_class($this));
		}
	}
?>
