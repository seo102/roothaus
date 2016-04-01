<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택 :: 견적관리</title>	
</head>

<body>
	<?php include 'common/gnb.php';?>

	<div class="main-contents">

		<!-- 좌측 카테고리 영역 -->
		<div class="left-category_list">
			<ul id="category" class="tree" style="zoom: 1;">
				<li class="tree-node tree-root-node tree-data-14594054317963193824"
					id="category_460">
					<h2 class="tree-has-child">
						<a href="/list.nhn?category_id=460" class="tree-label"
							unselectable="on" onclick="clickcr(this,'lnv.cat2','','',event);">건물 외벽</a>
					</h2>
				</li>				
				<li class="tree-node tree-root-node tree-data-14594054317982490716"
					id="category_452">
					<h2 class="tree-has-child">
						<a href="/list.nhn?category_id=452" class="tree-label"
							unselectable="on" onclick="clickcr(this,'lnv.cat2','','',event);">지붕</a>
					</h2>
				</li>

				<li class="tree-node tree-root-node tree-data-14594054317989824496"
					id="category_456">
					<h2 class="tree-has-child tree-selected">
						<a href="/list.nhn?category_id=456" class="tree-label"
							unselectable="on" onclick="clickcr(this,'lnv.cat2','','',event);">내장</a>
					</h2>
					<ul id="sub_tree" style="zoom: 1;">
						<li
							class="tree-node tree-collapsed tree-data-14594054317995404466"
							id="category_525">
							<div class="tree-has-child">
								<button class="tree-button">열기</button>
								<a href="/list.nhn?category_id=525" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">목구조</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054317992124335"
							id="category_524">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=524" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">목수</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054317996520753"
							id="category_528">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=528" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">단열재</a>
							</div>
						</li>
						<li class="tree-node tree-collapsed tree-data-1459405431799912138"
							id="category_523">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=523" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">방음재</a>
							</div>
						</li>
						<li class="tree-node  tree-data-14594054317994605981"
							id="category_518">
							<div class="tree-has-child">
								<button class="tree-button">열기</button>
								<a href="/list.nhn?category_id=518" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">벽지</a>
							</div>
							<ul style="zoom: 1;">
								<li id="category_700"
									class="tree-node tree-data-14594054328994104262"><div
										class="tree-has-child">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=700" class="tree-label"
											unselectable="on">도배</a>
									</div>
									<ul style="zoom: 1;">
										<li id="category_988"
											class="tree-node tree-data-14594054338871075039"><div
												class="">
												<button class="tree-button">+</button>
												<a href="/list.nhn?category_id=988" class="tree-label"
													unselectable="on">벽지</a>
											</div></li>
										<li id="category_987"
											class="tree-node tree-last-node tree-data-1459405433887182065"><div
												class="">
												<button class="tree-button">+</button>
												<a href="/list.nhn?category_id=987" class="tree-label"
													unselectable="on">도장</a>
											</div></li>
									</ul></li>
								<li id="category_704"
									class="tree-node tree-data-14594054328995150440"><div class="">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=704" class="tree-label"
											unselectable="on">타일</a>
									</div></li>
								<li id="category_706"
									class="tree-node tree-data-14594054328993585905 tree-collapsed"><div
										class="tree-has-child">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=706" class="tree-label"
											unselectable="on">주방</a>
									</div></li>
								<li id="category_698"
									class="tree-node tree-data-14594054328998750762"><div class="">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=698" class="tree-label"
											unselectable="on">도기</a>
									</div></li>
								<li id="category_707"
									class="tree-node tree-data-14594054328992991620"><div class="">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=707" class="tree-label"
											unselectable="on">전등</a>
									</div></li>
								<li id="category_705"
									class="tree-node tree-last-node tree-data-14594054328993330612 tree-collapsed"><div
										class="tree-has-child">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=705" class="tree-label"
											unselectable="on">전구</a>
									</div></li>
							</ul>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054317994805472"
							id="category_517">
							<div class="tree-has-child">
								<button class="tree-button">열기</button>
								<a href="/list.nhn?category_id=517" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">계단</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054318007005831"
							id="category_520">
							<div class="tree-has-child">
								<button class="tree-button">열기</button>
								<a href="/list.nhn?category_id=520" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">계단 손잡이</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054318006282406"
							id="category_522">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=522" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">현관문</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054318002373065"
							id="category_526">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=526" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">방문</a>
							</div>
						</li>
						<li class="tree-node tree-collapsed tree-data-1459405431800830706"
							id="category_519">
							<div class="tree-has-child">
								<button class="tree-button">열기</button>
								<a href="/list.nhn?category_id=519" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">창문</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054318005325887"
							id="category_527">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=527" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">콘센트</a>
							</div>
						</li>
					</ul>
				</li>

				<li class="tree-node tree-root-node tree-data-14594054318002580517"
					id="category_458">
					<h2 class="tree-has-child">
						<a href="/list.nhn?category_id=458" class="tree-label"
							unselectable="on" onclick="clickcr(this,'lnv.cat2','','',event);">전기스위치</a>
					</h2>
				</li>
				<li class="tree-node tree-root-node tree-data-14594054318028377717"
					id="category_461">
					<h2 class="tree-has-child">
						<a href="/list.nhn?category_id=461" class="tree-label"
							unselectable="on" onclick="clickcr(this,'lnv.cat2','','',event);">통신</a>
					</h2>
				</li>

			</ul>

		</div>
		<!-- // 좌측 카테고리 영역 -->



 



		<!-- 우측 리스트 영역 -->
		<div class="right-contents-list">
		
			<div>
				<br/>
				<h3>현재 저장된 총 견적 : 1000 원</h3>
				<div class="btn-group">
				  <h4>지붕 300000 원</h4>
				  <h4>지붕 300000 원</h4>
				  <h4>지붕 300000 원</h4>
				  <h4>지붕 300000 원</h4>
				  <h4>지붕 300000 원</h4>
				  <h4>지붕 300000 원</h4>
				  <h4>지붕 300000 원</h4>
				  <h4>지붕 300000 원</h4>
				  <h4>지붕 300000 원</h4>
				</div>				
			</div>
		
			
		</div>
		<!-- // 우측 리스트 영역 -->
		

		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>

</body>
</html>
