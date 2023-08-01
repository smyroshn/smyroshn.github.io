<?php

session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	$success='<h1 class="mail-sent">Thank you!</h1>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Careera Next  - Contact</title>

<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />

<link rel="stylesheet" type="text/css" media="print" href="css/print.css"  />

<link rel="stylesheet" type="text/css" media="screen" href="css/prettyPhoto.css" />

<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:light' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="contact-form/formValidator/validationEngine.jquery.css" />

<!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="screen" href="css/ie-fix.css" /><![endif]-->

<?=$css?>

<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>

<script type="text/javascript" src="js/jquery.tweet.js"></script>

<script type="text/javascript" src="js/jquery.ScrollTo.js"></script>

<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/jquery.quicksand.js"></script>

<script type="text/javascript" src="js/jquery.quicksand-config.js"></script>

<script type="text/javascript" src="js/scripts.js"></script>

<script type="text/javascript" src="contact-form/formValidator/jquery.validationEngine.js"></script>
<script type="text/javascript" src="contact-form/script.js"></script>

</head>
<body>

<div id="page-shadow">

	<div id="page">
	
		<div class="content-innertube">
	
			<div id="header">
			
				<h1>John William Doe</h1>
				
				<ul id="main-nav">
					<li><a href="index.html">Resume</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="project.html">Project</a></li>
					<li><a href="about.html">About me</a></li>
					<li class="current"><a href="contact.php">Contact</a></li>
				</ul>
				
				<div class="clear"></div>
				
			</div><!-- header end -->
			
			<div id="text"><img src="img/contact.png" alt="" title=""></div>
			<div id="stripe"></div>
			
			<ul id="contact-columns" class="clearfix">
			
				<li>
					<img src="img/phone-icon.png" alt="" title="">
					<p>000 123 456 789</p>
				</li>
				
				<li>
					<img src="img/mail-icon.png" alt="" title="">
					<p><a href="mailto:#">address@email.com</a></p>
				</li>
				
				<li class="address">
					<img src="img/address-icon.png" alt="" title="">
					<p>
						123 Street Address,
						<br />
						Lovely City,
						<br />
						My Country
					</p>
				</li>
			
			</ul><!-- contact-columns end -->
			
			<div id="form-container" class="clearfix">
		
				<form id="contact-form" name="contact-form" method="post" action="submit.php">
						
					<div id="content-left">
							
						<ul id="contact-message">
							
							<li>
								<label for="message">Message:</label>
								<textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?></textarea>
							</li>
								
						</ul>
								
					</div><!-- content-left end -->
					
							
					<div id="content-right">
							
						<ul id="contact-info">
							
							<li>
								<label for="name">Name:</label>
								<input type="text" class="validate[required,custom[onlyLetter]] " name="name" id="name" value="<?=$_SESSION['post']['name']?>" />
							</li>
				
							<li>
								<label for="email">Email:</label>
								<input type="text" class="validate[required,custom[email]] text-input" name="email" id="email" value="<?=$_SESSION['post']['email']?>" />
							</li>
				
							<li>
								<label for="subject">Subject:</label>
								<input type="text" class="validate[required] text-input" name="subject" id="subject" value="<?=$_SESSION['post']['subject']?>" />
							</li>
								
							<li>
								<label for="captcha"><?=$_SESSION['n1']?> + <?=$_SESSION['n2']?> =</label>
								<input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" />
							</li>
								
						</ul>
								
						<div id="submit-btn"><input type="submit" name="button" id="button" class="submit" value="Submit" /></div>
						<?=$str?>
						<div id="contact-loading"><img src="contact-form/img/loading.gif" width="31" height="31" alt="loading" /></div>
								
					</div><!-- content-right end -->
							
      			</form>
				<?=$success?>
			
			</div><!-- form-container end -->
		
		</div><!-- content-innertube end -->
		
		<div id="footer">
		
			<div id="footer-innertube">
			
				<div id="footer-address">
					<h5>Address</h5>
					<ul>
						<li>123 Street Address,</li>
						<li>Lovely City,</li>
						<li>My Country</li>
					</ul>
				</div><!-- footer-address end -->
				
				<div id="footer-contact">
					<h5>Contact</h5>
					<ul>
						<li>000 123 456 789</li>
						<li><a href="mailto:#" title="Send me an email">address@email.com</a></li>
						<li><a href="contact.php">Contact form<span class="raquo">&#187;</span></a></li>
					</ul>
				</div><!-- footer-contact end -->
				
				<div id="footer-social">
					<h5>Social</h5>
					<ul>
						<li><a href="#" title=""><img src="img/twitter.png" alt="twitter" title="My Twitter profile"></a></li>
						<li><a href="#" title=""><img src="img/facebook.png" alt="facebook" title="My Facebook profile"></a></li>
						<li><a href="#" title=""><img src="img/flickr.png" alt="flickr" title="My Flickr profile"></a></li>
						<li><a href="#" title=""><img src="img/linkedin.png" alt="linkedin" title="My Linkedin profile"></a></li>
					</ul>
				</div><!-- footer-social end -->
				
				<div id="footer-resume">
					<h5>Resume</h5>
					<div id="download-resume"><a href="#"></a></div>
				</div><!-- footer-resume end -->
				
				<div class="clear"></div>
				
				<ul id="footer-nav">
					<li><a href="index.html">Resume</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="about.html">About me</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				
				<div id="go-top"></div>
				
				<div class="clear"></div>
			
			</div><!-- footer-innertube end -->
			
		</div><!-- footer end -->
		
	</div><!-- page end -->

</div><!-- page-shadow end -->

</body>
</html>