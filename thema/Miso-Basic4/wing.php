<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

if(G5_IS_MOBILE) return; // 모바일에서는 출력하지 않습니다.

?>
<style>
	.wing-wrap { position:relative; overflow:visible !important;}
	.wing-wrap img { display:block; max-width:100%; }
	.wing-left { position:absolute; width:160px; left:-170px; top:20px; }
	.wing-right { position:absolute; width:160px; right:-170px; top:20px; }
	.boxed .wing-left { left:-180px; }
	.boxed .wing-right { right:-180px; }
</style>
<div class="at-container wing-wrap">
	<div class="wing-left visible-lg">
		<a href="/bbs/board.php?bo_table=ad_qna">
			<img src="/img/ad_phone.png">
		</a>
	</div>
	<div class="wing-right visible-lg">
		<a href="/bbs/board.php?bo_table=ad_qna">
			<img src="/img/ad_phone.png">
		</a>
	</div>
</div>