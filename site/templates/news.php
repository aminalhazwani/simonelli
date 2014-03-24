<?php snippet('header') ?>
<?php snippet('menu') ?>

<b>Titolo e testi</b>
<p><?php echo $page->title() ?></p>
<p><?php echo kirbytext($page->text()) ?></p>

<b>Date</b>
<p><?php echo $page->date('l j F Y') ?></p>

<b>Tags</b>
<ul class="tags">
	<?php foreach(str::split($page->tags()) as $tag): ?>
		<li>
			<a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>"><?php echo $tag ?></a>
		</li>
	<?php endforeach ?>
</ul>

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