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
		<section>
			<h3>Date</h3>
			<ul>
				<li><?php echo $page->date('l j F Y') ?></li>
			</ul>
		</section>

		<section>
			<h3>Tags</h3>
			<ul class="tags">
				<?php foreach(str::split($page->tags()) as $tag): ?>
					<li>
						<a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>"><?php echo $tag ?></a>
					</li>
				<?php endforeach ?>
			</ul>
		</section>

		<section>
			<h3>Share</h3>
			<ul>
				<li><a href="">Facebook</a></li>
				<li><a href="">Twitter</a></li>
				<li><a href="">Google +</a></li>
			</ul>
		</section>
	</aside>

<?php snippet('footer') ?>