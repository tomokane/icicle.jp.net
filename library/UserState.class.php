<?php

	 /*
	  * Stateクラスに相当する
	  * 状態事の動作・振る舞いを定義する。
	  * これらのメソッドはオブジェクトの状態で処理内容が変わる
	  */

	interface UserState {
		public function isAuthenticated();
		public function nextState();
		public function showDailyReportInput();
	}
?>
