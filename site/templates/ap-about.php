<?php snippet('ap-header'); ?>
<div class="jumbotron">
	<div class="container" style="background-image:url(<?php echo $page->images()->first()->url() ?>);">
    <?php echo kirbytext($page->slogan()); ?>
  	</div>
</div>
<section class="container">
	<?php echo kirbytext($page->text()); ?>
</section>
<a class="to-top" href="#top"><span class="glyphicon glyphicon-chevron-up"></a>
<?php snippet('ap-footer') ?>
