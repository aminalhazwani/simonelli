<?php foreach($pages->find('/online')->children()->visible() as $article): ?>
	<ul>
		<a href="<?php echo $article->link() ?>" target="_blank">
			<li>
				<span><?php echo html($article->title()) ?></span>
				<span class="date"><?php echo $article->date('M. Y') ?></span>
			</li>
		</a>
	</ul>
<?php endforeach ?>
