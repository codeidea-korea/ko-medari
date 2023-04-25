<?php include_once('lib/common.lib.php'); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>artipio</title>
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<link href="https://design01.codeidea.io/link_style.css" rel="stylesheet">
</head>
</body>

<div class="publishing-help">	
	<span class="label not">작업중</span>
	<span class="label popup">팝업</span>
	<span class="label change">수정</span>		
	<span class="label add">최근 추가</span>
	<a href="./css/iconfont/intaefont/" target="_blank" class="icon">아이콘 모음</a>
</div>

<?php
function txtRecord($dir) {
	if(is_dir($dir)) {
		$handle  = opendir($dir);
		$files = array();
		while (false !== ($filename = readdir($handle))) {
			if($filename == "." || $filename == "..") continue;
			if(is_file($dir."/".$filename)){
				$files[] = $filename;
			}
		}
		closedir($handle);
		rsort($files);	
		if(count($files) > 0) {
			echo '<div class="_record rsort">';
			echo '<ul>';
			foreach($files as $f) {
				$name = '수정 '.preg_replace("/[^0-9]*/s", "", $f);
				echo '<li><a href="'.$dir.$f.'" target="_black">'.$name.'</a></li>';
			}
			echo '</ul>';
			echo '</div>';
		}
	}
}
echo txtRecord('./@record/');
?>

<div id="publishingContainer">
	
	<ul class="page-link" style="width:100%;margin-bottom:-50px">
		<li class=""><a href="index.html" target="_blank" class="add">메인페이지</a></li>
	</ul>

	<ul class="page-link">
		<li class="" data-label="지갑">
			<ul>
				<li data-label="보유내역">					
					<ul>
						<li><a href="wallet_possession.php" target="_blank" class="">보유내역 목록</a></li>
						<li><a href="wallet_possession_none.php" target="_blank" class="">내역이 없을때</a></li>
						<li><a href="wallet_possession_detail.php" target="_blank" class="">자세히보기</a></li>						
						<li><span class="pop-inline" data-href="#pop-dealing">거래내역 보기</span></li>
						<li><span class="pop-inline " data-href="#pop-cancel-purchase">작품구매 취소</span></li>
						<li><span class="pop-inline " data-href="#pop-purchase-card">신용카드 구매</span></li>
						<li><span class="pop-inline " data-href="#pop-purchase-point">포인트 구매</span></li>
						<li><span class="pop-inline " data-href="#pop-cancel-request">구매취소 요청</span></li>
					</ul>
				</li>
				<li class="mt30" data-label="판매내역">					
					<ul>
						<li><a href="wallet_salses.php" target="_blank" class="">판매내역 목록</a></li>
						<li><a href="wallet_salses_none.php" target="_blank" class="">내역이 없을때</a></li>
						<li><a href="wallet_salses_detail.php" target="_blank" class="">자세히보기</a></li>
						<li><span class="pop-inline " data-href="#pop-market">마켓판매</span></li>
						<li><span class="pop-inline " data-href="#pop-salses">판매내역 클릭 시</span></li>
						<li><span class="pop-inline " data-href="#pop-purchase-deposit">예치금 구매</span></li>
						<li><span class="pop-inline " data-href="#pop-purchase-market">마켓구매</span></li>
						<li><span class="pop-inline " data-href="#pop-cancel-complete">구매 취소 완료</span></li>
						<!--<li><span class="pop-inline" data-href="#pop-purchase-card">신용카드 구매 - 복합결제 (예치금 동일)</span></li>-->
					</ul>
				</li>
				<li class="mt30" data-label="매각내역">					
					<ul>
						<li><a href="wallet_dispose.php" target="_blank" class="">매각내역 목록</a></li>
						<li><a href="wallet_dispose_none.php" target="_blank" class="">내역이 없을때</a></li>
						<li><a href="wallet_dispose_vote.php" target="_blank" class="">작품 매각 투표 - 투표진행</a></li>
						<li><a href="wallet_dispose_vote_result.php" target="_blank" class="">작품 매각 투표 - 투표 결과</a></li>
						<li><span class="pop-inline " data-href="#pop-dispose">매각 내역 클릭 시</span></li>
						<li><span class="pop-inline " data-href="#pop-dispose-vote">매각 투표하기</span></li>
						<li><span class="pop-inline " data-href="#pop-dispose-vote-complete">매각 투표완료</span></li>
						<li><span class="pop-inline " data-href="#pop-dispose-vote-result">매각 투표 결과</span></li>
					</ul>
				</li>
			</ul>
		</li>		
	</ul>

	<ul class="page-link">
		<li class="" data-label="마켓">
			<ul>
				<li><a href="market.php" target="_blank" class="">마켓</a></li>
				<li  class="mt20"><span class="pop-inline" data-href="#pop-orderComplete">주문완료</span></li>
				<li><span class="pop-inline " data-href="#pop-salesOrderComplete">판매주문완료</span></li>	
				
							
			</ul>
		</li>		
	</ul>
	
</div>


<script src='https://design01.codeidea.io/link_script.js'></script>


</body>
</html>