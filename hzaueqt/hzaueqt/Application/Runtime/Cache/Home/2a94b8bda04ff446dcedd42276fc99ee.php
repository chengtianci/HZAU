<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> -->
 	<title>华中农业大学作物学实验教学中心</title>
 	<link type="text/css" rel="stylesheet" href='http://fonts.googleapis.com/css?family=Ubuntu:300italic,300,700' />
  <link rel="shortcut icon" href="/hzaueqt3/hzaueqt3/logo.ico" type="image/x-icon" />
  <link rel="stylesheet" href="/hzaueqt3/hzaueqt3/Public/face/css/home_public.css" />
 	<link rel="stylesheet" href="/hzaueqt3/hzaueqt3/Public/face/css/index.css"  />
  <script type="text/javascript" src="/hzaueqt3/hzaueqt3/Public/public/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="/hzaueqt3/hzaueqt3/Public/face/js/AC_RunActiveContent.js"></script><!--js特效的播放器插件检测-->
</head>
<body>
<div id="wrapper">
<div id="bdy">
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
  
  <!--**************************************************************main-one**************************************************************-->
  <div id="main-one">
    <div class="container">
      <!--***************左侧***************-->
      <div id="featured_slide">
        <ul>
          <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/hzaueqt3/hzaueqt3/Uploads/<?php echo ($vo["imgadd"]); ?>" alt="" />
              <div class="panel-overlay">
                <h2><?php echo ($vo["imgname"]); ?></h2>
                <p><?php echo ($vo["imgintro"]); ?> <a href="/hzaueqt3/hzaueqt3/index.php/home/index/pictureshow/id/<?php echo ($vo["id"]); ?>">更多 &raquo;</a></p>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
       <!--***************右侧***************-->
      <div id="main-one-right">
      <?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="welcome">
          <div class="welcome_pit"><img class="imgl" src="/hzaueqt3/hzaueqt3/Uploads/<?php echo ($vo["imgadd"]); ?>" alt="" /></div>
          <div class="welcome_main">
            <div class="title_box">
              <h2 class="title">欢迎关注</h2><i>WELCOME</i>
            </div>
            <p><?php echo ($vo["imgintro"]); ?></p>
            <span><a href="/hzaueqt3/hzaueqt3/index.php/Home/About/about_show1">更多&raquo;</a></span>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <div id="main_notice">
          <div class="title_box">
            <h2 class="title">通知公告</h2><i>NOTICE</i><a href="/hzaueqt3/hzaueqt3/index.php/Home/index/notice"><b>MORE</b></a>
          </div>
          <ul>
            <?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/hzaueqt3/hzaueqt3/index.php/home/index/itemsInfor/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["inforname"]); ?><span>&raquo;</span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div>     
    </div>
  </div>

  <!--**************************************************************main-two**************************************************************-->
  <div id="main-two">
    <div class="container">
      <!--***************中心动态***************-->
      <div id="latestnews">
        <div class="title_box">
          <h2 class="title">中心动态</h2><i>NEWS</i><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show1"><b>MORE</b></a>
        </div>
        <ul>
          <?php if(is_array($data6)): $i = 0; $__LIST__ = array_slice($data6,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
              <p ><strong><?php echo ($vo["r_name"]); ?></strong></p>
              <div class="center_text"><?php echo ($vo["r_content"]); ?></p></div>
              <p class="readmore"><a href="/hzaueqt3/hzaueqt3/index.php/Home/Education/education_show1_article/id/<?php echo ($vo["id"]); ?>">浏览全文 &raquo;</a></p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <!--***************快速导航***************-->
      <div id="quicklinks">
        <div class="title_box">
          <h2 class="title">快速导航</h2><i>NAVIGATION</i>
        </div>
        <ul>
          <li>
            <p><a href="#">查询预约 <img src="/hzaueqt3/hzaueqt3/Public/face/images/NAVIGATION1.jpg" alt="" /></a></p>
          </li>
           <li class="last">
            <p><a href="/hzaueqt3/hzaueqt3/index.php/Home/Other/other_show3">下载专区 <img src="/hzaueqt3/hzaueqt3/Public/face/images/NAVIGATION4.png" alt="" /></a></p>
          </li>
        <!--   <li>
            <p><a href="#">在线测评 <img src="/hzaueqt3/hzaueqt3/Public/face/images/NAVIGATION2.jpg" alt="" /></a></p>
          </li> -->
          <li>
            <p><a href="#">文档提交 <img src="/hzaueqt3/hzaueqt3/Public/face/images/NAVIGATION3.png" alt="" /></a></p>
          </li>
         
        </ul>
      </div>
      <!--***************右侧专栏***************-->
      <div id="column">
        <div id="course">
          <div class="title_box" style="margin:0 0 -10px 0;">
            <h2 class="title">精品课程</h2><i>COURSE</i><a href="/hzaueqt3/hzaueqt3/index.php/home/index/showInfor"><b>MORE</b></a>
          </div>
          <!-- Begin Flash Here - This is the correct method for W3C validation -->
         <!-- <script type="text/javascript">AC_FL_RunContent( 'type','application/x-shockwave-flash','data','http://player.youku.com/player.php/sid/XMTgwOTEwNTgzMg==/v.swf','width','300','height','250','movie','http://player.youku.com/player.php/sid/XMTgwOTEwNTgzMg==/v.swf','wmode','opaque','quality','high','bgcolor','#E9E9E9','allowfullscreen','false','allowscriptaccess','never' ); //end AC code</script>
          <noscript>
            <object type="application/x-shockwave-flash" data="http://player.youku.com/player.php/sid/XMTgwOTEwNTgzMg==/v.swf" width="300" height="250">
              <param name="movie" value=    "http://player.youku.com/player.php/sid/XMTgwOTEwNTgzMg==/v.swf"  />
              <param name="wmode" value="opaque" />
              <param name="quality" value="high" />
              <param name="bgcolor" value="#E9E9E9" />
              <param name="allowfullscreen" value="false" />
              <param name="allowscriptaccess" value="never" />
            </object>
          </noscript>-->
          <!-- End Flash Here -->
      <!--     <ul class="course_ul">
            <li><a href="#">&raquo; 计算机科学与技术<i>刘健晓</i></a></li>
            <li><a href="#">&raquo; C语言程序设计<i>刘健晓</i></a></li>
            <li><a href="#">&raquo; 计算机网络技术<i>刘健晓</i></a></li>
            
          </ul> -->
           <p><strong>作物栽培学</strong> （国家级）</p>
          <p class="course_text">作物栽培学是研究作物生长发育和产量、品质形成规律及其与环境条件的关系，探索通过轮作复种、栽培管理、生长调控、优化决策等途径，实现作物高产、优质、高效及其可持续发展的理论、方法与技术的科学。</p>
          <p class="readmore"><a href="#">现在学习 &raquo;</a></p>
          <p><strong>作物栽培学</strong> （国家级）</p>
          <p class="course_text">作物栽培学是研究作物生长发育和产量、品质形成规律及其与环境条件的关系，探索通过轮作复种、栽培管理、生长调控、优化决策等途径，实现作物高产、优质、高效及其可持续发展的理论、方法与技术的科学。</p>
          <p class="readmore"><a href="#">现在学习 &raquo;</a></p>
           <p><strong>作物栽培学</strong> （国家级）</p>
          <p class="course_text">作物栽培学是研究作物生长发育和产量、品质形成规律及其与环境条件的关系，探索通过轮作复种、栽培管理、生长调控、优化决策等途径，实现作物高产、优质、高效及其可持续发展的理论、方法与技术的科学。</p>
          <p class="readmore"><a href="#">现在学习 &raquo;</a></p>
        </div>
        <div id="resources">
          <div class="title_box">
            <h2 class="title">教学资源</h2><i>RESOURCES</i>
          </div>
          <ul>
            <?php if(is_array($jiaoxueziyuan)): $i = 0; $__LIST__ = $jiaoxueziyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i; $length = strrpos($items['imgname'],','); $name = substr($items['imgname'],0,$length); $type = substr($items['imgname'],$length+1); ?>
              <li><img src="/hzaueqt3/hzaueqt3/Uploads/<?php echo ($items["imgadd"]); ?>" alt="image" />
                <div class="fl_left">
                  <p><strong><?php echo ($name); ?></strong></p>
                  <p><?php echo ($type); ?></p>
                  <p><a href="<?php echo ($items["imgintro"]); ?>">了解更多 &raquo;</a></p>
                </div>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
<!--             <li><img src="/hzaueqt3/hzaueqt3/Public/face/images/12.jpg" alt="" />
              <div class="fl_left">
                <p><strong>气象万千</strong></p>
                <p>气象学 / 生态学</p>
                <p><a href="#">了解更多 &raquo;</a></p>
              </div>
            </li>
            <li><img src="/hzaueqt3/hzaueqt3/Public/face/images/13.jpg" alt="" />
              <div class="fl_left">
                <p><strong>气象万千</strong></p>
                <p>气象学 / 生态学</p>
                <p><a href="#">了解更多 &raquo;</a></p>
              </div>
            </li>
            <li><img src="/hzaueqt3/hzaueqt3/Public/face/images/13.jpg" alt="" />
              <div class="fl_left">
                <p><strong>气象万千</strong></p>
                <p>气象学 / 生态学</p>
                <p><a href="#">了解更多 &raquo;</a></p>
              </div>
            </li> -->
             <!--  <li><img src="/hzaueqt3/hzaueqt3/Public/face/images/13.jpg" alt="" />
                <div class="fl_left">
                  <p><strong>气象万千</strong></p>
                  <p>气象学 / 生态学</p>
                  <p><a href="#">了解更多 &raquo;</a></p>
                </div>
              </li> -->
          </ul>
        </div>
      </div>      <!--***************成果展示,美图赏析***************-->
      <div id="show">
          <ul>
            <li>
              <div class="title_box">
                <h2 class="title">成果展示</h2><i>ACHIEVEMENT</i><a href="/hzaueqt3/hzaueqt3/index.php/Home/Other/other_show2"><b>MORE</b></a>
              </div>
              <img src="/hzaueqt3/hzaueqt3/Uploads/<?php echo ($chengguozhanshi["imgadd"]); ?>" alt="image" />
              <p class="show_text">Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa.</p>
            
            </li>
            <li class="link_last">
              <div class="title_box">
                <h2 class="title">美图欣赏</h2><i>PICTURE</i><a href="/hzaueqt3/hzaueqt3/index.php/Home/Other/other_show4"><b>MORE</b></a>
              </div>
              <img src="/hzaueqt3/hzaueqt3/Uploads/<?php echo ($meituxinshang["imgadd"]); ?>" alt="image" />
              <p class="show_text">Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa.</p>
           
            </li>
          </ul>
      </div>
      <!--***************校内链接,校际链接***************-->
      <div id="link">
        <ul class="clear">
          <li>
            <div class="title_box">
              <h2 class="title">校内链接</h2><i>CAMPUS LINKS</i>
            </div>
            <ul>
              <?php if(is_array($data3)): $i = 0; $__LIST__ = array_slice($data3,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["linkadd"]); ?>">&raquo; <?php echo ($vo["linkname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </li>
          <li class="link_last">
            <div class="title_box">
              <h2 class="title">校际链接</h2><i>EXTERNAL LINKS</i>
            </div>
            <ul>
              <?php if(is_array($data4)): $i = 0; $__LIST__ = array_slice($data4,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["linkadd"]); ?>">&raquo; <?php echo ($vo["linkname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </li>
        </ul>
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
</div>
  

  <!-- Homepage Specific Elements -->
  <script type="text/javascript" src="/hzaueqt3/hzaueqt3/Public/face/js/jquery.timers.1.2.js"></script><!--计时器-->
  <script type="text/javascript" src="/hzaueqt3/hzaueqt3/Public/face/js/jquery.galleryview.2.1.1.min.js"></script><!--图片走廊-->
  <script type="text/javascript" src="/hzaueqt3/hzaueqt3/Public/face/js/jquery.galleryview.setup.js"></script><!--图片走廊基本参数-->
  <!-- End Homepage Specific Elements -->
  <script type="text/javascript" src="/hzaueqt3/hzaueqt3/Public/face/js/jquery_homepage.js"></script>
</body>
</html>