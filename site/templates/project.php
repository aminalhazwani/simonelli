<?php snippet('header') ?>

<div class="main-container">
	<div class="main wrapper clearfix">
		<p><?php echo $page->title() ?></p>
		<article>
			<p><?php echo kirbytext($page->text()) ?></p>

			<?php if($page->hasImages()): ?> 
				<ul>
				  <?php foreach($page->images() as $image): ?>
				  <li>
				  	<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
				  </li>
				  <?php endforeach ?>
				</ul>
			<?php endif ?>
		</article>

		<aside>
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
		</aside>

<?php snippet('footer') ?>