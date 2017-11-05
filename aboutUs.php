<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>About US</title>
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
	<div class="banner_wrap">
		<!--banner-start-->
		<div class="banner">
			<div class="banner_left fl-lt">
				<img src="img/banner_pic.jpg" alt="" width="413" height="275">
			</div>
			<div class="banner_right fl-rt">
				<h2>We work for your success!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque diam ligula, egestas eget rhoncus vel, hendrerit in sem. Vivamus laoreet erat sit amet ante ullamcorper vestibulum.
					Duis porta, nisl sed cursus volutpat, est nulla placerat mauris, id viverra leo ante sed leo. Vivamus fermentum dignissim sem, quis pellentesque dolor posuere vel. In vitae lorem ligula, a congue
					nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<div class="read_more_button">
					<a href="#">Read More</a>
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->
	<div class="content_wrap">
		<!--content-start-->
		<div class="content">
			<div class="text">
				<h2>Welcome to our company</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque diam ligula, egestas eget rhoncus vel, hendrerit in sem. Vivamus laoreet erat sit amet ante ullamcorper vestibulum.
					Duis porta, nisl sed cursus volutpat, est nulla placerat mauris, id viverra leo ante sed leo. Vivamus fermentum dignissim sem, quis pellentesque dolor posuere vel. In vitae lorem ligula, a congue
					nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta, nisl sed cursus volutpat, est nulla placerat mauris, id viverra leo ante sed leo. Vivamus fermentum dignissim sem, quis
					pellentesque dolor posuere vel. In vitae lorem ligula, a congue nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="service_area">
				<div class="service_box fl-lt">
					<h3>Who we are</h3>
					<p>Pellentesque diam ligula, egestas eget rhoncus vel, hendrerit in sem. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper
						vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum.</p>
					<div class="read_more_button2">
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="service_box fl-lt">
					<h3>What we do</h3>
					<p>Pellentesque diam ligula, egestas eget rhoncus vel, hendrerit in sem. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper
						vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum.</p>
					<div class="read_more_button2">
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="service_box last fl-lt">
					<h3>How it works</h3>
					<p>Pellentesque diam ligula, egestas eget rhoncus vel, hendrerit in sem. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper
						vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum.</p>
					<div class="read_more_button2">
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="clear"></div>
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
