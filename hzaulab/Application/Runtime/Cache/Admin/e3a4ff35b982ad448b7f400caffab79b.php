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
    <link rel="stylesheet" type="text/css" href="/hzau/hzaulab/Public/back/css/Wimbledon.css">
    <link rel="stylesheet" type="text/css" href="/hzau/hzaulab/Public/back/css/pot.css">
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
          <!-- 山南温网室地图 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-width: 865px;">
              <div class="x_title">
                <h2>山南温网室<small>Wimbledon Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form class="theSouthForm">
                <div class="color">
                    占用：<span class="hintred"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    锁定：<span class="hintgrey"></span>  &nbsp;&nbsp;&nbsp;&nbsp;
                    开放：<span class="hintunlock"></span> 
                  </div>
                  <div class="southWimbledon">
                  <div class="le">
                    <div class="up">
                      <table>
                        <tr><td id="SC1-1" class="ex"><input type="checkbox" name="theSouth" value="SC1-1"><br><b>SC1-1</b></td></tr>
                      </table>
                      <table>
                        <tr><td id="SC1-2" class="ex"><input type="checkbox" name="theSouth" value="SC1-2"><br><b>SC1-2</b></td></tr>
                      </table>
                    </div>
                    <div class="part1"></div>
                    <div class="down">
                      <table>
                        <tr><td id="SC1-3" class="ex"><input type="checkbox" name="theSouth" value="SC1-3"><br><b>SC1-3</b></td></tr>
                      </table>
                      <table>
                        <tr><td id="SC1-4" class="ex"><input type="checkbox" name="theSouth" value="SC1-4"><br><b>SC1-4</b></td></tr>
                      </table>
                     </div>
                  </div>                                               
                  <div class="ri">
                    <div class="up">
                      <div class="first">
                        <div>
                          <table>
                            <tr>
                              <td id="SB6-4b" class="ex"><input type="checkbox" name="theSouth" value="SB6-4b"><br><b>SB6-4b</b></td>
                              <td id="SB6-3b" class="ex"><input type="checkbox" name="theSouth" value="SB6-3b"><br><b>SB6-3b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB6-2b" class="ex"><input type="checkbox" name="theSouth" value="SB6-2b"><br><b>SB6-2b</b></td>
                              <td id="SB6-1b" class="ex"><input type="checkbox" name="theSouth" value="SB6-1b"><br><b>SB6-1b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB6-4a" class="ex"><input type="checkbox" name="theSouth" value="SB6-4a"><br><b>SB6-4a</b></td>
                              <td id="SB6-3a" class="ex"><input type="checkbox" name="theSouth" value="SB6-3a"><br><b>SB6-3a</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB6-2a" class="ex"><input type="checkbox" name="theSouth" value="SB6-2a"><br><b>SB6-2a</b></td>
                              <td id="SB6-1a" class="ex"><input type="checkbox" name="theSouth" value="SB6-1a"><br><b>SB6-1a</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <table>
                            <tr>
                              <td id="SB5-4b" class="ex"><input type="checkbox" name="theSouth" value="SB5-4b"><br><b>SB5-4b</b></td>
                              <td id="SB5-3b" class="ex"><input type="checkbox" name="theSouth" value="SB5-3b"><br><b>SB5-3b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB5-2b" class="ex"><input type="checkbox" name="theSouth" value="SB5-2b"><br><b>SB5-2b</b></td>
                              <td id="SB5-1b" class="ex"><input type="checkbox" name="theSouth" value="SB5-1b"><br><b>SB5-1b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB5-4a" class="ex"><input type="checkbox" name="theSouth" value="SB5-4a"><br><b>SB5-4a</b></td>
                              <td id="SB5-3a" class="ex"><input type="checkbox" name="theSouth" value="SB5-3a"><br><b>SB2-3a</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB5-2a" class="ex"><input type="checkbox" name="theSouth" value="SB5-2a"><br><b>SB5-2a</b></td>
                              <td id="SB2-1a" class="ex"><input type="checkbox" name="theSouth" value="SB2-1a"><br><b>SB2-1a</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <table>
                            <tr>
                              <td id="SB4-4b" class="ex"><input type="checkbox" name="theSouth" value="SB4-4b"><br><b>SB4-4b</b></td>
                              <td id="SB4-3b" class="ex"><input type="checkbox" name="theSouth" value="SB4-3b"><br><b>SB4-3b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB4-2b" class="ex"><input type="checkbox" name="theSouth" value="SB4-2b"><br><b>SB4-2b</b></td>
                              <td id="SB4-1b" class="ex"><input type="checkbox" name="theSouth" value="SB4-1b"><br><b>SB4-1b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB4-4a" class="ex"><input type="checkbox" name="theSouth" value="SB4-4a"><br><b>SB4-4a</b></td>
                              <td id="SB4-3a" class="ex"><input type="checkbox" name="theSouth" value="SB4-3a"><br><b>SB4-3a</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB4-2a" class="ex"><input type="checkbox" name="theSouth" value="SB4-2a"><br><b>SB4-2a</b></td>
                              <td id="SB4-1a" class="ex"><input type="checkbox" name="theSouth" value="SB4-1a"><br><b>SB4-1a</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                      <div class="second">
                        <div>
                          <table>
                            <tr>
                              <td id="SB3-4b" class="ex"><input type="checkbox" name="theSouth" value="SB3-4b"><br><b>SB3-4b</b></td>
                              <td id="SB3-3b" class="ex"><input type="checkbox" name="theSouth" value="SB3-3b"><br><b>SB3-3b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB3-2b" class="ex"><input type="checkbox" name="theSouth" value="SB3-2b"><br><b>SB3-2b</b></td>
                              <td id="SB3-1b" class="ex"><input type="checkbox" name="theSouth" value="SB3-1b"><br><b>SB3-1b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB3-4a" class="ex"><input type="checkbox" name="theSouth" value="SB3-4a"><br><b>SB3-4a</b></td>
                              <td id="SB3-3a" class="ex"><input type="checkbox" name="theSouth" value="SB3-3a"><br><b>SB3-3a</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB3-2a" class="ex"><input type="checkbox" name="theSouth" value="SB3-2a"><br><b>SB3-2a</b></td>
                              <td id="SB3-1a" class="ex"><input type="checkbox" name="theSouth" value="SB3-1a"><br><b>SB3-1a</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <table>
                            <tr>
                              <td id="SB2-4b" class="ex"><input type="checkbox" name="theSouth" value="SB2-4b"><br><b>SB2-4b</b></td>
                              <td id="SB2-3b" class="ex"><input type="checkbox" name="theSouth" value="SB2-3b"><br><b>SB2-3b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB2-2b" class="ex"><input type="checkbox" name="theSouth" value="SB2-2b"><br><b>SB2-2b</b></td>
                              <td id="SB2-1b" class="ex"><input type="checkbox" name="theSouth" value="SB2-1b"><br><b>SB2-1b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB2-4a" class="ex"><input type="checkbox" name="theSouth" value="SB2-4a"><br><b>SB2-4a</b></td>
                              <td id="SB2-3a" class="ex"><input type="checkbox" name="theSouth" value="SB2-3a"><br><b>SB2-3a</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB2-2a" class="ex"><input type="checkbox" name="theSouth" value="SB2-2a"><br><b>SB2-2a</b></td>
                              <td id="SB2-1a" class="ex"><input type="checkbox" name="theSouth" value="SB2-1a"><br><b>SB2-1a</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <table>
                            <tr>
                              <td id="SB1-4b" class="ex"><input type="checkbox" name="theSouth" value="SB1-4b"><br><b>SB1-4b</b></td>
                              <td id="SB1-3b" class="ex"><input type="checkbox" name="theSouth" value="SB1-3b"><br><b>SB1-3b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB1-2b" class="ex"><input type="checkbox" name="theSouth" value="SB1-2b"><br><b>SB1-2b</b></td>
                              <td id="SB1-1b" class="ex"><input type="checkbox" name="theSouth" value="SB1-1b"><br><b>SB1-1b</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB1-4a" class="ex"><input type="checkbox" name="theSouth" value="SB1-4a"><br><b>SB1-4a</b></td>
                              <td id="SB1-3a" class="ex"><input type="checkbox" name="theSouth" value="SB1-3a"><br><b>SB1-3a</b></td>
                            </tr>
                          </table>
                          <table>
                            <tr>
                              <td id="SB1-2a" class="ex"><input type="checkbox" name="theSouth" value="SB1-2a"><br><b>SB1-2a</b></td>
                              <td id="SB1-1a" class="ex"><input type="checkbox" name="theSouth" value="SB1-1a"><br><b>SB1-1a</b></td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                      <div class="third">
                        <div class="col">
                          <div class="up">
                            <table>
                              <tr><td id="SA2-14" class="ex"><input type="checkbox" name="theSouth" value="SA2-14"><br><b>SA2-14</b></td></tr>
                              <tr><td id="SA2-13" class="ex"><input type="checkbox" name="theSouth" value="SA2-13"><br><b>SA2-13</b></td></tr>
                              <tr><td id="SA2-12" class="ex"><input type="checkbox" name="theSouth" value="SA2-12"><br><b>SA2-12</b></td></tr>
                              <tr><td id="SA2-11" class="ex"><input type="checkbox" name="theSouth" value="SA2-11"><br><b>SA2-11</b></td></tr>
                            </table>
                          </div>
                          <div class="spart"></div>
                          <div class="down">
                            <table>
                              <tr><td id="SA2-6" class="ex"><input type="checkbox" name="theSouth" value="SA2-6"><br><b>SA2-6</b></td></tr>
                              <tr><td id="SA2-5" class="ex"><input type="checkbox" name="theSouth" value="SA2-5"><br><b>SA2-5</b></td></tr>
                              <tr><td id="SA2-4" class="ex"><input type="checkbox" name="theSouth" value="SA2-4"><br><b>SA2-4</b></td></tr>
                            </table>
                          </div>
                        </div>
                        <div class="col">
                          <div class="up">
                            <table>
                              <tr><td id="SA2-10" class="ex"><input type="checkbox" name="theSouth" value="SA2-10"><br><b>SA2-10</b></td></tr>
                              <tr><td id="SA2-9" class="ex"><input type="checkbox" name="theSouth" value="SA2-9"><br><b>SA2-9</b></td></tr>
                              <tr><td id="SA2-8" class="ex"><input type="checkbox" name="theSouth" value="SA2-8"><br><b>SA2-8</b></td></tr>
                              <tr><td id="SA2-7" class="ex"><input type="checkbox" name="theSouth" value="SA2-7"><br><b>SA2-7</b></td></tr>
                            </table>
                          </div>
                          <div class="spart"></div>
                          <div class="down">
                            <table>
                              <tr><td id="SA2-3" class="ex"><input type="checkbox" name="theSouth" value="SA2-3"><br><b>SA2-3</b></td></tr>
                              <tr><td id="SA2-2" class="ex"><input type="checkbox" name="theSouth" value="SA2-2"><br><b>SA2-2</b></td></tr>
                              <tr><td id="SA2-1" class="ex"><input type="checkbox" name="theSouth" value="SA2-1"><br><b>SA2-1</b></td></tr>
                            </table>
                          </div>
                        </div>
                        <div class="col">
                          <div class="up">
                            <table>
                              <tr><td id="SA1-14" class="ex"><input type="checkbox" name="theSouth" value="SA1-14"><br><b>SA1-14</b></td></tr>
                              <tr><td id="SA1-13" class="ex"><input type="checkbox" name="theSouth" value="SA1-13"><br><b>SA1-13</b></td></tr>
                              <tr><td id="SA1-12" class="ex"><input type="checkbox" name="theSouth" value="SA1-12"><br><b>SA1-12</b></td></tr>
                              <tr><td id="SA1-11" class="ex"><input type="checkbox" name="theSouth" value="SA1-11"><br><b>SA1-11</b></td></tr>
                            </table>
                          </div>
                          <div class="spart"></div>
                          <div class="down">
                            <table>
                              <tr><td id="SA1-6" class="ex"><input type="checkbox" name="theSouth" value="SA1-6"><br><b>SA1-6</b></td></tr>
                              <tr><td id="SA1-5" class="ex"><input type="checkbox" name="theSouth" value="SA1-5"><br><b>SA1-5</b></td></tr>
                              <tr><td id="SA1-4" class="ex"><input type="checkbox" name="theSouth" value="SA1-4"><br><b>SA1-4</b></td></tr>
                            </table>
                          </div>
                        </div>
                        <div class="col">
                          <div class="up">
                            <table>
                              <tr><td id="SA1-10" class="ex"><input type="checkbox" name="theSouth" value="SA1-10"><br><b>SA1-10</b></td></tr>
                              <tr><td id="SA1-9" class="ex"><input type="checkbox" name="theSouth" value="SA1-9"><br><b>SA1-9</b></td></tr>
                              <tr><td id="SA1-8" class="ex"><input type="checkbox" name="theSouth" value="SA1-8"><br><b>SA1-8</b></td></tr>
                              <tr><td id="SA1-7" class="ex"><input type="checkbox" name="theSouth" value="SA1-7"><br><b>SA1-7</b></td></tr>
                            </table>
                          </div>
                          <div class="spart"></div>
                          <div class="down">
                            <table>
                              <tr><td id="SA1-3" class="ex"><input type="checkbox" name="theSouth" value="SA1-3"><br><b>SA1-3</b></td></tr>
                              <tr><td id="SA1-2" class="ex"><input type="checkbox" name="theSouth" value="SA1-2"><br><b>SA1-2</b></td></tr>
                              <tr><td id="SA1-1" class="ex"><input type="checkbox" name="theSouth" value="SA1-1"><br><b>SA1-1</b></td></tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="down">
                      <table>
                        <tr><td id="SC2-1" class="ex"><input type="checkbox" name="theSouth" value="SC2-1"><br><b>SC2-1</b></td></tr>
                      </table>
                      <table>
                        <tr><td id="SC2-2" class="ex"><input type="checkbox" name="theSouth" value="SC2-2"><br><b>SC2-2</b></td></tr>
                      </table>
                      <table>
                        <tr><td id="SC2-3" class="ex"><input type="checkbox" name="theSouth" value="SC2-3"><br><b>SC2-3</b></td></tr>
                      </table>
                      <table>
                        <tr><td id="SC2-4" class="ex"><input type="checkbox" name="theSouth" value="SC2-4"><br><b>SC2-4</b></td></tr>
                      </table>
                      <table>
                        <tr><td id="SC2-5" class="ex"><input type="checkbox" name="theSouth" value="SC2-5"><br><b>SC2-5</b></td></tr>
                      </table>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div><br>
                  <select class="mutibox" name="theCaozuo" id="testSelectSouth">
                    <option value="1" selected>锁定</option>
                    <option value="0">开放</option>
                  </select>
                  <button type="button" class="gallery_add" onclick="theClick()">修改</button>
                </form>
                <br>
              </div>
            </div>
          </div>
          <!-- 山南温网室备注 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>温网室-备注<small>Field Facility</small></h2>
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
                     <div id="editor">
                       <p>
                         <?php echo ($thecontentsouth); ?>
                       </p>
                     </div><br>
                  <br><button type="button" id="southSubmit" class="btn btn-primary">修改</button>
                <br>
              </div>           
            </div>
          </div>
          <!-- 山南温网室待批准申请 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>山南温网室申请<small>Wimbledon Room Application</small></h2>
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
                    <?php if(is_array($dataSouth)): $i = 0; $__LIST__ = $dataSouth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
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
                          <a href="/hzau/hzaulab/index.php/Admin/Room/doAgree/id/<?php echo ($items["id"]); ?>">同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <!-- <a href="#" data-toggle="modal" data-target="#myModal3" >拒绝 <i class="fa fa-close"></i></a> -->
                          <a href="/hzau/hzaulab/index.php/Admin/Room/doReject/id/<?php echo ($items["id"]); ?>" >拒绝 <i class="fa fa-close"></i></a>

                        </td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- 山南温网室申请历史 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>山南温网室申请历史<small>Wimbledon Room Application History</small></h2>
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
                    <?php if(is_array($checkedSouth)): $i = 0; $__LIST__ = $checkedSouth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
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
                <form action="/hzau/hzaulab/index.php/Admin/Room/doTheExport" method="post">
                  <input type="text" name="value" value="山南" hidden>
                  <button type="submit" class="gallery_add">导出Excel</button>
                </form>
              </div>
            </div>
          </div>
          <!-- 山北温网室地图 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-width: 800px;">
              <div class="x_title">
                <h2>山北温网室<small>Wimbledon Room</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form class="theNorthForm">
                  <div class="color">
                    占用：<span class="hintred"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    锁定：<span class="hintgrey"></span>  &nbsp;&nbsp;&nbsp;&nbsp;
                    开放：<span class="hintunlock"></span> 
                  </div>
                  <div class="northWimbledon">
                  <div class="le">
                    <table>
                      <tr>
                        <td class="ex" id="N5-11"><input type="checkbox" name="theNorth" value="N5-11"><br><b>N5-11</b></td>
                        <td class="ex" id="N5-9"><input type="checkbox" name="theNorth" value="N5-9"><br><b>N5-9</b></td>
                        <td class="ex" id="N5-7"><input type="checkbox" name="theNorth" value="N5-7"><br><b>N5-7</b></td>
                        <td class="ex" id="N5-5"><input type="checkbox" name="theNorth" value="N5-5"><br><b>N5-5</b></td>
                        <td class="ex" id="N5-3"><input type="checkbox" name="theNorth" value="N5-3"><br><b>N5-3</b></td>
                        <td class="ex" id="N5-1"><input type="checkbox" name="theNorth" value="N5-1"><br><b>N5-1</b></td>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <td class="ex" id="N5-12"><input type="checkbox" name="theNorth" value="N5-12"><br><b>N5-12</b></td>
                        <td class="ex" id="N5-10"><input type="checkbox" name="theNorth" value="N5-10"><br><b>N5-10</b></td>
                        <td class="ex" id="N5-8"><input type="checkbox" name="theNorth" value="N5-8"><br><b>N5-8</b></td>
                        <td class="ex" id="N5-6"><input type="checkbox" name="theNorth" value="N5-6"><br><b>N5-6</b></td>
                        <td class="ex" id="N5-4"><input type="checkbox" name="theNorth" value="N5-4"><br><b>N5-4</b></td>
                        <td class="ex" id="N5-2"><input type="checkbox" name="theNorth" value="N5-2"><br><b>N5-2</b></td>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <td class="ex" id="N3-6"><input type="checkbox" name="theNorth" value="N3-6"><br><b>N3-6</b></td>
                        <td class="ex" id="N3-5"><input type="checkbox" name="theNorth" value="N3-5"><br><b>N3-5</b></td>
                        <td class="ex" id="N3-4"><input type="checkbox" name="theNorth" value="N3-4"><br><b>N3-4</b></td>
                        <td class="ex" id="N3-3"><input type="checkbox" name="theNorth" value="N3-3"><br><b>N3-3</b></td>
                        <td class="ex" id="N3-2"><input type="checkbox" name="theNorth" value="N3-2"><br><b>N3-2</b></td>
                        <td class="ex" id="N3-1"><input type="checkbox" name="theNorth" value="N3-1"><br><b>N3-1</b></td>
                      </tr>
                    </table>
                  </div>
                  <div class="ri">
                    <table>
                      <tr>
                        <td class="ex" id="N1-1"><input type="checkbox" name="theNorth" value="N1-1"><br><b>N1-1</b></td>
                        <td class="ex" id="N1-2"><input type="checkbox" name="theNorth" value="N1-2"><br><b>N1-2</b></td>
                        <td class="ex" id="N1-3"><input type="checkbox" name="theNorth" value="N1-3"><br><b>N1-3</b></td>
                        <td class="ex" id="N1-4"><input type="checkbox" name="theNorth" value="N1-4"><br><b>N1-4</b></td>
                        <td class="ex" id="N1-5"><input type="checkbox" name="theNorth" value="N1-5"><br><b>N1-5</b></td>
                        <td class="ex" id="N1-6"><input type="checkbox" name="theNorth" value="N1-6"><br><b>N1-6</b></td>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <td class="ex" id="N4-1"><input type="checkbox" name="theNorth" value="N4-1"><br><b>N4-1</b></td>
                        <td class="ex" id="N4-2"><input type="checkbox" name="theNorth" value="N4-2"><br><b>N4-2</b></td>
                        <td class="ex" id="N4-3"><input type="checkbox" name="theNorth" value="N4-3"><br><b>N4-3</b></td>
                        <td class="ex" id="N4-4"><input type="checkbox" name="theNorth" value="N4-4"><br><b>N4-4</b></td>
                        <td class="ex" id="N4-5"><input type="checkbox" name="theNorth" value="N4-5"><br><b>N4-5</b></td>
                        <td class="ex" id="N4-6"><input type="checkbox" name="theNorth" value="N4-6"><br><b>N4-6</b></td>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <td class="ex" id="N2-1"><input type="checkbox" name="theNorth" value="N2-1"><br><b>N2-1</b></td>
                        <td class="ex" id="N2-2"><input type="checkbox" name="theNorth" value="N2-2"><br><b>N2-2</b></td>
                        <td class="ex" id="N2-3"><input type="checkbox" name="theNorth" value="N2-3"><br><b>N2-3</b></td>
                        <td class="ex" id="N2-4"><input type="checkbox" name="theNorth" value="N2-4"><br><b>N2-4</b></td>
                        <td class="ex" id="N2-5"><input type="checkbox" name="theNorth" value="N2-5"><br><b>N2-5</b></td>
                        <td class="ex" id="N2-6"><input type="checkbox" name="theNorth" value="N2-6"><br><b>N2-6</b></td>
                      </tr>
                    </table>
                  </div>
                <div class="clearfix"></div>
                </div>
                  <select class="mutibox" name="theCaozuo" id="testSelectNorth">
                    <option value="1" selected>锁定</option>
                    <option value="0">开放</option>
                  </select>
                <button class="gallery_add" type="submit" onclick="theNorthClick();">修改</button>  
                </form>
              </div>
            </div>
          </div>
          <!-- 山北温网室备注 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>温网室-备注<small>Field Facility</small></h2>
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
                     <div id="editor2">
                       <p>
                         <?php echo ($thecontentnorth); ?>
                       </p>
                     </div><br>
                  <br><button type="button" id="northSubmit" class="btn btn-primary">修改</button>
                <br>
              </div>         
            </div>
          </div>
          <!-- 山北温网室待批准申请 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>山北温网室申请<small>Wimbledon Room Application</small></h2>
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
                    <?php if(is_array($dataNorth)): $i = 0; $__LIST__ = $dataNorth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
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
                          <a href="/hzau/hzaulab/index.php/Admin/Room/doAgree/id/<?php echo ($items["id"]); ?>">同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <!-- <a href="#" data-toggle="modal" data-target="#myModal3" >拒绝 <i class="fa fa-close"></i></a> -->
                          <a href="/hzau/hzaulab/index.php/Admin/Room/doReject/id/<?php echo ($items["id"]); ?>" >拒绝 <i class="fa fa-close"></i></a>

                        </td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
                <br><br>
                <!-- <div data-toggle="modal" data-target="#myModal2" class="gallery_add">导出Excel</div> -->
              </div>
            </div>
          </div>
          <!-- 山北温网室申请历史 -->
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>山北温网室申请历史<small>Wimbledon Room Application History</small></h2>
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
                    <?php if(is_array($checkedNorth)): $i = 0; $__LIST__ = $checkedNorth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
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
                <form action="/hzau/hzaulab/index.php/Admin/Room/doTheExport" method="post">
                  <input type="text" name="value" value="山北" hidden>
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

      <!-- 当前的使用信息(山南) -->
      <script type="text/javascript">
        var allWw = <?php echo json_encode($allWw); ?>;
        console.log(allWw);
        for (value in allWw) {
          var openPot = document.getElementById(allWw[value]['id']);
          if (allWw[value]['status'] == 2) {
            // 当状态为2时候，表示已经被预约，不可进行预约
            openPot.className = openPot.className + ' '+'_red' ;
            // openPot.background = pink;
            openPot.title = "状态：已预约(本人)；时间：8-15";

            console.log(openPot.className);
            // console.log(openPot.title);
          } else if (allWw[value]['status'] == 3) {
              // 当状态为3的时候，表示已经被占用，不可进行预约
              openPot.className = openPot.className + ' '+'_orange' ;
              openPot.title = "状态：占用；时间：8-15";
          } else if (allWw[value]['status'] == 1) {
              // 当状态为1的时候，表示已经被锁定，不可进行预约
              openPot.className = openPot.className + ' '+'_grey' ;
              openPot.title = "状态：锁定；时间：8-15";
          }
        }
      </script>
      <!-- 当前的使用信息（山北） -->
      <script type="text/javascript">
        var allWw = <?php echo json_encode($allWwNorth); ?>;
        console.log(allWw);
        for (value in allWw) {
          var openPot = document.getElementById(allWw[value]['id']);
          if (allWw[value]['status'] == 2) {
            // 当状态为2时候，表示已经被预约，不可进行预约
            openPot.className = openPot.className + ' '+'_red' ;
            // openPot.background = pink;
            openPot.title = "状态：已预约(本人)；时间：8-15";

            console.log(openPot.className);
            // console.log(openPot.title);
          } else if (allWw[value]['status'] == 3) {
              // 当状态为3的时候，表示已经被占用，不可进行预约
              openPot.className = openPot.className + ' '+'_orange' ;
              openPot.title = "状态：占用；时间：8-15";
          } else if (allWw[value]['status'] == 1) {
              // 当状态为1的时候，表示已经被锁定，不可进行预约
              openPot.className = openPot.className + ' '+'_grey' ;
              openPot.title = "状态：锁定；时间：8-15";
          }
        }
      </script>
      <script type="text/javascript" src="/hzau/hzaulab/Public/Js/wangEditor.js"></script>
      <script type="text/javascript" src="/hzau/hzaulab/Public/Js/wangEditor.min.js"></script>
      <!-- 山北温网的介绍信息 -->
      <script type="text/javascript">
          var E = window.wangEditor;
          var editorN = new E( document.getElementById('editor') );
          editorN.create();
          console.log(editorN);
          $(function () {
              $('#southSubmit').click(function () {
                    // 获取编辑器区域完整html代码
                    var html = editorN.$textContainerElem.html();
                    // 获取编辑器纯文本内容
                    var text = editorN.$textContainerElem.text();
                    var param = {
                        id:2,
                        msct:html
                    };
                    $.ajax({
                        url: '/hzau/hzaulab/index.php/Admin/Room/changeTheIntro',//路径
                        type: 'POST',
                        dataType: 'json',
                        data: param,
                        success: function(data){
                            alert("修改简介成功");
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
      <!-- 山南温网的介绍信息 -->
      <script type="text/javascript">
            var E = window.wangEditor;
            var editor2 = new E(document.getElementById('editor2') );
            editor2.create();
            console.log(editor);
            $(function () {
              $('#northSubmit').click(function () {
                // 获取编辑器区域完整html代码
                var html = editor2.$textContainerElem.html();
                // 获取编辑器纯文本内容
                var text = editor2.$textContainerElem.text();
                var param = {
                  id:3,
                  msct:html
                };
                console.log(param);
                $.ajax({
                  url: '/hzau/hzaulab/index.php/Admin/Room/changeTheIntro',//路径
                  type: 'POST',
                  dataType: 'json',
                  data: param,
                  success: function(data){
                      alert("修改简介成功");
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
      <!-- 获取选定的南方温网 -->
      <script type="text/javascript">
        function theClick(argument) {
          // body...
            obj = document.getElementsByName("theSouth");
            console.log(obj);
            check_val = [];
            for(k in obj){
                if(obj[k].checked)
                    check_val.push(obj[k].value);
                console.log(obj[k].value);
            }
            console.log(check_val);

            var testSelect = document.getElementById("testSelectSouth"); //定位id
            var index = testSelect.selectedIndex; // 选中索引
            var text = testSelect.options[index].text; // 选中文本
            var value = testSelect.options[index].value; // 选中值
            if (!check_val.length) {
              alert("请选定要处理的设备！");
            }
            $.ajax({
                url: '/hzau/hzaulab/index.php/Admin/Room/changeTheStatus',//路径
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

      <!-- 获取选定的北方温网 -->
      <script type="text/javascript">
        function theNorthClick(argument) {
          // body...
            obj = document.getElementsByName("theNorth");
            console.log(obj);
            check_val = [];
            for(k in obj){
                if(obj[k].checked)
                    check_val.push(obj[k].value);
                console.log(obj[k].value);
            }
            console.log(check_val);

            var testSelect = document.getElementById("testSelectNorth"); //定位id
            var index = testSelect.selectedIndex; // 选中索引
            var text = testSelect.options[index].text; // 选中文本
            var value = testSelect.options[index].value; // 选中值
            if (!check_val.length) {
              alert("请选定要处理的设备！");
            }
            $.ajax({
                url: '/hzau/hzaulab/index.php/Admin/Room/changeTheStatus',//路径
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



<!--     <script src="/hzau/hzaulab/Public/back/include/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/hzau/hzaulab/Public/back/include/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
  </body>
</html>