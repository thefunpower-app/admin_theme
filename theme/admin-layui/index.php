<?php 
global $node_config; 
$node_config['title'] = "控制台"; 
include __DIR__.'/header.php'; 
?>
<wc-dom-inspector id="domInspector" includes="#body-container"></wc-dom-inspector>
  <div class="layui-layout layui-layout-admin">
    <div class="layui-header">
      <div class="layui-logo hand layui-hide-xs layui-bg-black click_welcome"><?=$node_config['title']?></div>
      <!-- 头部区域（可配合layui 已有的水平导航） -->
      <ul class="layui-nav layui-layout-left">
        <!-- 移动端显示 -->
        <li class="layui-nav-item layui-show-xs-inline-block layui-hide-sm" lay-header-event="menuLeft">
          <i class="layui-icon layui-icon-spread-left"></i>
        </li>
         
      </ul>
      <ul class="layui-nav layui-layout-right">
        
        <li class="layui-nav-item" lay-header-event="menuRight" lay-unselect>
          <a href="https://github.com/Sight-wcg/layui-theme-dark" target="_blank">
            <i class="layui-icon layui-icon-github" style="font-size: 20px;"></i>
          </a>
        </li>
      </ul>
    </div>

    <div class="layui-side layui-bg-black">
      <div class="layui-side-scroll">
        <!-- 左侧导航区域 -->
        <ul class="layui-nav layui-nav-tree" lay-shrink="all"  lay-unselect lay-filter="nav-side">
         <?php 
            foreach ($menu as $k=>$v) {
              if(!$v['children']){
                unset($menu[$k]);
              }
            }
            $i=0;
            foreach ($menu as $v) { 
              $i++;
         ?> 
          <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;"><?= lang($v['label']) ?></a>
            <?php if($v['children']){?>
               <dl class="layui-nav-child">
                  <?php  
                    foreach ($v['children'] as $v1) {
                    $url = $v1["url"];
                    if ($url) {
                        $url = '/'.$url;
                    }
                  ?>
                 <dd><a data-path="<?= $url ?>" href="javascript:;"><?= lang($v1['label']) ?></a></dd>
                 <?php } ?>                  
               </dl>
            <?php } ?> 
          </li>
          <?php } ?> 
        </ul>
      </div>
    </div>

    <div class="layui-body">
      <!-- 内容主体区域 -->
      <iframe id="body-container"  src="/admin/welcome.php" style="border:0;width: 100%;height:93vh;"></iframe> 
    </div>

    <!-- <div class="layui-footer">
      底部固定区域
    </div> -->
  </div> 
<script>
  layui.config({
      base: '/theme/admin-layui/lib/layui/'
    }).extend({ 
      drawer: 'drawer/drawer'
  });
  layui.use(['element','layer','util', 'drawer'],function() {
    var element=layui.element;
    var form = layui.form;
    var layer=layui.layer;
    var util=layui.util;
    var drawer = layui.drawer;
    var $=layui.$;

    renderView('#body-container','/admin/welcome.php');

    util.event('lay-header-event',{
      menuLeft: function(){
        var side = $('.layui-layout-admin .layui-side')
        side.animate({left:side.css('left') === '0px'? '-300px' : '0px'})
      }
    });

    element.on('nav(nav-side)',function(elem) {
      var path = elem.data('path');
      if(path){
        renderView( '#body-container',path);
        if($(window).width() <= 768){
          $('.layui-layout-admin .layui-side').animate({left: '-300px'})
        }
      }
    });

    $(window).resize(function() {
      if($(window).width() > 768){
        $('.layui-layout-admin .layui-side').animate({left: '0px'})
      }
    })

    $('#layuiv').text(layui.v)

    $('input[name=domInspector]').on('click', function(){
      if($(this).prop('checked')){
        $('#domInspector').attr('enable', '')
      }else{
        $('#domInspector').removeAttr('enable')
      }
    })

     

    function renderView(elem, path, prefix, suffix){
      var containerDom=$(elem) 
      $('#body-container').attr('src',path);
    }


    function addStyle(id, cssStr){
      var el = document.getElementById(id) || document.createElement('style')
      if(!el.isConnected) {
        el.type='text/css';
        el.id=id;
        document.head.appendChild(el);
      }
      el.textContent = cssStr;
    }
    $('.click_welcome').click(function(){
      $('#body-container').attr('src','/admin/welcome.php');
    });
    
  });
</script>
<?php 
include __DIR__.'/footer.php';
?>
