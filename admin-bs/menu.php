<?php 
$req_url = $_SERVER['REQUEST_URI'];
?>
<div id="menu_left" class="flex-shrink-0 p-3 bg-white" style="width: 280px;height: 100vh;overflow-y: scroll;">
    <a href="/<?=ADMIN_DIR_NAME?>" class="left_logo d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-5 fw-semibold"><?=lang('运营平台')?></span>
    </a>
    <ul class="list-unstyled ps-0">
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
       
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse<?=$i?>" aria-expanded="true">
          <?= lang($v['label']) ?>
        </button>
        <?php if($v['children']){?>
        <div class="collapse show" id="dashboard-collapse<?=$i?>" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <?php  
              foreach ($v['children'] as $v1) {
              $url = $v1["url"];
              if ($url) {
                  $url = '/'.$url;
              }
            ?>
            <li><a href="<?= $url ?>" class="link-dark d-inline-flex text-decoration-none rounded
              <?php if($url == $req_url){?> actived <?php }?>
              "><?= lang($v1['label']) ?></a></li> 
            <?php } ?>
          </ul>
        </div>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
</div>
 