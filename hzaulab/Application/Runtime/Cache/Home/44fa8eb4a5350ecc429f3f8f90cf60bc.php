<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> -->
 	<title>华中农业大学作物学实验教学中心</title>
 	<link type="text/css" rel="stylesheet" href='http://fonts.googleapis.com/css?family=Ubuntu:300italic,300,700' />
  <link rel="shortcut icon" href="/hzaulab/logo.ico" type="image/x-icon" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/home_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/show_public.css" />
  <link rel="stylesheet" href="/hzaulab/Public/face/css/equipment_pit.css" />
  <link rel="stylesheet" type="text/css" href="/hzaulab/Public/Css/bootstrap.css">
  
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
          <h3>仪器设备</h3>
          <ul class="ultop">
            <li><a href="/hzaulab/index.php/Home/Equipment/equipment_show1" style="border-left: 3px solid orange;">仪器设备</a></li>
          </ul>
        </section>
      </div>
      <div id="main_right">
        <nav class="top_nav"><a href="/hzaulab/index.php/home/Index/index.html">首页</a> · <a href="#">仪器设备</a> · <a href="#">仪器设备</a> </nav>
        <header class="main_title"><h2>仪器设备</h2></header>
        <section class="article">
          <div>
            <form id="eqt_search" action="" method="post">
              <br>
              <input class="search" name="search" type="text"><input class="search_button" value="" type="submit">
              <br><br>
              <div class="radio_box">
                <input name="condition" value="1" checked="true" type="radio"> 所有　
                <input name="condition" value="2" type="radio"> 设备名称　
                <input name="condition" value="3" type="radio"> 设备编号　
              </div>
            </form>
          </div><br>
<!--           <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pitbox">
              <h4><a href="/hzaulab/index.php/Home/Equipment/equipment_show1_eqt/id/<?php echo ($vo["id"]); ?>" ><?php echo ($vo["ecname"]); ?></a></h4>
              <div class="pitexplan">
                <a href="/hzaulab/index.php/Home/Equipment/equipment_show1_eqt" ><img src="/hzaulab/Public/face/images/eqt/4.jpg" alt=""></a>
                <div class="explan">
                  <p>编  号: <?php echo ($vo["eid"]); ?></p>
                  <p>地  点：<?php echo ($vo["elocation"]); ?></p>
                  <p>价  值: <?php echo ($vo["eprice"]); ?></p>
                  <p>生产商: <?php echo ($vo["ecmanufactor"]); ?></p>
                  <p>型  号：<?php echo ($vo["etype"]); ?></p>
                  <p>状  态：<?php echo ($vo["now"]); ?></p>
                </div>
              </div>
              <div class="pitbottom">bottom</div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?> -->

          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pitbox">
              <h4><a href="/hzaulab/index.php/Home/Equipment/equipment_show1_eqt/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["ecname"]); ?></a></h4>
              <div id="pitexplan">
                <img src="/hzaulab/Public/face/images/eqt/4.jpg" alt="无图片" />
                <div class="explan">
                    <span class="titl">设备编号：</span><span class="con"><?php echo ($vo["eid"]); ?></span><br />
                    <span class="titl">存放地点：</span><span class="con"><?php echo ($vo["elocation"]); ?> </span><br />
                    <span class="titl">所属单位：</span><span class="con"><?php echo ($vo["eblong"]); ?> </span><br />
                    <span class="titl">状　　态：</span><span class="con"><?php echo ($vo["now"]); ?> </span><br /><br>
                    <span class="titl"></span><span class="con"><?php echo ($vo["introduction"]); ?> </span><br />
                </div>
              </div>
              <span class="pitbottom"></span>
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

</body>
</html>