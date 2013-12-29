
$(function() {
	// Datepicker の初期化
	$( "#datepicker" ).datepicker();
	// テキストボックスにフォーカスが当たった時と
	// ボタンがクリックされたときにカレンダーを表示するオプション
	$( "#datepicker" ).datepicker( "option", "showOn", 'both' );
});

