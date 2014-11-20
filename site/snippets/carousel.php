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
		<?php 
		//Loop through images and add instructions from yaml-fields for each image
			$image=$images->first();
			foreach($steps as $step) :?>
				<div class="item <?php if ($count == 1): echo 'active'; endif;?>">
					<img class="screenshot" src="<?php echo $image->url() ?>" alt="<?php echo $page->url_key() . "-" . $count ?>" /> 
						<div class="carousel-caption">
							<?php if($step['Subheader'] != ""): ?>
								<h3><?php echo ($step['Subheader']) ?></h3>
							<?php endif; ?>
							<?php if($step['Action'] != ""): ?>
								<span class="number"><?php echo $count ?>.&nbsp;</span><?php $action = markdown($step['Action']); echo $action ?>
							<?php endif ?>
							<?php if($step['Details'] != ""): ?>
								<div><?php echo markdown($step['Details']) ?></div>
							<?php endif; ?>
						</div>
				</div>
				<?php $count++; $image=$images->next();
			endforeach;?>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-<?php echo $page->uid();?>" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-<?php echo $page->uid();?>" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>		
</div>
	