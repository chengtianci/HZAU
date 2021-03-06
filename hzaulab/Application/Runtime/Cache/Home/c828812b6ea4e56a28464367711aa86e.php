<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> -->
 	<title>华中农业大学作物学实验教学中心</title>
 	<link type="text/css" rel="stylesheet" href='http://fonts.googleapis.com/css?family=Ubuntu:300italic,300,700' />
  <link rel="shortcut icon" href="/hzau/hzaulab/logo.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="/hzau/hzaulab/Public/Css/bootstrap.css">
  <link rel="stylesheet" href="/hzau/hzaulab/Public/face/css/home_public.css" />
  <link rel="stylesheet" href="/hzau/hzaulab/Public/face/css/show_public.css" />
  <link rel="stylesheet" href="/hzau/hzaulab/Public/face/css/lab.css" />
  <script type="text/javascript" src="/hzau/hzaulab/Public/public/js/jquery-1.8.3.min.js"></script>

</head>
<body>
<div id="wrapper">
<div id="bdy">
    <!--************************************************************** header **************************************************************-->
  <div id="header"> 
    <div class="container">
  <div id="header_left">
    <!-- <a href="/hzau/hzaulab/index.php/home/Index/index.html"><h1>华中农业大学作物学实验教学中心</h1></a>
    <p>     Teaching Center of Crop Science Experiment</p> -->
  </div>
  <div id="header_right">
      <br><br>
<!-- <<<<<<< HEAD -->
      <form action="/hzau/hzaulab/index.php/Home/index/glo_search" method="post" id="sitesearch">
        <input type="text" value="" placeholder="全文搜索" class="search_input"  />
         <!-- <input type="text" value="" class="search_input" onfocus="this.value=(this.value=='全文搜索&hellip;')? '' : this.value ;" /> -->
        <input type="submit" id="search" value="搜索" alt="搜索" />
<!-- ======= -->
<!--       <form action="#" method="post" id="sitesearch">
        <input type="text" value="" placeholder="全文搜索" class="search_input"  />
         <input type="text" value="" class="search_input" onfocus="this.value=(this.value=='全文搜索&hellip;')? '' : this.value ;" />
        <input type="submit" id="search" value="搜索"alt="搜索" /> -->
<!-- >>>>>>> 8111f25b271c20c48b9dbcf50d01aca4642f06f7 -->
      </form>
  </div>
</div>

<!--***************登陆框***************-->
<div id="LoginBox">
    <div class="logreg_title">
        登陆<a href="javascript:void(0)" title="关闭窗口" class="close_btn" >×</a>
    </div>
    <form action="" method="post" name="myForm">
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
            <input type="checkbox" />
            下次自动登录
             &nbsp&nbsp|&nbsp&nbsp
            <a class="reg_link" href="#">注册</a>
        </div>
        <div class="row">
           <a href="javascript:login()" class="okbtn">登陆</a>
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
//             window.location.href="/hzau/hzaulab/index.php/Home/Index/index";
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
    <form action="" method="post" name="myForm">
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
            <img src="" alt="Code" id="regcode" onclick="this.src=this.src+'?'+Math.random()">
        </div>
        <div class="regrow">
           <a href="javascript:login()" class="okbtn">注册</a>
        </div>
    </form>    
</div>

  </div>

  <!--**************************************************************   nav  **************************************************************-->
  <div id="nav">
    <div class="container">
	<div id="navn" >
      	<ul>
	        <li class="navOne_class"><a class="active" href="/hzau/hzaulab/index.php/Home/Index/index">首&ensp;页</a></li>
	        <li class="navOne_class"><a href="/hzau/hzaulab/index.php/Home/About/about_show1">平台概况</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzau/hzaulab/index.php/Home/About/about_show1">平台简介</a></li>
	                <li class="secnav"><a href="/hzau/hzaulab/index.php/Home/About/about_show2">通知公告</a></li>
	                <li class="secnav"><a href="/hzau/hzaulab/index.php/Home/About/about_show3">联系我们</a></li>
	            </ul>
	        </li>	
	       <li class="navOne_class"> <a href="/hzau/hzaulab/index.php/Home/Field/field">大田设施</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Field/field_show1">农田土地</a></li>
	                <li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Field/field_show2">露天盆栽场</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzau/hzaulab/index.php/Home/Room/room">培养室</a>
	       		<ul class="nav_left">
	            	<li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Room/room_show1">温网室</a></li>
	                <li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Room/room_show2">光照培养室</a></li>
	            </ul>
	        </li>

	        <li class="navOne_class"><a href="/hzau/hzaulab/index.php/Home/Laboratory/laboratory">实验室</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Laboratory/laboratory_show1">公共实验室</a></li>
	                <li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Laboratory/laboratory_show2">教学实验室</a></li>
	                <li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Laboratory/laboratory_show3">实验辅助室</a></li>
	            </ul>
	        </li>
	         <li class="navOne_class"><a href="/hzau/hzaulab/index.php/Home/Equipment/equipment">仪器设备</a>
	        	<ul class="nav_right">
	            	<li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Equipment/equipment_show1">仪器设备</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzau/hzaulab/index.php/Home/Fictitious/fictitious_show1">规章制度</a>
        		<ul class="nav_left">
	            	<li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Fictitious/fictitious_show1">规章制度</a></li>
	                <li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Fictitious/fictitious_show2">服务指南</a></li>
	                <li class="secnav"><a href="/hzau/hzaulab/index.php/Home/Fictitious/fictitious_show3">下载专区</a></li>
	            </ul>
		       
	        </li>
	       
        </ul>
    </div>
</div>

  </div>
  
  <!--**************************************************************main-one**************************************************************-->
  <div id="main">
    <div class="container">
      <div id="blank"></div>
      <div id="main_nav">
        <section>
          <h3>实验室</h3>
          <ul class="ultop">
            <li><a href="/hzau/hzaulab/index.php/Home/Laboratory/laboratory_show1" id="thetitleha1">公共实验室</a></li>
            <li><a href="/hzau/hzaulab/index.php/Home/Laboratory/laboratory_show2" id="thetitleha2">教学实验室</a></li>
            <li><a href="/hzau/hzaulab/index.php/Home/Laboratory/laboratory_show3" id="thetitleha3">实验辅助室</a></li>
          </ul>
        </section>
      </div>
      <div id="main_right">
        <nav class="top_nav"><a href="/hzau/hzaulab/index.php/home/Index/index.html">首页</a> · <a href="#">实验室</a> · <a href="#"><?php echo ($thetitle); ?></a> </nav>
        <header class="main_title"><h2><?php echo ($thetitle); ?></h2></header>
        <section class="article">
          <div>
            <form id="eqt_search" action="" method="post">
              <br>
              <input class="search" name="search" type="text"><input class="search_button" value="" type="submit">
              <div class="clearfix"></div>
              <div class="radio_box">
                
              </div>
            </form>
          </div>
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><div class="pitbox">
              <h4><a href="/hzau/hzaulab/index.php/Home/Laboratory/laboratory_show1_article/id/<?php echo ($items["id"]); ?>" ><?php echo ($items["ecname"]); ?></a></h4>
              <div class="pitexplan">
                <a href="/hzau/hzaulab/index.php/Home/Laboratory/laboratory_show1_article/id/<?php echo ($items["id"]); ?>" ><img src="/hzau/hzaulab/Uploads<?php echo ($vo["imagicaddress"]); ?>" alt="无图片" /></a>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div>
            <nav style="text-align:center;" >
              <ul class="pagination">
                <?php echo ($show); ?>
              </ul>
            </nav>
          </div>
        </section>
      </div>
    </div>
  </div>


   <!--************************************************************** footer **************************************************************-->
  <div id="footer">
     <div class="container">
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
      CopyRight©2017  华中农业大学作物学实验教学中心 <a href="/hzau/hzaulab/index.php/Admin/">管理</a>
    </p>
  </div>
</div>
  </div>
</div>
</div>
  

  
  <script type="text/javascript" src="/hzau/hzaulab/Public/face/js/public.js"></script>
  <script type="text/javascript" src="/hzau/hzaulab/Public/face/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="/hzau/hzaulab/Public/face/js/custom.js"></script>
  <script type="text/javascript">
    var data = <?php echo json_encode($thetitle); ?>;
    console.log(data);
    if (data == "公共实验室") {
      var text = document.getElementById("thetitleha1");
      text.style.border-left = "3px solid orange";
     // style="border-left: 3px solid orange;"
    } else if (data = "教学实验室") {
      var text = document.getElementById("thetitleha2");
      text.style.border-left = "3px solid orange";
    } else {
      var text = document.getElementById("thetitleha3");
      text.style.border-left = "3px solid orange";
    }
  </script>
</body>
</html>