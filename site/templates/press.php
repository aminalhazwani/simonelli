<?php snippet('header') ?>

	<h1 class="title"><?php echo $page->title() ?></h1>
	<article>
		<?php echo markdown($page->text()) ?>

		<?php if($page->hasImages()): ?> 
		<ul class="ul-list">
		  <?php foreach($page->images() as $image): ?>
		  <li class="li-list">
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

		<?php if($page->tags() != ''): ?>
			<section>
				<h3>Tags</h3>
				<ul class="tags">
					<?php foreach(str::split($page->tags()) as $tag): ?>
						<li>
							<p><?php echo $tag ?></p>
						</li>
					<?php endforeach ?>
				</ul>
			</section>
		<?php endif?>

	<section>
			<h3>Share</h3>
			<ul>
				<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page->url() ?>" target="_blank">Facebook</a></li>
				<li><a href="https://twitter.com/intent/tweet?url=<?php echo $page->url() ?>&text=@simosimonelli on <?php echo $page->title() ?>&hashtags=<?php if($page->tags() != ''): ?><?php foreach(str::split($page->tags()) as $tag): ?><?php echo $tag ?>,<?php endforeach ?><?php endif?>">Twitter</a></li>
				<li><a href="http://pinterest.com/pin/create/button/?url=<?php echo $page->url() ?>&description=<?php echo excerpt($page->text(), 200) ?>&media=<?php echo $page->images()->first()->url() ?>">Pinterest</a></li>
			</ul>
		</section>
	</aside>

<?php snippet('footer') ?>