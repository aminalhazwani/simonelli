<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
  <?php echo js('assets/js/jquery.isotope.js') ?>

  <?php echo css('assets/styles/styles.css') ?>

</head>

<body>

  <header>
    <a data-filter="*" href="<?php echo url() ?>"><?php echo html($site->title()) ?></a>
  </header> 