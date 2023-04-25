<?php 
$req_url = $_SERVER['REQUEST_URI'];
?>

<nav class="navbar navbar-expand-lg bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/<?=ADMIN_DIR_NAME?>"><?=lang('运营中心')?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
        <?php  
        $i=0;
        foreach ($menu as $v) { 
          $i++;
        ?> 
        <li class="nav-item dropdown">
          <?php if(!$v['children']){
            $url = $v["url"];
            if ($url) {
                $url = '/'.$url;
            }
          ?>
            <a class="nav-link <?php if($url == $req_url){?> actived <?php }?>" href="<?= $url ?>" >
              <?= lang($v['label']) ?>
            </a>
          <?php }else{?>
            <a class="nav-link dropdown-toggle" href="<?= lang($v['url']) ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?= lang($v['label']) ?>
            </a>
            <?php if($v['children']){?>
            <ul class="dropdown-menu">
              <?php  
                foreach ($v['children'] as $v1) {
                $url = $v1["url"];
                if ($url) {
                    $url = '/'.$url;
                }
              ?>
              <li><a class="dropdown-item <?php if($url == $req_url){?> actived <?php }?>" href="<?= $url ?>"><?= lang($v1['label']) ?></a></li>
              <?php } ?>
            </ul>
            <?php } ?>
          <?php } ?>
        </li>
        <?php } ?>
       
      </ul>
      <ul class="nav navbar-nav navbar-right flex flex_center">
       
        <li class="mr10"><a href="/<?=ADMIN_DIR_NAME?>/account.php" ><button type="button" class="btn btn-info" style="color:#fff !important;"><?=cookie('user_name')?></button></a></li>
        <li><a href="/<?=ADMIN_DIR_NAME?>/logout.php" onclick="return confirm('<?=lang('确认退出？')?>');"><button type="button" class="btn btn-danger"><?=lang('退出')?></button></a></li>
      </ul>
    </div>
  </div>
</nav> 