<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	<title>实验教学中心互动平台</title>
	<link rel="stylesheet" href="/hzaucomm/Public/face/css/public.css"/>
	<link rel="stylesheet" href="/hzaucomm/Public/face/css/main.css"/>
	<link rel="shortcut icon" href="/hzaucomm/logo.ico">
	<meta name="viewport" content="width=device-width,user-scalable=yes" />
	<link type="text/css" rel="stylesheet" href='http://fonts.googleapis.com/css?family=Ubuntu:300italic,300,700' />
	<link type="text/css" rel="stylesheet" href="/hzaucomm/Public/face/css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="/hzaucomm/Public/face/css/flexslider.css" />
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
            <p><a href="#">访问旧版</a> | <?php echo (session('username')); ?>你好！ | <a href="/hzaucomm/index.php/Home/User/index">个人中心</a> | <a href="/hzaucomm/index.php/Home/User/loginout">退出</a></p><br/><?php endif; ?>
      </div>
      <form action="/hzaucomm/index.php/Home/index/glo_search" method="post" id="sitesearch">
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
//             window.location.href="/hzaucomm/index.php/Home/Index/index";
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
            <img src="/hzaucomm/index.php/Home/Header/verifyImg" alt="Code" id="regcode" onclick="this.src=this.src+'?'+Math.random()">
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
                <a id="nav_main" href="/hzaucomm/index.php/Home/index/main">首页</a>
            </li>
            <li class="nav_first">
                <a id="nav_main" href="/hzaucomm/index.php/Home/introduction/introduction">平台概况</a>
                <div id="nav_hidden3">
                <ul >
                    <li><a href="/hzaucomm/index.php/Home/introduction/introduction">平台概况</a></li>
                    <li><a href="/hzaucomm/index.php/Home/introduction/notice">通知公告</a></li>
                    <li><a href="/hzaucomm/index.php/Home/introduction/connect">联系我们</a></li>
                </ul>
                </div>
            </li>  
            <li class="nav_first">
                <a id="nav_course" href="/hzaucomm/index.php/Home/course/course">学科交流</a>
                <div id="nav_hidden1">
                <ul >
                    <li><a href="/hzaucomm/index.php/Home/course/course?">实践实习类</a></li>
                    <li><a href="/hzaucomm/index.php/Home/course/course?">专业基础类</a></li>
                    <li><a href="/hzaucomm/index.php/Home/course/course?">作物生产类</a></li>
                    <li><a href="/hzaucomm/index.php/Home/course/course?">植物保护类</a></li>
                    <li><a href="/hzaucomm/index.php/Home/course/course?">创新实验课程</a></li>
                </ul>
                </div>
            </li>
            <li class="nav_first">
                <a id="nav_source" href="/hzaucomm/index.php/Home/source/source">资源共享</a>
                <div id="nav_hidden2">
                <ul >
                    <li><a href="/hzaucomm/index.php/Home/source/picture">图片</a></li>
                    <li><a href="/hzaucomm/index.php/Home/source/document">文件</a></li>
                    <li><a href="/hzaucomm/index.php/Home/source/video">视频</a></li>
                    <li><a href="/hzaucomm/index.php/Home/source/zip">其他</a></li>
                </ul>
                </div>
            </li>
            <li class="nav_first">
               <a id="nav_comp" id="nav_comp" href="/hzaucomm/index.php/Home/comp/comp">综合交流</a>
            </li>
            <li class="nav_first">
                <a id="nav_main" href="/hzaucomm/index.php/Home/source/pic_update">资源上传</a>
            </li>
                      
        </ul>
    </div>
</div>

	</div>

	<div id="Cmain">
		<div class="Ccontainer">
			<div id="Cright">
				<div id="cr_p">
					<div class="container">
						<section >
							<div class="flexslider">
							  <ul class="slides">
								  <?php if(is_array($imagics)): $i = 0; $__LIST__ = $imagics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><li>
										  <a href="/hzaucomm/index.php/Home/course/course.html?"><img src="/hzaucomm/Uploads/<?php echo ($items["imgadd"]); ?>" alt="" /></a>
										  <div style="position: absolute; top:75px; left:45px; width:70%; height:150px;">
											  <div class="slide_content_left"><h2><?php echo ($items["imgname"]); ?></h2></div>
											  <!-- <div class="slide_desc_right">Hamburg, Germany</div> -->
										  </div>
									  </li><?php endforeach; endif; else: echo "" ;endif; ?>
							  </ul>
						  </div>
						</section>
					</div>
				</div>
				<div class="minihead">
				<h3 class="m_h_title"><a>热门主题</a></h3>
				</div>
				<div id="hot_theme">
					<div class="h_t_show">
						<ul>
							<?php if(is_array($hotThemes)): $i = 0; $__LIST__ = $hotThemes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="h_t_show_ex">
									<div class="h_t_s_ex_tit"><a href="/hzaucomm/index.php/Home/Index/showitem/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["msname"]); ?></a></div>
									<div class="htexnav">
										<span class="htexnav_time"><img src="/hzaucomm/Public/face/images/icon/time.png"><?php echo ($vo["msdate"]); ?></span>
										<span class="htexnav_pub"><img src="/hzaucomm/Public/face/images/icon/person.png"><?php echo ($vo["msowner"]); ?></span>
										<span class="htexnav_com"><img src="/hzaucomm/Public/face/images/icon/comment.png"><?php echo ($vo["mshaving"]); ?>评论</span>
										<span class="htexnav_prise"><img src="/hzaucomm/Public/face/images/icon/prise.png"><?php echo ($vo["mslike"]); ?></span>
									</div>
									<div class="htexdetail">
										<?php $vo['msct'] = preg_replace('/<([a-z]+?)\s+?.*?>/i','<$1>',$vo['msct']); $qian=array(" ","　","\t","\n","\r"); $hou=array("","","","",""); $vo['msct'] = str_replace($qian,$hou,$vo['msct']); $vo['msct'] = strip_tags($vo['msct']); ?>
										<p class="htexd_c">
											<?php echo ($vo["msct"]); ?>
											<!--五月，携一缕浅夏的芬芳，凝一脂冰清玉洁的清梦，连同五月特有-->
											<!--的浓郁，悠然地坐在暮春的肩头，温暖的阳光洒进心扉，激荡着心-->
											<!--灵深处的温馨诗行。五月的鲜花散发着芬香妖娆而美丽，鲜花盛开-->
											<!--让人们尽情的沐浴在温暖的阳光下，尽情的享受着花海带来的快乐-->
											<!--和温馨。紫粉色的梧桐花娇艳地吹开五月的喇叭，把五月的激情浪-->
											<!--漫浓重地渲染;润白的槐花把五月的故事一串串地高挂在嫩绿的枝头-->
											<!--，用淡雅的色调修饰五月素洁的衣襟。无论是朝暮里温婉柔美的波-->
											<!--幔透出的悠远宁静，还是在艳阳下闪亮水花里飞溅的激情，都是那-->
											<!--么令人飘然而超脱。-->

											<!--浪漫的五月总能营造出绚丽多姿的色彩，总能姿意-->
											<!--出淡雅清新的情愫。五月风，越过高山的坎坎坷坷，拂去了岁月的-->
											<!--尘埃，五月的风，如诗人的笔，如画家的五彩，将-->
											<!--绿色覆盖每一片荒凉，让大地换上了新装。五月风，洋溢着笑脸，-->
											<!--灿烂着每一朵花儿，用希望的手叩响了沉睡的天空-->
											<!--，吹散了糜烂，吹走了腐味，带来了清晰。五月风，轻轻地从耳边-->
											<!--吹过，柔柔的，软软的，象一朵云彩轻拂着我的脸-->
											<!--。她是从春天的阳光中走来，从大山深处穿越而来，带着花草的清-->
											<!--香，带着放飞的梦想，一路欢歌，把大地点缀得如-->
											<!--诗如画。五月风，记载着一个个美丽的传说，每一个传说都化做一-->
											<!--片云彩，弥漫在整个天空。-->
										</p>
									</div>
									<div class="clr"></div>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div class="clr"></div>
					</div>
				</div>
				<div class="clr"></div>
			</div>
			<div id="Ccon">
				<div id="Cleft">
					<div class="minihead">
					<h3 class="m_h_title"><a >通知公告</a></h3><span class="m_h_more"><a href="/hzaucomm/index.php/Home/introduction/notice.html">更多>></a></span>
					</div>
					<p class="publish"><?php echo ($latestInfro); ?></p>
				</div>
				<div id="Cbottom">
					<div class="minihead">
						<h3 class="m_h_title"><a >最新交流</a></h3><!-- <span class="m_h_more"><a href="">更多>></a></span> -->
					</div>
					<div class="c_con">
						<div><h3  class="cr_mi_ti"><a href="/hzaucomm/index.php/Home/">新发主题</a></h3></div>
						<div class="clr"></div>
						<ul>
							<?php if(is_array($latestThemes)): $i = 0; $__LIST__ = $latestThemes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i; $items['msdate'] = date("m-d"); ?>
								<li class="c_c_ex"><a class="c_c_e_title" href="/hzaucomm/index.php/Home/Index/showitem/id/<?php echo ($items["id"]); ?>"><div class="point"></div><?php echo ($items["msname"]); ?></a><span class="c_c_ex_time"><?php echo ($items["msdate"]); ?></span><div class="clr"></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
					<div class="c_con">
						<div><h3  class="cr_mi_ti"><a href="">最新共享</a></h3></div>
						<div class="clr"></div>
						<ul>
							<?php if(is_array($latestResource)): $i = 0; $__LIST__ = $latestResource;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$resource): $mod = ($i % 2 );++$i; switch ($resource['rstype']) { case 1: $url = "/hzaucomm/index.php/Home/Source/pictureshow/id/".$resource['id']; break; case 2: $url = "/hzaucomm/index.php/Home/Source/summary/id/".$resource['id']; break; case 3: $url = "/hzaucomm/index.php/Home/Source/summary/id/".$resource['id']; break; case 0: $url = "/hzaucomm/index.php/Home/Source/summary/id/".$resource['id']; break; default: $url = ""; } $resource['rsdate'] = date("m-d"); ?>
								<li class="c_c_ex"><a class="c_c_e_title" href="<?php echo $url?>"><div class="point"></div><?php echo ($resource["rsname"]); ?></a><span class="c_c_ex_time"><?php echo ($resource["rsdate"]); ?></span><div class="clr"></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
				</div>
				<div class="clr"></div>
			</div><div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
	<div class="clr"></div>
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
	<script src="/hzaucomm/Public/public/js/jquery-1.8.3.min.js" ></script>
	<script type="text/javascript" src="/hzaucomm/Public/face/js/jquery.min.js"></script>
	<script type="text/javascript" src="/hzaucomm/Public/face/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="/hzaucomm/Public/face/js/custom.js"></script>
	<script type="text/javascript" src="/hzaucomm/Public/face/js/main.js"></script>	
	<script type="text/javascript" src="/hzaucomm/Public/face/js/logre.js"></script>
</body>
</html>