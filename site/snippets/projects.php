<section id="projects">

 <ul>
  <?php foreach($data->children()->visible() as $project): ?>
  <li>
    <figure>
     	<img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo html($project->title()) ?>" />
    </figure>
  </li>
  <?php endforeach ?>
 </ul>

</section>