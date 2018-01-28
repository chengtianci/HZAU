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
  <link rel="stylesheet" href="/hzaulab/Public/face/css/equipment_show1_apply.css" />
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
          <h3>实验室</h3>
          <ul class="ultop">
            <li><a href="/hzaulab/index.php/Home/Laboratory/laboratory_show1" >公共实验室</a></li>
            <li><a href="/hzaulab/index.php/Home/Laboratory/laboratory_show2">教学实验室</a></li>
            <li><a href="/hzaulab/index.php/Home/Laboratory/laboratory_show3" >实验辅助室</a></li>
          </ul>
        </section>
      </div>
      <div id="main_right">
        <nav class="top_nav"><a href="/hzaulab/index.php/home/Index/index.html">首页</a> · <a href="#">实验室</a>· <a >实验室申请</a> </nav>
        <header class="main_title"><h2>实验室申请</h2></header>
        <section class="article">
          <div class="apply">
            <div class="up">
              <h3>作物学实验教学中心 <br> 实验室申请表</h3>
            </div>
            <div class="down">
              <!-- 申请表单 -->
            <form action="/hzaulab/index.php/Home/Laboratory/doApply" method="post" class="sqbg" id="sqbg">
              <div class="row">
                <div class="le"><span class="hint">使用者姓名： </span><input id="syzxm" class="input" type="text" name="syzxm" value="theUser">   </div>
                <div class="ri"><span class="hint">联系方式： </span><input id="syzlxfs" class="input" type="text" name="syzlxfs"></div>
              </div>
              <div class="row">
                <div class="le"><span class="hint">导师姓名： </span><input id="dsxm" class="input" type="text" name="dsxm">   </div>
                <div class="ri"><span class="hint">联系方式： </span><input id="dslxfs" class="input" type="text" name="dslxfs"></div>
              </div>
              <div class="row">
                <div class="le"><span class="hint">实验室名称： </span><input id="sysmc" class="input" type="text" name="sysmc" value="<?php echo ($data["ecname"]); ?>"></div>
                <div class="ri"><span class="hint">实验室位置： </span><input id="syswz" class="input" type="text" name="syswz" value="<?php echo ($data["elocation"]); ?>"></div>
              </div>
              <div class="row">
                <div class="le"><span class="hint">实验室编号： </span><input id="sysbh" class="input" type="text" name="sysbh" value="<?php echo ($data["eoutid"]); ?>">   </div>
                <div class="ri"><span class="hint">实验项目： </span><input id="sysxm" class="input" type="text" name="sysxm"></div>
              </div>
              <div class="row">
                <div class="le"><span class="hint">主要操作： </span><input id="zycz" class="input" type="text" name="zycz">   </div>
                <div class="ri"><span class="hint" style="background: #fff;"></span><input class="input" type="text" name="" hidden></div>
              </div>
              <div class="row">
                <div class="le"><span class="hint">预约时间： </span><input id="kssj" class="input" type="date" name="kssj">   </div>
                <div class="ri"><span class="hint">终止时间： </span><input id="zzsj" class="input" type="date" name="zzsj"></div>
              </div>
              <div class="row">
                <div class="le"><span class="hint">样品物种： </span><input id="ypwz" class="input" type="text" name="ypwz">   </div>
                <div class="ri"><span class="hint">备注： </span><input id="bz" class="input" type="text" name="bz"></div>
              </div><br>
              <input type="text" name="hehehe" value="<?php echo ($hehehe); ?>" hidden>
              <div class="row">
                <a href=""><button type="button" onclick="fun1()">保存</button></a>
                <a href=""><button type="submit" >提交</button></a>
                <a href=""><button type="button" onclick="fun2()">导出Word</button></a>
              </div>
            </form>
            </div>
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
  <!-- 相关条件的判断 -->
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

    // 预约条件的判断
    function fun1() {
      var startTime = document.getElementById('kssj').value;
      var endTime = document.getElementById('zzsj').value;
      var enterStartTime = new Date(startTime);
      var enterEndTime = new Date(endTime);

      if (document.getElementById('sysmc').value == "") {
        alert("请输入要预约的实验室");
      }else if (document.getElementById('zycz') == "" || document.getElementById('ypwz') == "" || document.getElementById('bz') == "" || document.getElementById('sysxm') == "") {
        alert("请填写完整的信息后提交");
      } else if (startTime == "") {
        alert("请填写预约开始时间");
      }else if (endTime == "") {
        alert("请填写预约结束时间");
      }else if (enterStartTime > enterEndTime) {
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
      console.log(hint);
      console.log(input);
      var data = new Array() ;
      for (var i = 0; i < hint.length; i++) {
        var field = new Array();
        field.push(hint[i].innerHTML);
        field.push(input[i].value);
        data.push(field);
      }
      data = JSON.stringify(data);
      console.log(data);
      $.ajax({  
        type: "POST",  
        url: "/hzaulab/index.php/Home/Laboratory/doWord", //orderModifyStatus  
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