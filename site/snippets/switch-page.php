<nav class="switch-page">
	<?php if($page->hasPrev()): ?>
		<a class="prev" href="<?php echo $page->prev()->url() ?>"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<?php endif; ?>
	<?php if($page->hasNext()): ?> 
		<a class="next" href="<?php echo $page->next()->url() ?>"><span class="glyphicon glyphicon-chevron-right"></span></a>
	<?php  endif; ?>
</nav>