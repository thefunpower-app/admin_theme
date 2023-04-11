<!-- sidebar -->
    <div class="ui sidebar inverted vertical menu sidebar-menu" id="sidebar">
      <?php foreach ($menu as $v) { ?> 
      <div class="item">
        <div class="header"><?= $v['label'] ?></div>
        <?php 
        if($v['children']){
        ?>
        <div class="menu">
          <?php  
          foreach ($v['children'] as $v1) {
          $url = $v1["url"];
          if ($url) {
              $url = '/' . $url;
          }
          ?>
          <a class="item" href="<?= $url ?>">
            <div>
              <i class="<?= $v1['icon'] ?>"></i>
              <?= $v1['label'] ?>
            </div>
          </a>
          <?php } ?>
        </div>
        <?php } ?>
      </div>
      <?php } ?>
    </div>

    <!-- sidebar -->
    <!-- top nav -->

    <nav class="ui top fixed inverted menu">
      <div class="left menu">
        <a href="javascript:void(0);" class="sidebar-menu-toggler item" data-target="#sidebar">
          <i class="sidebar icon"></i>
        </a>
        <a href="/admin/" class="header item">
          <?= $config['title']?:"控制台"?>
        </a>
      </div>

      <div class="right menu">
         
        <div class="ui dropdown item">
          <i class="user cirlce icon"></i><?= cookie('user_name') ?>
          <div class="menu">
            <a href="/admin/user_password.php" class="item">
              <i class="info circle icon"></i> 个人信息</a
            > 
            <a href="/admin/logout.php" class="item">
              <i class="sign-out icon"></i>
              退出
            </a>
          </div>
        </div>
      </div>
    </nav>


<div class="pusher">
      <div class="main-content">
        <div class="" style="width:100%;padding-top:10px;">
           
        
