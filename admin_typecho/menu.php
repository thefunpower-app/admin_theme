<?php foreach ($menu as $v) { ?> 
  <ul class="root">
    <li class="parent">
      <?php if($v['url']){?>
      <a href="<?= $v['url']?>">
        <?= $v['label'] ?> 
      </a>
      <?php }else{?>
        <a href="javascript::void(0);">
          <?= $v['label'] ?> 
        </a>
      <?php }?>
    </li>
    <?php 
    if($v['children']){
    ?>
    <ul class="child">
        <?php  
        foreach ($v['children'] as $v1) {
        $url = $v1["url"];
        if ($url) {
            $url = '/' . $url;
        }
        ?>
        <li><a href="<?= $url ?>"><?= $v1['label'] ?></a></li>
        <?php } ?>
    </ul>
    <?php } ?>
  </ul> 
<?php } ?>