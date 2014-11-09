<?php 
	snippet('header');
 	snippet('menu');
?>
<section class="container">
  <article>
    <h1><?php echo html($page->title()); ?></h1>
    <?php echo kirbytext($page->text()); ?>
  </article>
</section>
<?php snippet('footer'); ?>