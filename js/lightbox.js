define(['jquery'],function(){
	return {
		open:function(){
			$("<div class='lightbox-mask'></div>").appendTo(document.body).on('click',function(){
				$(this).fadeOut();
				$('.lightbox-img').fadeOut();
			});
			var iWidth = $(this).attr('data-width')>=600?600:$(this).attr('data-width');
			// var iWidth = this.getAttribute('data-width')>=600?600:this.getAttribute('data-width');
			$div = $("<div class= 'lightbox-img'><div class='loading'>loading</div></div>").css({
				width:$(this).attr('data-width'),
				height:$(this).attr('data-height'),
				left:($(window).width()-iWidth)/2,
				top:($(window).height()-$('.portfolio-grids li').attr('data-height'))/2
			}).appendTo(document.body);
			var oImg = new Image();
			oImg.onload = function(){
				$div.children('.loading').hide();
				$div.append(oImg);
			};
			oImg.src = this.getAttribute('data-src');
		}
		// close:function(){

		// }
	}
})