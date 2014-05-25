<?php foreach($pages->find('/press')->children()->visible()->limit(5) as $article): ?>
	<ul>
		<a href="<?php echo $article->url() ?>">
			<li>
				<span><?php echo html($article->title()) ?></span>
				<span class="date"><?php echo $article->date('M. Y') ?></span>
			</li>
		</a>
	</ul>
<?php endforeach ?>