<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>华中农业大学作物学实验教学中心</title>
  <link type="text/css" rel="stylesheet" href='http://fonts.googleapis.com/css?family=Ubuntu:300italic,300,700' />
  <link rel="shortcut icon" href="/hzaueqt3/hzaueqt3/logo.ico" type="image/x-icon" />
  <link rel="stylesheet" href="/hzaueqt3/hzaueqt3/Public/face/css/home_public.css" />
  <link rel="stylesheet" href="/hzaueqt3/hzaueqt3/Public/face/css/show_public.css" />
  <script type="text/javascript" src="/hzaueqt3/hzaueqt3/Public/public/js/jquery-1.8.3.min.js"></script>
</head>
<body>
<div id="wrapper">
  
  <!--************************************************************** header **************************************************************-->
  <div id="header"> 
    <div class="container">
  <div id="header_left">
    <!-- <a href="/hzaueqt3/hzaueqt3/index.php/home/Index/index.html"><h1>华中农业大学作物学实验教学中心</h1></a>
    <p>     Teaching Center of Crop Science Experiment</p> -->
  </div>
  <div id="header_right">
      <div id="login">
          <?php if(($_SESSION['username']) == ""): ?><!-- <p><p><a href="#">访问旧版</a> | </p> -->
            <p><a href="#" class="logBut">学生登录</a> | <a href="#" class="logBut">教师登录</a> | <a href="#" class="reg_link">注册</a></p><br/>
            <!-- 判断登陆后        显示下面这行代码 -->
          <?php else: ?>
            <p><a href="#">访问旧版</a> | <?php echo (session('username')); ?>你好！ | <a href="/hzaueqt3/hzaueqt3/index.php/Home/User/loginout">退出</a></p><br/><?php endif; ?>
      </div>
      <form action="/hzaueqt3/hzaueqt3/index.php/Home/Search/glo_search" method="post" id="sitesearch">
        <input type="text" value="" name="find" placeholder="全文搜索" class="search_input"  />
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
            <input type="checkbox" />
            下次自动登录
             &nbsp&nbsp|&nbsp&nbsp
            <a class="reg_link" href="#">注册</a>
        </div>
        <div class="row">
           <!-- <a href="javascript:login()" class="okbtn">登陆</a> -->
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
//             window.location.href="/hzaueqt3/hzaueqt3/index.php/Home/Index/index";
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
	        <li class="navOne_class"><a class="active" href="/hzaueqt3/hzaueqt3/index.php/Home/Index/index">首&ensp;页</a></li>
	        <li class="navOne_class"><a href="/hzaueqt3/hzaueqt3/index.php/Home/About/about_show1">中心概况</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/About/about_show1">中心简介</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/About/about_show2">机构设置</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/About/about_show3">团队建设</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/About/about_show4">管理模式</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/About/about_show5">年度报告</a></li>
	            </ul>
	        </li>	
	       <li class="navOne_class"> <a href="/hzaueqt3/hzaueqt3/index.php/Home/Equipment/equipment_show1">设施设备</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Equipment/equipment_show1">大田设施</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Equipment/equipment_show2">培养室</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Equipment/equipment_show3">实验室</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Equipment/equipment_show4">仪器设备</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show1">实验教学</a>
	       		<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show1">教学动态</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show2">教学体系</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show3">课程安排</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show4">在授课程</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Creation/creation_show1">教改创新</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Creation/creation_show1">教改项目</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Creation/creation_show2">教改成果</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Creation/creation_show3">创新实验项目</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Creation/creation_show4">学生创新项目</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Creation/creation_show5">学生创新成果</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Laboratory/laboratory_show1">开放实验室</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Laboratory/laboratory_show1">申报说明</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Laboratory/laboratory_show2">运行项目</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Laboratory/laboratory_show3">项目申请</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Laboratory/laboratory_show4">项目成果</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Fictitious/fictitious_show1">规章制度</a>
	        	<ul class="nav_left">
	            	<li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Fictitious/fictitious_show1">部委文件</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Fictitious/fictitious_show2">学校文件</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Fictitious/fictitious_show3">学院文件</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Fictitious/fictitious_show4">中心文件</a></li>
	            </ul>
	        </li>
	        <li class="navOne_class"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Share/share_show1">共享互动</a>
	        	<ul class="nav_right">
	            	<li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Share/share_show1">课程互动</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Share/share_show2">综合互动</a></li>
	                <li class="secnav"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Share/share_show3">资源共享</a></li>
	            </ul>
	        </li>
        </ul>
    </div>
</div>

  </div>
  
   <!--**************************************************************  main **************************************************************-->
  <div id="main">
    <div class="container">
      <div id="blank"></div>
      <div id="main_nav">
        <section>
          <h3>实验教学</h3>
          <ul class="ultop">
            <li><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show1">教学动态</a></li>
            <li><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show2">教学体系</a></li>
            <li><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show3">课程安排</a></li>
            <li><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show4" style="border-left: 3px solid orange;">在授课程</a></li>
          </ul>
        </section>
      </div>
      <div id="main_right">
        <nav class="top_nav"><a href="/hzaueqt3/hzaueqt3/index.php/home/Index/index.html">首页</a> · <a href="#">实验教学</a> · <a href="#">在授课程</a></nav>
        <header class="main_title"><h2>在授课程</h2></header>
        <section class="main_list">
            <!-- <div class="list_title_two">试验区课表</div> -->
            <div class="list_con_two">
              <?php if(is_array($shiyanqu)): $i = 0; $__LIST__ = $shiyanqu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="list_con_title"><?php echo ($vo["t_name"]); ?></div>
                  <?php if(is_array($vo['allCourses'])): $i = 0; $__LIST__ = $vo['allCourses'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i; if ($items['t_status'] == 0) { } else { ?>
                    <a href="/hzaueqt3/hzaueqt3/index.php/Home/Course/course_show1/id/<?php echo ($items["id"]); ?>"><?php echo ($items["c_name"]); ?></a>
                    <?php } endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <!-- <div class="list_title_two">课程课表</div> -->
            <div class="list_con_two">
              <?php if(is_array($kechengkebiao)): $i = 0; $__LIST__ = $kechengkebiao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><div class="list_con_title"><?php echo ($items["t_name"]); ?></div>
                  <?php if(is_array($vo['allCourses'])): $i = 0; $__LIST__ = $vo['allCourses'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><a href="/hzaueqt3/hzaueqt3/index.php/Home/Course/course_show1/id/<?php echo ($items["id"]); ?>"><?php echo ($items["c_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
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
      CopyRight©2017  华中农业大学作物学实验教学中心 <a href="/hzaueqt3/hzaueqt3/index.php/Admin/About/about_show1.html">管理</a>
    </p>
  </div>
</div>
  </div>
</div>
  <script type="text/javascript" src="/hzaueqt3/hzaueqt3/Public/face/js/jquery_homepage.js"></script>
</body>
</html>