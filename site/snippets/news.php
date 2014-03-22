<?php foreach($data->children()->visible() as $news): ?>
	<div class="item <?php echo html($news->category()) ?>">
		<a href="<?php echo $news->url() ?>">
			<data class="date" date-time="<?php echo $news->date('c') ?>"><?php echo $news->date('l j F Y') ?></data>
			<h1><?php echo html($news->title()) ?></h1>
			<p><?php echo excerpt($news->text(), 300) ?></p>
		</a>
	</div>
<?php endforeach ?>