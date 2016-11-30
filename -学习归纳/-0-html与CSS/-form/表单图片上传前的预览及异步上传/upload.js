
		/*
		*	文件上传函数 
		*	param1		url 	提交到指定的页面  	必选
		*	param2  	obj:	图片input 项 id		必选
		*	param3		path:	指定图片保存的路径,可指定为''或不填，‘’和默认使用相对路径 './images/share/'.(可选)
		*	param4		type:	指定允许上传文件的后缀类型如：'jpg,png'或'',或不填,''和默认值都为jpg,png,gif,使用该参数时必需指定前一个参数path.(可选)
		*	param5		size:	指定上传文件的大小限制,指定为''或不填，''和默认值都为 200k ,使用该参数前必须先设置path,type。(可选)
		*/
		function sub(url,obj,path='',type='',size=''){
			if(!path){
				path = './images/share/';		//默认图片存放路径
			}
			if(!type){
				type = 'jpg,png,gif,JPG,PNG,GIF';			//默认可上传文件的后缀名
			}
			if(!size){
				size = 1024 * 200;				//默认上传文件大小限制 
			}else{
				size = 1024 * size;
			}
			var oobj = document.getElementById(obj);
			fname = oobj.name;
			if(!fname){
				alert('图片项缺少name!');exit;
			}
			if(oobj.value){
				var oobj2 = oobj.value;
				var types = new Array();
				types = type.split(',');
				for(var i=0;i<types.length;i++){
					if(oobj2.substring(oobj2.lastIndexOf('.')+1,oobj2.length) == types[i]){
						var stat = 1;
					}else{
						continue;
					}
				}
				if(stat){
					var st = upload(url,oobj,fname,path,type,size);
				}else{
					alert('上传文件类型不正确！只支持'+type+'类型!');
				}
			}else{
				alert('请选择文件');
			}
		}

		//图片预览
		function previewFile(img,inp) {  
			var preview = document.getElementById(img);  
			var file  = document.getElementById(inp).files[0];  
			var reader = new FileReader();  
			reader.onloadend = function () {  
				preview.src = reader.result;  
			};  
			if (file) {  
				reader.readAsDataURL(file);   
			} else {  
				preview.src = "";  
			}  
		}  

		//图片上传
		function upload(url,oobj,fname,path,type,size){
			var oData = new FormData(document.forms.namedItem("fileinfo")); //新建一个表彰对象  
			oData.append("fname",fname); //在这可以向表单添加额外的数据 
			//alert(size+'aaa');
			oData.append("path",path); //在这可以向表单添加额外的数据 
			oData.append("type",type); //在这可以向表单添加额外的数据 
			oData.append("size",size); //在这可以向表单添加额外的数据 
			var oReq = new XMLHttpRequest();   
			oReq.open("POST",url, true);  	//用post方式提交数据到url地址
			oReq.onload = function(oEvent) {  
				//alert(oReq.response);exit;
				if (oReq.response == 999) {  	
					alert("文件上传成功！");  
					oobj.value='';
				}else if(oReq.response == 3){
					alert('文件类型不正确,只支持'+type+'类型');
				}else if(oReq.response ==4){
					size = Math.ceil(size / 1024);
					alert('文件大小超限！不得超过'+size+'K');
				}else{  
					alert("更改头像失败！");  
				}  
			};  
			oReq.send(oData);         
		}  