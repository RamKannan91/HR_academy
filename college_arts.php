<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>College</title>
<link type="text/css" rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="jquery.js">
</script>

<script type="text/javascript">
$(document).ready(function () {
$('#nav li').hover(
function () {
//show its submenu
$('ul', this).slideDown(350);
},
function () {
//hide its submenu
$('ul', this).slideUp(350);
}
);
});
</script>

<link rel="stylesheet" href="popup/jquery.boxes.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="popup/jquery.boxes.min.js"></script>
<script type="text/javascript" src="popup/jquery.boxes.repopup.min.js"></script>

<style>
.zzBoxes.custom .zzBoxes_inner {
	border-color: #FF4F4F;
}

.zzBoxes.custom .zzBoxes_title {
	color: #FF4F4F;
}
</style>

</head>

<body>
	<div class="header">
		<!--header-start-->
		<div class="logo fl-lt">
			<a href="#">HR Acadamy</a>
		</div>
		<div class="menu fl-rt">
			<!-- Menu -->
			<?php include("menu.php");?>
			<?php menuPane(); ?>
		</div>
	</div>
	<div class="content_wrap">
		<!--content-start-->
		<div class="content">
			<div class="text">
				<h2>Welcome to our company</h2>
				<a class="content1" href="#"><img src="img/banner_pic.jpg"></img></a> <br>
				<script src="popup/content1.js"></script>
			</div>
		</div>
	</div>
	<!--content-end-->
	<div class="footer">
		<!--footer-start-->
		<div class="footer_left fl-lt">
			<div class="social_area">
				<span>Follow us:</span> <a href="#"><img src="img/twitter.jpg" alt="">Twitter</a> <a href="#"><img src="img/facebook.jpg" alt="">Facebook</a>
				<div class="clear"></div>
			</div>
			<p>
				Copyright © 2014 HR Acadamy. All rights reserved. <br>Design by Team - <a href="http://elearnocean.com/" target="_blank">elearnocean</a>
			</p>
		</div>
		<div class="footer_right fl-rt">
	<?php
	$today = date("F j, Y,  g:i a");
	echo $today;
	?>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<!--footer-end-->
</body>
</html>
