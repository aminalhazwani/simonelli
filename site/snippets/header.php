<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/styles.css') ?>

</head>

<body>

  <header>
    <a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a>

    <div class="menu">
      <a class="selector" href="<?php echo url() ?>" data-filter=".work">work</a>
      <a class="selector" href="<?php echo url() ?>" data-filter=".education">education</a>
      <a href="<?php echo url() ?>about">about</a>
      <a href="<?php echo url() ?>news">news</a>
    </div>

  </header>