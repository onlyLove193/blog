$(function () {
	var ue = UE.getEditor('container',{
    initialFrameWidth:960,
    initialFrameHeight:300
    });
	var bar = $('.bar'),flag = 0;
	var percent = $('.percent');
	// var showimg = $('#showimg');
	var progress = $(".progress");
	var files = $(".files");
	 var btn = $(".back");
	$("#picture").wrap("<form id='myupload' action='"+path+"/uploadImg' method='post' enctype='multipart/form-data'></form>");
    $("#picture").change(function(){
		var obj = $(this),par = $("myupload");
		$("#myupload").ajaxSubmit({
			dataType:  'json',
			beforeSend: function() {
        		// showimg.empty();
				progress.show();
        		/*var percentVal = '0';
        		bar.width(percentVal);
        		percent.html(percentVal);*/
				btn.html("上传中...");
    		},
    		/*uploadProgress: function(event, position, total, percentComplete) {
        		var percentVal = percentComplete * 120/100;
        		bar.width(percentVal);
        		percent.html(percentVal);
    		},*/
			success: function(data) {
				//files.html("<b>"+data.name+"("+data.size+"k)</b> <span class='delimg' rel='"+data.pic+"'>删除</span>");
				//var img = "http://www.ccn.com/Upload/"+data.pic;
				// showimg.html("<img src='"+img+"'>");
				btn.html("上传成功！");
				flag = 1;
				obj.unwrap(par);
			},
			error:function(xhr){
				var txt = xhr.responseText;
				btn.html("上传失败 ,"+txt);
				// files.html(xhr.responseText);
			}
		});
	});
	
	/*$(".delimg").live('click',function(){
		var pic = $(this).attr("rel");
		$.post("action.php?act=delimg",{imagename:pic},function(msg){
			if(msg==1){
				files.html("删除成功.");
				// showimg.empty();
				progress.hide();
			}else{
				alert(msg);
			}
		});
	});*/
	var	button = document.getElementById('btn');
	button.onclick = function (){
		if(!flag){
			alert("请为博文配图!");
			return;
		}
		var now = ue.getContent(),
		    last = document.getElementsByTagName("textarea")[1].innerHTML;
		if(now !== last){
			last = now;
		}
		var fm = document.getElementById("total"),
			xhr = new XMLHttpRequest(),
			form = new FormData(fm);
		
		xhr.open('post',path+'/distribute',true);
		xhr.send(form);
		xhr.onreadystatechange = function(){
			if(xhr.readyState === 4){
				if(xhr.status === 200){
					$url = xhr.responseText;
					window.location.href = 'http://www.ccn.com/'+$url;
				}else{
					alert('出现错误！');
				}
				
			}
		}
	}
	/**
	 * ajax发送FormData数据对象出错，$_POST显示为空
	 * @param  {[type]} 
	 * @return {[type]}                                                                                            [description]
	 */
	/*$("input[type='button']").click(function(){
		if(!flag){
			alert("请为博文配图．．!");
			return;
		}else{
			alert(ue.getContent());
			var fm = $("#total");
			var form = new FormData(fm);
			alert(form);
			$.ajax({
				type:'post',
				url:path+'/distribute',
				data:form,
				processData:false,
				contentType:false
			});
		}
	});*/
});