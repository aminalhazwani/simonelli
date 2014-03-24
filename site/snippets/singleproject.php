<?php snippet('header') ?>
<?php snippet('menu') ?>


<h1><?php echo html($article->title()) ?></h1>
<?php echo kirbytext($article->text()) ?>
<span><?php echo html($article->category()) ?></span>


<?php snippet('footer') ?>