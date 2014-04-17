<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
    <title>
        <?php echo html($site->title()) ?>
        <?php if($page->title() != ''): ?>
         – <?php echo html($page->title()) ?>
        <?php else: ?>
         – <?php echo html($site->description()) ?>
        <?php endif ?>
    </title>

    <link rel="icon" type="image/png" href="/assets/images/fav-i-con.png">

    <?php if($page->text() != ''): ?>
    <meta name="description" content="<?php echo excerpt($page->text(), 200) ?>" />
    <?php else: ?>
    <meta name="description" content="<?php echo html($site->description()) ?>" />
    <?php endif ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if($page->tags() != ''): ?>
    <meta name="keywords" content="<?php foreach(str::split($page->tags()) as $tag): ?><?php echo $tag ?>, <?php endforeach ?>
    <?php else: ?>
    <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
    <?php endif ?>

    <meta property="og:title" content="<?php echo html($site->title()) ?> - <?php echo html($page->title()) ?>" />
    <?php if($page->text() != ''): ?>
    <meta property="og:description" content="<?php echo excerpt($page->text(), 150) ?>" />
    <?php else: ?>
    <meta property="og:description" content="<?php echo html($site->description()) ?>" />
    <?php endif ?>
    <meta property="og:url" content="<?php echo $page->url() ?>" />
    <meta property="og:image" content="<?php if($page->hasImages()){echo $page->images()->first()->url();} else{echo url('assets/images/ogimage.jpg');} ?>" />

    <?php echo css('assets/css/main.css') ?>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <?php echo js('assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') ?>
    <?php echo js('assets/js/vendor/isotope.pkgd.min.js') ?>
    <?php echo js('assets/js/vendor/jquery.slicknav.min.js') ?>
    <?php echo js('assets/js/plugins.js') ?>
  </head>

  <body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="header-container">
      <header class="wrapper clearfix">
        <h3 class="site-title"><a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a></h3>
        <nav>
          <ul id="menu">
            <li><h3><a class="filter" data-filter=".work">work</a></h3></li>
            <li><h3><a class="filter" data-filter=".educational">educational</a></h3></li>
            <li><h3><a href="<?php echo url() ?>about">about</a></h3></li>
            <li><h3><a class="contact" href="<?php echo url() ?>contact">contact</a></h3></li>
            <li><h3><a href="<?php echo url() ?>news">news</a></h3></li>
          </ul>
        </nav>  
      </header>
    </div>

    <div class="main-container">
    <div class="main wrapper clearfix">

