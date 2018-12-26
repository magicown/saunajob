<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(!defined('THEMA_PATH')) {
	include_once(G5_LIB_PATH.'/apms.thema.lib.php');
}

if(USE_G5_THEME && defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

//Change Mode
$as_href['pc_mobile'] = (G5_DEVICE_BUTTON_DISPLAY) ? get_device_change_url() : '';

// Page Iframe Modal
if(APMS_PIM || $is_layout_sub) {
	include_once(G5_PATH.'/head.sub.php');
	@include_once(THEMA_PATH.'/head.sub.php');
	return;
}

// Head Sub
include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

// Thema Preview
if($is_designer) {
	if (defined('THEMA_PREVIEW')) {
		echo '<div class="hidden-xs font-12" style="position:fixed; left:0; bottom:100px; z-index:1000;"><a class="btn_admin" href="'.G5_URL.'/?pv=1"><span class="white">미리보기 해제</span></a></div>';
	}
}

$page_title = apms_fa($page_title);
$page_desc = apms_fa($page_desc);

$menu = apms_auto_menu();
$menu = apms_multi_menu($menu, $at['id'], $at['multi']);

if($is_member) thema_member();

//Statistics
$stats = apms_stats();

if($is_main && !$hid && !$gid ) {
	$newwin_path = (G5_IS_MOBILE) ? G5_MOBILE_PATH : G5_BBS_PATH;
	@include_once ($newwin_path.'/newwin.inc.php'); // 팝업레이어
}


//게시판 배열
$incruit_area = array("서울시","경기도","인천시","강원도","충청도","대전시","경상도","광주시","대구시","부산시","울산시","전라도","제주시");
$incruit_type = array("1인샵","스웨디시","로미로미","슈얼마사지","아로마테라피","스파사우나","왁싱(제모)","커플환영","(남)관리사","체형관리","스포츠마사지","지압경락","얼굴관리","발관리","일본식","중국관리사","태국관리사","에스테틱샵","각질관리","딥티슈","림프관리","이어(귀청소)","스톤(찜질)","호텔식","두리코스(2인)","홈케어(가능)","주간할인","야간할인","24시간","수면가능","단체환영");


if(IS_YC) {
	if(IS_SHOP) {
		if(file_exists(THEMA_PATH.'/shop.head.php')) {
			include_once(THEMA_PATH.'/shop.head.php');
		} else {
			include_once(THEMA_PATH.'/head.php');
		}
	} else {
		if(file_exists(THEMA_PATH.'/head.php')) {
			include_once(THEMA_PATH.'/head.php');
		} else {
			include_once(THEMA_PATH.'/shop.head.php');
		}
	}	
} else {
	include_once(THEMA_PATH.'/head.php');
}

?>
