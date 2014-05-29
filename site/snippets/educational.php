<?php foreach($data->children()->visible() as $educational): ?>


	<div class="item <?php echo html($educational->branch()) ?> <?php echo html($educational->orientation()) ?>">

		<a class="#" href="<?php echo $educational->url() ?>">

			<div class="arrow"></div>
			<div class="meta">
		    	<h3><?php echo html($educational->title()) ?></h3>
		     	<span><?php echo html($educational->manufacter()) ?></span>,
		    	<data class="date" value="<?php echo $educational->date('c') ?>"><?php echo $educational->date('Y') ?></data>
		    </div>

		    <figure>
		    	<img src="<?php echo $educational->images()->first()->url() ?>" alt="<?php echo html($educational->title()) ?>" />
			    <figcaption>
			    	<span><?php echo html($educational->category()) ?></span>
			    </figcaption>
		    </figure>

		</a>

	</div>
	<div class="grid-gutter"></div>

<?php endforeach ?>
