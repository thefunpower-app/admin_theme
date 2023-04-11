

<?php 
  do_action('admin.common.page.footer');
?>
  </div> 
</div>  
<?php 
//JSON输出后或页面渲染后
do_action("end");
do_action("view.end");
?>

<?php 
  do_action('admin.common.footer');
?>
<?php 
if(function_exists('message_sub_html')){
  message_sub_html('self','notice');  
}
?>
</body>
</html> 