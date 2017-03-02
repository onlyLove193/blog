$(function(){
	var newpwd = '',flag = false;
	var user = $("input[type='text']:eq(0)");
	var pass = $("input[type='password']:eq(0)");
	if(user.val() !== ''){
		user.parent().find('img').remove().end().append('<img src="'+Path+'/images/right.png" class="png" />');
	}
	if(pass.val() !== ''){
		pass.parent().find('img').remove().end().append('<img src="'+Path+'/images/right.png" class="png" />');
	}
	/**
	 * [description] 密码重置
	 */
	$("input[type='password']:eq(1)").blur(function(){
		if($(this).val() === ''){
			$(this).parent().find('span').remove().end().find('img').remove().end().append('<span class="app">密码不能为空!</span>');
			newpwd = '';
			return;
		}else{
			newpwd = $(this).val();
			$(this).parent().find('span').remove().end().find('img').remove().end().append('<img src="'+Path+'/images/right.png" class="png" />');
			return;
		}
	});
	/**
	 * [description] 初步检测两次密码是否一致
	 */
	$("input[type='password']:eq(2)").keyup(function(){
		if($(this).val() === ''){
			$(this).parent().find('img').remove().end().find('span').remove().end().append('<span class="app">密码不能为空!</span>');
			return;
		}else if($(this).val() === newpwd){
			flag = true;
			$(this).parent().find('span').remove().end().find('img').remove().end().append('<img src="'+Path+'/images/right.png" class="png" />');
			return;
		}else{
			$(this).parent().find('span').remove().end().find('img').remove().end().append('<span class="app">密码错误!</span>');
			return;
		}
	});

	$("input[type='button']").click(function(){
		var obj = $(this);
		if(!flag){
			alert("请认证填写用户信息与密码！");
			return;
		}else{
			$.ajax({
				type:'post',
				url:Url+'/accountHandle',
				data:{pwd:newpwd},
				dataType:'json',
				success:function(message){
					if(message.status){
						window.parent.location.href = Dir+'/Login/logOut/come/1.html';
					}
				}
			});
		}
	});
});