<?php foreach($data->children()->visible() as $education): ?>


	<div class="item <?php echo html($education->branch()) ?>">

		<a class="#" href="<?php echo $education->url() ?>">

			<div class="arrow-mobile"></div>
			<div class="meta">
		    	<h3><?php echo html($education->title()) ?></h3>
		     	<span><?php echo html($education->manufacter()) ?></span>,
		    	<data class="date" date-time="<?php echo $education->date('c') ?>"><?php echo $education->date('Y') ?></data>
		    	<div class="arrow"></div>
		    </div>

		    <figure>
		    	<img src="<?php echo $education->images()->first()->url() ?>" alt="<?php echo html($education->title()) ?>" />
			    <figcaption>
			    	<span><?php echo html($education->category()) ?></span>
			    </figcaption>
		    </figure>

		</a>

	</div>


<?php endforeach ?>

