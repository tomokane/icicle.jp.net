<?php

	
	abstract class AbstractDisplay {

		/*
		 * template method
		 */
		public function display(){
			$this->executeCommonAction();
			$this->displayHeader();
			$this->displayBody();
			$this->displayFooter();
		}
		/*
		 * 処理を開始する
		 * サブクラスに実装を任せる抽象メソッド
		 */
		protected abstract function executeCommonAction();

		/*
		 * ヘッダを表示する
		 * サブクラスに実装を任せる抽象メソッド
		 */
		protected abstract function displayHeader();

		/*
		 * ボディを表示する
		 * サブクラスに実装を任せる抽象メソッド
		 */
		protected abstract function displayBody();

		/*
		 * フッタを表示する
		 * サブクラスに実装を任せる抽象メソッド
		 */
		protected abstract function displayFooter();

	}

?>
