<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>HR Acadamy</title>
<link type="text/css" rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="jquery.js"></script>

<link rel="stylesheet" href="popup/jquery.boxes.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="popup/jquery.boxes.min.js"></script>
<script type="text/javascript" src="popup/jquery.boxes.repopup.min.js"></script>

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
<br><br>
		<div class="banner_left fl-lt">
				<img src="img/banner_pic.jpg" alt="" width="280" height="225">
			</div>
			<div class="banner_right fl-rt">
				<h2>HR Academy - For Quality Pupil</h2>
				<p>HR Academy is designed to provide Educational service and advice to the  student at  all levels. For us every student is unique and so special and education is overall improvement. According to HR Academy education is not only about scoring marks but also more about knowing and Understanding and Coaching means it is a training or evolution procedure via which an individual is supported while achieving a specific personal or professional competence result or goal. </p>
				<div class="read_more_button">
					<a href="#" class="indes_ReadMoreButton">Read More</a>
									<script src="PopUp_Content/indes_ReadMoreButton.js"></script>
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->
	<div class="content_wrap">
		<!--content-start-->
		<div class="content">
			<div class="text">
				<h2>Welcome to HR Academy</h2>
				<p>Our Facilitators use a mode in which they ask questions and offer possibilities that will challenge the instructors to find answers from within him/herself. </p>
			</div>
			<div class="service_area">
				<div class="service_box fl-lt">
					<h3>Who we are</h3>
					<p>Human Resources Professional with over 14 years of management and supervisory experience. 
Proven abilities in organizing management work flow and using a proactive approach to problem solving. 
Work with employees at all levels as the liaison for human resource affairs.
</p>
					<div class="read_more_button2">
					<!--	<a href="#">Read More</a>-->
					</div>
				</div>
				<div class="service_box fl-lt">
					<h3>What we do</h3>
					<p>Demonstrate commitment to leadership through positive contributions in boosting employee morale, improving retention and productivity rates, and streamlining policies and procedures. Possess strong communication, interpersonal, public relations, and leadership abilities.</p>
					<div class="read_more_button2">
						<!--	<a href="#">Read More</a>-->
					</div>
				</div>
				<div class="service_box last fl-lt">
					<h3>How it works</h3>
					<p>We are running successful programs in various ways and levels. We are here to give assistance to All Boards..students CBSE, Samachir, IGCSE,ICSE,ISE,IB students.., @ All subjects..</p>
					<div class="read_more_button2">
					<!--	<a href="#">Read More</a>-->
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
