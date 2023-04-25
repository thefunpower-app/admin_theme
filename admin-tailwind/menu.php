<?php 
use lib\Menu; 
$req_url = $_SERVER['REQUEST_URI'];
$menu  = Menu::get(); 
foreach ($menu as $k=>$v) {
	if(!$v['children']){
	  unset($menu[$k]);
	}
}
$i=0;
foreach ($menu as $v) { 
	$i++;
	//bg-gray-900
?> 

<button id="dropdownHoverButton<?=$i?>"  data-dropdown-delay="500" data-dropdown-trigger="hover"  data-dropdown-toggle="dropdown<?=$i?>" class="text-white rounded-md px-3 py-2 text-sm font-medium" 
	aria-current="page<?=$i?>">
	<?= lang($v['label']) ?>
</button>

<div class="hidden bg-white text-base z-50  divide-y divide-gray-100 rounded shadow my-1" 
	id="dropdown<?=$i?>"> 
    <ul class="py-1" aria-labelledby="dropdownHoverButton<?=$i?>">
      <?php  
	      foreach ($v['children'] as $v1) {
	      $url = $v1["url"];
	      if ($url) {
	          $url = '/'.$url;
	      }
      ?>	
      <li>
        <a href="<?= $url ?>" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"><?= lang($v1['label']) ?></a>
      </li>
      <?php } ?> 
    </ul>
</div>




<?php } ?>


 
  