<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택 </title>
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
							unselectable="on" onclick="clickcr(this,'lnv.cat2','','',event);">건강/의학</a>
					</h2>
				</li>				
				<li class="tree-node tree-root-node tree-data-14594054317982490716"
					id="category_452">
					<h2 class="tree-has-child">
						<a href="/list.nhn?category_id=452" class="tree-label"
							unselectable="on" onclick="clickcr(this,'lnv.cat2','','',event);">사회 과학</a>
					</h2>
				</li>

				<li class="tree-node tree-root-node tree-data-14594054317989824496"
					id="category_456">
					<h2 class="tree-has-child tree-selected">
						<a href="/list.nhn?category_id=456" class="tree-label"
							unselectable="on" onclick="clickcr(this,'lnv.cat2','','',event);">생활/레저</a>
					</h2>
					<ul id="sub_tree" style="zoom: 1;">
						<li
							class="tree-node tree-collapsed tree-data-14594054317995404466"
							id="category_525">
							<div class="tree-has-child">
								<button class="tree-button">열기</button>
								<a href="/list.nhn?category_id=525" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">가족/가정</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054317992124335"
							id="category_524">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=524" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">교통</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054317996520753"
							id="category_528">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=528" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">생활/레저일반</a>
							</div>
						</li>
						<li class="tree-node tree-collapsed tree-data-1459405431799912138"
							id="category_523">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=523" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">쇼핑/생활용품</a>
							</div>
						</li>
						<li class="tree-node  tree-data-14594054317994605981"
							id="category_518">
							<div class="tree-has-child">
								<button class="tree-button">열기</button>
								<a href="/list.nhn?category_id=518" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">스포츠</a>
							</div>
							<ul style="zoom: 1;">
								<li id="category_700"
									class="tree-node tree-data-14594054328994104262"><div
										class="tree-has-child">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=700" class="tree-label"
											unselectable="on">구기스포츠</a>
									</div>
									<ul style="zoom: 1;">
										<li id="category_988"
											class="tree-node tree-data-14594054338871075039"><div
												class="">
												<button class="tree-button">+</button>
												<a href="/list.nhn?category_id=988" class="tree-label"
													unselectable="on">야구</a>
											</div></li>
										<li id="category_987"
											class="tree-node tree-last-node tree-data-1459405433887182065"><div
												class="">
												<button class="tree-button">+</button>
												<a href="/list.nhn?category_id=987" class="tree-label"
													unselectable="on">축구</a>
											</div></li>
									</ul></li>
								<li id="category_704"
									class="tree-node tree-data-14594054328995150440"><div class="">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=704" class="tree-label"
											unselectable="on">기타스포츠</a>
									</div></li>
								<li id="category_706"
									class="tree-node tree-data-14594054328993585905 tree-collapsed"><div
										class="tree-has-child">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=706" class="tree-label"
											unselectable="on">스포츠시설</a>
									</div></li>
								<li id="category_698"
									class="tree-node tree-data-14594054328998750762"><div class="">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=698" class="tree-label"
											unselectable="on">스포츠용어해설</a>
									</div></li>
								<li id="category_707"
									class="tree-node tree-data-14594054328992991620"><div class="">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=707" class="tree-label"
											unselectable="on">스포츠일반</a>
									</div></li>
								<li id="category_705"
									class="tree-node tree-last-node tree-data-14594054328993330612 tree-collapsed"><div
										class="tree-has-child">
										<button class="tree-button">+</button>
										<a href="/list.nhn?category_id=705" class="tree-label"
											unselectable="on">종합스포츠대회</a>
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
									onclick="clickcr(this,'lnv.cat3','','',event);">여행</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054318007005831"
							id="category_520">
							<div class="tree-has-child">
								<button class="tree-button">열기</button>
								<a href="/list.nhn?category_id=520" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">음식/요리</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054318006282406"
							id="category_522">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=522" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">주거/인테리어</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054318002373065"
							id="category_526">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=526" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">축제/기념일</a>
							</div>
						</li>
						<li class="tree-node tree-collapsed tree-data-1459405431800830706"
							id="category_519">
							<div class="tree-has-child">
								<button class="tree-button">열기</button>
								<a href="/list.nhn?category_id=519" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">패션/미용</a>
							</div>
						</li>
						<li
							class="tree-node tree-collapsed tree-data-14594054318005325887"
							id="category_527">
							<div class="">
								<span class="tree-button"></span><a
									href="/list.nhn?category_id=527" class="tree-label"
									unselectable="on"
									onclick="clickcr(this,'lnv.cat3','','',event);">풍속/민속</a>
							</div>
						</li>
					</ul>
				</li>

				<li class="tree-node tree-root-node tree-data-14594054318002580517"
					id="category_458">
					<h2 class="tree-has-child">
						<a href="/list.nhn?category_id=458" class="tree-label"
							unselectable="on" onclick="clickcr(this,'lnv.cat2','','',event);">역사</a>
					</h2>
				</li>
				<li class="tree-node tree-root-node tree-data-14594054318028377717"
					id="category_461">
					<h2 class="tree-has-child">
						<a href="/list.nhn?category_id=461" class="tree-label"
							unselectable="on" onclick="clickcr(this,'lnv.cat2','','',event);">컴퓨터/통신</a>
					</h2>
				</li>

				<li
					class="tree-node tree-root-node tree-last-node tree-data-1459405431802903736">
					<h2 class="tree-has-child">
						<a href="http://terms.naver.com/" class="tree-label"
							target="_blank" unselectable="on"
							onclick="clickcr(this,'STA.terms','','',event);">지식백과 <img
							src="http://static.naver.net/ncc/image/p_2012/magazine/ico_outlink2.png"
							width="11" height="11" alt="새창 열기" class="ico_t1"></a>
					</h2>
				</li>
				<li
					class="tree-node tree-root-node tree-last-node tree-data-14594054318029496232">
					<h2 class="tree-has-child">
						<a href="http://navercast.naver.com/magazine_index.nhn"
							class="tree-label" target="_blank" unselectable="on"
							onclick="clickcr(this,'STA.magazine','','',event);">매거진캐스트 <img
							src="http://static.naver.net/ncc/image/p_2012/magazine/ico_outlink2.png"
							width="11" height="11" alt="새창 열기" class="ico_t1"></a>
					</h2>
				</li>

			</ul>

		</div>
		<!-- // 좌측 카테고리 영역 -->

		<!-- 우측 리스트 영역 -->
		<div class="right-contents-list">
			<div class="spot">
				
				<ul class="card_lst">			
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=104248&amp;leafId=725" class="card" onclick="clickcr(this,'rst_cdv.card','104248','1',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_143/14483431805446ddCg_JPEG/th.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>코코뱅</strong><span alt="요리는 소통이자 관계이고, 인생의 기쁨이다" title="요리는 소통이자 관계이고, 인생의 기쁨이다">요리는 소통이자 관계이고, 인생의 기쁨...</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>44</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">이욱정</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=104238&amp;leafId=725" class="card" onclick="clickcr(this,'rst_cdv.card','104238','2',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_265/1448342247015nE8Ge_JPEG/th.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>카놈친</strong><span>따뜻한 한 접시의 음식이 마음을 위로하다</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>17</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">이욱정</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=104247&amp;leafId=725" class="card" onclick="clickcr(this,'rst_cdv.card','104247','3',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_142/1448340844858PkDcd_JPEG/th.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>덴푸라</strong><span alt="재료 본연의 맛을 최대치로 끌어올린 고수의 진맛" title="재료 본연의 맛을 최대치로 끌어올린 고수의 진맛">재료 본연의 맛을 최대치로 끌어올린 고수...</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>136</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">이욱정</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=104243&amp;leafId=725" class="card" onclick="clickcr(this,'rst_cdv.card','104243','4',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_242/1448339676987vUXOy_JPEG/th.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>월도르프 샐러드</strong><span alt="샐러드, 제몸에 맞는 드레싱을 입어야 맛있다" title="샐러드, 제몸에 맞는 드레싱을 입어야 맛있다">샐러드, 제몸에 맞는 드레싱을 입어야 맛...</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>16</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">이욱정</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=104239&amp;leafId=725" class="card" onclick="clickcr(this,'rst_cdv.card','104239','5',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_121/1448338595034Yfsni_JPEG/th.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>알라 노르마</strong><span alt="시칠리아 태양이 만들어낸 가지와 토마토로 만든 파스타" title="시칠리아 태양이 만들어낸 가지와 토마토로 만든 파스타">시칠리아 태양이 만들어낸 가지와 토마토...</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>17</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">이욱정</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=104219&amp;leafId=725" class="card" onclick="clickcr(this,'rst_cdv.card','104219','6',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151124_147/1448328782577A9bI6_JPEG/th.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>양고기 타진</strong><span alt="타진을 꺼내들면, 모로코의 거대한 사막이 눈앞에 있다" title="타진을 꺼내들면, 모로코의 거대한 사막이 눈앞에 있다">타진을 꺼내들면, 모로코의 거대한 사막...</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>19</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">이욱정</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=104189&amp;leafId=725" class="card" onclick="clickcr(this,'rst_cdv.card','104189','7',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151123_48/1448261206419hOnwM_JPEG/th.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>에그타르트</strong><span alt="수녀원에서 비법이 전수된 포르투갈의 달걀요리" title="수녀원에서 비법이 전수된 포르투갈의 달걀요리">수녀원에서 비법이 전수된 포르투갈의 달...</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>53</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">이욱정</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=104177&amp;leafId=725" class="card" onclick="clickcr(this,'rst_cdv.card','104177','8',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151123_172/1448255005044LwAjX_JPEG/th.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>치킨 티카 마살라</strong><span alt="영국인에게 사랑받는 음식으로 재탄생한 인도 커리" title="영국인에게 사랑받는 음식으로 재탄생한 인도 커리">영국인에게 사랑받는 음식으로 재탄생한 ...</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>44</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1172" onclick="clickcr(this,'rst_cdv.author','','',event);">이욱정</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=102246&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','102246','9',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151028_295/1446000321439tEOtY_JPEG/tt.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>부시스타디움</strong><span>웰컴 투 '베이스볼 헤븐'</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>6</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=101650&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','101650','10',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151021_74/1445409699277YrVhr_JPEG/tt.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>내셔널스 파크</strong><span>최첨단 친환경 구장</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>18</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=100948&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','100948','11',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151013_98/1444718707038i5NuV_JPEG/ttt.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>코프먼 스타디움</strong><span>아름다운 분수가 인상적인</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>12</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=100584&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','100584','12',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151008_69/1444272626840FLnzm_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>캠든 야즈</strong><span>복고풍 야구장의 롤모델</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>6</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=100194&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','100194','13',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20151001_203/1443667053988uyys0_JPEG/tt.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>프로그레시브 필드</strong><span>455연속 홈경기 매진의 영광</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>6</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=99828&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','99828','14',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150924_64/1443073027676Mt9Rk_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>글로브 라이프 파크</strong><span>텍사스의 웅장함</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>2</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=99372&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','99372','15',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150917_84/1442480523286ERJcP_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>양키스타디움</strong><span>전통과 역사를 품다</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>13</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=98962&amp;leafId=528" class="card" onclick="clickcr(this,'rst_cdv.card','98962','16',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150914_94/14422051633433DOxy_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>스타워즈 X-윙 미니어처게임</strong><span alt="꼬리에 꼬리를 무는 우주전" title="꼬리에 꼬리를 무는 우주전">꼬리에 꼬리를 무는...</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>91</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1324" onclick="clickcr(this,'rst_cdv.author','','',event);">권성현</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=98801&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','98801','17',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150910_59/1441873872377pLPDb_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>O.co 콜리세움</strong><span>오클랜드의 돌무덤</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>11</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=98385&amp;leafId=528" class="card" onclick="clickcr(this,'rst_cdv.card','98385','18',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150907_275/1441604860800vbHlG_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>보난자</strong><span>콩 심기 게임</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>64</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1505" onclick="clickcr(this,'rst_cdv.author','','',event);">조성우</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=98175&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','98175','19',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150903_162/1441268940090lRyDs_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>AT&amp;T 파크</strong><span>샌프란시스코에 마음을 두고 오다</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>21</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=97877&amp;leafId=528" class="card" onclick="clickcr(this,'rst_cdv.card','97877','20',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150831_83/1441005299689QIHT4_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>젬블로</strong><span>보석으로 점령하는 땅 따먹기</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>42</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1324" onclick="clickcr(this,'rst_cdv.author','','',event);">권성현</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=97626&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','97626','21',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150827_168/14406426048570Ihtf_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>체이스 필드</strong><span>태양의 계곡에 우뚝 솟은 돔구장</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>39</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=97475&amp;leafId=528" class="card" onclick="clickcr(this,'rst_cdv.card','97475','22',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150824_207/1440398799498hxIlj_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>킹 오브 도쿄</strong><span>주사위로 즐기는 유쾌한 괴수 배틀</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>24</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1529" onclick="clickcr(this,'rst_cdv.author','','',event);">김하영</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=97296&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','97296','23',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150820_207/144004110654952pII_JPEG/s.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>펫코 파크</strong><span>잔디밭에 앉아서 야구를 즐기다.</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>11</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: list-item;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=97001&amp;leafId=528" class="card" onclick="clickcr(this,'rst_cdv.card','97001','24',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150817_208/1439783378136ROo3E_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>크레이지 타임</strong><span>할리갈리 게임의 끝판왕!</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>10</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1512" onclick="clickcr(this,'rst_cdv.author','','',event);">김상민</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
				
				<li style="display: none;">
					<div class="card_w">
						<a href="/contents.nhn?contents_id=96701&amp;leafId=988" class="card" onclick="clickcr(this,'rst_cdv.card','96701','25',event);window.location.href=this.href;return false;">
						<span class="inner">
							<span class="thmb">
								<span class="mask"></span>
								<img src="http://ncc.phinf.naver.net/20150812_34/1439360376210XuxK8_JPEG/ss.jpg?type=f140_85" class="_thumnail" alt="">
							</span>
							<span class="info">
								<strong>세이프코 필드</strong><span>‘비의 도시’에 세워진 돔구장</span>
							</span>
							<span class="opinion on"><span class="tit">의견</span><strong>22</strong></span>
						</span>		
						</a>
						<span class="info2">
							<strong class="tit">
							
							
							<a href="/author_contents_list.nhn?acknowledgeId=au1472" onclick="clickcr(this,'rst_cdv.author','','',event);">최영조</a>
							
							
							
							</strong>
						</span>
					</div>
				</li>
							
				</ul>
			</div>
			
		</div>
		<!-- // 우측 리스트 영역 -->


		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>

</body>
</html>
