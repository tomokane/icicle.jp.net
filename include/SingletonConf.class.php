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
		 * javascriptパス
		 */
		private $javascript_path;

		/*
		 * テンプレートパス
		 */
		private $template_path;

		/*
		 * テンプレートキャッシュパス
		 */
		private $template_cache_path;

		/*
		 * smarty
		 */
		private $smarty_path;

		/*
		 * 唯一のインスタンス
		 */
		 private static $instance;
		 
		/*
		 * コンストラクタ
		 * 無二の設定
		 */
		 
		private function __construct(){

			$this->icicle_path       = '/var/www/icicle.jp.net/';
			$this->document_root     = $this->icicle_path.'html/';
			$this->include_path      = $this->icicle_path.'include/';
			$this->smarty_path       = $this->include_path.'smarty/';
			$this->library_path      = $this->icicle_path.'library/';
			$this->template_path     = $this->icicle_path.'template/';
			$this->template_cache_path = $this->icicle_path.'template_c/';
			$this->javascript_path   = $this->document_root.'js/';
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
		 * ライブラリパスを返す
		 */
		public function get_library_path(){
			return $this->library_path;
		}

		/*
		 * テンプレートパスを返す
		 */
		public function get_template_path(){
			return $this->template_path;
		}

		/*
		 * テンプレートキャッシュパスを返す
		 */
		public function get_template_cache_path(){
			return $this->template_cache_path;
		}

		/*
		 * ジャバスクリプトパスを返す
		 */
		public function get_javascript_path(){
			return $this->javascript_path;
		}

		/*
		 * smartyパスを返す
		 */
		public function get_smarty_path(){
			return $this->smarty_path;
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
