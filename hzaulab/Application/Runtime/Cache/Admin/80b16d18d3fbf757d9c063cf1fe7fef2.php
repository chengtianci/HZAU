<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>华中农业大学实验教学中心互动平台</title>
  	<link rel="shortcut icon" href="/hzau/hzaulab/back.ico" type="image/x-icon" />

	  <!-- Bootstrap -->
    <link href="/hzau/hzaulab/Public/back/include/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 图标引入 -->
    <link href="/hzau/hzaulab/Public/back/include/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/hzau/hzaulab/Public/back/include/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/hzau/hzaulab/Public/back/css/custom.min.css" rel="stylesheet">
    <link href="/hzau/hzaulab/Public/back/css/public.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="/hzau/hzaulab/Public/back/css/Room.css">
    <!-- <link rel="stylesheet" type="text/css" href="/hzau/hzaulab/Public/back/css/pot.css"> --> 
    <script src="/hzau/hzaulab/Public/Js/jquery-3.1.1.min.js"></script>
</head>
    <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!--************************************************* 左导航 *************************************************-->
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
        <!-- 左导航中部 -->
            <div class="navbar nav_title" style="border: 0;">
  <a href="#" class="site_title"> <i class="fa fa-fire"></i> <span>Teaching Admin</span></a>
</div>

<div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="/hzau/hzaulab/Public/back/images/user.png" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>Mr.Tian</h2>
  </div>
</div>
              <br />

              <!-- 左导航中部 -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>2017/5/16</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> 首页管理 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzau/hzaulab/index.php/Admin/Index/index">页面管理</a></li>              
        </ul>
      </li>
      <li><a><i class="fa fa-edit"></i> 平台概况 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzau/hzaulab/index.php/Admin/Introduction/introduction">平台概况</a></li>
          <li><a href="/hzau/hzaulab/index.php/Admin/Introduction/notice">通知公告</a></li>
          <li><a href="/hzau/hzaulab/index.php/Admin/Introduction/connect">联系我们</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-desktop"></i> 大田设施<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzau/hzaulab/index.php/Admin/Field/fieldluanch">页面发布</a></li>
          <li><a href="/hzau/hzaulab/index.php/Admin/Field/field">农田土地</a></li>
          <li><a href="/hzau/hzaulab/index.php/Admin/Field/OpenPot">露天盆栽场</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-mortar-board"></i> 培养室<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="/hzau/hzaulab/index.php/Admin/Room/roomluanch">页面发布</a></li>
          	<li><a href="/hzau/hzaulab/index.php/Admin/Room/WimbledonRoom">温网室</a></li>
          	<li><a href="/hzau/hzaulab/index.php/Admin/Room/LightCultureRoom">光照培养室</a></li>
      	</ul>
      <li><a><i class="fa fa-share-alt-square"></i>实验室 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="/hzau/hzaulab/index.php/Admin/Laboratory/labluanch">页面发布</a></li>
            <li><a href="/hzau/hzaulab/index.php/Admin/Laboratory/publiclab">公共实验室</a></li>
            <li><a href="/hzau/hzaulab/index.php/Admin/Laboratory/teachlab">教学实验室</a></li>
            <li><a href="/hzau/hzaulab/index.php/Admin/Laboratory/sublab">实验辅助室</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-flask"></i>仪器设备<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzau/hzaulab/index.php/Admin/Equipment/equipmentluanch">页面发布</a></li>
          <li><a href="/hzau/hzaulab/index.php/Admin/Equipment/equipment">仪器设备</a></li>
          <li><a href="/hzau/hzaulab/index.php/Admin/Equipment/consume">试剂耗材</a></li>
          <li><a href="/hzau/hzaulab/index.php/Admin/Equipment/person">设备管理人</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-user"></i>规章制度<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzau/hzaulab/index.php/Admin/Regulation/regulation">规章制度</a></li>
          <li><a href="/hzau/hzaulab/index.php/Admin/Regulation/service">服务指南</a></li>
          <li><a href="/hzau/hzaulab/index.php/Admin/Regulation/download">下载专区</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-user"></i>采购计划<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzau/hzaulab/index.php/Admin/Plan/plan">采购计划</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

              <!--  左导航底部 -->
             <div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="待开发">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="待开发">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="待开发">
    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Logout" href="/hzau/hzaulab/index.php/Admin/Index/index">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  </a>
</div>

          </div>
        </div>

        <!--************************************************* 顶导航 *************************************************-->
        <div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="/hzau/hzaulab/Public/back/images/user.png" alt="">Mr.Tian
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a data-toggle="modal" data-target="#MyEdit"> Edit Me</a></li>
            <li>
              <a href="javascript:;">
                <span class="badge bg-red pull-right">待开发</span>
                <span>Settings</span>
              </a>
            </li>

            <li><a href="/hzau/hzaulab/index.php/Admin/Index/index"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>

       
      </ul>
    </nav>
  </div>
</div>

<!--  Edit模态框 -->
<div class="modal fade" id="MyEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          Edit Message
        </h4>
      </div>
      <div class="modal-body">
        
        <form action="" method="post">
          Name：<input type="text"><br>
          Password: <input type="text">
          <br><input type="file" name="gallery_file">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal -->
</div>
        <!--************************************************* 右内容 *************************************************-->
      <div class="right_col" role="main">
          <!-- 东辅楼B102地图 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-width:700px ;">
              <div class="x_title">
                <h2>东附楼B102<small>Light Culture Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content" >
                <form>
                  <div class="color">
                    占用：<span class="hintred"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    锁定：<span class="hintgrey"></span>  &nbsp;&nbsp;&nbsp;&nbsp;
                    开放：<span class="hintunlock"></span> 
                  </div>
                  <div class="B102">
                  <div class="left">
                    <table>
                      <tr>
                        <td class="ex" id="D1-1-3-1"> <input type="checkbox" value="D1-1-3-1"  name="theB102"><br><b>1-3-1</b></td>
                        <td class="ex" id="D1-1-3-2"> <input type="checkbox" value="D1-1-3-2"  name="theB102"><br><b>1-3-2</b></td>
                        <td class="ex" id="D1-1-3-3"> <input type="checkbox" value="D1-1-3-3"  name="theB102"><br><b>1-3-3</b></td>
                      </tr>
                      <tr>
                        <td class="ex" id="D1-1-2-1"> <input type="checkbox" value="D1-1-2-1"  name="theB102"><br><b>1-2-1</b></td>
                        <td class="ex" id="D1-1-2-2"> <input type="checkbox" value="D1-1-2-2"  name="theB102"><br><b>1-2-2</b></td>
                        <td class="ex" id="D1-1-2-3"> <input type="checkbox" value="D1-1-2-3"  name="theB102"><br><b>1-2-3</b></td>
                      </tr>
                      <tr>
                        <td class="ex" id="D1-1-1-1"> <input type="checkbox" value="D1-1-1-1"  name="theB102"><br><b>1-1-1</b></td>
                        <td class="ex" id="D1-1-1-2"> <input type="checkbox" value="D1-1-1-2"  name="theB102"><br><b>1-1-2</b></td>
                        <td class="ex" id="D1-1-1-3"> <input type="checkbox" value="D1-1-1-3"  name="theB102"><br><b>1-1-3</b></td>
                      </tr>
                    </table>
                    <div class="door"><div class="doorl">东附楼</div><div class="doorr">B102</div></div>
                  </div>
                  <div class="part1"></div>
                  <div class="right">
                    <div class="upwards">
                      <table>
                        <tr>
                          <td class="ex" id="D2-1-1-1"><input type="checkbox"  value="D2-1-1-1" name="theB102"><b>1-1-1</b></td>
                          <td class="ex" id="D2-1-2-1"><input type="checkbox"  value="D2-1-2-1" name="theB102"><b>1-2-1</b></td>
                          <td class="ex" id="D2-1-3-1"><input type="checkbox"  value="D2-1-3-1" name="theB102"><b>1-3-1</b></td>
                          <td class="ex" id="D2-1-4-1"><input type="checkbox"  value="D2-1-4-1" name="theB102"><b>1-4-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D2-1-1-2"><input type="checkbox"  value="D2-1-1-2" name="theB102"><b>1-1-2</b></td>
                          <td class="ex" id="D2-1-2-2"><input type="checkbox"  value="D2-1-2-2" name="theB102"><b>1-2-2</b></td>
                          <td class="ex" id="D2-1-3-2"><input type="checkbox"  value="D2-1-3-2" name="theB102"><b>1-3-2</b></td>
                          <td class="ex" id="D2-1-4-2"><input type="checkbox"  value="D2-1-4-2" name="theB102"><b>1-4-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D2-1-1-3"><input type="checkbox"  value="D2-1-1-3" name="theB102"><b>1-1-3</b></td>
                          <td class="ex" id="D2-1-2-3"><input type="checkbox"  value="D2-1-2-3" name="theB102"><b>1-2-3</b></td>
                          <td class="ex" id="D2-1-3-3"><input type="checkbox"  value="D2-1-3-3" name="theB102"><b>1-3-3</b></td>
                          <td class="ex" id="D2-1-4-3"><input type="checkbox"  value="D2-1-4-3" name="theB102"><b>1-4-3</b></td>
                        </tr>
                      </table>
                      <div class="part2">
                        <div class="le">D1</div>
                        <div class="ri"></div>
                      </div>
                      <table>
                        <tr>
                          <td class="ex" id="D2-2-1-1"><input type="checkbox"  value="D2-2-1-1" name="theB102"><b>2-1-1</b></td>
                          <td class="ex" id="D2-2-2-1"><input type="checkbox"  value="D2-2-2-1" name="theB102"><b>2-2-1</b></td>
                          <td class="ex" id="D2-2-3-1"><input type="checkbox"  value="D2-2-3-1" name="theB102"><b>2-3-1</b></td>
                          <td class="ex" id="D2-2-4-1"><input type="checkbox"  value="D2-2-4-1" name="theB102"><b>2-4-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D2-2-1-2"><input type="checkbox"  value="D2-2-1-2" name="theB102"><b>2-1-2</b></td>
                          <td class="ex" id="D2-2-2-2"><input type="checkbox"  value="D2-2-2-2" name="theB102"><b>2-2-2</b></td>
                          <td class="ex" id="D2-2-3-2"><input type="checkbox"  value="D2-2-3-2" name="theB102"><b>2-3-2</b></td>
                          <td class="ex" id="D2-2-4-2"><input type="checkbox"  value="D2-2-4-2" name="theB102"><b>2-4-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D2-2-1-3"><input type="checkbox"  value="D2-2-1-3" name="theB102"><b>2-1-3</b></td>
                          <td class="ex" id="D2-2-2-3"><input type="checkbox"  value="D2-2-2-3" name="theB102"><b>2-2-3</b></td>
                          <td class="ex" id="D2-2-3-3"><input type="checkbox"  value="D2-2-3-3" name="theB102"><b>2-3-3</b></td>
                          <td class="ex" id="D2-2-4-3"><input type="checkbox"  value="D2-2-4-3" name="theB102"><b>2-4-3</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D2-2-1-4"><input type="checkbox"  value="D2-2-1-4" name="theB102"><b>2-1-4</b></td>
                          <td class="ex" id="D2-2-2-4"><input type="checkbox"  value="D2-2-2-4" name="theB102"><b>2-2-4</b></td>
                          <td class="ex" id="D2-2-3-4"><input type="checkbox"  value="D2-2-3-4" name="theB102"><b>2-3-4</b></td>
                          <td class="ex" id="D2-2-4-4"><input type="checkbox"  value="D2-2-4-4" name="theB102"><b>2-4-4</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D2-2-1-5"><input type="checkbox"  value="D2-2-1-5" name="theB102"><b>2-1-5</b></td>
                          <td class="ex" id="D2-2-2-5"><input type="checkbox"  value="D2-2-2-5" name="theB102"><b>2-2-5</b></td>
                          <td class="ex" id="D2-2-3-5"><input type="checkbox"  value="D2-2-3-5" name="theB102"><b>2-3-5</b></td>
                          <td class="ex" id="D2-2-4-5"><input type="checkbox"  value="D2-2-4-5" name="theB102"><b>2-4-5</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="ex" id="D2-3-1-1"><input type="checkbox"  value="D2-3-1-1" name="theB102"><b>3-1-1</b></td>
                          <td class="ex" id="D2-3-2-1"><input type="checkbox"  value="D2-3-2-1" name="theB102"><b>3-2-1</b></td>
                          <td class="ex" id="D2-3-3-1"><input type="checkbox"  value="D2-3-3-1" name="theB102"><b>3-3-1</b></td>
                          <td class="ex" id="D2-3-4-1"><input type="checkbox"  value="D2-3-4-1" name="theB102"><b>3-4-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D2-3-1-2"><input type="checkbox"  value="D2-3-1-2" name="theB102"><b>3-1-2</b></td>
                          <td class="ex" id="D2-3-2-2"><input type="checkbox"  value="D2-3-2-2" name="theB102"><b>3-2-2</b></td>
                          <td class="ex" id="D2-3-3-2"><input type="checkbox"  value="D2-3-3-2" name="theB102"><b>3-3-2</b></td>
                          <td class="ex" id="D2-3-4-2"><input type="checkbox"  value="D2-3-4-2" name="theB102"><b>3-4-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D2-3-1-3"><input type="checkbox"  value="D2-3-1-3" name="theB102"><b>3-1-3</b></td>
                          <td class="ex" id="D2-3-2-3"><input type="checkbox"  value="D2-3-2-3" name="theB102"><b>3-2-3</b></td>
                          <td class="ex" id="D2-3-3-3"><input type="checkbox"  value="D2-3-3-3" name="theB102"><b>3-3-3</b></td>
                          <td class="ex" id="D2-3-4-3"><input type="checkbox"  value="D2-3-4-3" name="theB102"><b>3-4-3</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D2-3-1-4"><input type="checkbox"  value="D2-3-1-4" name="theB102"><b>3-1-4</b></td>
                          <td class="ex" id="D2-3-2-4"><input type="checkbox"  value="D2-3-2-4" name="theB102"><b>3-2-4</b></td>
                          <td class="ex" id="D2-3-3-4"><input type="checkbox"  value="D2-3-3-4" name="theB102"><b>3-3-4</b></td>
                          <td class="ex" id="D2-3-4-4"><input type="checkbox"  value="D2-3-4-4" name="theB102"><b>3-4-4</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D2-3-1-5"><input type="checkbox"  value="D2-3-1-5" name="theB102"><b>3-1-5</b></td>
                          <td class="ex" id="D2-3-2-5"><input type="checkbox"  value="D2-3-2-5" name="theB102"><b>3-2-5</b></td>
                          <td class="ex" id="D2-3-3-5"><input type="checkbox"  value="D2-3-3-5" name="theB102"><b>3-3-5</b></td>
                          <td class="ex" id="D2-3-4-5"><input type="checkbox"  value="D2-3-4-5" name="theB102"><b>3-4-5</b></td>
                        </tr>
                      </table>
                      <div class="part3">
                        <div class="le">D2</div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="downwards">
                      <table>
                        <tr>
                          <td class="ex" id="D1-2-1-1"><input type="checkbox"  value="D1-2-1-1" name="theB102"><b>2-1-1</b></td>
                          <td class="ex" id="D1-2-2-1"><input type="checkbox"  value="D1-2-2-1" name="theB102"><b>2-2-1</b></td>
                          <td class="ex" id="D1-2-3-1"><input type="checkbox"  value="D1-2-3-1" name="theB102"><b>2-3-1</b></td>
                          <td class="ex" id="D1-2-4-1"><input type="checkbox"  value="D1-2-4-1" name="theB102"><b>2-4-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D1-2-1-2"><input type="checkbox"  value="D1-2-1-2" name="theB102"><b>2-1-2</b></td>
                          <td class="ex" id="D1-2-2-2"><input type="checkbox"  value="D1-2-2-2" name="theB102"><b>2-2-2</b></td>
                          <td class="ex" id="D1-2-3-2"><input type="checkbox"  value="D1-2-3-2" name="theB102"><b>2-3-2</b></td>
                          <td class="ex" id="D1-2-4-2"><input type="checkbox"  value="D1-2-4-2" name="theB102"><b>2-4-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D1-2-1-3"><input type="checkbox"  value="D1-2-1-3" name="theB102"><b>2-1-3</b></td>
                          <td class="ex" id="D1-2-2-3"><input type="checkbox"  value="D1-2-2-3" name="theB102"><b>2-2-3</b></td>
                          <td class="ex" id="D1-2-3-3"><input type="checkbox"  value="D1-2-3-3" name="theB102"><b>2-3-3</b></td>
                          <td class="ex" id="D1-2-4-3"><input type="checkbox"  value="D1-2-4-3" name="theB102"><b>2-4-3</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D1-2-1-4"><input type="checkbox"  value="D1-2-1-4" name="theB102"><b>2-1-4</b></td>
                          <td class="ex" id="D1-2-2-4"><input type="checkbox"  value="D1-2-2-4" name="theB102"><b>2-2-4</b></td>
                          <td class="ex" id="D1-2-3-4"><input type="checkbox"  value="D1-2-3-4" name="theB102"><b>2-3-4</b></td>
                          <td class="ex" id="D1-2-4-4"><input type="checkbox"  value="D1-2-4-4" name="theB102"><b>2-4-4</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D1-2-1-5"><input type="checkbox"  value="D1-2-1-5" name="theB102"><b>2-1-5</b></td>
                          <td class="ex" id="D1-2-2-5"><input type="checkbox"  value="D1-2-2-5" name="theB102"><b>2-2-5</b></td>
                          <td class="ex" id="D1-2-3-5"><input type="checkbox"  value="D1-2-3-5" name="theB102"><b>2-3-5</b></td>
                          <td class="ex" id="D1-2-4-5"><input type="checkbox"  value="D1-2-4-5" name="theB102"><b>2-4-5</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="ex" id="D1-3-1-1"><input type="checkbox"  value="D1-3-1-1" name="theB102"><b>3-1-1</b></td>
                          <td class="ex" id="D1-3-2-1"><input type="checkbox"  value="D1-3-2-1" name="theB102"><b>3-2-1</b></td>
                          <td class="ex" id="D1-3-3-1"><input type="checkbox"  value="D1-3-3-1" name="theB102"><b>3-3-1</b></td>
                          <td class="ex" id="D1-3-4-1"><input type="checkbox"  value="D1-3-4-1" name="theB102"><b>3-4-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D1-3-1-2"><input type="checkbox"  value="D1-3-1-2" name="theB102"><b>3-1-2</b></td>
                          <td class="ex" id="D1-3-2-2"><input type="checkbox"  value="D1-3-2-2" name="theB102"><b>3-2-2</b></td>
                          <td class="ex" id="D1-3-3-2"><input type="checkbox"  value="D1-3-3-2" name="theB102"><b>3-3-2</b></td>
                          <td class="ex" id="D1-3-4-2"><input type="checkbox"  value="D1-3-4-2" name="theB102"><b>3-4-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D1-3-1-3"><input type="checkbox"  value="D1-3-1-3" name="theB102"><b>3-1-3</b></td>
                          <td class="ex" id="D1-3-2-3"><input type="checkbox"  value="D1-3-2-3" name="theB102"><b>3-2-3</b></td>
                          <td class="ex" id="D1-3-3-3"><input type="checkbox"  value="D1-3-3-3" name="theB102"><b>3-3-3</b></td>
                          <td class="ex" id="D1-3-4-3"><input type="checkbox"  value="D1-3-4-3" name="theB102"><b>3-4-3</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D1-3-1-4"><input type="checkbox"  value="D1-3-1-4" name="theB102"><b>3-1-4</b></td>
                          <td class="ex" id="D1-3-2-4"><input type="checkbox"  value="D1-3-2-4" name="theB102"><b>3-2-4</b></td>
                          <td class="ex" id="D1-3-3-4"><input type="checkbox"  value="D1-3-3-4" name="theB102"><b>3-3-4</b></td>
                          <td class="ex" id="D1-3-4-4"><input type="checkbox"  value="D1-3-4-4" name="theB102"><b>3-4-4</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D1-3-1-5"><input type="checkbox"  value="D1-3-1-5" name="theB102"><b>3-1-5</b></td>
                          <td class="ex" id="D1-3-2-5"><input type="checkbox"  value="D1-3-2-5" name="theB102"><b>3-2-5</b></td>
                          <td class="ex" id="D1-3-3-5"><input type="checkbox"  value="D1-3-3-5" name="theB102"><b>3-3-5</b></td>
                          <td class="ex" id="D1-3-4-5"><input type="checkbox"  value="D1-3-4-5" name="theB102"><b>3-4-5</b></td>
                        </tr>
                      </table>
                      <div class="part4"></div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <select class="mutibox" name="theCaozuo" id="testSelectB102">
                    <option value="1" selected>锁定</option>
                    <option value="0">开放</option>
                  </select>
                <button class="gallery_add" type="submit" onclick="theB102Click();">修改</button>  
                </form>
              </div>
            </div>
          </div>
          <!-- 东辅楼B102备注 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>B102光照培养室-备注<small>Light Culture Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">                            
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <input type="text" id="idInfor" value="<?php echo ($data["id"]); ?>" hidden>
                     <div id="editorB102">
                       <p>
                         <?php echo ($DataofB102); ?>
                       </p>
                     </div><br>
                  <br><button type="button" id="B102Submit" class="btn btn-primary">修改</button>
                <br>
              </div>

            </div>
          </div>
          <!-- 东辅楼B102申请 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>B102光照培养室内申请<small>Light Culture Room Application</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th style="width: 50px;">序号</th>
                    <th >设施位置</th>
                    <th >设施名称</th>
                    <th >设施编号</th>
                    <th >开始时间</th>
                    <th >结束时间</th>
                    <th >样品物种</th>
                    <th >备注</th>
                    <th >预约人</th>
                    <th >时间</th>
                    <th >状态</th>
                    <th >操作</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($dataB102)): $i = 0; $__LIST__ = $dataB102;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($items["sslocation"]); ?></td>
                        <td><?php echo ($items["ssname"]); ?></td>
                        <td><?php echo ($items["yqid"]); ?></td>
                        <td><?php echo ($items["ks"]); ?></td>
                        <td><?php echo ($items["js"]); ?></td>
                        <td><?php echo ($items["ypwz"]); ?></td>
                        <td><?php echo ($items["other"]); ?></td>
                        <td><?php echo ($items["uid"]); ?></td>
                        <td><?php echo ($items["date"]); ?></td>
                        <?php if ($items['status'] == 0) { ?>
                            <td>等待批准</td>
                        <?php } else if ($items['status'] == 1) { ?>
                            <td>已批准</td>
                        <?php } else { ?>
                          <td>已拒绝</td>
                        <?php } ?>
                        
                        <td>
                          <a href="/hzau/hzaulab/index.php/Admin/Room/doAgree1/id/<?php echo ($items["id"]); ?>">同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <!-- <a href="#" data-toggle="modal" data-target="#myModal3" >拒绝 <i class="fa fa-close"></i></a> -->
                          <a href="/hzau/hzaulab/index.php/Admin/Room/doReject1/id/<?php echo ($items["id"]); ?>" >拒绝 <i class="fa fa-close"></i></a>

                        </td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- 东辅楼B102申请历史 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>B102光照培养室内申请历史<small>Light Culture Room History</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th style="width: 50px;">序号</th>
                    <th >设施位置</th>
                    <th >设施名称</th>
                    <th >设施编号</th>
                    <th >开始时间</th>
                    <th >结束时间</th>
                    <th >样品物种</th>
                    <th >备注</th>
                    <th >预约人</th>
                    <th >时间</th>
                    <th> 操作</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($checkedB102)): $i = 0; $__LIST__ = $checkedB102;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($items["sslocation"]); ?></td>
                        <td><?php echo ($items["ssname"]); ?></td>
                        <td><?php echo ($items["yqid"]); ?></td>
                        <td><?php echo ($items["ks"]); ?></td>
                        <td><?php echo ($items["js"]); ?></td>
                        <td><?php echo ($items["ypwz"]); ?></td>
                        <td><?php echo ($items["other"]); ?></td>
                        <td><?php echo ($items["uid"]); ?></td>
                        <td><?php echo ($items["date"]); ?></td>
                        <?php if ($items['status'] == 0) { ?>
                            <td>等待批准</td>
                        <?php } else if ($items['status'] == 1) { ?>
                            <td>已批准</td>
                        <?php } else { ?>
                          <td>已拒绝</td>
                        <?php } ?>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
                <br><br>
                <form action="/hzau/hzaulab/index.php/Admin/Room/doTheExport2" method="post">
                  <input type="text" name="value" value="东附楼B102" hidden>
                  <button type="submit" class="gallery_add">导出Excel</button>
                </form>
              </div>
            </div>
          </div>
          <!-- 东附楼B103地图 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-width:800px ;">
              <div class="x_title">
                <h2>东附楼B103<small>Light Culture Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form>
                  <div class="color">
                    占用：<span class="hintred"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    锁定：<span class="hintgrey"></span>  &nbsp;&nbsp;&nbsp;&nbsp;
                    开放：<span class="hintunlock"></span> 
                  </div>
                  <div class="B103">
                  <div class="up">
                    <div class="le">
                    <div class="door">
                        <div class="door1">东附楼</div>
                        <div class="door2">B103</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="left">
                      <table>
                        <tr>
                          <td class="ex" id="D3-8-3-1"><input type="checkbox" value="D3-8-3-1" name="theB103"><br><b>8-3-1</b></td>
                          <td class="ex" id="D3-8-3-2"><input type="checkbox" value="D3-8-3-2" name="theB103"><br><b>8-3-2</b></td>
                          <td class="ex" id="D3-8-3-3"><input type="checkbox" value="D3-8-3-3" name="theB103"><br><b>8-3-3</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-8-2-1"><input type="checkbox" value="D3-8-2-1" name="theB103"><br><b>8-2-1</b></td>
                          <td class="ex" id="D3-8-2-2"><input type="checkbox" value="D3-8-2-2" name="theB103"><br><b>8-2-2</b></td>
                          <td class="ex" id="D3-8-2-3"><input type="checkbox" value="D3-8-2-3" name="theB103"><br><b>8-2-3</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-8-1-1"><input type="checkbox" value="D3-8-1-1" name="theB103"><br><b>8-1-1</b></td>
                          <td class="ex" id="D3-8-1-2"><input type="checkbox" value="D3-8-1-2" name="theB103"><br><b>8-1-2</b></td>
                          <td class="ex" id="D3-8-1-3"><input type="checkbox" value="D3-8-1-3" name="theB103"><br><b>8-1-3</b></td>
                        </tr>
                      </table>
                    </div>
                    </div>
                    <div class="right">
                      <table>
                        <tr>
                          <td class="ex" id="D3-1-1-1"><input type="checkbox" value="D3-1-1-1" name="theB103"><b>1-1-1</b></td>
                          <td class="ex" id="D3-1-2-1"><input type="checkbox" value="D3-1-2-1" name="theB103"><b>1-2-1</b></td>
                          <td class="ex" id="D3-1-3-1"><input type="checkbox" value="D3-1-3-1" name="theB103"><b>1-3-1</b></td>
                          <td class="ex" id="D3-1-4-1"><input type="checkbox" value="D3-1-4-1" name="theB103"><b>1-4-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-1-1-2"><input type="checkbox" value="D3-1-1-2" name="theB103"><b>1-1-2</b></td>
                          <td class="ex" id="D3-1-2-2"><input type="checkbox" value="D3-1-2-2" name="theB103"><b>1-2-2</b></td>
                          <td class="ex" id="D3-1-3-2"><input type="checkbox" value="D3-1-3-2" name="theB103"><b>1-3-2</b></td>
                          <td class="ex" id="D3-1-4-2"><input type="checkbox" value="D3-1-4-2" name="theB103"><b>1-4-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-1-1-3"><input type="checkbox" value="D3-1-1-3" name="theB103"><b>1-1-3</b></td>
                          <td class="ex" id="D3-1-2-3"><input type="checkbox" value="D3-1-2-3" name="theB103"><b>1-2-3</b></td>
                          <td class="ex" id="D3-1-3-3"><input type="checkbox" value="D3-1-3-3" name="theB103"><b>1-3-3</b></td>
                          <td class="ex" id="D3-1-4-3"><input type="checkbox" value="D3-1-4-3" name="theB103"><b>1-4-3</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="ex" id="D3-2-1-1"><input type="checkbox" value="D3-2-1-1" name="theB103"><b>2-1-1</b></td>
                          <td class="ex" id="D3-2-2-1"><input type="checkbox" value="D3-2-2-1" name="theB103"><b>2-2-1</b></td>
                          <td class="ex" id="D3-2-3-1"><input type="checkbox" value="D3-2-3-1" name="theB103"><b>2-3-1</b></td>
                          <td class="ex" id="D3-2-4-1"><input type="checkbox" value="D3-2-4-1" name="theB103"><b>2-4-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-2-1-2"><input type="checkbox" value="D3-2-1-2" name="theB103"><b>2-1-2</b></td>
                          <td class="ex" id="D3-2-2-2"><input type="checkbox" value="D3-2-2-2" name="theB103"><b>2-2-2</b></td>
                          <td class="ex" id="D3-2-3-2"><input type="checkbox" value="D3-2-3-2" name="theB103"><b>2-3-2</b></td>
                          <td class="ex" id="D3-2-4-2"><input type="checkbox" value="D3-2-4-2" name="theB103"><b>2-4-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-2-1-3"><input type="checkbox" value="D3-2-1-3" name="theB103"><b>2-1-3</b></td>
                          <td class="ex" id="D3-2-2-3"><input type="checkbox" value="D3-2-2-3" name="theB103"><b>2-2-3</b></td>
                          <td class="ex" id="D3-2-3-3"><input type="checkbox" value="D3-2-3-3" name="theB103"><b>2-3-3</b></td>
                          <td class="ex" id="D3-2-4-3"><input type="checkbox" value="D3-2-4-3" name="theB103"><b>2-4-3</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="ex" id="D3-3-1-1"><input type="checkbox" value="D3-3-1-1" name="theB103"><b>3-1-1</b></td>
                          <td class="ex" id="D3-3-2-1"><input type="checkbox" value="D3-3-2-1" name="theB103"><b>3-2-1</b></td>
                          <td class="ex" id="D3-3-3-1"><input type="checkbox" value="D3-3-3-1" name="theB103"><b>3-3-1</b></td>
                          <td class="ex" id="D3-3-4-1"><input type="checkbox" value="D3-3-4-1" name="theB103"><b>3-4-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-3-1-2"><input type="checkbox" value="D3-3-1-2" name="theB103"><b>3-1-2</b></td>
                          <td class="ex" id="D3-3-2-2"><input type="checkbox" value="D3-3-2-2" name="theB103"><b>3-2-2</b></td>
                          <td class="ex" id="D3-3-3-2"><input type="checkbox" value="D3-3-3-2" name="theB103"><b>3-3-2</b></td>
                          <td class="ex" id="D3-3-4-2"><input type="checkbox" value="D3-3-4-2" name="theB103"><b>3-4-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-3-1-3"><input type="checkbox" value="D3-3-1-3" name="theB103"><b>3-1-3</b></td>
                          <td class="ex" id="D3-3-2-3"><input type="checkbox" value="D3-3-2-3" name="theB103"><b>3-2-3</b></td>
                          <td class="ex" id="D3-3-3-3"><input type="checkbox" value="D3-3-3-3" name="theB103"><b>3-3-3</b></td>
                          <td class="ex" id="D3-3-4-3"><input type="checkbox" value="D3-3-4-3" name="theB103"><b>3-4-3</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="ex" id="D3-4-1-1"><input type="checkbox" value="D3-4-1-1" name="theB103"><b>4-1-1</b></td>
                          <td class="ex" id="D3-4-2-1"><input type="checkbox" value="D3-4-2-1" name="theB103"><b>4-2-1</b></td>
                          <td class="ex" id="D3-4-3-1"><input type="checkbox" value="D3-4-3-1" name="theB103"><b>4-3-1</b></td>
                          <td class="ex" id="D3-4-4-1"><input type="checkbox" value="D3-4-4-1" name="theB103"><b>4-4-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-4-1-2"><input type="checkbox" value="D3-4-1-2" name="theB103"><b>4-1-2</b></td>
                          <td class="ex" id="D3-4-2-2"><input type="checkbox" value="D3-4-2-2" name="theB103"><b>4-2-2</b></td>
                          <td class="ex" id="D3-4-3-2"><input type="checkbox" value="D3-4-3-2" name="theB103"><b>4-3-2</b></td>
                          <td class="ex" id="D3-4-4-2"><input type="checkbox" value="D3-4-4-2" name="theB103"><b>4-4-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-4-3-1"><input type="checkbox" value="D3-4-3-1" name="theB103"><b>4-3-1</b></td>
                          <td class="ex" id="D3-4-3-2"><input type="checkbox" value="D3-4-3-2" name="theB103"><b>4-3-2</b></td>
                          <td class="ex" id="D3-4-3-3"><input type="checkbox" value="D3-4-3-3" name="theB103"><b>4-3-3</b></td>
                          <td class="ex" id="D3-4-3-4"><input type="checkbox" value="D3-4-3-4" name="theB103"><b>4-3-4</b></td>
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <td class="ex" id="D3-5-1-1"><input type="checkbox" value="D3-5-1-1" name="theB103"><b>5-1-1</b></td>
                          <td class="ex" id="D3-5-2-1"><input type="checkbox" value="D3-5-2-1" name="theB103"><b>5-2-1</b></td>
                          <td class="ex" id="D3-5-3-1"><input type="checkbox" value="D3-5-3-1" name="theB103"><b>5-3-1</b></td>
                          <td class="ex" id="D3-5-4-1"><input type="checkbox" value="D3-5-4-1" name="theB103"><b>5-4-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-5-1-2"><input type="checkbox" value="D3-5-1-2" name="theB103"><b>5-1-2</b></td>
                          <td class="ex" id="D3-5-2-2"><input type="checkbox" value="D3-5-2-2" name="theB103"><b>5-2-2</b></td>
                          <td class="ex" id="D3-5-3-2"><input type="checkbox" value="D3-5-3-2" name="theB103"><b>5-3-2</b></td>
                          <td class="ex" id="D3-5-4-2"><input type="checkbox" value="D3-5-4-2" name="theB103"><b>5-4-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-5-1-3"><input type="checkbox" value="D3-5-1-3" name="theB103"><b>5-1-3</b></td>
                          <td class="ex" id="D3-5-2-3"><input type="checkbox" value="D3-5-2-3" name="theB103"><b>5-2-3</b></td>
                          <td class="ex" id="D3-5-3-3"><input type="checkbox" value="D3-5-3-3" name="theB103"><b>5-3-3</b></td>
                          <td class="ex" id="D3-5-4-3"><input type="checkbox" value="D3-5-4-3" name="theB103"><b>5-4-3</b></td>
                        </tr>
                      </table>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="down">
                  <div class="part1"></div>
                    <div class="le">
                      <table>
                        <tr>
                          <td class="ex" id="D3-7-1-1"><input type="checkbox" value="D3-7-1-1" name="theB103"><b>7-1-1</b></td>
                          <td class="ex" id="D3-7-2-1"><input type="checkbox" value="D3-7-2-1" name="theB103"><b>7-2-1</b></td>
                          <td class="ex" id="D3-7-3-1"><input type="checkbox" value="D3-7-3-1" name="theB103"><b>7-3-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-7-1-2"><input type="checkbox" value="D3-7-1-2" name="theB103"><b>7-1-2</b></td>
                          <td class="ex" id="D3-7-2-2"><input type="checkbox" value="D3-7-2-2" name="theB103"><b>7-2-2</b></td>
                          <td class="ex" id="D3-7-3-2"><input type="checkbox" value="D3-7-3-2" name="theB103"><b>7-3-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-7-1-3"><input type="checkbox" value="D3-7-1-3" name="theB103"><b>7-1-3</b></td>
                          <td class="ex" id="D3-7-2-3"><input type="checkbox" value="D3-7-2-3" name="theB103"><b>7-2-3</b></td>
                          <td class="ex" id="D3-7-3-3"><input type="checkbox" value="D3-7-3-3" name="theB103"><b>7-3-3</b></td>
                        </tr>
                      </table>
                    </div>
                    <div class="part2"></div>
                    <div class="ri">
                    <table>
                        <tr>
                          <td class="ex" id="D3-6-1-1"><input type="checkbox" value="D3-6-1-1" name="theB103"><b>6-1-1</b></td>
                          <td class="ex" id="D3-6-2-1"><input type="checkbox" value="D3-6-2-1" name="theB103"><b>6-2-1</b></td>
                          <td class="ex" id="D3-6-3-1"><input type="checkbox" value="D3-6-3-1" name="theB103"><b>6-3-1</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-6-1-2"><input type="checkbox" value="D3-6-1-2" name="theB103"><b>6-1-2</b></td>
                          <td class="ex" id="D3-6-2-2"><input type="checkbox" value="D3-6-2-2" name="theB103"><b>6-2-2</b></td>
                          <td class="ex" id="D3-6-3-2"><input type="checkbox" value="D3-6-3-2" name="theB103"><b>6-3-2</b></td>
                        </tr>
                        <tr>
                          <td class="ex" id="D3-6-1-3"><input type="checkbox" value="D3-6-1-3" name="theB103"><b>6-1-3</b></td>
                          <td class="ex" id="D3-6-2-3"><input type="checkbox" value="D3-6-2-3" name="theB103"><b>6-2-3</b></td>
                          <td class="ex" id="D3-6-3-3"><input type="checkbox" value="D3-6-3-3" name="theB103"><b>6-3-3</b></td>
                        </tr>
                      </table></div>
                    <div class="clearfix"></div>
                  </div>
                </div>                
                  <select class="mutibox" name="theCaozuo" id="testSelectB103">
                    <option value="1" selected>锁定</option>
                    <option value="0">开放</option>
                  </select>
                <button class="gallery_add" type="submit" onclick="theB103Click();">修改</button>  
                <div class="clearfix"></div>
              </form>
              </div>
            </div>
          </div>
          <!-- 东附楼B103备注 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>B103光照培养室-备注<small>Light Culture Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">                            
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <input type="text" id="idInfor" value="<?php echo ($DataofB103["id"]); ?>" hidden>
                     <!-- <script id='container' style="height:350px;" name='content' type="text/plain"></script> -->
                     <div id="editor2">
                       <p><?php echo ($DataofB103); ?></p>
                     </div><br>
                  <br><button type="button" id="B103Submit" class="btn btn-primary">修改</button>
              </div>          
            </div>
          </div> 
          <!-- 东辅楼B103申请 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>B103光照培养室内申请<small>Light Culture Room Application</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th style="width: 50px;">序号</th>
                    <th >设施位置</th>
                    <th >设施名称</th>
                    <th >设施编号</th>
                    <th >开始时间</th>
                    <th >结束时间</th>
                    <th >样品物种</th>
                    <th >备注</th>
                    <th >预约人</th>
                    <th >时间</th>
                    <th >状态</th>
                    <th >操作</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($dataB103)): $i = 0; $__LIST__ = $dataB103;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($items["sslocation"]); ?></td>
                        <td><?php echo ($items["ssname"]); ?></td>
                        <td><?php echo ($items["yqid"]); ?></td>
                        <td><?php echo ($items["ks"]); ?></td>
                        <td><?php echo ($items["js"]); ?></td>
                        <td><?php echo ($items["ypwz"]); ?></td>
                        <td><?php echo ($items["other"]); ?></td>
                        <td><?php echo ($items["uid"]); ?></td>
                        <td><?php echo ($items["date"]); ?></td>
                        <?php if ($items['status'] == 0) { ?>
                            <td>等待批准</td>
                        <?php } else if ($items['status'] == 1) { ?>
                            <td>已批准</td>
                        <?php } else { ?>
                          <td>已拒绝</td>
                        <?php } ?>
                        
                        <td>
                          <a href="/hzau/hzaulab/index.php/Admin/Room/doAgree1/id/<?php echo ($items["id"]); ?>">同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <!-- <a href="#" data-toggle="modal" data-target="#myModal3" >拒绝 <i class="fa fa-close"></i></a> -->
                          <a href="/hzau/hzaulab/index.php/Admin/Room/doReject1/id/<?php echo ($items["id"]); ?>" >拒绝 <i class="fa fa-close"></i></a>

                        </td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div> 
          <!-- 东辅楼B103申请历史 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>B103光照培养室内申请历史<small>Light Culture Room History</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th style="width: 50px;">序号</th>
                    <th >设施位置</th>
                    <th >设施名称</th>
                    <th >设施编号</th>
                    <th >开始时间</th>
                    <th >结束时间</th>
                    <th >样品物种</th>
                    <th >备注</th>
                    <th >预约人</th>
                    <th >时间</th>
                    <th> 操作</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($checkedB103)): $i = 0; $__LIST__ = $checkedB103;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($items["sslocation"]); ?></td>
                        <td><?php echo ($items["ssname"]); ?></td>
                        <td><?php echo ($items["yqid"]); ?></td>
                        <td><?php echo ($items["ks"]); ?></td>
                        <td><?php echo ($items["js"]); ?></td>
                        <td><?php echo ($items["ypwz"]); ?></td>
                        <td><?php echo ($items["other"]); ?></td>
                        <td><?php echo ($items["uid"]); ?></td>
                        <td><?php echo ($items["date"]); ?></td>
                        <?php if ($items['status'] == 0) { ?>
                            <td>等待批准</td>
                        <?php } else if ($items['status'] == 1) { ?>
                            <td>已批准</td>
                        <?php } else { ?>
                          <td>已拒绝</td>
                        <?php } ?>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
                <br><br>
                <form action="/hzau/hzaulab/index.php/Admin/Room/doTheExport2" method="post">
                  <input type="text" name="value" value="东附楼B103" hidden>
                  <button type="submit" class="gallery_add">导出Excel</button>
                </form>
              </div>
            </div>
          </div>
          <!-- 主楼136地图 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-width:800px ;">
              <div class="x_title">
                <h2>主楼136<small>Light Culture Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form>
                  <div class="color">
                    占用：<span class="hintred"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    锁定：<span class="hintgrey"></span>  &nbsp;&nbsp;&nbsp;&nbsp;
                    开放：<span class="hintunlock"></span> 
                  </div>
                  <div class="Z136">
                    <div class="Z_up">
                      <table>
                      <tr>
                        <td class="ex" id="D6-1-3-1"> <input type="checkbox" value="D6-1-3-1"  name="theB102"><br><b>1-1-1</b></td>
                        <td class="ex" id="D6-1-3-2"> <input type="checkbox" value="D6-1-3-2"  name="theB102"><br><b>1-3-2</b></td>
                        <td class="ex" id="D6-1-3-3"> <input type="checkbox" value="D6-1-3-3"  name="theB102"><br><b>1-3-3</b></td>
                      </tr>
                      <tr>
                        <td class="ex" id="D6-1-2-1"> <input type="checkbox" value="D6-1-2-1"  name="theB102"><br><b>1-2-1</b></td>
                        <td class="ex" id="D6-1-2-2"> <input type="checkbox" value="D6-1-2-2"  name="theB102"><br><b>1-2-2</b></td>
                        <td class="ex" id="D6-1-2-3"> <input type="checkbox" value="D6-1-2-3"  name="theB102"><br><b>1-2-3</b></td>
                      </tr>
                      <tr>
                        <td class="ex" id="D6-1-1-1"> <input type="checkbox" value="D6-1-1-1"  name="theB102"><br><b>1-1-1</b></td>
                        <td class="ex" id="D6-1-1-2"> <input type="checkbox" value="D6-1-1-2"  name="theB102"><br><b>1-1-2</b></td>
                        <td class="ex" id="D6-1-1-3"> <input type="checkbox" value="D6-1-1-3"  name="theB102"><br><b>1-1-3</b></td>
                      </tr>
                    </table>
                    </div>
                    <div class="Z_mid">
                        
                    </div>
                    <div class="Z_dpwn">
                      
                    </div>

                  </div>                
                  <select class="mutibox" name="theCaozuo" id="testSelectB103">
                    <option value="1" selected>锁定</option>
                    <option value="0">开放</option>
                  </select>
                <button class="gallery_add" type="submit" onclick="theB103Click();">修改</button>  
                <div class="clearfix"></div>
              </form>
              </div>
            </div>
          </div>
          <!-- 主楼136备注 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>主楼136-备注<small>Light Culture Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">                            
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <input type="text" id="idInfor" value="<?php echo ($DataofB103["id"]); ?>" hidden>
                     <!-- <script id='container' style="height:350px;" name='content' type="text/plain"></script> -->
                     <div id="editor3">
                       <p><?php echo ($DataofB103); ?></p>
                     </div><br>
                  <br><button type="button" id="B103Submit" class="btn btn-primary">修改</button>
              </div>          
            </div>
          </div> 
          <!-- 主楼136申请 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>主楼136申请<small>Light Culture Room Application</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th style="width: 50px;">序号</th>
                    <th >设施位置</th>
                    <th >设施名称</th>
                    <th >设施编号</th>
                    <th >开始时间</th>
                    <th >结束时间</th>
                    <th >样品物种</th>
                    <th >备注</th>
                    <th >预约人</th>
                    <th >时间</th>
                    <th >状态</th>
                    <th >操作</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($dataB103)): $i = 0; $__LIST__ = $dataB103;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($items["sslocation"]); ?></td>
                        <td><?php echo ($items["ssname"]); ?></td>
                        <td><?php echo ($items["yqid"]); ?></td>
                        <td><?php echo ($items["ks"]); ?></td>
                        <td><?php echo ($items["js"]); ?></td>
                        <td><?php echo ($items["ypwz"]); ?></td>
                        <td><?php echo ($items["other"]); ?></td>
                        <td><?php echo ($items["uid"]); ?></td>
                        <td><?php echo ($items["date"]); ?></td>
                        <?php if ($items['status'] == 0) { ?>
                            <td>等待批准</td>
                        <?php } else if ($items['status'] == 1) { ?>
                            <td>已批准</td>
                        <?php } else { ?>
                          <td>已拒绝</td>
                        <?php } ?>
                        
                        <td>
                          <a href="/hzau/hzaulab/index.php/Admin/Room/doAgree1/id/<?php echo ($items["id"]); ?>">同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <!-- <a href="#" data-toggle="modal" data-target="#myModal3" >拒绝 <i class="fa fa-close"></i></a> -->
                          <a href="/hzau/hzaulab/index.php/Admin/Room/doReject1/id/<?php echo ($items["id"]); ?>" >拒绝 <i class="fa fa-close"></i></a>

                        </td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div> 
          <!-- 主楼136申请历史 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>主楼136申请历史<small>Light Culture Room History</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th style="width: 50px;">序号</th>
                    <th >设施位置</th>
                    <th >设施名称</th>
                    <th >设施编号</th>
                    <th >开始时间</th>
                    <th >结束时间</th>
                    <th >样品物种</th>
                    <th >备注</th>
                    <th >预约人</th>
                    <th >时间</th>
                    <th> 操作</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(is_array($checkedB103)): $i = 0; $__LIST__ = $checkedB103;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($items["sslocation"]); ?></td>
                        <td><?php echo ($items["ssname"]); ?></td>
                        <td><?php echo ($items["yqid"]); ?></td>
                        <td><?php echo ($items["ks"]); ?></td>
                        <td><?php echo ($items["js"]); ?></td>
                        <td><?php echo ($items["ypwz"]); ?></td>
                        <td><?php echo ($items["other"]); ?></td>
                        <td><?php echo ($items["uid"]); ?></td>
                        <td><?php echo ($items["date"]); ?></td>
                        <?php if ($items['status'] == 0) { ?>
                            <td>等待批准</td>
                        <?php } else if ($items['status'] == 1) { ?>
                            <td>已批准</td>
                        <?php } else { ?>
                          <td>已拒绝</td>
                        <?php } ?>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
                <br><br>
                <form action="/hzau/hzaulab/index.php/Admin/Room/doTheExport2" method="post">
                  <input type="text" name="value" value="东附楼B103" hidden>
                  <button type="submit" class="gallery_add">导出Excel</button>
                </form>
              </div>
            </div>
          </div>  

      </div>
     <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
              </button>
              <h4 class="modal-title" id="myModalLabel">
                回拒
              </h4>
            </div>
            <div class="modal-body">
              <form class="form" action="" method="post">
                 <span class="eqthint">拒绝理由：</span><input type="textarea" class="gallery_textarea" name="gallery_title"><hr>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
              <button type="button" class="btn btn-primary">提交</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal -->
      </div>
        <!--************************************************* 底部版权 *************************************************-->
      <footer id="footer">
    <div class="pull-right">
		CopyRight©2017 <a href="/hzau/hzaulab/index.php/Home/Index/index.html" target="_blank" title="华中农业大学作物学实验教学中心">华中农业大学作物学实验教学中心</a> <a href="http://www.52feidian.com/" title="华中农业大学 沸点工作室" target="_blank">华中农业大学 沸点工作室</a>
	</div>
	<div class="clearfix"></div>    
</footer>

      <script src="/hzau/hzaulab/Public/Js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="/hzau/hzaulab/Public/Js/wangEditor.js"></script>
      <script type="text/javascript" src="/hzau/hzaulab/Public/Js/wangEditor.min.js"></script>

      <!-- 当前的使用信息B102 -->
      <script type="text/javascript">
        var allGzB102 = <?php echo json_encode($allGzB102); ?>;
        for (value in allGzB102) {
          var openPot = document.getElementById(allGzB102[value]['id']);
          if (allGzB102[value]['status'] == 2) {
            // 当状态为2时候，表示已经被预约，不可进行预约
            openPot.className = openPot.className + ' '+'_red' ;
            // openPot.background = pink;
            openPot.title = "状态：已预约(本人)；时间：8-15";
            // console.log(openPot.title);
          } else if (allGzB102[value]['status'] == 3) {
              // 当状态为3的时候，表示已经被占用，不可进行预约
              openPot.className = openPot.className + ' '+'_orange' ;
              openPot.title = "状态：占用；时间：8-15";
          } else if (allGzB102[value]['status'] == 1) {
              // 当状态为1的时候，表示已经被锁定，不可进行预约
              openPot.className = openPot.className + ' '+'_grey' ;
              openPot.title = "状态：锁定；时间：8-15";
          }
        }
      </script>
      <!-- 当前的使用信息B103 -->
      <script type="text/javascript">
        var allGzB103 = <?php echo json_encode($allGzB103); ?>;
        for (value in allGzB103) {
          var openPot = document.getElementById(allGzB103[value]['id']);
          if (allGzB103[value]['status'] == 2) {
            // 当状态为2时候，表示已经被预约，不可进行预约
            openPot.className = openPot.className + ' '+'_red' ;
            // openPot.background = pink;
            openPot.title = "状态：已预约(本人)；时间：8-15";
            // console.log(openPot.title);
          } else if (allGzB103[value]['status'] == 3) {
              // 当状态为3的时候，表示已经被占用，不可进行预约
              openPot.className = openPot.className + ' '+'_orange' ;
              openPot.title = "状态：占用；时间：8-15";
          } else if (allGzB103[value]['status'] == 1) {
              // 当状态为1的时候，表示已经被锁定，不可进行预约
              openPot.className = openPot.className + ' '+'_grey' ;
              openPot.title = "状态：锁定；时间：8-15";
          }
        }
      </script>

      <!-- 这里是东辅楼B102的备注修改 -->
      <script type="text/javascript">
        var E = window.wangEditor;
        var editorB102 = new E(document.getElementById('editorB102'));
        editorB102.create();
        console.log(editorB102);
        console.log("javascript");
        $(function() {
            $('#B102Submit').click(function () {
                // 获取编辑器区域完整html代码
                var html = editorB102.$textContainerElem.html();
                // 获取编辑器纯文本内容
                var text = editorB102.$textContainerElem.text();
                console.log(text);
                console.log(html);

                var param = {
                    id :4,
                    msct:html
                };
                console.log(param);
                $.ajax({
                    url: '/hzau/hzaulab/index.php/Admin/Room/changeSomething',//路径
                    type: 'POST',
                    dataType: 'json',
                    data: param,
                    success: function(data){
                        alert("修改成功！");
                        console.log(data);
                        window.location.href=window.location.href;//返回路径
                    },
                    error: function(xhr){
                        alert("修改失败，请检查网络");
                        console.log(xhr);
                    }
                });
            });
        });
      </script>
      <!-- 这里是东辅楼B103的备注修改 -->
      <script type="text/javascript">
        var E = window.wangEditor;
        var editorB103 = new E(document.getElementById('editor2'));
        editorB103.create();
        console.log("javascript");
        $(function() {
            $('#B103Submit').click(function () {
                // 获取编辑器区域完整html代码
                var html = editorB103.$textContainerElem.html();
                // 获取编辑器纯文本内容
                var text = editorB103.$textContainerElem.text();
                var param = {
                    id :5,
                    msct:html
                };
                console.log(param);
                $.ajax({
                    url: '/hzau/hzaulab/index.php/Admin/Room/changeSomething',//路径
                    type: 'POST',
                    dataType: 'json',
                    data: param,
                    success: function(data){
                        alert("修改成功！");
                        console.log(data);
                        window.location.href=window.location.href;//返回路径
                    },
                    error: function(xhr){
                        alert("修改失败，请检查网络");
                        console.log(xhr);
                    }
                });
            });
        });
      </script>
      <!-- 136编辑器 -->
      <script type="text/javascript">
        var E = window.wangEditor;
        var editor136 = new E(document.getElementById('editor3'));
        editor136.create();
      </script>
      <!-- 获取选定的东辅楼B102 -->
      <script type="text/javascript">
        function theB102Click(argument) {
          // body...
            obj = document.getElementsByName("theB102");
            console.log(obj);
            check_val = [];
            for(k in obj){
                if(obj[k].checked)
                    check_val.push(obj[k].value);
                console.log(obj[k].value);
            }
            console.log(check_val);

            var testSelect = document.getElementById("testSelectB102"); //定位id
            var index = testSelect.selectedIndex; // 选中索引
            var text = testSelect.options[index].text; // 选中文本
            var value = testSelect.options[index].value; // 选中值
            if (!check_val.length) {
              alert("请选定要处理的设备！");
            }
            console.log(check_val);
            $.ajax({
                url: '/hzau/hzaulab/index.php/Admin/Room/changeTheStatus2',//路径
                type: 'POST',
                dataType: 'json',
                data: {
                  'thecontent': check_val,
                  'caozuo': value,
                },
                success: function(data){
                    alert("设定成功");
                    console.log(data);
                    window.location.href=window.location.href;//返回路径
                },
                error: function(xhr){
                    alert("修改失败，请检查网络");
                    console.log(xhr);
                }
            });
        }
      </script>

      <!-- 获取选定的东辅楼B103 -->
      <script type="text/javascript">
        function theB103Click(argument) {
          // body...
            obj = document.getElementsByName("theB103");
            console.log(obj);
            check_val = [];
            for(k in obj){
                if(obj[k].checked)
                    check_val.push(obj[k].value);
                console.log(obj[k].value);
            }
            console.log(check_val);

            var testSelect = document.getElementById("testSelectB103"); //定位id
            var index = testSelect.selectedIndex; // 选中索引
            var text = testSelect.options[index].text; // 选中文本
            var value = testSelect.options[index].value; // 选中值
            if (!check_val.length) {
              alert("请选定要处理的设备！");
            }
            $.ajax({
                url: '/hzau/hzaulab/index.php/Admin/Room/changeTheStatus2',//路径
                type: 'POST',
                dataType: 'json',
                data: {
                  'thecontent': check_val,
                  'caozuo': value,
                },
                success: function(data){
                    alert("设定成功");
                    console.log(data);
                    window.location.href=window.location.href;//返回路径
                },
                error: function(xhr){
                    alert("修改失败，请检查网络");
                    console.log(xhr);
                }
            });
        }
      </script>

      </div>
    </div>

    <!--************************************************* publc JS *************************************************-->
     <!-- jQuery -->
<script src="/hzau/hzaulab/Public/back/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/hzau/hzaulab/Public/back/include/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="/hzau/hzaulab/Public/back/js/custom.min.js"></script>



    <!-- <script src="/hzau/hzaulab/Public/back/include/datatables.net/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="/hzau/hzaulab/Public/back/include/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
  </body>
</html>