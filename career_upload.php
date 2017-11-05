
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
				<h2>Completed</h2>

				<?php
//?heck that we have a file
if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  $filename = basename($_FILES['uploaded_file']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  if (($ext == "doc"||$ext =="docx"||$ext =="pdf") && (($_FILES["uploaded_file"]["type"])|| ($_FILES["uploaded_file"]["type"] == "application/pdf")) && 
    ($_FILES["uploaded_file"]["size"] < 3500000)) {
    //Determine the path to which we want to save this file
      $newname = dirname(__FILE__).'/upload/'.$filename;
      //Check if the file with the same name is already exists on the server
      if (!file_exists($newname)) {
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
           echo "It's done! The file has been saved as: ".$filename;
        } else {
           echo "Error: A problem occurred during file upload!";
        }
      } else {
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
      }
  } else {
     echo "Error: Only pdf and word files are accepted / Size is Huge";
  }
} else {
 echo "Error: No file uploaded";
}
?>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br>
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
