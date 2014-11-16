<?php
  $items = $pages->findbyUID('presenter-use')->children()->visible();
  if ($page) : 
?>
<div class="col-xs-12 col-sm-3 col-md-3" id="sidebar">
  <div class="sidebar"  role="navigation">
    <button type="button" class="sidebar-toggle" data-toggle="collapse" data-target="#sidebar-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
    </button>
    <div class="list-group collapse"  id="sidebar-nav">
      <span class="category"><?php echo l::get('session'); ?></span>
      <?php foreach($items->filterBy('cat', 'Edit') AS $item): ?> 
      <a class="<?php if($item->isActive()) { echo 'list-group-item active ';echo $item->cat(); } else { echo 'list-group-item ';echo $item->cat(); } ?>" href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a>        
      <?php endforeach ?> 
      
      <span class="category"><?php echo l::get('feedback'); ?></span>
      <?php foreach($items->filterBy('cat', 'LF') AS $item): ?> 
      <a class="<?php if($item->isActive()) { echo 'list-group-item active ';echo $item->cat(); } else { echo 'list-group-item ';echo $item->cat(); } ?>" href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a>        
      <?php endforeach ?>  

      <span class="category"><?php echo l::get('pi'); ?></span>
      <?php foreach($items->filterBy('cat', 'PI') AS $item): ?> 
      <a class="<?php if($item->isActive()) { echo 'list-group-item active ';echo $item->cat(); } else { echo 'list-group-item ';echo $item->cat(); } ?>" href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a>        
      <?php endforeach ?>  

      <span class="category"><?php echo l::get('jitt');?></span>
      <?php foreach($items->filterBy('cat', 'JiTT') AS $item): ?> 
      <a class="<?php if($item->isActive()) { echo 'list-group-item active ';echo $item->cat(); } else { echo 'list-group-item ';echo $item->cat(); } ?>" href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a>        
      <?php endforeach ?> 
    </div>
  </div>
</div>      
<?php endif ?>