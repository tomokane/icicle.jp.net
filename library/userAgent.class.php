<?php

	class userAgent{
	 
		private static $singleton = null;
		private        $ua;
		private        $device;
		private        $deviceType;

		//Singleton設定
		private function __construct(){
			$this->deviceCheck();
		}

		//取得メソッド
		public static function getInstance(){		
			if(self::$singleton == null){
				self::$singleton = new userAgent();
			}
			return self::$singleton;
		}
	 
		private function deviceCheck(){
			 
			//ユーザーエージェント取得
			$this->ua = $_SERVER['HTTP_USER_AGENT'];
	 
			if(strpos($this->ua,'iPhone') !== false){
				//iPhone
				$this->device     = 'iphone';
				$this->deviceType = 'Sp';
			}
			elseif(strpos($this->ua,'iPad') !== false){
				//iPad
				$this->device     = 'ipad';
				$this->deviceType = 'Sp';
			}
			elseif((strpos($this->ua,'Android') !== false) && (strpos($this->ua, 'Mobile') !== false)){
				//Android
				$this->device     = 'android_m';
				$this->deviceType = 'Sp';
			}
			elseif(strpos($this->ua,'Android') !== false){
				//Android
				$this->device     = 'android_t';
				$this->deviceType = 'Sp';
			}
			else{
				$this->device     = 'Pc';
				$this->deviceType = 'Pc';
			}
		}
	 
		public function getDevice(){
			return $this->device;
		}

		public function getDeviceType(){
			return $this->deviceType;
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