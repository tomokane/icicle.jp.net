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
		 * javascript�p�X
		 */
		private $javascript_path;

		/*
		 * �e���v���[�g�p�X
		 */
		private $template_path;

		/*
		 * �e���v���[�g�L���b�V���p�X
		 */
		private $template_cache_path;

		/*
		 * smarty
		 */
		private $smarty_path;

		/*
		 * �B��̃C���X�^���X
		 */
		 private static $instance;
		 
		/*
		 * �R���X�g���N�^
		 * ����̐ݒ�
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
		 * ���C�u�����p�X��Ԃ�
		 */
		public function get_library_path(){
			return $this->library_path;
		}

		/*
		 * �e���v���[�g�p�X��Ԃ�
		 */
		public function get_template_path(){
			return $this->template_path;
		}

		/*
		 * �e���v���[�g�L���b�V���p�X��Ԃ�
		 */
		public function get_template_cache_path(){
			return $this->template_cache_path;
		}

		/*
		 * �W���o�X�N���v�g�p�X��Ԃ�
		 */
		public function get_javascript_path(){
			return $this->javascript_path;
		}

		/*
		 * smarty�p�X��Ԃ�
		 */
		public function get_smarty_path(){
			return $this->smarty_path;
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
