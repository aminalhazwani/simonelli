<?php foreach($data->children()->visible() as $news): ?>


	<div class="item <?php echo html($news->category()) ?>">

		<a href="<?php echo $news->url() ?>">

			<data class="date" value="<?php echo $news->date('c') ?>"><?php echo $news->date('l j F Y') ?></data>
			<h3><?php echo html($news->title()) ?></h3>
			<p><?php echo excerpt($news->text(), 100) ?></p>

		</a>

	</div>
	<div class="grid-gutter"></div>

<?php endforeach ?>