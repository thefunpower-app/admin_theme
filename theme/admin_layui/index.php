<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?= $title?:'控制台'?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/theme/admin_layui/layuiadmin/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/theme/admin_layui/layuiadmin/style/admin.css" media="all">
  <style type="text/css">
    .layui-side-menu .layui-nav .layui-nav-item a { 
      padding-left: 16px; 
    }
    .layui-side-menu .layui-nav .layui-nav-itemed > .layui-nav-child { 
        padding-left: 20px;
    }
  </style>
</head>
<body class="layui-layout-body">
  
  <div id="LAY_app">
    <div class="layui-layout layui-layout-admin">
      <div class="layui-header">
        <!-- 头部区域 -->
        <ul class="layui-nav layui-layout-left">
          <li class="layui-nav-item layadmin-flexible" lay-unselect>
            <a href="javascript:;" layadmin-event="flexible" title="侧边伸缩">
              <i class="layui-icon layui-icon-shrink-right" id="LAY_app_flexible"></i>
            </a>
          </li>
           
          <li class="layui-nav-item" lay-unselect>
            <a href="javascript:;" layadmin-event="refresh" title="刷新">
              <i class="layui-icon layui-icon-refresh-3"></i>
            </a>
          </li>  
        </ul>
        <ul class="layui-nav layui-layout-right" lay-filter="layadmin-layout-right">
          
            
          <li class="layui-nav-item layui-hide-xs" lay-unselect>
            <a href="javascript:;" layadmin-event="fullscreen">
              <i class="layui-icon layui-icon-screen-full"></i>
            </a>
          </li>
          <li class="layui-nav-item" lay-unselect style="margin-right:10px;">
            <a href="javascript:;">
              <cite><?= cookie('user_name')?></cite>
            </a>
            <dl class="layui-nav-child"> 
              <dd><a lay-href="/admin/account.php">帐号</a></dd>
              <hr>
              <dd layadmin-event="logout" style="text-align: center;"><a>退出</a></dd>
            </dl>
          </li>
          
           
        </ul>
      </div>
      
      <!-- 侧边菜单 -->
      <div class="layui-side layui-side-menu">
        <div class="layui-side-scroll">
          <div class="layui-logo" lay-href="/admin/welcome.php">
            <span><?= $title?:'控制台'?></span>
          </div>
          
          <ul class="layui-nav layui-nav-tree" lay-shrink="all" id="LAY-system-side-menu" lay-filter="layadmin-system-side-menu">
            <?php $i=0;foreach ($menu as $v) { ?> 
            <li data-name="home" class="layui-nav-item <?php if($i==0){?>layui-nav-itemed<?php }?>">
              <a href="javascript:;" > 
                <cite><?= $v['label'] ?></cite>
              </a>
              <?php 
              if($v['children']){
              ?>
              <dl class="layui-nav-child">
                <?php  
                foreach ($v['children'] as $v1) {
                $url = $v1["url"];
                if ($url) {
                    $url = '/' . $url;
                }
                ?>
                <dd data-name="console" class="">
                  <a lay-href="<?= $url ?>"><?= $v1['label'] ?></a>
                </dd>
                <?php } ?>
              </dl>
              <?php } ?>
            </li> 
            <?php $i++;} ?>
          </ul>
        </div>
      </div>

      <!-- 页面标签 -->
      <div class="layadmin-pagetabs" id="LAY_app_tabs">
        <div class="layui-icon layadmin-tabs-control layui-icon-prev" layadmin-event="leftPage"></div>
        <div class="layui-icon layadmin-tabs-control layui-icon-next" layadmin-event="rightPage"></div>
        <div class="layui-icon layadmin-tabs-control layui-icon-down">
          <ul class="layui-nav layadmin-tabs-select" lay-filter="layadmin-pagetabs-nav">
            <li class="layui-nav-item" lay-unselect>
              <a href="javascript:;"></a>
              <dl class="layui-nav-child layui-anim-fadein">
                <dd layadmin-event="closeThisTabs"><a href="javascript:;">关闭当前标签页</a></dd>
                <dd layadmin-event="closeOtherTabs"><a href="javascript:;">关闭其它标签页</a></dd>
                <dd layadmin-event="closeAllTabs"><a href="javascript:;">关闭全部标签页</a></dd>
              </dl>
            </li>
          </ul>
        </div>
        <div class="layui-tab" lay-unauto lay-allowClose="true" lay-filter="layadmin-layout-tabs">
          <ul class="layui-tab-title" id="LAY_app_tabsheader">
            <li lay-id="/admin/welcome.php" lay-attr="/admin/welcome.php" class="layui-this"><i class="layui-icon layui-icon-home"></i></li>
          </ul>
        </div>
      </div>
      
      
      <!-- 主体内容 -->
      <div class="layui-body" id="LAY_app_body">
        <div class="layadmin-tabsbody-item layui-show">
          <iframe src="/admin/welcome.php" frameborder="0" class="layadmin-iframe"></iframe>
        </div>
      </div> 
      <!-- 辅助元素，一般用于移动设备下遮罩 -->
      <div class="layadmin-body-shade" layadmin-event="shade"></div>
    </div>
  </div>

  <script src="/theme/admin_layui/layuiadmin/layui/layui.js"></script>
  <script>
  layui.config({
    base: '/theme/admin_layui/layuiadmin/' //静态资源所在路径
  }).extend({
    index: 'lib/index' //主入口模块
  }).use('index');
  </script>
</body>
</html>


