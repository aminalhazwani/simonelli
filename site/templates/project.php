<?php snippet('header') ?>

	<h1 class="title"><?php echo $page->title() ?></h1>
	<article>
		<?php echo markdown($page->text()) ?>

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
		<div class="sidebar">
			<section>
				<h3>Producer and release</h3>
				<ul>
					<li><?php echo $page->manufacter() ?></li>
					<li><?php echo $page->date('Y') ?></li>
				</ul>
			</section>

			<section>
				<h3>Materials</h3>
				<ul>
					<?php foreach(str::split($page->materials()) as $material): ?>
						<li>
							<!-- <a href="<?php echo url('blog/material:' . urlencode($material)) ?>"><?php echo $material ?></a> -->
							<p><?php echo $material ?></p>
						</li>
					<?php endforeach ?>
				</ul>
			</section>

			<section>
				<h3>Photo</h3>
				<ul>
					<li> <p><?php echo $page->photo() ?></p> </li>
				</ul>
			</section>

		<section>
				<h3>Share</h3>
				<ul>
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page->url() ?>" target="_blank">Facebook</a></li>
					<li><a href="https://twitter.com/intent/tweet?url=<?php echo $page->url() ?>text=<?php echo excerpt($page->text(), 100) ?>hashtags=hashtag1,hashtag2,hashtag3">Twitter</a></li>
					<li><a href="">Google +</a></li>
				</ul>
			</section>
		</div>
	</aside>

<?php snippet('footer') ?>