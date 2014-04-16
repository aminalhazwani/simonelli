<?php snippet('header') ?>

	<h1 class="title"><?php echo $page->title() ?></h1>

	<article>
		<?php foreach($page->children()->visible()->flip()->limit(5) as $article): ?>
		<ul>
			<a href="<?php echo $article->url() ?>">
				<li>
					<p><?php echo $article->date('l j F Y') ?></p>
					<h2><?php echo html($article->title()) ?></h2>
					<p><?php echo excerpt($article->text(), 400) ?></p>
					<hr>
				</li>
			</a>
		</ul>
		<?php endforeach ?>
	</article>

	<aside>
		<section>
			<h3>Selected Online Press</h3>
			<?php foreach($pages->find('/online-press')->children()->visible() as $article): ?>
				<ul>
					<!-- <a href="<?php echo $article->link() ?>"> -->
						<li>
							<span><?php echo html($article->website()) ?></span>
							<span class="date"><?php echo $article->date('M. Y') ?></span>
						</li>
					<!-- </a> -->
				</ul>
			<?php endforeach ?>
		</section>

		<section>
			<h3>Selected Print Press</h3>
			<?php foreach($pages->find('/print-press')->children()->visible() as $article): ?>
				<ul>
					<!-- <a href="<?php echo $article->images()->find('01.jpg')->url() ?>"> -->
						<li>
							<span><?php echo html($article->magazine()) ?></span>
							<span class="date"><?php echo $article->date('M. Y') ?></span>
						</li>
					<!-- </a> -->
				</ul>
			<?php endforeach ?>
		</section>
	</aside>

<?php snippet('footer') ?>