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
    <link rel="stylesheet" type="text/css" href="/hzau/hzaulab/Public/back/css/pot.css">
    <!-- <script type="text/javascript" src="/hzau/hzaulab/Public/public/js/jquery-1.8.3.min.js"></script>   -->
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

          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-width: 740px;">
              <div class="x_title">
                <h2>山南露天盆栽场<small>Open Field Pot</small></h2>
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
                  <div class="pot">
                    <div class="row">
                      <div class="ex" id="PZ-1" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-1"><b>PZ-1</b></div>
                      <div class="ex" id="PZ-9" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-9"><b>PZ-9</b></div>
                      <div class="ex" id="PZ-17" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-17"><b>PZ-17</b></div>
                      <div class="ex" id="PZ-24" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-24"><b>PZ-24</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-2" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-2"><b>PZ-2</b></div>
                      <div class="ex" id="PZ-10" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-10"><b>PZ-10</b></div>
                      <div class="ex" id="PZ-18" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-18"><b>PZ-18</b></div>
                      <div class="ex" id="PZ-25" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-25"><b>PZ-25</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-3" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-3"><b>PZ-3</b></div>
                      <div class="ex" id="PZ-11" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-11"><b>PZ-11</b></div>
                      <div class="ex" id="PZ-19" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-19"><b>PZ-19</b></div>
                      <div class="ex" id="PZ-26" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-26"><b>PZ-26</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-4" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-4"><b>PZ-4</b></div>
                      <div class="ex" id="PZ-12" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-12"><b>PZ-12</b></div>
                      <div class="ex" id="PZ-20" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-20"><b>PZ-20</b></div>
                      <div class="ex" id="PZ-27" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-27"><b>PZ-27</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-5" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-5"><b>PZ-5</b></div>
                      <div class="ex" id="PZ-13" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-13"><b>PZ-13</b></div>
                      <div class="ex" id="PZ-21" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-21"><b>PZ-21</b></div>
                      <div class="ex" id="PZ-28" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-28"><b>PZ-28</b></div>
                      <div class="ex" id="PZ-31" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-31"><b>PZ-31</b></div>
                      <div class="ex" id="PZ-33" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-33"><b>PZ-33</b></div>
                      <div class="ex" id="PZ-35" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-35"><b>PZ-35</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-6" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-6"><b>PZ-6</b></div>
                      <div class="ex" id="PZ-14" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-14"><b>PZ-14</b></div>
                      <div class="ex" id="PZ-22" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-22"><b>PZ-22</b></div>
                      <div class="ex" id="PZ-29" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-29"><b>PZ-29</b></div>
                      <div class="ex" id="PZ-32" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-32"><b>PZ-32</b></div>
                      <div class="ex" id="PZ-34" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-34"><b>PZ-34</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-7" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-7"><b>PZ-7</b></div>
                      <div class="ex" id="PZ-15" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-15"><b>PZ-15</b></div>
                      <div class="ex" id="PZ-23" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-23"><b>PZ-23</b></div>
                      <div class="ex" id="PZ-30" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-30"><b>PZ-30</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-8" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-8"><b>PZ-8</b></div>
                      <div class="ex" id="PZ-16" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-16"><b>PZ-16</b></div>
                    </div>
                  <div class="clearfix"></div>
                </div>
                  <select class="mutibox" name="theCaozuo" id="testSelect">
                    <option value="1" selected>锁定</option>
                    <option value="0">开放</option>
                  </select>
                  <input type="button" class="gallery_add" value="确定" onclick="getTheChecked();">
                </form>

              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-6 col-xs-12">
            <div class="x_panel" style="min-width: 740px;">
              <div class="x_title">
                <h2>山南露天盆栽场-备注<small>Field Facility</small></h2>
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
                         <?php echo ($thePzModel); ?>
                       </p>
                     </div><br>
                  <br><button type="button" id="saveContentE" class="btn btn-primary">修改</button>
                <br>
              </div>          
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-width: 740px;">
              <div class="x_title">
                <h2>山北露天盆栽场<small>Open Field Pot</small></h2>
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
                  <div class="pot2">
                    <div class="row">
                      <div class="ex" id="PZ-1" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-1"><b>PZ-1</b></div>
                      <div class="ex" id="PZ-4" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-4"><b>PZ-4</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-2" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-2"><b>PZ-2</b></div>
                      <div class="ex" id="PZ-5" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-5"><b>PZ-5</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-3" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-3"><b>PZ-3</b></div>
                      <div class="ex" id="PZ-6" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-6"><b>PZ-6</b></div>
                    </div>
                    <div class="row">
                      
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-7" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-7"><b>PZ-7</b></div>
                      <div class="ex" id="PZ-14" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-14"><b>PZ-14</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-8" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-8"><b>PZ-8</b></div>
                      <div class="ex" id="PZ-15" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-15"><b>PZ-15</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-9" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-9"><b>PZ-9</b></div>
                      <div class="ex" id="PZ-16" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-16"><b>PZ-16</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-10" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-10"><b>PZ-10</b></div>
                      <div class="ex" id="PZ-17" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-17"><b>PZ-17</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-11" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-11"><b>PZ-11</b></div>
                      <div class="ex" id="PZ-18" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-18"><b>PZ-18</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-12" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-12"><b>PZ-12</b></div>
                      <div class="ex" id="PZ-19" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-19"><b>PZ-19</b></div>
                    </div>
                    <div class="row">
                      <div class="ex" id="PZ-13" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-13"><b>PZ-13</b></div>
                      <div class="ex" id="PZ-20" name="openPot"><input type="checkbox" name ="thePenzai" value="PZ-2"><b>PZ-20</b></div>
                    </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="clearfix"></div>

                  <select class="mutibox" name="theCaozuo" id="testSelect">
                    <option value="1" selected>锁定</option>
                    <option value="0">开放</option>
                  </select>
                  <input type="button" class="gallery_add" value="确定" onclick="getTheChecked();">
                </form>

              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-6 col-xs-12">
            <div class="x_panel" style="min-width: 740px;">
              <div class="x_title">
                <h2>山北露天盆栽场-备注<small>Field Facility</small></h2>
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
                         <?php echo ($thePzModel); ?>
                       </p>
                     </div><br>
                  <br><button type="button" id="saveContentE" class="btn btn-primary">修改</button>
                <br>
              </div>          
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>露天盆栽场申请<small>Openpot Application</small></h2>
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
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
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
                          <a href="/hzau/hzaulab/index.php/Admin/Field/doAgree/id/<?php echo ($items["id"]); ?>">同意 <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <!-- <a href="#" data-toggle="modal" data-target="#myModal3" >拒绝 <i class="fa fa-close"></i></a> -->
                          <a href="/hzau/hzaulab/index.php/Admin/Field/doReject/id/<?php echo ($items["id"]); ?>" >拒绝 <i class="fa fa-close"></i></a>

                        </td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>露天盆栽场申请历史<small>Lab Application History</small></h2>
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
                    <?php if(is_array($checked)): $i = 0; $__LIST__ = $checked;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?><tr>
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
                <form action="/hzau/hzaulab/index.php/Admin/Field/doTheExport" method="post">
                  <button type="submit" class="gallery_add">导出Excel</button>
                </form>
                <!-- <div data-toggle="modal" data-target="#myModal2" class="gallery_add">导出Excel</div> -->
              </div>
            </div>
          </div>
      </div>
      <!-- <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
              </button>
              <h4 class="modal-title" id="myModalLabel">
                设施状态-修改
              </h4>
            </div>
            <div class="modal-body">
              <form class="form" action="" method="post">
                
              </form>
            </div>

            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div> -->
<!--       <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
          </div>
        </div>
      </div> -->
        <!--************************************************* 底部版权 *************************************************-->
      <footer id="footer">
    <div class="pull-right">
		CopyRight©2017 <a href="/hzau/hzaulab/index.php/Home/Index/index.html" target="_blank" title="华中农业大学作物学实验教学中心">华中农业大学作物学实验教学中心</a> <a href="http://www.52feidian.com/" title="华中农业大学 沸点工作室" target="_blank">华中农业大学 沸点工作室</a>
	</div>
	<div class="clearfix"></div>    
</footer>

      <script type="text/javascript" src="/hzau/hzaulab/Public/Js/wangEditor.js"></script>
      <script type="text/javascript" src="/hzau/hzaulab/Public/Js/wangEditor.min.js"></script>
      <script type="text/javascript">
        var E = window.wangEditor;
        var editor = new E( document.getElementById('editor') );
        editor.create();
        var editor2 = new E( document.getElementById('editor2') );
        editor2.create();
        // console.log(editor);
        $(function () {
            $('#saveContentE').click(function () {
                // 获取编辑器区域完整html代码
                var html = editor.$textContainerElem.html();
                // 获取编辑器纯文本内容
                var text = editor.$textContainerElem.text();
                var param = {
                    msct:html
                };
                $.ajax({
                    url: '/hzau/hzaulab/index.php/Admin/Field/changeTheIntro',//路径
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

      <script type="text/javascript">
        var allPz = <?php echo json_encode($allPz); ?>;
        console.log(allPz);
        for (value in allPz) {
          var openPot = document.getElementById(allPz[value]['id']);
          // console.log(openPot);
          if (allPz[value]['status'] == 2) {
            // 当状态为2时候，表示已经被预约，不可进行预约
            openPot.className = openPot.className + ' '+'_red' ;
            // openPot.background = pink;
            openPot.title = "状态：已预约(本人)；时间：8-15";
            // console.log(openPot.title);
          } else if (allPz[value]['status'] == 3) {
              // 当状态为3的时候，表示已经被占用，不可进行预约
              openPot.className = openPot.className + ' '+'_orange' ;
              openPot.title = "状态：占用；时间：8-15";
          } else if (allPz[value]['status'] == 1) {
              // 当状态为1的时候，表示已经被锁定，不可进行预约
              openPot.className = openPot.className + ' '+'_grey' ;
              openPot.title = "状态：锁定；时间：8-15";
          }
        }
      </script>

      <script type="text/javascript">
        //  获取选择的项目 
        function getTheChecked(){
            obj = document.getElementsByName("thePenzai");
            check_val = [];
            for(k in obj){
                if(obj[k].checked)
                    check_val.push(obj[k].value);
            }

            var testSelect = document.getElementById("testSelect"); //定位id
            var index = testSelect.selectedIndex; // 选中索引
            var text = testSelect.options[index].text; // 选中文本
            var value = testSelect.options[index].value; // 选中值
            if (!check_val.length) {
              alert("请选定要处理的设备！");
            }
            $.ajax({
                url: '/hzau/hzaulab/index.php/Admin/Field/changeTheStatus',//路径
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



    <script src="/hzau/hzaulab/Public/back/include/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/hzau/hzaulab/Public/back/include/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  </body>
</html>