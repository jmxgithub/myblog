requirejs.config({
	shim: {
		'jquery.lightbox': ['jquery']
	}
});
require(['jquery', 'jquery.lightbox'],function($, lb){
	var $nav = $('#nav'),
	$navIcon = $('.nav-icon',$nav),
	$navCloseIcon = $('.nav-close-icon', $nav),
	$navMenuBox = $('.nav-menu-box', $nav);
	$navIcon.on('click',function(){
		$navMenuBox.animate({top: 0});
	});
	$navCloseIcon.on('click',function(){
		$navMenuBox.animate({top: -192});
	});


	//菜单

	$navA = $('a',$nav);
	$navA.hover(function(){
		$(this).animate({color:'#1f98ad'},'slow');
	},function(){
		$(this).animate({color:'#fff'},'slow');
	});


	//遮罩层
	var $portfolioGrids = $('.portfolio-grids');
	$('.portfolio-grids li').hover(function(){
		$container = $(this).children('.container');
		$img = $(this).children('img');
		$container.show().stop().animate({
			opacity:0.74
		});
		$img.stop().animate({
			width: 305,
			height: 197,
			"margin-left": -10,
			"margin-top": -10
		});
	},function(){
		$img.stop().animate({
			width: 285,
			height: 179,
			"margin-left": 0,
			"margin-top": 0
		});
		$container.stop().animate({
			opacity:0
		},function(){
			$(this).hide();
		});
	}).lightbox();
	// $('.portfolio-grids li').on('click',function(){
	// 	lb.open();
	// });



	//to-top 回到顶部
	var $toTop = $('.to-top');

	$(window).on('scroll',function(){
		if($(window).scrollTop()>300){
			$toTop.fadeIn(500);
		}else{
			$toTop.fadeOut(500);
		};
	});
	$toTop.on('click',function(){
		var timer = setInterval(function(){
			$(window).scrollTop($(window).scrollTop()-20);
			if($(window).scrollTop() <= 0){
				clearInterval(timer);
			};
		},3);
	});


	$blogHeadSection = $('.blog .head-section');
	var iHeadSectionTop = $blogHeadSection.offset().top,
		iHeadSectionHeight = $blogHeadSection.height();
	var bLoad = true;//判断是否该加载新数据
	var bLoaded = false;//判断本次请求的数据是不是加载完毕
	var isEnd = false;//判断是不是加载完数据库中的所有数据
	var page = 0;//控制分页

	function getMinUl(){
		$blogList = $('.blog-list');
		var $minUl =  $blogList.eq(0);
		for(var i=1; i<$blogList.length; i++){
			if($blogList.eq(i).height() < $minUl.height()){
				$minUl = $blogList.eq(i);
			}
		}
		return $minUl;
	}



	$(window).on('scroll', function(){

		if($(window).height()+$(window).scrollTop() >= iHeadSectionTop+iHeadSectionHeight && !isEnd){
			if(bLoad){
				bLoad = false;
				$.get('welcome/get_articles?page='+page, function(res){
					if(!res.isEnd){
						for(var i=0; i<res.data.length; i++){
							var blog = res.data[i];
							var html = '<li class="blog-artical">'
											+ '<div class="blog-artical-pic">'
												+ '<a href="welcome/detail?blog_id='+blog.blog_id+'"><img src="img/blog-post1.jpg" title="name" /></a>'
											+ '</div>'
											+ '<div class="blog-artical-info">'
												+ '<h3><a href="#">'+blog.title+'</a></h3>'
												+ '<span>'+blog.admin_name+' | <a href="#">13 comments</a></span>'
												+ '<p>'+blog.content+'</p>'
												+ '<a class="more-btn" href="#">See More</a>'
												+ '<div class="clearfix"> </div>'
											+ '</div>'
										+ '</li>';
							var $minUl = getMinUl();
							$minUl.append(html);
						}
						bLoaded = true;
						page += 6;
					}else{
						isEnd = true;
					}
				}, 'json');

			}


			var $minUl = getMinUl();
			if($(window).height()+$(window).scrollTop() >= $minUl.offset().top+$minUl.height() && bLoaded){
				bLoad = true;
				bLoaded = false;
			}
		}


	});













});



