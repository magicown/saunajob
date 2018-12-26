<?php
if (!defined('_GNUBOARD_')) {
	include_once('../../../../common.php');
	include_once(G5_LIB_PATH.'/apms.more.lib.php');

	// 창열기
	$wset['modal_js'] = ($wset['modal'] == "1") ? apms_script('modal') : '';

	$wset['thumb_w'] = (isset($wset['thumb_w']) && $wset['thumb_w'] > 0) ? $wset['thumb_w'] : 400;
	$wset['thumb_h'] = (isset($wset['thumb_h']) && $wset['thumb_h'] > 0) ? $wset['thumb_h'] : 300;
	$wset['line'] = (isset($wset['line']) && $wset['line'] > 0) ? $wset['line'] : 3;
	$wset['line_height'] = 20 * $wset['line'];
}

// 링크
$is_modal_js = $wset['modal_js'];
$is_link_target = ($wset['modal'] == "2") ? ' target="_blank"' : '';

// 추출하기
if(!$wset['rows']) {
	$wset['rows'] = 6;	
}

// 추출하기
$list = apms_board_rows($wset);
$list_cnt = count($list); // 글수

// 랭킹
$rank = apms_rank_offset($wset['rows'], $wset['page']);

// 날짜
$is_date = (isset($wset['date']) && $wset['date']) ? true : false;
$is_dtype = (isset($wset['dtype']) && $wset['dtype']) ? $wset['dtype'] : 'm.d';
$is_dtxt = (isset($wset['dtxt']) && $wset['dtxt']) ? true : false;

// 새글
$is_new = (isset($wset['new']) && $wset['new']) ? $wset['new'] : 'red'; 

// 분류
$is_cate = (isset($wset['cate']) && $wset['cate']) ? true : false;

// 글내용
$is_cont = ($wset['line'] > 1) ? true : false; 

// 동영상아이콘
$is_vicon = (isset($wset['vicon']) && $wset['vicon']) ? '' : '<i class="fa fa-play-circle-o post-vicon"></i>'; 

// 스타일
$is_right = (isset($wset['right']) && $wset['right']) ? 'right' : 'left'; 
$is_bold = (isset($wset['bold']) && $wset['bold']) ? true : false; 

// 리스트
for ($i=0; $i < $list_cnt; $i++) {

	//아이콘 체크
	$wr_icon = '';
	$is_lock = false;
	if ($list[$i]['secret'] || $list[$i]['is_lock']) {
		$is_lock = true;
		$wr_icon = '<span class="rank-icon en bg-orange en">Lock</span>';	
	} else if ($wset['rank']) {
		$wr_icon = '<span class="rank-icon en bg-'.$wset['rank'].'">'.$rank.'</span>';	
		$rank++;
	} else if ($list[$i]['new']) {
		$wr_icon = '<span class="rank-icon txt-normal en bg-'.$is_new.'">New</span>';	
	}

	// 링크이동
	$target = '';
	if($is_link_target && $list[$i]['wr_link1']) {
		$target = $is_link_target;
		$list[$i]['href'] = $list[$i]['link_href'][1];
	}

	//볼드체
	if($is_bold) {
		$list[$i]['subject'] = '<b>'.$list[$i]['subject'].'</b>';
	}

?>
	<div class="post-row">
		<div class="media post-list post-col" style="border: #587ef6 solid 2px; padding: 5px 5px; box-shadow:1px 2px 2px #eee;">
			<?php if($list[$i]['img']['src']) { // 있으면 출력 ?>
				<div class="pull-<?php echo $is_right;?> post-image">
					<a href="<?php echo $list[$i]['href'];?>" class="ellipsis"<?php echo $is_modal_js;?><?php echo $target;?>>
						<div class="img-wrap is-round-post-img">
							<?php if($list[$i]['as_list'] == "2" || $list[$i]['as_list'] == "3") echo $is_vicon; ?>
							<div class="img-item">
								<img src="<?php echo $list[$i]['img']['src'];?>" alt="<?php echo $list[$i]['img']['alt'];?>" class="wr-img">
							</div>
						</div>
					</a>
				</div>
			<?php } ?>
			<div class="media-body" > 
				<div class="post-content">
					<div class="post-subject">
						<a href="<?php echo $list[$i]['href'];?>"<?php echo $is_modal_js;?><?php echo $target;?>>
							<?php echo $wr_icon;?>
							<?php echo $list[$i]['subject'];?>
							<?php if($is_cont) { ?>
								<div class="post-text">
									<?php echo apms_cut_text($list[$i]['content'], 120);?>
								</div>
							<?php } ?>
						</a>
					</div>
					<div class="post-text post-ko txt-short ellipsis">
						<b><?php echo $list[$i]['wr_2'];?></b>
						<?php if($is_cate && $list[$i]['ca_name']) { ?>
							<span class="post-sp">|</span>
							<?php echo $list[$i]['ca_name'];?>
						<?php } ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } // end for ?>
<?php if(!$list_cnt) { ?>
	<div class="post-none">등록된 글이 없습니다.</div>
<?php } ?>
