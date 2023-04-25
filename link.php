<?php include_once('lib/common.lib.php'); ?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<title>kodari_medari</title>
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
function txtRecord($dir)
{
	if (is_dir($dir)) {
		$handle  = opendir($dir);
		$files = array();
		while (false !== ($filename = readdir($handle))) {
			if ($filename == "." || $filename == "..") continue;
			if (is_file($dir . "/" . $filename)) {
				$files[] = $filename;
			}
		}
		closedir($handle);
		rsort($files);
		if (count($files) > 0) {
			echo '<div class="_record rsort">';
			echo '<ul>';
			foreach ($files as $f) {
				$name = '수정 ' . preg_replace("/[^0-9]*/s", "", $f);
				echo '<li><a href="' . $dir . $f . '" target="_black">' . $name . '</a></li>';
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
		<li class=""><a href="index.html" target="_blank" class="add">코다리 메인페이지</a></li>
		<li class="mt50" data-label="RESEARCH">
			<ul>
				<li><a href="intro.html" target="_blank" class="">PROJECT Intro</a></li>
				<li><a href="about_app.html" target="_blank" class="">About App</a></li>
				<li>
					<a href="news.html" target="_blank" class="">News</a>
					<ul>
						<li><a href="news_detail.html" target="_blank" class="">News-detail</a></li>
					</ul>
				</li>
				<li>
					<a href="events.html" target="_blank" class="">Events</a>
					<ul>
						<li><a href="events_detail.html">Events-detail</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li class="mt50" data-label="Product">
			<ul>
				<li><a href="product.html">Product</a></li>
			</ul>
		</li>
		<li class="mt50" data-label="LAB">
			<ul>
				<li><a href="lab_intro.html">LAB_intro</a></li>
				<li><a href="contact_us.html">Contact_us</a></li>
			</ul>
		</li>
	</ul>

</div>


<script src='https://design01.codeidea.io/link_script.js'></script>


</body>

</html>