<?PHP
require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

$formproc->AddRecipient('ramkannan1991@gmail.com'); 

$formproc->SetFormRandomKey('CnRrspl1FyEylUj');

if(isset($_POST['submitted']))
{
if($formproc->ProcessForm())
{
$formproc->RedirectToURL("thank-you.php");
}
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact US</title>
<link type="text/css" rel="stylesheet" href="css/style.css">
<link rel="STYLESHEET" type="text/css" href="contact.css" />
<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>


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
			<?php include("menu.php"); ?>
			<?php menuPane(); ?>
		</div>
	</div>

	<div class="content_wrap">
		<!--content-start-->
		<div class="content">
		<br><br>
			<div class="text">
			<h2>Reach US</h2>
			<p><b>HYMA NANDIRAJ</b></p>
			<p>Addr1</p>
			<p>Addr2</p>
			<p>LandLine : <b>044 43539036</b></p>
			<p>Mobile : <b>+91 9043785126</b></p>
			<br><br>
				<h2>Contact US</h2>
				<!-- Form Code Start -->
				<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
					<div>
						<span class='error'> <?php echo $formproc->GetErrorMessage(); ?>
						</span>
					</div>
					<div class='container'>
						<label for='name'>Your Full Name*: </label><br /> <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br /> <span
							id='contactus_name_errorloc' class='error'></span>
					</div>
					<div class='container'>
						<label for='email'>Email Address*:</label><br /> <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br /> <span
							id='contactus_email_errorloc' class='error'></span>
					</div>
					<div class='container'>
						<label for='phone'>Phone Number:</label><br /> <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15" /><br /> <span
							id='contactus_phone_errorloc' class='error'></span>
					</div>
					<div class='container'>
						<label for='message'>Message:</label><br /> <span id='contactus_message_errorloc' class='error'></span>
						<textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
					</div>
					<div class='container'>
						<div>
							<img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' />
						</div>
						<label for='scaptcha'>Enter the code above here:</label> <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br /> <span id='contactus_scaptcha_errorloc' class='error'></span>
						<div class='short_explanation'>
							Can't read the image? <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.
						
<div class='container'>
<input type='submit' name='Submit' value='Submit' />
</div>

</form>

<script type='text/javascript'>
// <![CDATA[

var frmvalidator  = new Validator("contactus");
frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("name","req","Please provide your name");

frmvalidator.addValidation("email","req","Please provide your email address");

frmvalidator.addValidation("email","email","Please provide a valid email address");

frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");


frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

document.forms['contactus'].scaptcha.validator
= new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
document.images['scaptcha_img']);

function SCaptcha_Validate()
{
return document.forms['contactus'].scaptcha.validator.validate();
}

frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

function refresh_captcha_img()
{
var img = document.images['scaptcha_img'];
img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
}

// ]]>
</script>
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
