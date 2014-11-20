<!DOCTYPE html>
<?php
  if (!isset($_COOKIE['view'])) {
    cookie::set('view', 'carousel');
  }
  $langCurrent=c::get('lang.current');
?> 
<html lang="<?php echo $langCurrent; ?>">
<head>
  <title><?php echo html($page->title()) ?> | <?php echo html($site->meta_title()) ?></title>
  <link rel="shortcut icon" href="<?= url('assets/images/favicon.png') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <script type="text/javascript" src="//use.typekit.net/mvb4rvk.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <?php echo css('assets/css/ap-styles.css') ?>
</head>
<body id="<?php echo $page->uid() ?>">
<a href="#maincontent" class="sr-only"><?php echo l::get('skipToMaincontent'); ?></a> 
  <div id="wrap">
    <?php snippet ('ap-menu'); ?>