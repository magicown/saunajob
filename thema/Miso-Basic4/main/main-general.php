<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 대표아이디 설정
$wid = 'mbt-mg';

// 사이드 위치 설정 - left, right
$side = ($at_set['side']) ? 'left' : 'right';

?>
<style>
	.w-main .at-main,
	.w-main .at-side { padding-bottom:0px; }
	.w-main .div-title-underbar { margin-bottom:15px; }
	.w-main .div-title-underbar span { padding-bottom:4px; }
	.w-main .w-more { font-weight:normal; color:#888; letter-spacing:-1px; font-size:11px; }
	.w-main .w-img img { display:block; max-width:100%; /* 배너 이미지 */ }
	.w-main .w-empty { margin-bottom:20px; }
	.w-main .w-box { margin-bottom:20px; background:#fff; }
	.w-main .w-p10 { padding:10px; }
	.w-main .w-p15 { padding:15px; }
	.w-main .tabs.div-tab ul.nav-tabs li.active a { font-weight:bold; color:#333 !important; }
	.w-main .main-tab .tab-more { margin-top:-28px; margin-right:10px; font-size:11px; letter-spacing:-1px; color:#888 !important; }
	.w-main .tabs { margin-bottom:30px !important; }
	.w-main .tab-content { border:0px !important; padding:15px 0px 0px !important; }
	.w-main .w-row,
	.w-main .at-row { margin-left:-10px; margin-right:-10px; }
	.w-main .w-col,
	.w-main .at-col { padding-left:10px; padding-right:10px; }
</style>

<?php @include_once(THEMA_PATH.'/wing.php'); // Wing ?>

<div class="at-container w-main">

	
	<div class="row at-row">
		<!-- 메인 영역 -->
		<div class="col-md-9<?php echo ($side == "left") ? ' pull-right' : '';?> at-col at-main">

			<!-- Start //-->
			<div class="div-title-underbar">
				<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=sauna">
					<span class="pull-right w-more">
						+ 더보기
					</span>
					<span class="div-title-underbar-bold border-color">
						<b>스페셜 정보</b>
					</span>
				</a>
			</div>
			<?php 
				if(G5_IS_MOBILE){
			?>
				<?php echo apms_widget('miso-post-gallery', $wid.'-gallery1', 'center=1'); ?>
			<?
				} else {
			?>
			
			<div class="w-box">
				<?php echo apms_widget('miso-post-slider-special', $wid.'-slider1', 'center=1 nav=1 item=3 line=5 rdm=1', 'auto=0'); ?>
				<?php// echo apms_widget('miso-post-slider-special', $wid.'-headline-m1', 'auto=0 rows=7 item=3 sm=2 nav=1 rdm=1 center=1 date=1 bold=1 cate=1 line=3'); ?>
			</div>
			<?php } ?>
			<!--// End -->

			

			<!-- Start //-->
			
			<div class="div-title-underbar" style="margin-top:20px;">
				<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=sauna">
					<span class="pull-right w-more">
						+ 더보기
					</span>
					<span class="div-title-underbar-bold border-color">
						<b>프리미엄 정보</b>
					</span>
				</a>
			</div>
			<div class="w-box">
				<?php echo apms_widget('miso-post-webzine-premier', $wid.'-webzine1', 'bold=1 date=1'); ?>
			</div>
				
			<!--// End -->

			<!-- 이미지 배너 시작 -->	
			<div class="w-box w-img">
				<a href="#배너이동주소">
					<img src="<?php echo THEMA_URL;?>/assets/img/banner-garo.png">
				</a>
			</div>
			<!-- 이미지 배너 끝 -->				

			<div class="row w-row">
				<div class="col-sm-6 w-col">

					<!-- Start //-->
					<div class="div-title-underbar">
						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=incruit">
							<span class="pull-right w-more">
								+ 더보기
							</span>
							<span class="div-title-underbar-bold border-color">
								<b>마사지 구인정보</b>
							</span>
						</a>
					</div>
					<div class="w-box">
						<?php echo apms_widget('miso-post-incruit', $wid.'-list11', 'rows=10 icon={아이콘:caret-right} date=1 strong=1'); ?>
					</div>
					<!--// End -->

				</div>
				<div class="col-sm-6 w-col">

					<!-- Start //-->
					<div class="div-title-underbar">
						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=skin">
							<span class="pull-right w-more">
								+ 더보기
							</span>
							<span class="div-title-underbar-bold border-color">
								<b>세신 구인정보</b>
							</span>
						</a>
					</div>
					<div class="w-box">
						<?php echo apms_widget('miso-post-skin', $wid.'-list12', 'rows=10 icon={아이콘:caret-right} date=1 strong=1'); ?>
					</div>
					<!--// End -->

				</div>
			</div>

			<!-- Start //-->
			<div class="div-title-underbar">
				<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=special_incruit">
					<span class="pull-right w-more">
						+ 더보기
					</span>
					<span class="div-title-underbar-bold border-color">
						<b>스페셜 구인</b>
					</span>
				</a>
			</div>
			<div class="w-box">
				<?php echo apms_widget('miso-post-slider-special', $wid.'-slider1', 'center=1 nav=1', 'auto=0'); ?>
			</div>
			<!--// End -->  
            
            <div class="row w-row">
				<div class="col-sm-6 w-col">

					<!-- Start //-->
					<div class="div-title-underbar">
						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=shop_sell">
							<span class="pull-right w-more">
								+ 더보기
							</span>
							<span class="div-title-underbar-bold border-color">
								<b>샵매매/임대</b>
							</span>
						</a>
					</div>
					<div class="w-box">
						<?php echo apms_widget('miso-post-list-sell', $wid.'-list11', 'rows=10 icon={아이콘:caret-right} date=1 strong=1'); ?>
					</div>
					<!--// End -->

				</div>
				<div class="col-sm-6 w-col">

					<!-- Start //-->
					<div class="div-title-underbar">
						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
							<span class="pull-right w-more">
								+ 더보기
							</span>
							<span class="div-title-underbar-bold border-color">
								<b>사우나 매매/임대</b>
							</span>
						</a>
					</div>
					<div class="w-box">
						<?php echo apms_widget('miso-post-list-rent', $wid.'-list12', 'rows=10 icon={아이콘:caret-right} date=1 strong=1'); ?>
					</div>
					<!--// End -->

				</div>
			</div> 		
            
		</div>
        
        
        
        
        
		<!-- 사이드 영역 -->
		<div class="col-md-3<?php echo ($side == "left") ? ' pull-left' : '';?> at-col at-side">

			<div class="w-box w-p10 hidden-sm hidden-xs" style="border:1px solid #ddd;">
				<?php echo apms_widget('miso-outlogin'); //외부로그인 ?>
			</div>

			<!-- 공지 등 위젯 Start //-->
			<div id="tab_s10" class="div-tab tabs swipe-tab tabs-color-top">
				<div class="w-tab">
					<ul class="nav nav-tabs" data-toggle="tab-hover">
						<li class="active"><a href="#tab_s11" data-toggle="tab"<?php echo tab_href(G5_BBS_URL.'/board.php?bo_table=notice');?>>공지</a></li>
						<!-- <li><a href="#tab_s12" data-toggle="tab"<?php echo tab_href($at_href['faq']);?>>FAQ</a></li>
						<li><a href="#tab_s13" data-toggle="tab">설문</a></li> -->
						<li><a href="#tab_s14" data-toggle="tab">통계</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_s11">
						<?php echo apms_widget('miso-post-list', $wid.'-notice', 'icon={아이콘:bell} date=1 strong=1'); ?>
					</div>
					<!-- <div class="tab-pane" id="tab_s12">
						<?php echo apms_widget('miso-faq', $wid.'-faq', 'icon={아이콘:question-circle}'); ?>
					</div>
					<div class="tab-pane" id="tab_s13">
						<?php echo apms_widget('miso-poll', $wid.'-poll', 'icon={아이콘:commenting}'); ?>
					</div> -->
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

			<!-- Start //-->
			<div class="div-title-underbar">
				<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
					<span class="pull-right w-more">
						+ 더보기
					</span>
					<span class="div-title-underbar-bold border-color">
						<b>베스트 구인</b>
					</span>
				</a>
			</div>
			<div class="w-box">
				<?php echo apms_widget('miso-post-garo', $wid.'-garo11', 'icon={아이콘:caret-right} center=1 irows=2'); ?>
			</div>
			<!--// End -->

			<!-- Start //-->
			<div class="div-title-underbar">
				<a href="<?php echo $at_href['new'];?>?view=c">
					<span class="pull-right w-more">
						+ 더보기
					</span>
					<span class="div-title-underbar-bold border-color">
						<b>새댓글</b>
					</span>
				</a>
			</div>
			<div class="w-box">
				<?php echo apms_widget('miso-post-icon', $wid.'-newcomment', 'comment=1 icon={아이콘:commenting}'); ?>
			</div>
			<!--// End -->

			<!-- 광고 시작 -->
			<div class="w-box">
				<div style="width:100%; min-height:280px; line-height:280px; text-align:center; background:#f5f5f5;">
					<img src="<?php echo THEMA_URL;?>/assets/img/images.jpg">
				</div>
			</div>
			<!-- 광고 끝 -->

			<!-- SNS아이콘 시작 -->
			<!-- <div class="w-empty text-center">
				<?php echo $sns_share_icon; // SNS 공유아이콘 ?>
			</div> -->
			<!-- SNS아이콘 끝 -->

		</div>
	</div>
</div>
