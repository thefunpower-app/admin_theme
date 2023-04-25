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
    <link href="/static/css/common.css" rel="stylesheet">
    <link href="/static/css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/misc/css/admin.css?v=16">  

  </head>
  <body style="background: #f6f6f6;">

     
    