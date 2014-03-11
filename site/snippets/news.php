<?php foreach($data->children()->visible() as $news): ?>
	<li class="item">
		<a href="<?php echo $news->url() ?>">
			<p><?php echo html($news->date()) ?></p>
			<h1><?php echo html($news->title()) ?></h1>
			<p><?php echo html($news->meta())?></p>
		</a>
	</li>
<?php endforeach ?>