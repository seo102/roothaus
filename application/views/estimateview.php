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
				<a href="estimate/result">
					<div class="btn-group">
					  <button type="submit" class="btn btn-primary">
					   	견적 내역 확인
					  </button>
					</div>				
				</a>
			</div>
		
			<div class="spot">
				
				<ul class="card_lst">			
				
				<li style="display: list-item;">
					<div class="card_w">
						<span id="product_id_1" onclick="confirm('product_id_1', 'A 스타코', event);" class="card">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_143/14483431805446ddCg_JPEG/th.jpg?type=f140_85" width="240px" height="185px" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>A 스타코</strong><span alt="" title="">좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.</span>
							</span>
							<span class="opinion on"><span class="tit">등급</span><strong>상</strong></span>
						</span>		
						</span>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">250만원 (개당)</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<span id="product_id_2" onclick="confirm('product_id_2', 'B 스타코', event);" class="card">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_143/14483431805446ddCg_JPEG/th.jpg?type=f140_85" width="240px" height="185px" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>B 스타코</strong><span alt="" title="">좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.</span>
							</span>
							<span class="opinion on"><span class="tit">등급</span><strong>상</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">250만원 (개당)</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				<li style="display: list-item;">
					<div class="card_w">
						<span id="product_id_3" onclick="confirm('product_id_3', 'C 스타코', event);" class="card">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_143/14483431805446ddCg_JPEG/th.jpg?type=f140_85" width="240px" height="185px" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>C 스타코</strong><span alt="" title="">좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.</span>
							</span>
							<span class="opinion on"><span class="tit">등급</span><strong>상</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">250만원 (개당)</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<span id="product_id_4" onclick="confirm('product_id_4', 'D 스타코', event);" class="card">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_143/14483431805446ddCg_JPEG/th.jpg?type=f140_85" width="240px" height="185px" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>D 스타코</strong><span alt="" title="">좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.</span>
							</span>
							<span class="opinion on"><span class="tit">등급</span><strong>상</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">250만원 (개당)</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				<li style="display: list-item;">
					<div class="card_w">
						<span id="product_id_5" onclick="confirm('product_id_5', 'E 스타코', event);" class="card">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_143/14483431805446ddCg_JPEG/th.jpg?type=f140_85" width="240px" height="185px" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>E 스타코</strong><span alt="" title="">좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.</span>
							</span>
							<span class="opinion on"><span class="tit">등급</span><strong>상</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">250만원 (개당)</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<span id="product_id_6" onclick="confirm('product_id_6', 'F 스타코', event);" class="card">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_143/14483431805446ddCg_JPEG/th.jpg?type=f140_85" width="240px" height="185px" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>F 스타코</strong><span alt="" title="">좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.</span>
							</span>
							<span class="opinion on"><span class="tit">등급</span><strong>상</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">250만원 (개당)</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				<li style="display: list-item;">
					<div class="card_w">
						<span id="product_id_7" onclick="confirm('product_id_7', 'G 스타코', event);" class="card">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_143/14483431805446ddCg_JPEG/th.jpg?type=f140_85" width="240px" height="185px" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>G 스타코</strong><span alt="" title="">좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.</span>
							</span>
							<span class="opinion on"><span class="tit">등급</span><strong>상</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">250만원 (개당)</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<span id="product_id_8" onclick="confirm('product_id_8', 'H 스타코', event);" class="card">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_143/14483431805446ddCg_JPEG/th.jpg?type=f140_85" width="240px" height="185px" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>H 스타코</strong><span alt="" title="">좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다. 좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.좋은 스타코 자재 입니다.</span>
							</span>
							<span class="opinion on"><span class="tit">등급</span><strong>상</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">250만원 (개당)</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
							
				</ul>
			</div>
			
		</div>
		<!-- // 우측 리스트 영역 -->
		
		<!-- 레이어 내용 -->
		<div id="divpop" style="display:none;">
			<div>
				<span class="layer-text"><span id="productName"></span>을(를) 선택합니다. 추가되는 제품 갯수를 선택해주세요.</span>	
				
				<div class="button-area">
					<div class="btn-group">
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   <span id="countObj">갯수 선택</span> <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" style="line-height:20px;">
					    <li onclick="document.getElementById('countObj').innerHTML = '1개';">1개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '2개';">2개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '3개';">3개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '4개';">4개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '5개';">5개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '6개';">6개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '7개';">7개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '8개';">8개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '9개';">9개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '10개';">10개</li>
					  </ul>
					</div>
					<br/><br/>
					<div class="btn-group">
					  <button type="submit" class="btn btn-primary">
					   	저장하기
					  </button>
					</div>
					<div class="btn-group" onclick="close_divpop('divpop_frm', 'divpop');">
					  <button type="reset" class="btn btn-danger">
					   	닫기
					  </button>
					</div>
				</div>	
							
			</div>
			<form name="divpop_frm" method="post" action="">
			</form>
		</div>
		<!-- 엔터로 레이어 닫기 -->
		<script language="javascript">
		document.onkeydown = function()
		{
		   var iTemp;
		   if (event.keyCode == 13) 
		     close_divpop('divpop_frm', 'divpop'); 
		}
		
		function close_divpop(frm, div){
			document.getElementById(div).style.display='none';
		}

		function confirm(element_id, element_name, event) {
			var lpos = event.clientX + document.body.scrollLeft;
			var tpos = event.clientY + document.body.scrollTop;
			console.log(document.body.style.width);

			var layerObj = document.getElementById('divpop');
			layerObj.style.top = tpos + "px";
			layerObj.style.left = lpos / 1.5 + "px";			
			document.getElementById('productName').innerHTML = element_name;
			layerObj.style.display='block';		
		}
		</script>


		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>

</body>
</html>
