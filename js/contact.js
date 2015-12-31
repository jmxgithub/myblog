$(function(){
	$('.submit').on('click',function(){
		var $username = $('[name="username"]');
		var $email  = $('[name="email"]');
		var $content = $('[name="content"]');
		if($username.val() == ''){
			alert('请输入用户名！');
			$username.focus().css({
				border: '1px solid #f00'
			});
			$email.css({
				border:'none'
			});
			$content.css({
				border:'none'
			});
		}else if($username.val() != '' && $email.val() == ''){
			alert('请输入邮箱！');
			$email.focus().css({
				border: '1px solid #f00'
			});
			$username.css({
				border:'none'
			})
			$content.css({
				border:'none'
			});
		}else if($username.val() != '' && $email.val() != '' && $content.val() == ''){
			alert('留言还没输入哦！');
			$content.focus().css({
				border: '1px solid #f00'
			});
			$username.css({
				border:'none'
			});
			$email.css({
				border:'none'
			});
		}else{
			$.post('welcome/message', {
				username:$username.val(), 
				email:$email.val(), 
				content:$content.val()
			},function(res){
				if(res == 'fail'){
					alert('还有信息没填写哦...')
				}else{
					$username.css({
						border:'none'
					});
					$email.css({
						border:'none'
					});
					$content.css({
						border:'none'
					});
					alert('保存成功！');
				};
			});
		}

	});
});