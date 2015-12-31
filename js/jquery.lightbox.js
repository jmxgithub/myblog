;(function($){
	$.fn.extend({
		lightbox: function(){
			this.on('click',function(){
					$("<div class='lightbox-mask'></div>").appendTo(document.body).on('click',function(){
					$(this).fadeOut(400,function(){
						$(this).remove();
					});
					$('.lightbox-img').fadeOut(400,function(){
						$this().remove();
					});
				});

				// $img = $("<img class='lightbox-img'/>");
				// $img.on('load',function(){
				// 	alert(this.width);
				// });
				// $img.attr('src',$(this).data('src'));
				
				var iWidth = this.getAttribute('data-width')>=600?600:this.getAttribute('data-width');
				$div = $("<div class= 'lightbox-img'><div class='loading'>loading</div></div>").css({
					width:this.getAttribute('data-width'),
					height:this.getAttribute('data-height'),
					left:($(window).width()-iWidth)/2,
					top:($(window).height()-this.getAttribute('data-height'))/2,
					opacity:0
				}).appendTo(document.body).animate({
					opacity:1
				},400);
				var oImg = new Image();
				oImg.onload = function(){
					$div.children('.loading').hide();
					$div.append(oImg);
				};
				oImg.src = this.getAttribute('data-src');
			});
		}
	});
})(jQuery);