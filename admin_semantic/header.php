<?php global $config;?>
<!DOCTYPE html>
<html lang="en">
  <head> 
<?php 
use lib\Menu; 
$menu  = Menu::get();
?><meta name="viewport" content="width=device-width,initial-scale=1"> 
    <?php misc('vue,element,jquery,node,layui,echarts,bs5,wangEditor,sortable'); ?>   
    <title><?= $config['title']?:"控制台"?></title>
    <link href="/static/lib/semantic/semantic.min.css" rel="stylesheet">
    <link href="/static/css/common.css" rel="stylesheet">
    <link href="/static/css/admin.css" rel="stylesheet">
    <script type="text/javascript" src="/static/lib/semantic/semantic.js"></script>
  </head>
  <style type="text/css">
  
.ui.vertical.menu.sidebar-menu {
  margin-top: 36px !important;
  max-height: calc(100% - 40px) !important;
  height: calc(100% - 40px) !important;
}

.ui.vertical.menu.sidebar-menu .item i.icon {
  float: left;
  margin: 0em 0.5em 0em 0em;
}

.main-content {
  margin-top:30px;
}

@media (min-width: 1099px) {
  .ui.vertical.menu.sidebar-menu {
    visibility: visible;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    width: 15rem !important;
  }
  .main-content {
    margin-left: 15rem;
  }
  .sidebar-menu-toggler {
    display: none !important;
  }
}

#app { 
  margin-top: 10px; 
}

</style>
<body>

<?php include __DIR__.'/menu.php';?>

    