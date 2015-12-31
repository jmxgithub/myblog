<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact</title>
	<base href="<?php echo site_url()?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact.css">
	<script src="js/jquery.js"></script>
</head>
<body>
	<div id="header">
		<div id="nav">
			<span class="nav-icon"></span>
			<div class="nav-menu-box">
				<div class="nav-menu-bg"></div>
				<ul class="nav-menu">
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">SERVICES</a></li>
					<li><a href="#">PORTFOLIO</a></li>
					<li><a href="#">BLOG</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>
				<span class="nav-close-icon"></span>
			</div>
		</div>
		<img src="img/bg2.jpg" alt="" class="header-bg">
	</div>
	<div id="contact">
		<div class="wrap">
			<form action="welcome/message" method='post'>
				<p>
					<label for="">You Name:</label>
					<input type="text" name="username">
				</p>
				<p>
					<label for="">Email:</label>
					<input type="text" name="email">
				</p>
				<p>
					<label for="">Message:</label>
					<textarea name="content" id=""></textarea>
				</p>
				<p>
					<input type="button" value="Submit" class='submit'>
				</p>
			</form>
			<div class="contact-right">
				<h3>ADDRESS</h3>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non</p>
				<p>1-25-2568-897</p>
				<a href="#">mail@portfolio.com</a>
			</div>
			<div class="map">
				map
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="wrap">
			<div class="clearfix">
				<p>Template by W3layouts</p>
				<ul>
					<li class='face'></li>
					<li class='twit'></li>
					<li class='dri'></li>
					<li class='tech'></li>
				</ul>
				
			</div>
		</div>
		<div class="to-top"></div>
	</div>
	
	<script src="js/require.js" data-main="js/index.js"></script>
	<script src="js/contact.js"></script>
</body>
</html>