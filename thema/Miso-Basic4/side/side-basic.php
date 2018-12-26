<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

// 위젯 설정값 아이디 접두어 지정
$wid = 'mbt-sb';

?>
<style>
	.w-side .div-title-underbar { margin-bottom:15px; }
	.w-side .div-title-underbar span { padding-bottom:4px; }
	.w-side .w-more { font-weight:normal; color:#888; letter-spacing:-1px; font-size:11px; }
	.w-side .w-img img { display:block; max-width:100%; /* 배너 이미지 */ }
	.w-side .w-empty { margin-bottom:20px; }
	.w-side .w-box { margin-bottom:20px; background:#fff; }
	.w-side .w-p10 { padding:10px; }
	.w-side .tabs.div-tab ul.nav-tabs li.active a { font-weight:bold; color:#333 !important; }
	.w-side .main-tab .tab-more { margin-top:-28px; margin-right:10px; font-size:11px; letter-spacing:-1px; color:#888 !important; }
	.w-side .tabs { margin-bottom:30px !important; }
	.w-side .tab-content { border:0px !important; padding:15px 0px 0px !important; }
</style>
<div class="w-side">

	<!-- Start //-->
	<?php
		//카테고리
		$side_category = apms_widget('miso-category');
		if($side_category) {
	?>
		
	<?php } ?>
	<!-- //End -->
	<div class="w-box w-p10 hidden-sm hidden-xs" style="border:1px solid #ddd;">
		<?php echo apms_widget('miso-outlogin'); //외부로그인 ?>
	</div>
	<!-- Start //-->
	<div class="div-title-underbar">		
	</div>
    <?php if(!in_array($bo_table,array('ad_qna','ad_write','notice','qn'))){ ?>
	<div class="w-box">
		<div class="miso-category">
			<div class="ca-head en ellipsis">
				<a href="http://magicown.phps.kr/bbs/board.php?bo_table=incruit" style="background:#587ef6  !important;">지역별 구인</a>
			</div>
			<div class="ca-body">
		<?php
			foreach($incruit_area as $area){
		?>
		<div class="ca-sub1 off">
			<a href="http://magicown.phps.kr/bbs/board.php?bo_table=<?php echo $bo_table; ?>&sfl=wr_1&stx=<?php echo urlencode($area); ?>" class="no-sub"><?php echo $area; ?></a>
		</div>
		<?
			}
		?>				
			</div>
		</div>
    </div>
    <?php } ?>
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
		<?php echo apms_widget('miso-post-list', $wid.'-newcomment', 'comment=1 icon={아이콘:commenting}'); ?>
	</div>
	<!--// End -->

	<!-- 광고 시작 -->
	<div class="w-box">
		<div style="width:100%; min-height:280px; line-height:280px; text-align:center; background:#f5f5f5;">
			<img src="<?php echo THEMA_URL;?>/assets/img/images1.jpg">
		</div>
	</div>
	<!-- 광고 끝 -->

	<!-- SNS아이콘 시작 -->
	<!-- <div class="w-empty text-center">
		<?php echo $sns_share_icon; // SNS 공유아이콘 ?>
	</div> -->
	<!-- SNS아이콘 끝 -->

</div>
