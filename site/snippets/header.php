<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
    <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
    
    <meta name="description" content="<?php echo html($site->description()) ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo css('assets/css/main.css') ?>

    <?php echo js('assets/js/vendor/jquery-1.11.0.min.js') ?>
    <?php echo js('assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') ?>
    <?php echo js('assets/js/vendor/jquery.isotope.min.js') ?>
  </head>

  <body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="header-container">
      <header class="wrapper clearfix">
        <h3 class="site-title"><a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a></h3>
        <nav>
          <ul>
            <li><h3><a class="filter" href="<?php echo url() ?>" data-filter=".work">work</a></h3></li>
            <li><h3><a class="filter" href="<?php echo url() ?>" data-filter=".education">education</a></h3></li>
            <li><h3><a href="<?php echo url() ?>about">about</a></h3></li>
            <li><h3><a href="<?php echo url() ?>news">news</a></h3></li>
          </ul>
        </nav>  
      </header>
    </div>