<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Gallery</title>
<link type="text/css" rel="stylesheet" href="css/style.css">

 <link href="themes/generic.css" rel="stylesheet" type="text/css" />
    <link href="themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />
    <link href="themes/2/slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/2/js-image-slider.js" type="text/javascript"></script>
    <script src="themes/2/thumbnail-slider.js" type="text/javascript"></script>

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
				<h2>HR Acadamy - For Quality Pupil</h2>
		
  <div class="" style="background-color:white;padding:20px 60px 20px 90px;border:3px solid #E3E3E3;">
        <div class="floatLeft">
            <div id="sliderFrame">
                <div id="slider">
                    <img src="images/slider-1.jpg" alt="#slideshow-1" title="Welcome to Menucool jQuery Slideshow" />
                    <b data-src="images/slider-2.jpg" data-alt="#slideshow-2"></b>
                    <a href="http://www.menucool.com"><b data-src="images/slider-3.jpg" data-alt="#slideshow-3"></b></a>
                    <b data-src="images/slider-4.jpg" data-alt="#slideshow-4"></b>
                    
                </div>
            </div>
        </div>
        <div class="floatLeft">    
            <div id="mcts1">
                <img src="images/slideshow-1s.jpg" />
                <img src="images/slideshow-2s.jpg" />
                <img src="images/slideshow-3s.jpg" />
                <img src="images/slideshow-4s.jpg" />
            </div>
        </div>
        <div style="clear:both;"></div>  
        <div style="display:none;">
            <div id="slideshow-1">
                <h3>Welcome to Menucool jQuery Slideshow</h3>
                This demo shows how the jQuery slideshow (or Thumbnail Slider if using the pure JavaScript) can work together with the JavaScript Image Slider.
            </div>
            <div id="slideshow-2">
                <h3>Enhanced Slideshow Effect</h3>
                The jQuery Slideshow/thumbnail slider works nicely together with the JavaScript Image Slider which greatly enhanced the slideshow with an added aesthetic appeal.
            </div>
            <div id="slideshow-3">
                <h3>SEO Friendly</h3>                    
                The markup is valid HTML5 and SEO optimzied, with all content always being available to search engines. 
            </div>
            <div id="slideshow-4">
                <h3>A Tool for Web Designer</h3>
                Its goal is to simplify the process of creating professional image/content slideshow for the web and mobile devices. This jQuery Slideshow will entertain your audience while scrolling what feature your website has.
            </div>
           
        </div> 
    </div>
		
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
