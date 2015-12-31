<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>single</title>
	<base href="<?php echo site_url()?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/single.css">
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
	<div id="single">
		<div class="wrap">
			<img src="img/single.jpg" alt="">
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil</p>
			<div class="comment">
				<h5>Written by <a href="#">admin</a></h5>
				<img src="img/avatar.png" alt="">
				<span>View all posts by: admin</span>
			</div>
			<ul class="messages">
				<?php
		            foreach($messages as $message){
		          ?>
		          <p><?php echo $message -> comm_name; ?></p>
		          <p><?php echo $message -> add_time; ?></p>
		          
		        <?php
		        }
		        ?>
			</ul>
			<div class="single-area">
				<h2>ADD NEW COMMENT</h2>
				<form action="welcome/comment" method="post">
					<p>
						<label for="">Name</label>
						<span>*</span>
						<input type="text" name="comm_name">
					</p>
					<p>
						<label for="">Email</label>
						<span>*</span>
						<input type="text" name="email">
					</p>
					<p>
						<label for="">Website</label>
						<input type="text" name="website">
					</p>
					<p>
						<label for="">Subject</label>
						<span>*</span>
						<textarea name="subject" id=""></textarea>
					</p>
					<p>
						<input type="submit" value="Submit Comment">
					</p>
				</form>
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
</body>
</html>