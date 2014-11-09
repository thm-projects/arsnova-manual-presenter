<?php snippet('ap-header');?>
<section class="">
	<div class="container toggle-carousel">
		<?php snippet('switch-page'); ?>
		<button type="button" class="btn template"><?php echo l::get('ansicht'); ?></button>
		<div class="row">
			<?php snippet('sidebar-nav'); ?>
			<div class="col-xs-12 col-sm-9">
				
				<h1><?php echo html($page->title()); ?></h1>
				<?php echo kirbytext($page->text());
						if(cookie::get('view') == 'carousel') { 
							snippet('carousel');
						}
						else {
							snippet('list');
						} ?>	
			</div>	
		</div>
		<a class="to-top" href="#top"><span class="glyphicon glyphicon-chevron-up"></a>	
	</div>		
</section>
<?php  snippet('ap-footer') ?>