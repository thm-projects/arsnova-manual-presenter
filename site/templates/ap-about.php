<?php snippet('ap-header'); ?>
<div class="jumbotron" id="maincontent">
	<div class="container" style="background-image:url(<?php echo $page->images()->first()->url() ?>);">
    <?php echo kirbytext($page->slogan()); ?>
  	</div>
</div>
<section class="container" role="main">
	<?php echo kirbytext($page->text()); ?>
</section>
<a class="to-top" href="#maincontent"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><span class="sr-only"><?php echo l::get('totop'); ?></span></a>

<?php snippet('ap-footer') ?>
