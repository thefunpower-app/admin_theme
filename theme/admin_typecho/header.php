<?php global $config;?>
<!DOCTYPE html>
<html lang="en">
  <head> 
<?php 
use lib\Menu; 
$menu  = Menu::get();
?><meta name="viewport" content="width=device-width,initial-scale=1"> 
    <?php misc('vue,element,jquery,node,layui,echarts,bs5,wangEditor,sortable'); ?>  
    <link rel="stylesheet" href="/theme/admin_typecho/css/style.css">
    <link href="/static/css/common.css" rel="stylesheet">
    <link href="/static/css/admin.css" rel="stylesheet">
    <title><?= $config['title']?:"控制台"?></title> 

    <style type="text/css">
      .typecho-head-nav { 
          height: 37px;
      }
    </style>
  </head>
  <body>

    <div class="typecho-head-nav clearfix" role="navigation">
        <div class="container"> 
          <nav id="typecho-nav-list">
            <ul class="root">
             <li class="parent"><a href="/admin/">概要</a></li>
            </ul>
            <?php include __DIR__.'/menu.php';?>
          </nav>
          <div class="operate">
             <a href="/admin/account.php"><?= cookie('user_name') ?>个人信息</a>
             <a href="/admin/logout.php">退出</a>
          </div>
        </div>
    </div>
    <div  class="container">

    