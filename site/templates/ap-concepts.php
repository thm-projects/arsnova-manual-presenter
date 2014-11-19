<?php snippet('ap-header');?>
<main id="maincontent" role="main">
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
		<a class="to-top" href="#maincontent"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><span class="sr-only"><?php echo l::get('totop'); ?></span></a>
	
	</div>
</main>
<?php snippet('ap-footer') ?>