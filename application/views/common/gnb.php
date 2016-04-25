<?php
$isLogin = 'false';
?>
	<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
		<div class='container'>
			<div class='navbar-header'>
				<button type='button' class='navbar-toggle' data-toggle='collapse'
					data-target='.navbar-collapse'>
					<span class='sr-only'>Toggle navigation</span> <span
						class='icon-bar'></span> <span class='icon-bar'></span> <span
						class='icon-bar'></span>
				</button>
				<a class='navbar-brand' href='/' style='color: #2DD292;'></a>
			</div>
			<div class='navbar-collapse collapse'>
				<ul class='nav navbar-nav'>
					<a href="/roothaus/index.php/main">
						<li style="color: #F1EBEB;padding: 15px 15px;font-size: 18px;line-height: 20px;">RootHaus</li>
					</a>
				</ul>
				<ul class='nav navbar-nav navbar-right'>
					<?php if ($isLogin != null && $isLogin == 'true') { ?>
				        <li class='active'><a href='#'>로그아웃</a></li>
				        <li class='active'><a href='#'>마이메뉴</a></li>
					<?php } else { ?>
						<li class='active'><a href='#'>Login</a></li>
						<li class='active'><a href='#'>Join</a></li>
					<?php }?>
					<li class='active'><a href='/roothaus/index.php/estimateMain'>견적 관리</a></li>
					<li class='active'><a href='/roothaus/index.php/survey'>설문조사</a></li>
					<li class='active'><a href='#'>시공 현황</a></li>
					<li class='active'><a href='#'>입주 체크리스트</a></li>
					<li class='active'><a href='#'>사후 관리</a></li>
				</ul>
				<a class='navbar-brand pull-right'
					href='#' target="_blank"
					style='color: rgb(230, 203, 105);'>회사소개</a>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>