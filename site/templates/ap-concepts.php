<?php snippet('ap-header');?>
<section id="top">
	<div class="container toggle-carousel">
		<button type="button" class="btn template"><?php echo l::get('ansicht'); ?></button>	
		<h1><?php echo html($page->title()); ?></h1>
		<?php echo kirbytext($page->text());
				if(cookie::get('view') == 'carousel') { 
					snippet('concept-carousel');
				}
				else {
					snippet('concept-list');
				} ?>
		<a class="to-top" href="#top"><span class="glyphicon glyphicon-chevron-up"></a>	
	</div>
</section>
<?php snippet('ap-footer') ?>