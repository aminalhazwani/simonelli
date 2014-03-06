<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<div id="container">
	<article>
	<h1><?php echo html($page->title()) ?></h1>
	<?php echo kirbytext($page->text()) ?>

	<?php if($page->hasImages()): ?> 
		<ul class="gallery">
			<?php foreach($page->images() as $image): ?>
			<li><img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" /></li>
			<?php endforeach ?>
		</ul>
	<?php endif ?>
	</article>
</div>

<?php snippet('footer') ?>