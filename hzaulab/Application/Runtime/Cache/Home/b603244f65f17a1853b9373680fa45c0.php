<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> -->
 	<title>华中农业大学作物学实验教学中心</title>
 	<!-- <link type="text/css" rel="stylesheet" href='http://fonts.googleapis.com/css?family=Ubuntu:300italic,300,700' /> -->
  <link rel="shortcut icon" href="/hzaulab/logo.ico" type="image/x-icon" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/home_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/show_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/planform_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/room_show1_one.css" />
  <script type="text/javascript" src="/hzaulab/Public/public/js/jquery-1.8.3.min.js"></script>

</head>
<body>
<div id="wrapper">
<div id="bdy">
    <!--************************************************************** header **************************************************************-->
  <div id="header"> 
    <div class="container">
  <div id="header_left">
    <!-- <a href="/hzaulab/index.php/home/Index/index.html"><h1>华中农业大学作物学实验教学中心</h1></a>
    <p>     Teaching Center of Crop Science Experiment</p> -->
  </div>
  <div id="header_right">
      <br><br>
<!-- <<<<<<< HEAD -->
      <form action="/hzaulab/index.php/Home/index/glo_search" method="post" id="sitesearch">
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
//             window.location.href="/hzaulab/index.php/Home/Index/index";
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
	        <li class="navOne_class"><a class="active" href="/hzaulab/index.php/Home/Index/index">首&ensp;页</a></li>
	        <li class="navOne_class"><a href="/hzaulab/index.php/Home/About/about_show1">平台概况</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/About/about_show1">平台简介</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/About/about_show2">通知公告</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/About/about_show3">联系我们</a></li>
	            </ul>
	        </li>	
	       <li class="navOne_class"> <a href="/hzaulab/index.php/Home/Field/field">大田设施</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/Field/field_show1">农田土地</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Field/field_show2">露天盆栽场</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzaulab/index.php/Home/Room/room">培养室</a>
	       		<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/Room/room_show1">温网室</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Room/room_show2">光照培养室</a></li>
	            </ul>
	        </li>

	        <li class="navOne_class"><a href="/hzaulab/index.php/Home/Laboratory/laboratory">实验室</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/Laboratory/laboratory_show1">公共实验室</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Laboratory/laboratory_show2">教学实验室</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Laboratory/laboratory_show3">实验辅助室</a></li>
	            </ul>
	        </li>
	         <li class="navOne_class"><a href="/hzaulab/index.php/Home/Equipment/equipment">仪器设备</a>
	        	<ul class="nav_right">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/Equipment/equipment_show1">仪器设备</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzaulab/index.php/Home/Fictitious/fictitious_show1">规章制度</a>
        		<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaulab/index.php/Home/Fictitious/fictitious_show1">规章制度</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Fictitious/fictitious_show2">服务指南</a></li>
	                <li class="secnav"><a href="/hzaulab/index.php/Home/Fictitious/fictitious_show3">下载专区</a></li>
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
          <h3>培养室</h3>
          <ul class="ultop">
            <li><a href="/hzaulab/index.php/Home/Room/room_show1" style="border-left: 3px solid orange;">温网室</a></li>
            <li><a href="/hzaulab/index.php/Home/Room/room_show2">光照培养室</a></li>
          </ul>
        </section>
      </div>
      <div id="main_right">
        <nav class="top_nav"><a href="/hzaulab/index.php/home/Index/index.html">首页</a> · <a href="#">培养室</a> · <a href="#">温网室</a> </nav>
        <section class="article">
          <header class="main_title"><h2>温网室</h2></header>
          <div class="planform_box">
            <ul class="small_nav">
              <li><a class="now_on" href="/hzaulab/index.php/Home/Room/room_show1">山南温网室群</a></li>
              <li><a href="/hzaulab/index.php/Home/Room/room_show1_two">山北温室群</a></li>
            </ul>
            <div class="clr"></div>
            <div class="planform">
              <div class="planheader">
                <form action="/lark-master/lark-master/index.php/Home/Reserve/home" method="get">
                <span class="hint">选择日期:</span>
                <input class="tcal tcalInput tcalActive input" name="date" value="2017-08-03" type="date">
                <button class="button" type="submit">查询</button>
                </form>
                <div class="clr" style="clear: both;"></div><br>
                <span class="he">山南温室群</span><br>
                <div class="explain">
                  已预约：<span class="red"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                  占用：<span class="orange"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                  锁定：<span class="grey"></span>  &nbsp;&nbsp;&nbsp;&nbsp;
                  开放：<span class="unlock"></span>  
                </div>
              </div>
              <div class="planbody">
                <form class="planbodyform">
                  <!-- <div id="muticonfirm">预约</div> -->
                  <input type="button" name="" id="muticonfirm" value="预约" onclick="fun()">
                  <div class="clr"></div>
                  <div class="box1">
                    <div class=" box1_one" id="SC1-1" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC1-1<br><input type="checkbox" value="SC1-1" name="southRoom"></div>
                    <div class=" box1_one" id="SC1-2" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC1-2<br><input type="checkbox" value="SC1-2" name="southRoom"></div>
                    <div class=" box1_two" ></div>
                    <div class=" box1_three" id="SC1-3" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC1-3<br><input type="checkbox" value="SC1-3" name="southRoom"></div>
                    <div class=" box1_three" id="SC1-4" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC1-4<br><input type="checkbox" value="SC1-4" name="southRoom"></div>
                  </div>
                  <div class="box2">
                    <div class="box2_left">
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB1-1" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-1<br><input type="checkbox" value="SB1-1" name="southRoom"></div>
                          <div class=" box2_one" id="SB1-3" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-3<br><input type="checkbox" value="SB1-3" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB1-5" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-5<br><input type="checkbox" value="SB1-5" name="southRoom"></div>
                          <div class=" box2_five" id="SB1-7" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-7<br><input type="checkbox" value="SB1-7" name="southRoom"></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB1-2" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-2<br><input type="checkbox" value="SB1-2" name="southRoom"></div>
                          <div class=" box2_one" id="SB1-4" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-4<br><input type="checkbox" value="SB1-4" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB1-6" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-6<br><input type="checkbox" value="SB1-6" name="southRoom"></div>
                          <div class=" box2_five" id="SB1-8" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB1-8<br><input type="checkbox" value="SB1-8" name="southRoom"></div>
                        </div>
                      </div>
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB4-1" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-1<br><input type="checkbox" value="SB4-1" name="southRoom"></div>
                          <div class=" box2_one" id="SB4-3" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-3<br><input type="checkbox" value="SB4-3" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB4-5" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-5<br><input type="checkbox" value="SB4-5" name="southRoom"></div>
                          <div class=" box2_five" id="SB4-7" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-7<br><input type="checkbox" value="SB4-7" name="southRoom"></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB4-2" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-2<br><input type="checkbox" value="SB4-2" name="southRoom"></div>
                          <div class=" box2_one" id="SB4-4" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-4<br><input type="checkbox" value="SB4-4" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB4-6" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-6<br><input type="checkbox" value="SB4-6" name="southRoom"></div>
                          <div class=" box2_five" id="SB4-8" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB4-8<br><input type="checkbox" value="SB4-8" name="southRoom"></div>
                        </div>
                      </div>
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB2-1" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-1<br><input type="checkbox" value="SB2-1" name="southRoom"></div>
                          <div class=" box2_one" id="SB2-3" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-3<br><input type="checkbox" value="SB2-3" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB2-5" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-5<br><input type="checkbox" value="SB2-5" name="southRoom"></div>
                          <div class=" box2_five" id="SB2-7" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-7<br><input type="checkbox" value="SB2-7" name="southRoom"></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB2-2" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-2<br><input type="checkbox" value="SB2-2" name="southRoom"></div>
                          <div class=" box2_one" id="SB2-4" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-4<br><input type="checkbox" value="SB2-4" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB2-6" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-6<br><input type="checkbox" value="SB2-6" name="southRoom"></div>
                          <div class=" box2_five" id="SB2-8" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB2-8<br><input type="checkbox" value="SB2-8" name="southRoom"></div>
                        </div>
                      </div>
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB5-1" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-1<br><input type="checkbox" value="SB5-1" name="southRoom"></div>
                          <div class=" box2_one" id="SB5-3" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-3<br><input type="checkbox" value="SB5-3" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB5-5" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-5<br><input type="checkbox" value="SB5-5" name="southRoom"></div>
                          <div class=" box2_five" id="SB5-7" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-7<br><input type="checkbox" value="SB5-7" name="southRoom"></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB5-2" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-2<br><input type="checkbox" value="SB5-2" name="southRoom"></div>
                          <div class=" box2_one" id="SB5-4" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-4<br><input type="checkbox" value="SB5-4" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB5-6" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-6<br><input type="checkbox" value="SB5-6" name="southRoom"></div>
                          <div class=" box2_five" id="SB5-8" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB5-8<br><input type="checkbox" value="SB5-8" name="southRoom"></div>
                        </div>
                      </div>
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB3-1" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-1<br><input type="checkbox" value="SB3-1" name="southRoom"></div>
                          <div class=" box2_one" id="SB3-3" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-3<br><input type="checkbox" value="SB3-3" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB3-5" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-5<br><input type="checkbox" value="SB3-5" name="southRoom"></div>
                          <div class=" box2_five" id="SB3-7" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-7<br><input type="checkbox" value="SB3-7" name="southRoom"></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB3-2" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-2<br><input type="checkbox" value="SB3-2" name="southRoom"></div>
                          <div class=" box2_one" id="SB3-4" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-4<br><input type="checkbox" value="SB3-4" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB3-6" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-6<br><input type="checkbox" value="SB3-6" name="southRoom"></div>
                          <div class=" box2_five" id="SB3-8" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB3-8<br><input type="checkbox" value="SB3-8" name="southRoom"></div>
                        </div>
                      </div>
                      <div class="left_box">
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB6-1" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-1<br><input type="checkbox" value="SB6-1" name="southRoom"></div>
                          <div class=" box2_one" id="SB6-3" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-3<br><input type="checkbox" value="SB6-3" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB6-5" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-5<br><input type="checkbox" value="SB6-5" name="southRoom"></div>
                          <div class=" box2_five" id="SB6-7" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-7<br><input type="checkbox" value="SB6-7" name="southRoom"></div>
                        </div>
                        <div class="left_inbox1">
                          <div class=" box2_one" id="SB6-2" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-2<br><input type="checkbox" value="SB6-2" name="southRoom"></div>
                          <div class=" box2_one" id="SB6-4" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-4<br><input type="checkbox" value="SB6-4" name="southRoom"></div>
                        </div>
                        <div class="left_inbox2">
                          <div class=" box2_two" id="SB6-6" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-6<br><input type="checkbox" value="SB6-6" name="southRoom"></div>
                          <div class=" box2_five" id="SB6-8" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SB6-8<br><input type="checkbox" value="SB6-8" name="southRoom"></div>
                        </div>
                      </div>
                    </div>
                    <div class="box2_right">
                      <div class=" box2_right_left1">
                        <div class="right_box1">
                          <div class=" box2_three" id="SA1-1" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-1<br><input type="checkbox" value="SA1-1" name="test" value="SA1-1"></div>
                          <div class=" box2_three" id="SA1-3" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-3<br><input type="checkbox" value="SA1-3" name="southRoom"></div>
                          <div class=" box2_three" id="SA1-5" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-5<br><input type="checkbox" value="SA1-5" name="southRoom"></div>
                          <div class=" box2_three" id="SA1-7" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-7<br><input type="checkbox" value="SA1-7" name="southRoom"></div>
                        </div>
                        <div class="right_box1">
                          <div class=" box2_three" id="SA1-2" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-2<br><input type="checkbox" value="SA1-2" name="southRoom"></div>
                          <div class=" box2_three" id="SA1-4" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-4<br><input type="checkbox" value="SA1-4" name="southRoom"></div>
                          <div class=" box2_three" id="SA1-6" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-6<br><input type="checkbox" value="SA1-6" name="southRoom"></div>
                          <div class=" box2_three" id="SA1-8" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-8<br><input type="checkbox" value="SA1-8" name="southRoom"></div>
                        </div>
                      </div>
                      <div class="box2_right_right1">
                        <div class="right_box1">
                          <div class=" box2_three" id="SA2-1" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-1<br><input type="checkbox" value="SA2-1" name="southRoom"></div>
                          <div class=" box2_three" id="SA2-3" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-3<br><input type="checkbox" value="SA2-3" name="southRoom"></div>
                          <div class=" box2_three" id="SA2-5" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-5<br><input type="checkbox" value="SA2-5" name="southRoom"></div>
                          <div class=" box2_three" id="SA2-7" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-7<br><input type="checkbox" value="SA2-7" name="southRoom"></div>
                        </div>
                        <div class="right_box1">
                          <div class=" box2_three" id="SA2-2" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-2<br><input type="checkbox" value="SA2-2" name="southRoom"></div>
                          <div class=" box2_three" id="SA2-4" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-4<br><input type="checkbox" value="SA2-4" name="southRoom"></div>
                          <div class=" box2_three" id="SA2-6" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-6<br><input type="checkbox" value="SA2-6" name="southRoom"></div>
                          <div class=" box2_three" id="SA2-8" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-8<br><input type="checkbox" value="SA2-8" name="southRoom"></div>
                        </div>
                      </div>
                      <div class="box2_right_left2">
                        <div class="right_box2">
                          <div class=" box2_four" id="SA1-9" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-9<br><input type="checkbox" value="SA1-9" name="southRoom"></div>
                          <div class=" box2_four" id="SA1-11" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-11<br><input type="checkbox" value="SA1-11" name="southRoom"></div>
                          <div class=" box2_four" id="SA1-13" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-13<br><input type="checkbox" value="SA1-13" name="southRoom"></div>
                        </div>
                        <div class="right_box2">
                          <div class=" box2_four" id="SA1-10" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-10<br><input type="checkbox" value="SA1-10" name="southRoom"></div>
                          <div class=" box2_four" id="SA1-12" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-12<br><input type="checkbox" value="SA1-12" name="southRoom"></div>
                          <div class=" box2_four" id="SA1-14" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA1-14<br><input type="checkbox" value="SA1-14" name="southRoom"></div>
                        </div>
                      </div>
                      <div class="box2_right_right2">
                        <div class="right_box2">
                          <div class=" box2_four" id="SA2-9" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-9<br><input type="checkbox" value="SA2-9" name="southRoom"></div>
                          <div class=" box2_four" id="SA2-11" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-11<br><input type="checkbox" value="SA2-11" name="southRoom"></div>
                          <div class=" box2_four" id="SA2-13" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-13<br><input type="checkbox" value="SA2-13" name="southRoom"></div>
                        </div>
                        <div class="right_box2">
                          <div class=" box2_four" id="SA2-10" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-10<br><input type="checkbox" value="SA2-10" name="southRoom"></div>
                          <div class=" box2_four" id="SA2-12" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-12<br><input type="checkbox" value="SA2-12" name="southRoom"></div>
                          <div class=" box2_four" id="SA2-14" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SA2-14<br><input type="checkbox" value="SA2-14" name="southRoom"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box3">
                    <div class=" box3_one" id="SC2-1" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC2-1<br><input type="checkbox" value="SC2-1" name="southRoom"></div>
                    <div class=" box3_one" id="SC2-2" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC2-2<br><input type="checkbox" value="SC2-2" name="southRoom"></div>
                    <div class=" box3_one" id="SC2-3" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC2-3<br><input type="checkbox" value="SC2-3" name="southRoom"></div>
                    <div class=" box3_one" id="SC2-4" title="状态：开放/锁定/占用/已预约(本人)；时间：8-15">SC2-4<br><input type="checkbox" value="SC2-4" name="southRoom"></div>
                  </div>
                  </form>
                  <div class="clr"></div>
                  <div id="applyform">
                  <form class="sqbg" id="sqbg" action="/hzaulab/index.php/Home/Room/doApplication" method=post>
                    <div class="down">
                      <div class="row">
                        <div class="le"><span class="hint">使用者姓名：</span><input class="input" id="syz" type="text" name="syz" placeholder="//自动">    </div>
                        <div class="ri"><span class="hint">联系方式：</span><input class="input" id="lxfs1" type="text" name="lxfs1" placeholder="//必填"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">导师姓名： </span><input class="input" id="dsxm" type="text" name="dsxm" placeholder="//自动">   </div>
                        <div class="ri"><span class="hint">联系方式： </span><input class="input" id="lxfs2" type="text" name="lxfs2" placeholder="//自动"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">设施名称： </span><input class="input" id="ssmc" type="text" name="ssmc" placeholder="//自动">   </div>
                        <div class="ri"><span class="hint">设施位置：</span><input class="input" id="sswz" type="text" name="sswz" placeholder="//自动"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">设施编号：</span><input class="input" id="ssbh" type="text" name="ssbh" placeholder="//自动">   </div>
                        <div class="ri"><span class="hint">研究项目：</span><input  class="input" id="yjxm" type="text" name="yjxm" placeholder="//必填"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">预约时间： </span><input class="input" id="kssj" type="date" name="kssj" placeholder="//必填">   </div>
                        <div class="ri"><span class="hint">终止时间：</span><input class="input" id="zzsj" type="date" name="zzsj" placeholder="//必填"></div>
                      </div>
                      <div class="row">
                        <div class="le"><span class="hint">样品物种：</span><input class="input" id="ypwz" type="text" name="ypwz" placeholder="//必填">   </div>
                        <div class="ri"><span class="hint">备注: </span><input class="input" id="bz" type="text" name="bz" placeholder="//选"></div>
                      </div><br>
                      <div class="row">
                        <a href=""><button type="button" onclick="fun1()">保存</button></a>
                        <a href=""><button type="submit" >提交</button></a>
                        <a href=""><button type="button" onclick="fun2()">导出Word</button></a>
                      </div>
                    </div>
                  </form>
              </div>
              <div class="plat_comment">
                <?php echo ($zhushi["thecontent"]); ?>
              </div>s
            </div>
          </div>
          <div class="clr"></div>
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
      CopyRight©2017  华中农业大学作物学实验教学中心 <a href="/hzaulab/index.php/Admin/">管理</a>
    </p>
  </div>
</div>
  </div>
</div>
</div>
  <script type="text/javascript" src="/hzaulab/Public/face/js/public.js"></script>
  <script type="text/javascript" src="/hzaulab/Public/face/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="/hzaulab/Public/face/js/custom.js"></script>
  <script type="text/javascript" src="/hzaulab/Public/face/js/apply.js"></script>
  <script type="text/javascript">
    var data = <?php echo json_encode($data); ?>;
    console.log(data);
    for (value in data) {
        var openPot = document.getElementById(data[value]['id']);
        // console.log(value);
        // console.log(openPot.className);
        // console.log(data[value]['id']);
      if (data[value]['status'] == 3) {
        // 当状态为2时候，表示已经被预约，不可进行预约
        openPot.className = openPot.className + ' '+'_orange' ;
        openPot.title = "状态：已预约(本人)；时间：8-15";
        // console.log(openPot.title);
      } else if (data[value]['status'] == 2) {
          //当状态为3的时候，表示已经被占用，不可进行预约
          openPot.className = openPot.className + ' '+'_red' ;
          openPot.title = "状态：占用；时间：8-15";
      } else if (data[value]['status'] == 1) {
          // 当状态为1的时候，表示已经被锁定，不可进行预约
          openPot.className = openPot.className + ' '+'_grey' ;
          openPot.title = "状态：锁定；时间：8-15";
      }
    }
  </script>

  <script type="text/javascript">
    // 进行时间格式的转化
    Date.prototype.Format = function (fmt) {
        var o = {
            "M+": this.getMonth() + 1, //月份 
            "d+": this.getDate(), //日 
            "H+": this.getHours(), //小时 
            "m+": this.getMinutes(), //分 
            "s+": this.getSeconds(), //秒 
            "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
            "S": this.getMilliseconds() //毫秒 
        };
        if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
        for (var k in o)
        if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
        return fmt;
    }

    // 计算两者之间的时间差
    function GetDateDiff(startTime, endTime, diffType) {
        //将xxxx-xx-xx的时间格式，转换为 xxxx/xx/xx的格式 
        startTime = startTime.replace(/\-/g, "/");
        endTime = endTime.replace(/\-/g, "/");

        //将计算间隔类性字符转换为小写
        diffType = diffType.toLowerCase();
        var sTime = new Date(startTime);      //开始时间
        var eTime = new Date(endTime);  //结束时间
        //作为除数的数字
        var divNum = 1;
        switch (diffType) {
            case "second":
                divNum = 1000;
                break;
            case "minute":
                divNum = 1000 * 60;
                break;
            case "hour":
                divNum = 1000 * 3600;
                break;
            case "day":
                divNum = 1000 * 3600 * 24;
                break;
            default:
                break;
        }
        return parseInt((eTime.getTime() - sTime.getTime()) / parseInt(divNum));
    }

// var testDate = new Date();
// var testStr = testDate.format("yyyy-MM-dd hh:mm:ss");

// var result = GetDateDiff("2010-02-26 16:00:00", testStr, "day");
// document.write("两者时间差为：" + result + "天了。");

    //  获取选择的项目 
    function fun(){
        obj = document.getElementsByName("southRoom");
        console.log(obj);
        check_val = [];
        for(k in obj){
            if(obj[k].checked)
                check_val.push(obj[k].value);
            console.log(obj[k].value);
        }
        document.getElementById('sswz').value = "山南";
        document.getElementById('ssmc').value = "温室群";
        document.getElementById('ssbh').value = check_val;
        document.getElementById('syz').value = "theUser";
        document.getElementById('kssj').value = new Date().Format("yyyy-MM-dd");
    }

    // 预约条件的判断
    function fun1() {
      var startTime = document.getElementById('kssj').value;
      var endTime = document.getElementById('zzsj').value;
      var enterStartTime = new Date(startTime);
      var enterEndTime = new Date(endTime);

      if (document.getElementById('ssbh').value == "") {
        alert("请选择要预约的设备");
      }

      if (document.getElementById('ypwz') == "" || document.getElementById('lxfs1') == "" || document.getElementById('yjxm') == "") {
        alert("请填写完整的信息后提交");
      }

      if (startTime == "") {
        alert("请填写预约开始时间");
      } 
      if (endTime == "") {
        alert("请填写预约结束时间");
      }
      if (enterStartTime > enterEndTime) {
        alert("预约规则错误！");
      } else if (GetDateDiff(startTime, endTime, "day") == 0) {
        alert("预约的单位为一天");
      }
    }

    // 生成相关的word文档
    function fun2() {
      console.log(23);
      var content = document.getElementById('sqbg');
      var hint = content.getElementsByClassName('hint');
      var input = content.getElementsByClassName('input');
      var data = new Array() ;
      for (var i = 0; i < hint.length; i++) {
        var field = new Array();
        field.push(hint[i].innerHTML);
        field.push(input[i].value);
        data.push(field);
      }
      data = JSON.stringify(data);
      console.log(data);
      // alert(data);
      $.ajax({  
        type: "POST",  
        url: "/hzaulab/index.php/Home/Room/doWord", //orderModifyStatus  
        data: {
          "hahaha": data,
        }, 
        dataType:"json",  
        async:false,  
        cache:false,  
        success: function(data){  
            // alert("文本生成成功！");
            alert("预约申请表生成成功！");
        },  
        error: function(json){  
            alert("订单取消异常，请刷新后重试...");  
        }  
    });
  }
  </script>

</body>
</html>