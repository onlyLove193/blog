// Cloud Float...
    var $main = $cloud = mainwidth = null;
    var offset1 = 450;
	var offset2 = 0;
	
	var offsetbg = 0;
    
    $(document).ready(
        function () {
            $main = $("#mainBody");
			$body = $("body");
            $cloud1 = $("#cloud1");
			$cloud2 = $("#cloud2");
			
            mainwidth = $main.outerWidth();
         
        }
    );

    /// 飘动
    setInterval(function flutter() {
        if (offset1 >= mainwidth) {
            offset1 =  -580;
        }

        if (offset2 >= mainwidth) {
			 offset2 =  -580;
        }
		
        offset1 += 1.1;
		offset2 += 1;
        $cloud1.css("background-position", offset1 + "px 100px")
		
		$cloud2.css("background-position", offset2 + "px 460px")
    }, 70);
	
	
	setInterval(function bg() {
        if (offsetbg >= mainwidth) {
            offsetbg =  -580;
        }

        offsetbg += 0.9;
        $body.css("background-position", -offsetbg + "px 0")
    }, 90 );

  /**
   * 登录模块处理
   */
    $(function(){
      var flag = {user:false,pwd:false,verify:false};
      /*
       *点击看不清，对验证码图片进行切换
       */
       $(".chcode").click(function(){
           $('.code').attr('src',Url+'/'+Math.random());
       });
       /*
        *用户验证功能
        */

       $(".loginuser").blur(function(){
           var obj = $(this);
           if($(this).val().trim() === ''){
               $(this).parent().find("img").remove().end().append("<img src='"+Path+"/wrong.png' />");
               return ;
           }
           $.ajax({
               type:'post',
               url:authPath+'/authUser',
               data:{name:obj.val().trim()},
               dataType:'json',
               success:function(message){
                  if(message.status){
                      obj.parent().find('img').remove().end().append("<img src='"+Path+"/right.png' />");
                      flag.user = true;
                      return ;
                  }else{
                      obj.parent().find("img").remove().end().append("<img src='"+Path+"/wrong.png' />");
                  }
               }
           });
       }); 
       /*
        *密码验证
        */
      $(".loginpwd").blur(function(){
        var obj = $(this);
        if($(this).val().trim() === ''){
          $(this).parent().find('img').remove().end().append("<img src='"+Path+"/wrong.png' />");
          return ;
        }
        $.ajax({
          type:'post',
          url:authPath+'/authPwd',
          data:{pwd:obj.val().trim()},
          dataType:'json',
          success:function(message){
            if(message.status){
              obj.parent().find('img').remove().end().append("<img src='"+Path+"/right.png' />");
              flag.pwd = true;
              return;
            }else{
              obj.parent().find('img').remove().end().append("<img src='"+Path+"/wrong.png' />");
              return;
            }
          }
        });
      });
      /*
       *验证码检验
       */
      $(".logincode").keyup(function(){
        var obj = $(this);
        if($(this).val().trim() === ''){
          $(this).parent().find("img").remove().end().append("<img class='pngerror' src='"+Path+"/wrong.png' />");
          return ;
        }
        $.ajax({
          type:'post',
          url:authPath+'/authVerify',
          data:{verify:obj.val().trim()},
          dataType:'json',
          success:function(message){
            if(message.status){
              obj.parent().find('img').remove().end().append("<img class='pngerror' src='"+Path+"/right.png' />");
              flag.verify = true;
              return ;
            }else{
              obj.parent().find('img').remove().end().append("<img class='pngerror' src='"+Path+"/wrong.png' />");
              return ;
            }
          }
        });
      });
      /*
       *记住密码
       */
      var i = 1;
      $("input[type='radio']").click(function(){
        if(i%2 === 1){
          i++;
          $(this).attr('checked','checked');
          var obj = $(this);
          $.ajax({
            type:'post',
            url: authPath+'/rember',
            data:{rember:true}
          });
        }else{
          i++;
          $(this).removeAttr("checked");
          return ;
        }
      });
      /**
       * 表单提交
       */
      $(".loginbtn").click(function(){
        var con = false;
        if(flag.verify && !flag.user && !flag.pwd){
          var user = $(".loginuser").val().trim();
          var pwd = $(".loginpwd").val().trim();
          $.ajax({
              async:false,
              type:'post',
              url:authPath + '/rember',
              data:{uname:user,upwd:pwd},
              dataType:'json',
              success:function(message){
                if(message.status) {
                  con = true;}
              }
            });
        }
        if((flag.user === true && flag.pwd === true && flag.verify === true) || con){
          $.ajax({
            type:'post',
            url:authPath+'/logHandle',
            dataType:'json',
            success:function(message){
              if(message.status){
                //window.location.href = module+'/Dispatch/jump/1';
               window.location.href="http://www.ccn.com/Admin/Index/index";
              }
            }
          });
        }else{
          alert("请认真填写信息！");
        }
      });
    });