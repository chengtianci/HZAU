<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width,user-scalable=yes" />
 	<title>实验教学中心互动平台</title>
	<link rel="shortcut icon" href="/hzau/hzaucomm/logo.ico">
	<link rel="stylesheet" href="/hzau/hzaucomm/Public/face/css/public.css"/>
	<link rel="stylesheet" href="/hzau/hzaucomm/Public/face/css/notice.css"/>
	<!-- <link rel="stylesheet" href="/hzau/hzaucomm/Public/Css/bootstrap.min.css"/> -->
	<link rel="stylesheet" href="/hzau/hzaucomm/Public/Css/bootstrap.css"/>
</head>
<body>
	<div id="Cheader">
		<div class="Ccontainer">
  <div id="header_left">
    
  </div>
  <div id="header_right">
      <div id="login">
          <?php if(($_SESSION['username']) == ""): ?><p><a href="#" class="logBut">学生登录</a> | <a href="#" class="logBut">教师登录</a> | <a href="#" class="reg_link">注册</a></p><br/>
            <!-- 判断登陆后        显示下面这行代码 -->
          <?php else: ?>
            <p><a href="#">访问旧版</a> | <?php echo (session('username')); ?>你好！ | <a href="/hzau/hzaucomm/index.php/Home/User/index">个人中心</a> | <a href="/hzau/hzaucomm/index.php/Home/User/loginout">退出</a></p><br/><?php endif; ?>
      </div>
      <form action="/hzau/hzaucomm/index.php/Home/index/glo_search" method="post" id="sitesearch">
        <input type="text" value="" placeholder="全文搜索" class="search_input"  />
         <!-- <input type="text" value="" class="search_input" onfocus="this.value=(this.value=='全文搜索&hellip;')? '' : this.value ;" /> -->
        <input type="submit" id="search" value="搜索" alt="搜索" />
      </form>
  </div>
</div>

<!--***************登陆框***************-->
<div id="LoginBox">
    <div class="logreg_title">
        登陆<a href="javascript:void(0)" title="关闭窗口" class="close_btn" >×</a>
    </div>
    <form action="<?php echo U('User/login') ?>" method="post" name="myForm">
        <p class="suggest"></p>
        <div class="row">    
            <input type="text" placeholder="用户名" id="logName" name="username"/>
            <a href="javascript:void(0)" title="提示" class="warning" id="warn">*</a>
        </div>
        <div class="row">     
            <input type="password" placeholder="密码" id="logPwd" name="password"/>
            <a href="javascript:void(0)" title="提示" class="warning" id="warn2">*</a>
        </div>
        <div class="row">
            <input type="checkbox"  name="remember"/>
            下次自动登录
             &nbsp&nbsp|&nbsp&nbsp
            <a class="reg_link" href="#">注册</a>
        </div>
        <div class="row">
           <!--<a href="javascript:login()" class="okbtn">登陆</a>-->
            <input type="submit" class="okbtn" value="登陆">
        </div>
    </form>    
</div>

<script>
// $(function(){
//      //登录AJAX提示判断
//     $.post('', {
//         username:$("#logName").val(),
//         password:$("#logPwd").val(),
//     },function(text){
//         if(text=="pass"){
//             // alert('pass')
//             window.location.href="/hzau/hzaucomm/index.php/Home/Index/index";
//         }else{
//             $("#suggest").html(text);
//         }
//     });
// })
</script>



<!--***************注册框***************-->
<div id="RegisterBox">
    <div class="logreg_title">
         注册<a href="javascript:void(0)" title="关闭窗口" class="close_btn" >×</a>
    </div>
    <form action="<?php echo U('User/register') ?>" method="post" name="myForm">
        <p class="suggest"></p>
        <div class="row">    
            <input type="text" placeholder="用户名" id="logName" name="username"/>
        </div>
        <div class="row">     
            <input type="password" placeholder="密码" id="logPwd" name="password"/>
        </div>
        <div class="row">
             <input type="password" placeholder="确认密码" id="Repwd" name="repassword"/>
        </div>
        <div class="row">
            <input type="text" id="regcode" placeholder="验证码" name='code' />
            <img src="/hzau/hzaucomm/index.php/Home/Header/verifyImg" alt="Code" id="regcode" onclick="this.src=this.src+'?'+Math.random()">
        </div>
        <div class="regrow">
           <!--<a href="javascript:login()" class="okbtn">注册</a>-->
            <input type="submit" class="okbtn" value="注册">
           <!--<input> class="okbtn">注册</a>-->
        </div>
    </form>    
</div>


	</div>

	<div id="Cnav">
		<div class="Ccontainer">
    <div id="nav">
        <ul id="nav_mul">
            <li class="nav_first">
                <a id="nav_main" href="/hzau/hzaucomm/index.php/Home/index/main">首页</a>
            </li>
            <li class="nav_first">
                <a id="nav_main" href="/hzau/hzaucomm/index.php/Home/introduction/introduction">平台概况</a>
                <div id="nav_hidden3">
                <ul >
                    <li><a href="/hzau/hzaucomm/index.php/Home/introduction/introduction">平台概况</a></li>
                    <li><a href="/hzau/hzaucomm/index.php/Home/introduction/notice">通知公告</a></li>
                    <li><a href="/hzau/hzaucomm/index.php/Home/introduction/connect">联系我们</a></li>
                </ul>
                </div>
            </li>  
            <li class="nav_first">
                <a id="nav_course" href="/hzau/hzaucomm/index.php/Home/course/course">学科交流</a>
                <div id="nav_hidden1">
                <ul >
                    <li><a href="/hzau/hzaucomm/index.php/Home/course/course?">实践实习类</a></li>
                    <li><a href="/hzau/hzaucomm/index.php/Home/course/course?">专业基础类</a></li>
                    <li><a href="/hzau/hzaucomm/index.php/Home/course/course?">作物生产类</a></li>
                    <li><a href="/hzau/hzaucomm/index.php/Home/course/course?">植物保护类</a></li>
                    <li><a href="/hzau/hzaucomm/index.php/Home/course/course?">创新实验课程</a></li>
                </ul>
                </div>
            </li>
            <li class="nav_first">
                <a id="nav_source" href="/hzau/hzaucomm/index.php/Home/source/source">资源共享</a>
                <div id="nav_hidden2">
                <ul >
                    <li><a href="/hzau/hzaucomm/index.php/Home/source/picture">图片</a></li>
                    <li><a href="/hzau/hzaucomm/index.php/Home/source/document">文件</a></li>
                    <li><a href="/hzau/hzaucomm/index.php/Home/source/video">视频</a></li>
                    <li><a href="/hzau/hzaucomm/index.php/Home/source/zip">其他</a></li>
                </ul>
                </div>
            </li>
            <li class="nav_first">
               <a id="nav_comp" id="nav_comp" href="/hzau/hzaucomm/index.php/Home/comp/comp">综合交流</a>
            </li>
            <li class="nav_first">
                <a id="nav_main" href="/hzau/hzaucomm/index.php/Home/source/pic_update">资源上传</a>
            </li>
                      
        </ul>
    </div>
</div>

	</div>

	<div id="Cmain">
		<div class="Ccontainer">
			<div id="main_nav">
				<section>
					<h3>平台概况</h3>
					<ul class="ultop">
						<li><a href="/hzau/hzaucomm/index.php/Home/introduction/introduction">平台概况</a></li>
						<li><a href="/hzau/hzaucomm/index.php/Home/introduction/notice">通知公告</a></li>
						<li><a href="/hzau/hzaucomm/index.php/Home/introduction/connect">联系我们</a></li>
						
					</ul>
				</section>
			</div>
			<div class="rightc_nhot">
				<div class="mini_nav">
					<span class="mini_title">平台公告</span>
				</div>
				<div class="float_lis">
					<div class="list">
						<ul>
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li ><a class="ex_item" href="/hzau/hzaucomm/index.php/Home/introduction/summary/id/<?php echo ($vo["id"]); ?>"><div class="point"></div><?php echo ($vo["infoname"]); ?><span><?php echo ($vo["infotime"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>

						<nav style="text-align:center;" >
							<ul class="pagination">
								<?php echo ($page); ?>
							</ul>
						</nav>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clr"></div>
	</div>
	<div id="Cfooter">
		<div id="con">
<div class="Ccontainer">
  <div class="footbox">
    <h2>快速导航</h2>
    <ul>
      <li><a href="#">&raquo; 首页</a></li>
      <li><a href="#">&raquo; 网站地图</a></li>
      <li><a href="#">&raquo; 互动平台</a></li>
      <li><a href="#">&raquo; 访问说明</a></li>
    </ul>
  </div>
  <div class="footbox">
    <h2>联系方式</h2>
    <address>
    湖北省武汉市洪山区狮子山街一号<br />
    中国·湖北·武汉<br />
    430070<br />
    Tel: 027-87499963<br />
    </address>
  </div>
  <div class="foot-bottom">
    <p><span>技术支持：<a href="http://www.52feidian.com/">华中农业大学 沸点工作室</a></span>
      CopyRight©2017  华中农业大学作物学实验教学中心 <a href="">管理</a>
    </p>
  </div>
</div>
</div>
	</div>
    <script src="/hzau/hzaucomm/Public/public/js/jquery-1.8.3.min.js" ></script>
	
	<script type="text/javascript" src="/hzau/hzaucomm/Public/face/js/logre.js"></script>

</body>
</html>