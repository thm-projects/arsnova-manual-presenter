<?php
	$langCurrent=c::get('lang.current');
	// filter images based on language code de_ or en_
	$images = $page->images()->filterBy('title', '*=', $langCurrent . '_');
	$count = 1; //helper variable
	$steps = yaml($page->steps());
?>
<div id="carousel-example-<?php echo $page->uid();?>" class="carousel slide" data-interval="false" data-wrap="true">
	<!-- Wrapper for slides -->
	<div class="toggle-temp carousel-inner">
		<?php foreach($steps as $step) :?>
			<div class="item <?php if ($count == 1): echo 'active'; endif;?>">
				<?php echo remove_ptags(kirbytext($step['Image'])); ?>
					<div class="carousel-caption">
						<?php if($steps[$count]['Subheader'] != ""): ?>
							<h3><?php echo ($steps[$count]['Subheader']) ?></h3>
						<?php endif; ?>
						<?php if($steps[$count]['Action'] != ""): ?>
							<span class="number"><?php echo $count ?>.&nbsp;</span><?php $action = markdown($steps[$count]['Action']); echo $action ?>
						<?php endif ?>
						<?php if($steps[$count]['Details'] != ""): ?>
							<div><?php echo markdown($steps[$count]['Details']) ?></div>
						<?php endif; ?>
					</div>
			</div>
			<?php $count++;
		endforeach; ?>
	</div>
	<!-- Controls -->
	<a class="left carousel-control hidden" href="#carousel-example-<?php echo $page->uid();?>" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only"><?php l::get('prev'); ?></span>
	</a>
	<a class="right carousel-control hidden" href="#carousel-example-<?php echo $page->uid();?>" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only"><?php l::get('next'); ?></span>
	</a>	
</div>
	