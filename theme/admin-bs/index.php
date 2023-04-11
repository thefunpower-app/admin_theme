<?php 
global $node_config; 
$node_config['title'] = "控制台"; 
include __DIR__.'/header.php';
global $page_vue;
$page_vue = new Vue;
?>
<title>控制台</title>
<div id="app"> 
   

   <?php 
   $_page = "";
   do_action('admin.index',$_page); 
   echo $_page;
   ?>
   
</div>
<style type="text/css">
   h3:first-child{
      margin-top: 0;
   }
   h3,h4{
      margin-top: 20px; 
   }
</style>
<script type="text/javascript">
   <?=$page_vue->run()?>
</script>
<?php 
include __DIR__.'/footer.php';
?>