<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 설정값 아이디 접두어 지정
$wid = 'mbt-mcb';

?>

<style>
	.at-body { background:#fafafa; }
	.w-main { padding-top:20px !important; }
	.w-main .w-box { border:1px solid #ddd; margin-bottom:20px; background:#fff; padding:12px 15px 15px; }
	.w-main .w-head { border-bottom:1px solid #ddd; margin:0px 0px 15px; font-weight:bold; padding-bottom:3px; }
	.w-main .w-more { font-weight:normal; color:#888; letter-spacing:-1px; font-size:11px; }
	.w-main .w-p10 { padding:10px; }
	.w-main .w-p15 { padding:15px; }
	.w-main .w-tab { border-right:1px solid #ddd; border-top:1px solid #ddd; }
	.w-main .w-tab .nav { margin-top:-1px !important; }
	.w-main .trans-top.tabs.div-tab .w-tab ul.nav-tabs li.active a { font-weight:bold; color:#333 !important; }
	.w-main .w-tab .tab-more { margin-top:-28px; margin-right:10px; font-size:11px; letter-spacing:-1px; color:#888 !important; }
	.w-main .tabs { margin-bottom:16px !important; }
	.w-main .tab-content { padding:15px !important; }
	.w-main .w-img img { display:block; max-width:100%; /* 배너 이미지 */ }
	.w-main .w-empty { margin-bottom:20px; }
	.w-main .at-main,
	.w-main .at-side { padding-top:0px; padding-bottom:0px; }
	.w-main .w-row,
	.w-main .at-row { margin-left:-10px; margin-right:-10px; }
	.w-main .w-col,
	.w-main .at-col { padding-left:10px; padding-right:10px; }
</style>

<?php @include_once(THEMA_PATH.'/wing.php'); // Wing ?>

<div class="at-container w-main">

	<!-- Start //-->
	<div class="w-box">
		<?php echo apms_widget('miso-title', $wid.'-title', 'height=260px', 'auto=0'); //타이틀 ?>
	</div>
	<!--// End -->

	<div class="row row-15">
		<div class="col-lg-6 col-15">

			<div class="row row-15">
				<div class="col-sm-6 col-15">

					<!-- Start //-->
					<div class="w-box">
						<div class="w-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right w-more">+ 더보기</span>
								여행이야기
							</a>
						</div>
						<?php echo apms_widget('miso-post-garo', $wid.'-garo11', 'irows=1 date=1 rdm=1 caption=2 thumb_w=400 thumb_h=225 icon={아이콘:paper-plane}'); ?>
					</div>
					<!--// End -->

				</div>

				<div class="col-sm-6 col-15">

					<!-- Start //-->
					<div class="w-box">
						<div class="w-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right w-more">+ 더보기</span>
								영화이야기
							</a>
						</div>
						<?php echo apms_widget('miso-post-garo', $wid.'-garo12', 'irows=1 date=1 rdm=1 caption=2 thumb_w=400 thumb_h=225 icon={아이콘:film}'); ?>
					</div>
					<!--// End -->

				</div>
			</div>

		</div>
		<div class="col-lg-6 col-15">

			<div class="row row-15">
				<div class="col-sm-6 col-15">

					<!-- Start //-->
					<div class="w-box">
						<div class="w-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right w-more">+ 더보기</span>
								게임이야기
							</a>
						</div>
						<?php echo apms_widget('miso-post-garo', $wid.'-garo13', 'irows=1 date=1 rdm=1 caption=2 thumb_w=400 thumb_h=225 icon={아이콘:gamepad}'); ?>
					</div>
					<!--// End -->

				</div>

				<div class="col-sm-6 col-15">

					<!-- Start //-->
					<div class="w-box">
						<div class="w-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right w-more">+ 더보기</span>
								뮤직이야기
							</a>
						</div>
						<?php echo apms_widget('miso-post-garo', $wid.'-garo14', 'irows=1 date=1 rdm=1 caption=2 thumb_w=400 thumb_h=225 icon={아이콘:music}'); ?>
					</div>
					<!--// End -->

				</div>
			</div>

		</div>
	</div>

	<!-- Start //-->
	<div class="w-box">
		<div class="w-head">
			<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
				<span class="pull-right w-more">+ 더보기</span>
				갤러리
			</a>
		</div>
		<?php echo apms_widget('miso-post-gallery', $wid.'-gallery1', 'caption=3'); ?>
	</div>
	<!--// End -->

	<!-- Start //-->
	<div class="w-box">
		<div class="w-head">
			<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
				<span class="pull-right w-more">+ 더보기</span>
				웹진
			</a>
		</div>
		<?php echo apms_widget('miso-post-webzine', $wid.'-webzine1', 'rows=9 item=3 date=1 bold=1'); ?>
	</div>
	<!--// End -->

	<!-- 이미지 배너 시작 -->	
	<div class="w-box w-img">
		<a href="#배너이동주소">
			<img src="<?php echo THEMA_URL;?>/assets/img/banner-garo.jpg">
		</a>
	</div>
	<!-- 이미지 배너 끝 -->	


	<div class="row at-row">
		<div class="col-md-9 at-col at-main">

			<!-- Start //-->
			<div class="w-box">
				<div class="w-head">
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
						<span class="pull-right w-more">+ 더보기</span>
						슬라이더
					</a>
				</div>
				<?php echo apms_widget('miso-post-slider', $wid.'-headline-m1', 'auto=0 rows=7 item=3 lg=2 md=3 sm=2 nav=1 rdm=1 center=1 date=1 bold=1 cate=1 line=3'); ?>
			</div>
			<!--// End -->

			<div class="row w-row">
				<div class="col-lg-6 w-col">

					<!-- Start //-->
					<div class="w-box">
						<div class="w-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right w-more">+ 더보기</span>
								게시판
							</a>
						</div>
						<?php echo apms_widget('miso-post-garo', $wid.'-garo31', 'irows=3 date=1 center=1 rdm=1 icon={아이콘:caret-right}'); ?>
					</div>
					<!--// End -->

				</div>
				<div class="col-lg-6 w-col">

					<!-- Start //-->
					<div class="w-box">
						<div class="w-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right w-more">+ 더보기</span>
								게시판
							</a>
						</div>
						<?php echo apms_widget('miso-post-garo', $wid.'-garo32', 'irows=3 date=1 center=1 rdm=1 icon={아이콘:caret-right}'); ?>
					</div>
					<!--// End -->

				</div>
			</div>

			<div class="row row-15">
				<div class="col-lg-6 w-col">

					<!-- Start //-->
					<div class="w-box">
						<div class="w-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right w-more">+ 더보기</span>
								게시판
							</a>
						</div>
						<?php echo apms_widget('miso-post-mix', $wid.'-mix31', 'idate=1 date=1 bold=1 rdm=1 icon={아이콘:caret-right}'); ?>
					</div>
					<!--// End -->
				
				</div>
				<div class="col-lg-6 w-col">

					<!-- Start //-->
					<div class="w-box">
						<div class="w-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right w-more">+ 더보기</span>
								게시판
							</a>
						</div>
						<?php echo apms_widget('miso-post-mix', $wid.'-mix32', 'idate=1 date=1 bold=1 rdm=1 icon={아이콘:caret-right}'); ?>
					</div>
					<!--// End -->

				</div>
			</div>

			<!-- Start //-->
			<div class="w-box">
				<div class="w-head">
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
						<span class="pull-right w-more">+ 더보기</span>
						게시판
					</a>
				</div>
				<?php echo apms_widget('miso-post-list', $wid.'-list31', 'garo=1 rows=20 icon={아이콘:caret-right} date=1'); ?>
			</div>
			<!--// End -->

			<!-- Start //-->
			<div class="w-box">
				<div class="w-head">
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
						<span class="pull-right w-more">+ 더보기</span>
						게시판
					</a>
				</div>
				<?php echo apms_widget('miso-post-list', $wid.'-list32', 'garo=1 rows=20 icon={아이콘:caret-right} date=1'); ?>
			</div>
			<!--// End -->

		</div>
		<div class="col-md-3 at-col at-side">

			<div class="row w-row">
				<div class="col-md-12 col-sm-6 w-col">

					<!-- 공지 등 위젯 Start //-->
					<div id="tab_s10" class="div-tab tabs swipe-tab trans-top">
						<div class="w-tab bg-light">
							<ul class="nav nav-tabs" data-toggle="tab-hover">
								<li class="active"><a href="#tab_s11" data-toggle="tab"<?php echo tab_href(G5_BBS_URL.'/board.php?bo_table=notice');?>>공지</a></li>
								<li><a href="#tab_s12" data-toggle="tab"<?php echo tab_href($at_href['faq']);?>>FAQ</a></li>
								<li><a href="#tab_s13" data-toggle="tab">설문</a></li>
								<li><a href="#tab_s14" data-toggle="tab">통계</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_s11">
								<?php echo apms_widget('miso-post-list', $wid.'-notice', 'icon={아이콘:bell} date=1 strong=1'); ?>
							</div>
							<div class="tab-pane" id="tab_s12">
								<?php echo apms_widget('miso-faq', $wid.'-faq', 'icon={아이콘:question-circle}'); ?>
							</div>
							<div class="tab-pane" id="tab_s13">
								<?php echo apms_widget('miso-poll', $wid.'-poll', 'icon={아이콘:commenting}'); ?>
							</div>
							<div class="tab-pane" id="tab_s14">
								<ul style="padding:0; margin:0; list-style:none;">
									<li><a href="<?php echo $at_href['connect'];?>">
										현재 접속자 <span class="pull-right"><?php echo number_format($stats['now_total']); ?><?php echo ($stats['now_mb'] > 0) ? '('.number_format($stats['now_mb']).')' : ''; ?> 명</span></a>
									</li>
									<li>오늘 방문자 <span class="pull-right"><?php echo number_format($stats['visit_today']); ?> 명</span></li>
									<li>어제 방문자 <span class="pull-right"><?php echo number_format($stats['visit_yesterday']); ?> 명</span></li>
									<li>최대 방문자 <span class="pull-right"><?php echo number_format($stats['visit_max']); ?> 명</span></li>
									<li>전체 방문자 <span class="pull-right"><?php echo number_format($stats['visit_total']); ?> 명</span></li>
									<li>전체 회원수	<span class="pull-right at-tip" data-original-title="<nobr>오늘 <?php echo $stats['join_today'];?> 명 / 어제 <?php echo $stats['join_yesterday'];?> 명</nobr>" data-toggle="tooltip" data-placement="top" data-html="true"><?php echo number_format($stats['join_total']); ?> 명</span>
									</li>
									<li>전체 게시물	<span class="pull-right at-tip" data-original-title="<nobr>글 <?php echo number_format($menu[0]['count_write']);?> 개/ 댓글 <?php echo number_format($menu[0]['count_comment']);?> 개</nobr>" data-toggle="tooltip" data-placement="top" data-html="true"><?php echo number_format($menu[0]['count_write'] + $menu[0]['count_comment']); ?> 개</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- //End -->

					<!-- 인기글, 검색어, 태그, 멤버랭크 Start //-->
					<div id="tab_s40" class="div-tab tabs swipe-tab trans-top">
						<div class="w-tab bg-light">
							<ul class="nav nav-tabs" data-toggle="tab-hover">
								<li class="active"><a href="#tab_s41" data-toggle="tab"<?php echo tab_href(G5_BBS_URL.'/board.php?bo_table=보드아이디');?>>인기</a></li>
								<li><a href="#tab_s42" data-toggle="tab"<?php echo tab_href($at_href['search']);?>>검색</a></li>
								<li><a href="#tab_s43" data-toggle="tab"<?php echo tab_href($at_href['tag']);?>>태그</a></li>
								<li><a href="#tab_s44" data-toggle="tab"<?php echo tab_href(G5_BBS_URL.'/board.php?bo_table=보드아이디');?>>멤버</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_s41">
								<?php echo apms_widget('miso-post-list', $wid.'-post-rank', 'rows=10 rank=green new=red icon={아이콘:caret-right}'); ?>
							</div>
							<div class="tab-pane" id="tab_s42">
								<?php echo apms_widget('miso-popular-list', $wid.'-popular', 'rows=10'); ?>
							</div>
							<div class="tab-pane" id="tab_s43">
								<?php echo apms_widget('miso-tag-list', $wid.'-tag', 'rows=10'); ?>
							</div>
							<div class="tab-pane" id="tab_s44">
								<?php echo apms_widget('miso-member', $wid.'-member', 'rows=10 cnt=1 rank=blue'); ?>
							</div>
						</div>
					</div>
					<!-- //End -->

					<!-- Start //-->
					<div class="w-box">
						<div class="w-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right w-more">+ 더보기</span>
								슬라이더
							</a>
						</div>
						<?php echo apms_widget('miso-post-slider', $wid.'-event-s1', 'rows=5 item=1 lg=1 md=3 sm=2 nav=1 rdm=1 caption=2'); ?>
					</div>
					<!--// End -->

				</div>
				<div class="col-md-12 col-sm-6 w-col">

					<!-- 아이콘형 위젯 Start //-->
					<div id="tab_s50" class="div-tab tabs swipe-tab trans-top">
						<div class="w-tab bg-light">
							<ul class="nav nav-tabs" data-toggle="tab-hover">
								<li class="active"><a href="#tab_s51" data-toggle="tab"<?php echo tab_href($at_href['new'].'?view=w');?>>새글</a></li>
								<li><a href="#tab_s52" data-toggle="tab"<?php echo tab_href($at_href['new'].'?view=c');?>>새댓글</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_s51">
								<?php echo apms_widget('miso-post-icon', $wid.'-newpost', 'icon={아이콘:pencil}'); ?>
							</div>
							<div class="tab-pane" id="tab_s52">
								<?php echo apms_widget('miso-post-icon', $wid.'-newcomment', 'comment=1 icon={아이콘:commenting}'); ?>
							</div>
						</div>
					</div>
					<!-- //End -->

					<!-- 광고 시작 -->
					<div class="w-box w-p10">
						<div style="width:100%; min-height:280px; line-height:280px; text-align:center; background:#f5f5f5;">
							반응형 구글광고 등
						</div>
					</div>
					<!-- 광고 끝 -->
		
				</div>
			</div>

			<!-- SNS아이콘 시작 -->
			<div class="w-empty text-center">
				<?php echo $sns_share_icon; // SNS 공유아이콘 ?>
			</div>
			<!-- SNS아이콘 끝 -->

		</div>
	</div>

</div><!-- .at-container -->
