</div>
</div>
</div> 
<script src="/theme/admin-material/assets/vendors/js/vendor.bundle.base.js"></script>  
<script src="/theme/admin-material/assets/js/misc.js"></script>  
<?php 
  do_action('admin.common.page.footer');
?>
<?php 
//JSON输出后或页面渲染后
do_action("end");
do_action("view.end");
?>

<?php 
  do_action('admin.common.footer');
?>
 
<script type="text/javascript">
  $(function(){
    check_admin_login_just_one();
    var intv_user = setInterval(function(){
      check_admin_login_just_one();
    },60*1000);

    function check_admin_login_just_one(){
      ajax('/admin/account/check',{},function(res){
        if(res.code != 0){
          layer.msg(res.msg);
          setTimeout(function(){
            window.location.reload();
          },1000);
        }
      });
    } 
  });
</script>
</body>
</html> 