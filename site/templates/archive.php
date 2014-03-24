<?php snippet('header') ?>
<?php snippet('menu') ?>

<b>Titolo e testi</b>
<p><?php echo $page->title() ?></p>

<b>Selected Online Press</b>


<b>Last three news</b>
<?php foreach($page->children()->visible()->flip()->limit(5) as $article): ?>
  
	<article>
		<p><?php echo $article->date('l j F Y') ?></p>
		<h1><?php echo html($article->title()) ?></h1>
		<p><?php echo excerpt($article->text(), 500) ?></p>
	</article>

<?php endforeach ?>

<?php snippet('footer') ?>