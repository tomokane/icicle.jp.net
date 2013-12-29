<?php

	class SingletonConf{
		
		/*
		 * �h���C���p�X
		 */
		private $icicle_path;

		/*
		 * �h�L�������g���[�g
		 */
		private $document_root;

		/*
		 * �C���N���[�h�p�X
		 */
		private $include_path;

		/*
		 * ���C�u�����p�X
		 */
		private $library_path;

		/*
		 * �B��̃C���X�^���X
		 */
		 private static $instance;
		 
		/*
		 * �R���X�g���N�^
		 * ����̐ݒ�
		 */
		 
		private function __construct(){

			$this->icicle_path  = '/var/www/icicle.jp.net/';
			$this->document_root = $this->icicle_path.'html/';
			$this->include_path  = $this->icicle_path.'include/';
			$this->library_path  = $this->icicle_path.'library/';
		}

		/*
		 * �B��̃C���X�^���X�擾
		 * return SingletonConf�C���X�^���X
		 */
		 public static function getSingletonConf(){
		 	if(!isset(self::$instance)){
		 		self::$instance = new SingletonConf();
		 	}
			return self::$instance;
		}            
		
		/*
		 * �h�L�������g���[�g��Ԃ�
		 */
		public function getDocument_root(){
			return $this->document_root;
		}

		/*
		 * �C���N���[�h�p�X��Ԃ�
		 */
		public function get_include_path(){
			return $this->include_path;
		}

		/*
		 * �C���N���[�h�p�X��Ԃ�
		 */
		public function get_library_path(){
			return $this->library_path;
		}


		/*
		 * ���̃C���X�^���X�𕡐��֎~��
		 * @throws RuntimeException
		 */
		public final function __clone(){
			throw new RuntimeException('Clone is not allowed against'.get_class($this));
		}
	}
?>
