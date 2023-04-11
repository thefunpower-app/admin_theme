<?php 
global $config; 
$config['title'] = "控制台";
include __DIR__.'/../boot/app.php'; 
include __DIR__.'/header.php';

?> 
<div id="app">  
   <?php 
   $_page = "";
   do_action('admin.index',$_page); 
   echo $_page;
   ?> 
</div> 
<?php 
include __DIR__.'/footer.php';
?>