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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/layui/2.8.1/css/layui.min.css" rel="stylesheet">
  <link href="lib/layui/layui-theme-dark.css" rel="stylesheet">
  <style>
    /* 移动端 */
    @media screen and (max-width: 768px) {
      .layui-layout-admin .layui-layout-left,
      .layui-layout-admin .layui-body,
      .layui-layout-admin .layui-footer{left: 0;}
      .layui-layout-admin .layui-side{left: -300px;}
      .site-mobile-shade {
        content: '';
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0,0,0,.8);
        z-index: 9999;
      }
    }
    .el-drawer__body { 
        padding-left: 10px;
        padding-right: 10px;
    }
  </style>

  <link href="/static/css/common.css" rel="stylesheet">
  <link href="/static/css/admin.css" rel="stylesheet"> 
  <link href="/static/lib/element-ui/theme-new/index.css" rel="stylesheet">
  <?php do_action("view.start");?>  
  <title><?= $title?:"运营平台"?></title> 
  </head>
  <body>
    <?php do_action("view.body");?>
 