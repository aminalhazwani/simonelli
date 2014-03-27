<?php foreach($data->children()->visible() as $project): ?>


	<div class="item <?php echo html($project->branch()) ?>">

		<a class="#" href="<?php echo $project->url() ?>">

			<div class="arrow-mobile"></div>
			<div class="meta">
		    	<h3><?php echo html($project->title()) ?></h3>
		     	<span><?php echo html($project->manufacter()) ?></span>,
		    	<data class="date" date-time="<?php echo $project->date('c') ?>"><?php echo $project->date('Y') ?></data>
		    	<div class="arrow"></div>
		    </div>

		    <figure>
		    	<img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo html($project->title()) ?>" />
			    <figcaption>
			    	<span><?php echo html($project->category()) ?></span>
			    </figcaption>
		    </figure>

		</a>

	</div>


<?php endforeach ?>


