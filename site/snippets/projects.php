<?php foreach($data->children()->visible() as $project): ?>


	<div data-filter="<?php echo html($project->branch()) ?>" 
		 class="item <?php echo html($project->branch()) ?> <?php echo html($project->orientation()) ?>">

		<a class="#" href="<?php echo $project->url() ?>">

			<div class="arrow"></div>
			<div class="meta">
				<h3><?php echo html($project->title()) ?></h3>
		     	<span><?php echo html($project->manufacter()) ?></span>,
		    	<data class="date" date-time="<?php echo $project->date('c') ?>"><?php echo $project->date('Y') ?></data>
		    </div>

		    <figure>
		    	<img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo html($project->title()) ?>" />
			    <figcaption>
			    	<span><?php echo html($project->category()) ?></span>
			    </figcaption>
		    </figure>

		</a>

	</div>
	<div class="grid-gutter"></div>


<?php endforeach ?>


