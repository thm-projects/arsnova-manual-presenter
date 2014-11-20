<nav class="switch-page" role="navigation">
	<?php if($page->hasPrev()): ?>
		<a class="prev" href="<?php echo $page->prev()->url() ?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only"><?php echo l::get('prevpage'); ?></span></a>
	<?php endif; ?>
	<?php if($page->hasNext()): ?> 
		<a class="next" href="<?php echo $page->next()->url() ?>"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only"><?php echo l::get('nextpage'); ?></span></a>
	<?php  endif; ?>
</nav>