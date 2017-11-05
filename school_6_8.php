<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>School</title>
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
	<!--header-end-->
	<div class="content_wrap">
		<!--content-start-->
		<div class="content">
		<br><br>
			<div class="text">
<h2>CBSE, IGCSE, ICSE, ISE & State Board. <br><br>Our programs are designed according to the guidelines of respective Boards.</h2>


				<h2>6<sup>th</sup>to 8<sup>th</sup> Standard School Tuition : </h2>
				<br><p>
<b>Course Duration: </b>Full academic Year<br>

<b>Course structure: </b><br>

<b>For CBSE: </b>2 Summative Assessments supported by 4 Formative Assessments extend over the session.<br>

<b>For other Boards: </b>It is yearlong program, following respective board curriculum, laying importance on foundation and application skills<br>

<b>Subjects: </b>Mathematics, Science, Social Sciences & Languages<br>

<b>Features: </b>50 min class, spot tests, Periodical class tests & Extensive practice through systematically designed worksheet<br></p>
				
				<br><br>
				
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
