<?php if(!defined('ABSPATH')) exit;?>
<div class="wrap">
	<h2>KBoard 게시판 설치도구</h2>
	<h3>KBoard는 다년간의 업데이트로 안정성이 뛰어난 워드프레스 게시판입니다.</h3>
	<p>
	<form method="get" action="" onsubmit="return kboard_downloader_alert()">
		<p>
			<input type="hidden" name="page" value="kboard_downloader_main">
			<input type="hidden" name="action" value="kboard_downloader_execute">
			<input type="hidden" name="package" value="kboard">
			<input type="hidden" name="version" value="<?php echo $verstion->kboard?>">
			<input type="submit" class="button" value="KBoard 게시판 <?php echo $verstion->kboard?>버전 설치하기">
		</p>
	</form>
	</p>
	
	<p>
	<form method="get" action="" onsubmit="return kboard_downloader_alert()">
		<p>
			<input type="hidden" name="page" value="kboard_downloader_main">
			<input type="hidden" name="action" value="kboard_downloader_execute">
			<input type="hidden" name="package" value="comments">
			<input type="hidden" name="version" value="<?php echo $verstion->comments?>">
			<input type="submit" class="button" value="KBoard 댓글 <?php echo $verstion->comments?>버전 설치하기">
		</p>
	</form>
	</p>
	
	<p>
		게시판과 댓글을 모두 설치해야 합니다.<br>
		설치 실패시 홈페이지에서 플러그인 파일을 직접 다운로드 받아 설치할 수 있습니다.
	</p>
	<p>
		<a href="http://www.cosmosfarm.com/products/kboard" onclick="window.open(this.href);return false;">코스모스팜 KBoard 홈페이지</a>
	</p>
	
	<iframe src="http://www.cosmosfarm.com/welcome/kboard_ads" frameborder="0" scrolling="no" style="margin-top:20px;width:320px;height:100px;border:none;"></iframe>
</div>
<div class="clear"></div>
<script>
function kboard_downloader_alert(){
	return confirm('KBoard 플러그인을 백업하세요. 최신 파일로 교체되며 수정된 파일이 있다면 잃게됩니다. 계속 할까요?');
}
</script>