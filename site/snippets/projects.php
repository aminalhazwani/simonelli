<section id="projects">

<ul>
  <?php foreach($data->children()->visible() as $project): ?>
  <li>
  	<a href="<?php echo $project->url() ?>">
	    <figure>
	    	<img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo html($project->title()) ?>" />
		    <figcaption>
		     	<p><?php echo html($project->title()) ?></p>
		    	<p><?php echo html($project->year()) ?></p>
		    </figcaption>
	    </figure>
	</a>
  </li>
  <?php endforeach ?>
</ul>

</section>