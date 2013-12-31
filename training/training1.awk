#  1レコード
#  106.188.107.251 - - [23/Dec/2013:11:21:30 +0900] "GET /fx/images/sports_melo_wide.png HTTP/1.1" 304 - "http://icicle.jp.net/fx/" "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/53
#  実行コマンド 複数ファイル同時に操作するときはスペース区切りで対応可能
#  awk -f training1.awk test.log 

	BEGIN {
		print "--start--"
#		FSは区切り文字を変更. デフォルトはスペース
#		FS = "/"
	}

#	条件指定 ~は正規表現にマッチするという意味
#	正規表現は/で閉じる
#	$4 ~ /.23\/Dec\/2013\:11\:.*/ {
#	print NR "行目:" $1 $2 $3 $4

#	フォーマットして抽出する場合
#	printf("行:%d 日付:%s\n",NR,$4)
#	桁数まで指定するときは%のあとに付ける
#	printf("行:%5d 日付:%20s リクエスト先:%60s httpコード:%4d \n",NR,$4,$7,$9)

#	}


	$4 ~ /.23\/Dec\/2013\:11\:.*/ && $9 ~ /200/ {
		printf("行:%5d 日付:%20s リクエスト先:%60s httpコード:%4d \n",NR,$4,$7,$9)
	}

	
#	NR == 5 || NR > 3700{
#			#NRは行数を示す
#			print NR "行目:" $1 $2 $3 $4
#	}

#	NR > 3700{
#		#NRは行数を示す
#		print NR "行目:" $1 $2 $3 $4
#	}

	END {
		print "--finish--"
	}
