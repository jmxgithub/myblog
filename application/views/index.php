<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人网站</title>
	<meta name="keywords" content="个人博客, 个人网站, 我的博客, xxx的博客">
	<base href="<?php echo site_url()?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/jquery.lightbox.css">
	<script type="application/x-javascript"> 
			addEventListener("load", function() { 
				setTimeout(hideURLbar, 0);
			}, false); 
			function hideURLbar(){ 
				window.scrollTo(0,1); 
			} 
	</script>
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
		<div class="portrait">
			<img src="img/pic.png" alt="">
		</div>
		<h1>Videntur Parum</h1>
		<p>Love to Design and capture Photographs :)</p>
		<ul class= 'header-button'>
			<li><a href="#">Hire Me</a></li>
			<li><a href="#">Follow Me</a></li>
		</ul>
	</div>
	<div id="aboutme">
		<div class="wrap">
			<h2 class= 'aboutme-title title'>about me</h2>
			<div class="wire"></div>
			<div class="about-left">
				<h3>Videntur Parum</h3>
				<span>Graphic Designer,UI/UX Expert </span>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTEM VEL EUM IRIURE DOLOR IN HENDRERIT IN VULPUTATE VELIT ESSE MOLESTIE CONSEQUAT, VEL ILLUM DOLORE EU FEUGIAT NULLA FAM.</p>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. SUSPENDISSE SIT AMET PURUS IPSUM. IN ANTE LEO, ELEMENTUM AT PLACERAT IN, ALIQUET NON LECTUS. NAM IMPERDIET MAGNA EU FAUCIBUS CURSUS.</p>
			</div>
			<div class="about-right">
				<a href="#"><img src="img/video.jpg" alt="链接视频地址"></a>
			</div>
		</div>
	</div>
	<div id="services">
		<div class="wrap">
			<h2 class='services-title title'>my services</h2>
			<div class="wire"></div>
			<ul>
				<li class="design1">
					<div class="icon"></div>
					<h3>PRODUCT DESIGN</h3>
					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
				</li>
				<li class="design2">
					<div class="icon"></div>
					<h3>PRODUCT DESIGN</h3>
					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
				</li>
				<li class="design3">
					<div class="icon"></div>
					<h3>PRODUCT DESIGN</h3>
					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
				</li>
				<li class="design4">
					<div class="icon"></div>
					<h3>PRODUCT DESIGN</h3>
					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
				</li>
				<li class="design5">
					<div class="icon"></div>
					<h3>PRODUCT DESIGN</h3>
					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
				</li>
				<li class="design6">
					<div class="icon"></div>
					<h3>PRODUCT DESIGN</h3>
					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
				</li>
			</ul>
		</div>
	</div>
	<div id="portfolio">
		<div class="wrap">
			<h2 class='portfolio-title title'>portfolio</h2>
			<div class="wire"></div>
			<ul class="portfolio-grids">
				<li data-src= "img/port-pic1.jpg" data-width='331' data-height='208'>
					<img class='view-img' src="img/port-pic1.jpg" alt="" >
					<div class="container">
						<div class="mask"></div>
						<div class="hide">
							<div class="info">
								<img src="img/hover-icon.png" alt="">
							</div>
							<h3>Product Design</h3>
							<p>"LimeLight"</p>
						</div>
					</div>
				</li>
				<li data-src= "img/port-pic2.jpg" data-width='331' data-height='208'>
					<img class='view-img' src="img/port-pic2.jpg" alt="">
					<div class="container">
						<div class="mask"></div>
						<div class="hide">
							<div class="info">
								<img src="img/hover-icon.png" alt="">
							</div>
							<h3>Product Design</h3>
							<p>"LimeLight"</p>
						</div>
					</div>
				</li>
				<li data-src= "img/port-pic3.jpg" data-width='331' data-height='208'>
					<img class='view-img' src="img/port-pic3.jpg" alt="">
					<div class="container">
						<div class="mask"></div>
						<div class="hide">
							<div class="info">
								<img src="img/hover-icon.png" alt="">
							</div>
							<h3>Product Design</h3>
							<p>"LimeLight"</p>
						</div>
					</div>
				</li>
				<li data-src= "img/port-pic4.jpg" data-width='331' data-height='208'>
					<img class='view-img' src="img/port-pic4.jpg" alt="">
					<div class="container">
						<div class="mask"></div>
						<div class="hide">
							<div class="info">
								<img src="img/hover-icon.png" alt="">
							</div>
							<h3>Product Design</h3>
							<p>"LimeLight"</p>
						</div>
					</div>
				</li>
				<li data-src= "img/port-pic5.jpg" data-width='331' data-height='208'>
					<img class='view-img' src="img/port-pic5.jpg" alt="">
					<div class="container">
						<div class="mask"></div>
						<div class="hide">
							<div class="info">
								<img src="img/hover-icon.png" alt="">
							</div>
							<h3>Product Design</h3>
							<p>"LimeLight"</p>
						</div>
					</div>
				</li>
				<li data-src= "img/port-pic6.jpg" data-width='331' data-height='208'>
					<img class='view-img' src="img/port-pic6.jpg" alt="">
					<div class="container">
						<div class="mask"></div>
						<div class="hide">
							<div class="info">
								<img src="img/hover-icon.png" alt="">
							</div>
							<h3>Product Design</h3>
							<p>"LimeLight"</p>
						</div>
					</div>
				</li>
				<li data-src= "img/port-pic7.jpg" data-width='331' data-height='208'>
					<img class='view-img' src="img/port-pic7.jpg" alt="">
					<div class="container">
						<div class="mask"></div>
						<div class="hide">
							<div class="info">
								<img src="img/hover-icon.png" alt="">
							</div>
							<h3>Product Design</h3>
							<p>"LimeLight"</p>
						</div>
					</div>
				</li>
				<li data-src= "img/port-pic1.jpg" data-width='331' data-height='208'>
					<img class='view-img' src="img/port-pic1.jpg" alt="">
					<div class="container">
						<div class="mask"></div>
						<div class="hide">
							<div class="info">
								<img src="img/hover-icon.png" alt="">
							</div>
							<h3>Product Design</h3>
							<p>"LimeLight"</p>
						</div>
					</div>
				</li>
				
			</ul>
		</div>
	</div>
	<div id="myblog" class='blog'>
		<div class="wrap">
			<div class="head-section">
				<h2 class='myblog-title title'>my blog</h2>
				<div class="wire"></div>
			</div>
			<ul class="col1 blog-list">
				<!-- <li>
					<a href="welcome/single_message">
						<img src="img/blog-post1.jpg" alt="">
					</a>
					<div class="info">
						<h3><a href="#">DESIGN TREND 2014</a></h3>
						<span>BRUNO MARS | <a href="#">13 COMMENTS</a></span>
						<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.</p>
					</div>
					<div class="seemore">
						<a href="#">see more</a>
					</div>
				</li>
				<li>
					<a href="welcome/single_message">
						<img src="img/blog-post2.jpg" alt="">
					</a>
					<div class="info">
						<h3><a href="#">DESIGN TREND 2014</a></h3>
						<span>BRUNO MARS | <a href="#">13 COMMENTS</a></span>
						<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.</p>
					</div>
					<div class="seemore">
						<a href="#">see more</a>
					</div>
				</li> -->
			</ul>
			<ul class="col2 blog-list">
				<!-- <li>
					<a href="welcome/single_message">
						<img src="img/blog-post3.jpg" alt="">
					</a>
					<div class="info">
						<h3><a href="#">DESIGN TREND 2014</a></h3>
						<span>BRUNO MARS | <a href="#">13 COMMENTS</a></span>
						<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.</p>
					</div>
					<div class="seemore">
						<a href="#">see more</a>
					</div>
				</li>
				<li>
					<a href="welcome/single_message">
						<img src="img/blog-post4.jpg" alt="">
					</a>
					<div class="info">
						<h3><a href="#">DESIGN TREND 2014</a></h3>
						<span>BRUNO MARS | <a href="#">13 COMMENTS</a></span>
						<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.</p>
					</div>
					<div class="seemore">
						<a href="#">see more</a>
					</div>
				</li> -->
			</ul>
			<ul class="col3 blog-list">
				<!-- <li>
					<a href="welcome/single_message">
						<img src="img/blog-post5.jpg" alt="">
					</a>
					<div class="info">
						<h3><a href="#">DESIGN TREND 2014</a></h3>
						<span>BRUNO MARS | <a href="#">13 COMMENTS</a></span>
						<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.</p>
					</div>
					<div class="seemore">
						<a href="#">see more</a>
					</div>
				</li>
				<li>
					<a href="welcome/single_message">
						<img src="img/blog-post1.jpg" alt="">
					</a>
					<div class="info">
						<h3><a href="#">DESIGN TREND 2014</a></h3>
						<span>BRUNO MARS | <a href="#">13 COMMENTS</a></span>
						<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.</p>
					</div>
					<div class="seemore">
						<a href="#">see more</a>
					</div>
				</li> -->
			</ul>
		</div>
	</div>
	<div id="projects">
		<img src="img/projects-bg.jpg" alt="">
		<div class="ring">
			
		</div>
		<div class="p-projects">
			<span>79</span>
			<p>projects</p>
			<div class="icon">
				<div class="icon1"></div>
			</div>
		</div>
		<div class="p-clients">
			<span>25</span>
			<p>clients</p>
			<div class="icon">
				<div class="icon2"></div>
			</div>
		</div>
		<div class="p-satisfaction">
			<span>100%</span>
			<p>satisfaction</p>
			<div class="icon">
				<div class="icon3"></div>
			</div>
		</div>
	</div>
	<div id="contact">
		<p>WANT TO DISCUSS ANY CREATIVE PROJCT ?<a href="welcome/contact">contact me</a></p>
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