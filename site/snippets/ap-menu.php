<?php $home = $pages->find('home');?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" aria-label="main navigation">
	<div class="container-fluid">
		<div class="navbar-header" role="banner">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar" aria-hidden="true"></span>
				<span class="icon-bar" aria-hidden="true"></span>
				<span class="icon-bar" aria-hidden="true"></span>
			</button>
			 <a class="navbar-brand" href="<?php echo url() ?>"> <img id="logo" src="<?php echo url('assets/images/arsnova.svg') ?>" alt="<?php echo html($site->title()) ?>" width="188" height="37"/>
	    	<h1><?php echo ($site->title()) ?></h1></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a <?php echo ($home->isActive()) ? ' class="active"' : '' ?> href="<?php echo $home->url() ?>"><?php echo $home->title() ?></a></li>
				<?php foreach($pages->visible() AS $p): ?>
					<?php if($p->hasChildren()): ?>
						<li><a <?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->children()->first()->url() ?>"><?php echo html($p->title()) ?></a></li>
					<?php else : ?>
						<li><a <?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</div><!-- /.navbar-collapse -->
		<a id="app" <?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="https://arsnova.eu/presenter">Presenter</a>
	</div><!-- /.container-fluid -->
</nav>
