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
  <script charset="utf-8" src="https://map.qq.com/api/gljs?v=1.exp&key=<?=get_config('tx_map_key')?>"></script>  
  <link href="/static/lib/element-ui/theme-new/index.css" rel="stylesheet">
  <?php do_action("view.start");?>

  <?php do_action("admin.common.header");?>
  <title><?= $title?:"运营平台"?></title>
  <script type="text/javascript">
    $(function(){
      $('.click_logo').click(function(){
          $('#menu_left').toggle();
      });
    })
  </script>
  </head>
  <body>
    <?php do_action("view.body");?>
<?php 
do_action('admin.common.header');
?>
<?php if(!$config['no_header']){?>
 <div class="d-flex flex-nowrap">  
    <?php include __DIR__.'/menu.php';?> 
    <div class="min_size_logo" style="display:none;"> 
      <img class="click_logo hand" style="width:30px;height: 30px;" src="/img/logo.png">
    </div>
    <!-- <div class="b-example-divider b-example-vr"></div> -->
    <!-- partial -->
    <div class=" d-flex flex-column  text-bg-white" style="height:100vh;overflow-y:scroll;float: left;width: 100%;padding-top: 20px;" > 
      <br>  
      <div class="" style="position:fixed;right: 30px;top:10px;"> 
        <!-- <span style="margin-right:10px;">
        <i style="color:grey;" class="hand el-icon-message-solid" ></i>
        </span> -->
        <a href="/<?=ADMIN_DIR_NAME?>/account.php" class="mr10"><?=lang('帐号')?></a>
        <span class="divider"></span>
        <a href="/<?=ADMIN_DIR_NAME?>/logout.php" onclick="return confirm('<?=lang('确认退出？')?>');"><?=lang('退出')?></a>
      </div>  
      <?php }?> 
      <?php 
        do_action('admin.common.content');
      ?>
 