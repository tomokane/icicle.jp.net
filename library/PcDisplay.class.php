<?php
	
	require_once("SingletonConf.class.php");
	$SingletonConf = SingletonConf::getSingletonConf();
	$library_path  = $SingletonConf->get_library_path();

	require_once($library_path.'AbstractDisplay.class.php');
	
	abstract class PcDisplay extends AbstractDisplay {
 		
		/*
		 * PC共通処理
		 */
		protected function executeCommonAction(){

			require_once(SingletonConf::getSingletonConf()->get_smarty_path().'Smarty.class.php');			
			$this->executeUniqueAction();
		}
		/*
		 * ヘッダを表示する
		 */
		protected function displayHeader(){
			echo 
			'<!DOCTYPE html>'.
			'<html lang="ja"><meta charset ="utf-8">'.
			'<head>';
			$this->setMeta();
			$this->setTitle();
			$this->setStyleSheet();
			$this->setJavascript();
			echo 
			'</head>';
		}

		/*
		 * ボディを表示する
		 */
		protected function displayBody(){
			echo 
			'<body>';
			$this->displayContents();
			echo 
			'</body>';
		}

		/*
		 * フッタを表示する
		 */
		protected function displayFooter(){
			'</html>';
 		}

		/* 
		* 継承先の必須実装メソッド
		* executeUniqueAction
		* setMeta
		* setStyleSheet
		* setJavascript
		* setTitle
		* displayContents
		*/
		
		/*
		 * ページごとの機能を実装する
		 * サブクラスに実装を任せる抽象メソッド
		 */
		protected abstract function executeUniqueAction();

		/*
		 * メタ情報の内容を設定する
		 * サブクラスに実装を任せる抽象メソッド
		 */
		protected abstract function setMeta();

		/*
		 * CSSの内容を設定する
		 * サブクラスに実装を任せる抽象メソッド
		 */
		protected abstract function setStyleSheet();

		/*
		 * JSの内容を設定する
		 * サブクラスに実装を任せる抽象メソッド
		 */
		protected abstract function setJavascript();

		/*
		 * タイトルの内容を設定する
		 * サブクラスに実装を任せる抽象メソッド
		 */
		protected abstract function setTitle();

		/*
		 * コンテンツの内容を表示する
		 * サブクラスに実装を任せる抽象メソッド
		 */
		protected abstract function displayContents();

	}
?>
