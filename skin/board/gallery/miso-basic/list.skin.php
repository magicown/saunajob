<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$category_cnt = count($categories);

$is_mobile_list = (G5_IS_MOBILE || $boset['mobile']) ? true : false;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css" media="screen">', 0);

?>
<div class="w-box" style="margin-bottom:10px;">
    <?php echo apms_widget('miso-post-slider-list', $wid.'-list12', ' rows=7 item=6 sm=6 nav=1 rdm=1 center=1 date=1 bold=1 cate=1 line=3'); ?>
</div>

<div class="list-wrap">
	<?php if($is_category || $boset['sort']) { ?>
		<aside class="list-category-select"<?php echo ($boset['cate']) ? ' style="display:block;"' : '';?>>
			<div class="row">
				<div class="col-sm-3">
					<?php if($is_category) { ?>
						<div class="form-group input-group input-group-sm">
							<span class="input-group-addon"><i class="fa fa-tag"></i></span>
							<select name="sca" onchange="location='./board.php?bo_table=<?php echo $bo_table; ?>&sca=' + encodeURIComponent(this.value);" class="form-control input-sm">
								<option value="">전체보기<?php if(!$sca) echo '('.number_format($board['bo_count_write']).')';?></option>
								<?php for ($i=0; $i < $category_cnt; $i++) { ?>
									<option value="<?php echo $categories[$i];?>"<?php if($categories[$i] == $sca) echo ' selected';?>>
										<?php echo $categories[$i];?><?php if($categories[$i] == $sca) echo '('.number_format($total_count).')';?>
									</option>
								<?php } ?>
							</select>
						</div>
					<?php } ?>
				</div>
				<div class="col-sm-6">
				</div>
				<div class="col-sm-3">
					<?php if($boset['sort']) { ?>
						<div class="form-group input-group input-group-sm">
							<span class="input-group-addon"><i class="fa fa-sort"></i></span>
							<select name="sortodr" onchange="location='./board.php?bo_table=<?php echo $bo_table; ?>&sca=<?php echo urlencode($sca);?>&sop=and&sfl=<?php echo $sfl;?>&stx=<?php echo urlencode($stx);?>&sst=' + this.value;" class="form-control input-sm">
								<option value="">정렬하기</option>
								<option value="wr_datetime&amp;sod=desc"<?php echo ($sst == 'wr_datetime') ? ' selected' : '';?>>날짜순</option>
								<option value="wr_hit&amp;sod=desc"<?php echo ($sst == 'wr_hit') ? ' selected' : '';?>>조회순</option>
								<?php if ($is_good) { ?><option value="wr_good&amp;sod=desc"<?php echo ($sst == 'wr_good') ? ' selected' : '';?>>추천순</option><?php } ?>
								<?php if ($is_nogood) { ?><option value="wr_nogood&amp;sod=desc"<?php echo ($sst == 'wr_nogood') ? ' selected' : '';?>>비추천순</option><?php } ?>
							</select>
						</div>
					<?php } ?>
				</div>
			</div>
		</aside>
		<?php if(!$boset['cate']) { ?>
			<nav class="list-category">
				<div class="tabs">
					<ul class="nav nav-tabs font-12">
						<?php if($is_category) { ?>
							<li<?php echo (!$sca) ? ' class="active"' : '';?>>
								<a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=<?php echo $bo_table; ?>">전체(<?php echo number_format($board['bo_count_write']);?>)</a>
							</li>
							<?php for ($i=0; $i < $category_cnt; $i++) { ?>
								<li<?php echo ($categories[$i] == $sca) ? ' class="active"' : '';?>>
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=<?php echo $bo_table;?>&amp;sca=<?php echo urlencode($categories[$i]);?>">
										<?php echo $categories[$i];?><?php echo ($sca && $categories[$i] == $sca) ? '('.number_format($total_count).')' : '';?>
									</a>
								</li>
							<?php } ?>
						<?php } ?>
						<?php if($boset['sort']) { ?>
							<li class="dropdown">
								<a id="sortLabel" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-sort"></i> 정렬
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="sortLabel">
									<li<?php echo ($sst == 'wr_datetime') ? ' class="sort-on"' : '';?>><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>날짜순</a></li>
									<li<?php echo ($sst == 'wr_hit') ? ' class="sort-on"' : '';?>><?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>조회순</a></li>
									<?php if ($is_good) { ?><li<?php echo ($sst == 'wr_good') ? ' class="sort-on"' : '';?>><?php echo subject_sort_link('wr_good', $qstr2, 1) ?>추천순</a></li><?php } ?>
									<?php if ($is_nogood) { ?><li<?php echo ($sst == 'wr_nogood') ? ' class="sort-on"' : '';?>><?php echo subject_sort_link('wr_nogood', $qstr2, 1) ?>비추천순</a></li><?php } ?>
								</ul>
							</li>
						<?php } ?>
					</ul>
				</div>
			</nav>
		<?php } ?>
	<?php } ?>

	<form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post" role="form" class="form">
	<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">
		<?php 
			$list_skin_file = ($is_mobile_list) ? 'list.skin.mobile.php' : 'list.skin.pc.php';
			include_once($board_skin_path.'/'.$list_skin_file);
		?>
		<div class="list-btn-box">
			<?php if ($list_href || $write_href) { ?>
				<div class="form-group pull-right list-btn">
					<div class="btn-group">
						<?php if ($list_href) { ?><a href="<?php echo $list_href ?>" class="btn btn-black btn-sm"><i class="fa fa-bars"></i><span>목록</span></a><?php } ?>
						<?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn btn-color btn-sm"><i class="fa fa-pencil"></i><span>글쓰기</span></a><?php } ?>
					</div>
				</div>
			<?php } ?>
			<div class="form-group list-btn">
				<div class="btn-group font-12">
					<a href="#" class="btn btn-black btn-sm" data-toggle="modal" data-target="#searchModal" onclick="return false;"><i class="fa fa-search big-fa"></i></a>
					<?php if ($rss_href) { ?>
						<a href="<?php echo $rss_href; ?>" class="btn btn-color btn-sm"><i class="fa fa-rss big-fa"></i></a>
					<?php } ?>
					<?php if ($is_checkbox || $rss_href || $admin_href) { ?>
						<?php if ($is_checkbox) { ?>
							<input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn-black btn-sm hidden-xs">
							<input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn-black btn-sm hidden-xs">
							<input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn-black btn-sm hidden-xs">
						<?php } ?>
						<?php if ($admin_href) { ?>
							<a href="<?php echo $admin_href; ?>" class="btn btn-black btn-sm"><i class="fa fa-cog big-fa"></i></a>
						<?php } ?>
						<?php if ($setup_href) { ?>
							<a href="<?php echo $setup_href; ?>" class="btn btn-color btn-sm win_memo"><i class="fa fa-cogs big-fa"></i></a>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</form>

	<?php if($total_count > 0) { ?>
		<div class="list-page text-center">
			<ul class="pagination pagination-sm en">
				<?php echo apms_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './board.php?bo_table='.$bo_table.$qstr.'&amp;page=');?>
			</ul>
		</div>
	<?php } ?>

	<div class="clearfix"></div>

	<?php if($is_checkbox) { ?>
		<noscript>
		<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
		</noscript>
	<?php } ?>

	<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-body">
					<div class="text-center">
						<h4 id="myModalLabel"><i class="fa fa-search fa-lg"></i> Search</h4>
					</div>
					<form name="fsearch" method="get" role="form" class="form" style="margin-top:20px;">
						<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
						<input type="hidden" name="sca" value="<?php echo $sca ?>">
						<input type="hidden" name="sop" value="and">
						<div class="form-group">
							<label for="sfl" class="sound_only">검색대상</label>
							<select name="sfl" id="sfl" class="form-control input-sm">
								<option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
								<option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
								<option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
								<option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
								<option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
								<option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
								<option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
							</select>
						</div>
						<div class="form-group">
							<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
							<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="form-control input-sm" maxlength="20" placeholder="검색어">
						</div>

						<div class="btn-group btn-group-justified">
							<div class="btn-group">
								<button type="submit" class="btn btn-color"><i class="fa fa-check"></i></button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-black" data-dismiss="modal"><i class="fa fa-times"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
	var f = document.fboardlist;

	for (var i=0; i<f.length; i++) {
		if (f.elements[i].name == "chk_wr_id[]")
			f.elements[i].checked = sw;
	}
}

function fboardlist_submit(f) {
	var chk_count = 0;

	for (var i=0; i<f.length; i++) {
		if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
			chk_count++;
	}

	if (!chk_count) {
		alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
		return false;
	}

	if(document.pressed == "선택복사") {
		select_copy("copy");
		return;
	}

	if(document.pressed == "선택이동") {
		select_copy("move");
		return;
	}

	if(document.pressed == "선택삭제") {
		if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
			return false;

		f.removeAttribute("target");
		f.action = "./board_list_update.php";
	}

	return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
	var f = document.fboardlist;

	if (sw == "copy")
		str = "복사";
	else
		str = "이동";

	var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

	f.sw.value = sw;
	f.target = "move";
	f.action = "./move.php";
	f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->