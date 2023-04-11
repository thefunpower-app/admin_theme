<?php 
global $config,$title;
?>
<!DOCTYPE html>
<html lang="en">
  <head> 
<?php 
check_admin_login();
use lib\Menu; 
$menu  = Menu::get(); 
?><meta name="viewport" content="width=device-width,initial-scale=1"> 
  <script type="text/javascript">
      <?php 
      $secret = get_config('sign_secret')?:'TheCoreFun2022';
      ?>
      var signature_key = "<?=$secret?>"; 
      var host = "<?=substr(host(),0,-1)?>";
      </script>
    <?php misc('vue,element,jquery,node,layui,echarts,bs5,wangEditor,sortable'); ?>    
    <link href="/static/css/common.css" rel="stylesheet">
    <link href="/static/css/admin.css" rel="stylesheet">    
    <link href="/theme/admin-bs/css/app.css" rel="stylesheet">
    <link href="/static/lib/element-ui/theme-new/index.css" rel="stylesheet">
    <script charset="utf-8" src="https://map.qq.com/api/gljs?v=1.exp&key=<?=get_config('tx_map_key')?>"></script>
    <link href="/theme/admin-bs-top/css/base.css" rel="stylesheet">
    <?php do_action("view.start");?>
    <style type="text/css">
        body{
            overflow: hidden;
        }
    </style>
  </head>
  <body>
<?php 
do_action('admin.common.header');
?>
<?php  include __DIR__.'/menu.php'; ?>  
<div class="d-flex flex-nowrap" style="margin-top:50px;">  
   <div class=" d-flex flex-column  text-bg-white" style="height:100vh;overflow-y:scroll;float: left;width: 100%;" >  
 
      <?php 
        do_action('admin.common.content');
      ?>

   

    