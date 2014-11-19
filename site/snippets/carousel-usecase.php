<?php 
	$langCurrent=c::get('lang.current');	
?>
<div id="carousel-example-<?php echo $page->uid();?>" class="carousel slide" data-interval="false">
	<!-- Wrapper for slides -->
	<div class="toggle-temp carousel-inner">
		<?php 
		// filter images based on language code de_ or en_
			$images = $page->images()->filterBy('title', '*=', $langCurrent . '_');
			$imageCount = $images->Count();
			//$images = $page->images()->filterBy('title', '*=', 'de_');
			$count = 1; //helper variable
			$step = (string)$count;
			$steps = yaml($page->steps());
		//Loop through images and add instructions from yaml-fields for each image
			while ($step <= $imageCount) {
				foreach($images as $image) :?>
					<div class="item <?php if ($count == 1): echo 'active'; endif;?>">
						<img class="screenshot" src="<?php echo $image->url() ?>" alt="<?php echo $page->url_key() . "-" . $count ?>" /> 
						<?php if($steps) :?>
							<div class="carousel-caption">
								<?php if($steps[$count]['Subheader'] != ""): ?>
									<h3><?php echo markdown($steps[$count]['Subheader']) ?></h3>
								<?php endif; ?>
								<span class="number"><?php echo $count ?>.&nbsp;</span><?php $action = markdown($steps[$count]['Action']); echo $action ?>
								<?php if($steps[$count]['Details'] != ""): ?>
									<div><?php echo markdown($steps[$count]['Details']) ?></div>
								<?php endif; ?>
							</div>
						<?php endif; ?>	
					</div>
					<?php $count++; $step = (string) $count;?>
				<?php endforeach; 
			}?>
	</div>
	<!-- Controls -->
	<a class="left carousel-control hidden" href="#carousel-example-<?php echo $page->uid();?>" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only"><?php l::get('prev'); ?></span>
	</a>
	<a class="right carousel-control hidden" href="#carousel-example-<?php echo $page->uid();?>" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only"><?php l::get('next'); ?></span>
	</a>
</div>