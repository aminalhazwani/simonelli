<?php foreach($data->children()->visible() as $project): ?>
	<li class="item">
		<a class="#" href="<?php echo $project->url() ?>">
	    <figure>
	    	<img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo html($project->title()) ?>" />
		    <figcaption>
		     	<h3><?php echo html($project->title()) ?></h3>
		    	<span><?php echo html($project->year()) ?></span>
		    	<span><?php echo html($project->manufacter()) ?></span>
		    </figcaption>
	    </figure>
	</a>
	</li>
<?php endforeach ?>

