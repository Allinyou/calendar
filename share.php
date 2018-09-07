<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no,viewport-fit=cover">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no" />
		<title>A-Circle日签</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/touch.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
		<style type="text/css">
			body{ width: 100%; height: 100%; background: url(img/bg.jpg);}
			/*海报生成页面*/
			.sharePage{ position: fixed; z-index: 222; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,.6);}
			.sharePage .showImg{ position: absolute; left: 50%; margin: 1rem 0 0 -2.75rem; width: 5.5rem; height: 8.8rem;}
			.sharePage p{ position: relative; margin-top: 10.3rem; font-size: .24rem; color: #fff; text-align: center;}
			.sharePage .footer{ position: absolute; left: 0; bottom: 0; width: 100%; height: 1rem; background: #000;}
			.sharePage .footer ul{ position: relative; margin-top: .2rem; width: 100%; height: .6rem;}
			.sharePage .footer ul li{ float: left; width: 49%; height: .6rem; font-size: .34rem; color: #fff; text-align: center; line-height: .6rem; border-right: 1px solid #fff;}
			.sharePage .footer ul li:last-child{ border: none;}
			.sharePage .footer1{ position: absolute; left: 0; bottom: 0; width: 100%; height: 1rem; background: #000;}
			.sharePage .footer1 ul{ position: relative; margin-top: .2rem; width: 100%; height: .6rem;}
			.sharePage .footer1 ul li{ width: 100%; height: .6rem; font-size: .34rem; color: #fff; text-align: center; line-height: .6rem;}
	
			
			@media only screen and (device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3){ 
			   .footer{ border-bottom: 44px solid #000; }
			   .footer1{ border-bottom: 44px solid #000; }
			}
		</style>
	</head>
	<body>
		<div class="sharePage">
			<img class="showImg" src="http://img.auto400.com.cn/Uploads/img/calendar/<?php echo $_GET['audi'];?>.jpg"/>
			<p>-长按图片保存到相册-</p>
			<?php if($_GET['subm'] == 1){ ?>
			<div class="footer"> 
				<ul class="clearfix">
					<li class="again"><a href="index.html">再做一张</a></li>
					<li class="shareBtn"><a href="javascript:;">分享</a></li>
				</ul>
			</div>
			<?php }else{ ?>
			<div class="footer1" >
				<ul class="clearfix">
					<li class="again"><a href="index.html">再做一张</a></li>
				</ul>
			</div>
			<?php } ?>
		</div>
		<div class="share" style="display: none;"><img src="img/share.png"/></div>
		<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.shareBtn').click(function() {
					$('.share').show();
				});
				$('.share').click(function() {
					$('.share').hide();
				});
			});

			function GetRequest() {  
			   var url = location.search; //获取url中"?"符后的字串  
			   var theRequest = new Object();  
			   if (url.indexOf("?") != -1) {  
			      var str = url.substr(1);  
			      strs = str.split("&");  
			      for(var i = 0; i < strs.length; i ++) {  
			         theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);  
			      }  
			   }  
			   return theRequest;  
			}  

			$('.showImg').attr('src','http://img.auto400.com.cn/Uploads/img/calendar/'+GetRequest().audi+'.jpg');
		
		</script>
		<script src="/snowruns/share_calendar_img?audi=<?php echo $_GET['audi'];?>"></script>
	</body>
</html>
