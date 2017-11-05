<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Careers</title>
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

<script>
	function validateForm() {	
			
		if( document.elearnoceanForm.name.value == "" )
		   {
		   document.getElementById("errorName").innerHTML ="Please enter your Name"; 
		   document.elearnoceanForm.name.focus() ;
		     return false;
		   }
		else 
			{
			if(!document.elearnoceanForm.name.value == "" )
			{document.getElementById("errorName").innerHTML ="";
			}
			}
		
		var email=document.forms["elearnoceanForm"]["email"].value;
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
		  {
			document.getElementById("errorEmail").innerHTML ="Please enter your Email";
		  document.elearnoceanForm.email.focus() ;
		  return false;
		  }
		else
		{
		document.getElementById("errorEmail").innerHTML =""; 
		}
	
		}
</script>

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
				<h2>Upload your Resume</h2>
				<form name="elearnoceanForm" enctype="multipart/form-data" action="career_upload.php" onsubmit="return validateForm();" method="post">
				
				<table>
<tr></tr>
				<tr>
				
					<td>Name </td>
					<td><input type="text" value="" placeholder="Name" id="name"
						name="name"></td>
					<td id="errorName"></td>
				</tr>
				<tr></tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>E-Mail </td>
					<td><input type="email" value="" placeholder="email ID"
						id="email" name="email"></td>
					<td id="errorEmail"></td>
				</tr>
				<tr></tr><tr><td></td></tr><tr><td></td></tr>

	<tr>			
  <td>  Upload Resume </td>
 <td> <input name="uploaded_file" type="file" /></td>
	</tr>
	<tr></tr>
<tr><td></td></tr>	

<tr><td></td>
<td><input type="submit" value="Upload" /></td>
</tr>	
	</table>
	 </form>
	 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
