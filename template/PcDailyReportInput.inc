
<nav class="navbar navbar-inverse">
	<div class = "navbar-header">
		<button class="navbar-toggle" data-toggle="collapse" data-target=".target">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div class="navbar-brand" >DailyReport</div>
	</div>

	<div class="collapse navbar-collapse target">	
		<ul class="nav navbar-nav  navbar">
			<li><a href="">設定</a></li>
			<li><a href="">ログアウト</a></li>
		</ul>
	 </div>
</nav>

<div class ="container">
	<form>
		<div class="form-group">
			<label class="control-label" for="date">・日付</label>
			<input type="text" id="datepicker" class="form-control" value = "{$today}"/>
			<br />
			<label class="control-label" for="date">・案件</label>
			<div class="accordion" id="accordion2">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
							M製菓
						</a>
					</div>
					<div id="collapseOne" class="accordion-body collapse" style="height: auto;">
						<div class="accordion-inner">
							<label class="control-label" for="task">・タスク</label>
							<input type="text" class="form-control" value = "Biz"/>
							<br />
							<label class="control-label" for="before">・作業前進捗</label>
							<input type="text" class="form-control" value = "未着手"/>
							<br />
							<label class="control-label" for="after">・作業後進捗</label>
							<input type="text" class="form-control" value = "1キャリア完成"/>
							<br />
							<label class="control-label" for="trouble">・直面している問題</label>
							<input type="text" class="form-control" value = "特になし"/>
							<br />
							<label class="control-label" for="task">・消化工数</label><br />
					 		<div class="btn-group">
								<button class ="btn " disabled >2.0</button>
								<button class ="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
								</button>
								<ul class ="dropdown-menu">
									<li>0.0</li>
									<li>0.5</li>
									<li>1.0</li>
									<li>1.5</li>
									<li>2.0</li>
									<li>2.5</li>
									<li>3.0</li>
									<li>3.5</li>
									<li>4.0</li>
									<li>4.5</li>
									<li>5.0</li>
									<li>5.5</li>
									<li>6.0</li>
									<li>6.5</li>
									<li>7.0</li>
									<li>7.5</li>
									<li>8.0</li>
								</ul>
							</div>
							<br />
							<br />
							<label class="control-label" for="trouble">・明日の予定作業</label>
							<input type="text" class="form-control" value = "引き続きBiz対応"/>
							<br />
						</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						うた&メロ取り放題
					</a>
					</div>
					<div id="collapseTwo" class="accordion-body collapse">
						<div class="accordion-inner">
							<label class="control-label" for="task">・タスク</label>
							<input type="text" class="form-control" value = "定期特集対応"/>
							<br />
							<label class="control-label" for="before">・作業前進捗</label>
							<input type="text" class="form-control" value = "未着手"/>
							<br />
							<label class="control-label" for="after">・作業後進捗</label>
							<input type="text" class="form-control" value = "テストサイト反映"/>
							<br />
							<label class="control-label" for="trouble">・直面している問題</label>
							<input type="text" class="form-control" value = "特になし"/>
							<br />
							<label class="control-label" for="task">・消化工数</label><br />
					 		<div class="btn-group">
								<button class ="btn " disabled >4.0</button>
								<button class ="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
								</button>
								<ul class ="dropdown-menu">
									<li>0.0</li>
									<li>0.5</li>
									<li>1.0</li>
									<li>1.5</li>
									<li>2.0</li>
									<li>2.5</li>
									<li>3.0</li>
									<li>3.5</li>
									<li>4.0</li>
									<li>4.5</li>
									<li>5.0</li>
									<li>5.5</li>
									<li>6.0</li>
									<li>6.5</li>
									<li>7.0</li>
									<li>7.5</li>
									<li>8.0</li>
								</ul>
							</div>
							<br />
							<br />
							<label class="control-label" for="trouble">・明日の予定作業</label>
							<input type="text" class="form-control" value = "TOPリニューアル"/>
							<br />
						</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
						リパーク
					</a>
					</div>
					<div id="collapseThree" class="accordion-body collapse">
						<div class="accordion-inner">
							<label class="control-label" for="task">・タスク</label>
							<input type="text" class="form-control" value = "サイト構築"/>
							<br />
							<label class="control-label" for="before">・作業前進捗</label>
							<input type="text" class="form-control" value = "検索機能"/>
							<br />
							<label class="control-label" for="after">・作業後進捗</label>
							<input type="text" class="form-control" value = "検索処理作成中"/>
							<br />
							<label class="control-label" for="trouble">・直面している問題</label>
							<input type="text" class="form-control" value = "オブジェクト指向が難しい"/>
							<br />
							<label class="control-label" for="task">・消化工数</label><br />
					 		<div class="btn-group">
								<button class ="btn " disabled >2.0</button>
								<button class ="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
								</button>
								<ul class ="dropdown-menu">
									<li>0.0</li>
									<li>0.5</li>
									<li>1.0</li>
									<li>1.5</li>
									<li>2.0</li>
									<li>2.5</li>
									<li>3.0</li>
									<li>3.5</li>
									<li>4.0</li>
									<li>4.5</li>
									<li>5.0</li>
									<li>5.5</li>
									<li>6.0</li>
									<li>6.5</li>
									<li>7.0</li>
									<li>7.5</li>
									<li>8.0</li>
								</ul>
							</div>
							<br />
							<br />
							<label class="control-label" for="trouble">・明日の予定作業</label>
							<input type="text" class="form-control" value = "検索の続き"/>
							<br />
						</div>
					</div>
				</div>
			</div>

			<label class="control-label" for="task">・本日の労働時間</label><br />
				<button class ="btn dropdown-toggle" disabled>
					8.0 </span>
				</button>
			<br />
			<br />

			<label class="control-label" for="info">・連絡事項</label>
			<input type="text" class="form-control" value = "明日は午後から出社です。"/>
			<br />

			<div class="form-group">
				<div class="form-group"><input type="submit" value="送信" class="btn btn-primary"></div>
			</div>
		</div>
	</form>
</div>
