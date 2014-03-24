<?php snippet('header') ?>
<?php snippet('menu') ?>

<b>Titolo e testi</b>
<p><?php echo $page->title() ?></p>
<p><?php echo kirbytext($page->text()) ?></p>

<b>Producer and release</b>
<p><?php echo $page->manufacter() ?></p>
<p><?php echo $page->date('Y') ?></p>

<b>Materials</b>
<ul>
	<?php foreach(str::split($page->materials()) as $material): ?>
		<li>
			<a href="<?php echo url('blog/material:' . urlencode($material)) ?>"><?php echo $material ?></a>
		</li>
	<?php endforeach ?>
</ul>

<b>Photo</b>
<a href=""><p><?php echo $page->photo() ?></p></a> 

<b>Share</b>
<a href=""><p>Facebook</p></a>
<a href=""><p>Twitter</p></a>
<a href=""><p>Google +</p></a>

<?php if($page->hasImages()): ?> 
	<ul>
	  <?php foreach($page->images() as $image): ?>
	  <li>
	  	<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
	  </li>
	  <?php endforeach ?>
	</ul>
<?php endif ?>

<?php snippet('footer') ?>