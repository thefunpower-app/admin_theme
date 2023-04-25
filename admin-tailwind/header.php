<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php misc('vue,element,jquery,node,layui,echarts,bs5,wangEditor,sortable'); ?>   
  <link href="/static/css/tailwind.css" rel="stylesheet">
  <link href="/static/css/common.css" rel="stylesheet">
  <link href="/static/css/admin.css" rel="stylesheet">  
</head>
<body>
 
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="/<?=ADMIN_DIR_NAME?>/welcome.php" class="text-white rounded-md px-3 py-2 text-sm font-medium">控制台</a>
              <?php include __DIR__.'/menu.php';?>
               
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6"> 
            <!-- Profile dropdown -->
            <div class="relative ml-3"> 
              <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" data-dropdown-delay="500" data-dropdown-trigger="hover"  data-dropdown-toggle="dropdown_avatar"> 
                <img class="h-8 w-8 rounded-full" title='<?=cookie("user_name")?>' src="/img/avatar-none.png" alt="">
              </button> 
              <div class="hidden bg-white text-base z-50  divide-y divide-gray-100 rounded shadow my-1 "  
                  id="dropdown_avatar" style="width: 90px;"> 
                <ul class="py-1 " >
                  <li ><a href="/<?=ADMIN_DIR_NAME?>/account.php" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2" role="menuitem" tabindex="-1" id="user-menu-item-0"><?=lang('帐号')?></a> </li>

                  <li><a href="/<?=ADMIN_DIR_NAME?>/logout.php" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2" onclick="return confirm('<?=lang('确认退出？')?>');" role="menuitem" tabindex="-1" id="user-menu-item-2"><?=lang('退出')?></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
         
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
       


      </div>
       
    </div>
  </nav>

  <!-- <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
    </div>
  </header> -->
  <main>
    <div class="mx-auto max-w-7xl  sm:px-6 lg:px-8"> 
    

 
