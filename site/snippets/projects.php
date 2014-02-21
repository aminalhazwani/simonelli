<section id="projects">

<ul>
  <?php foreach($data->children()->visible() as $project): ?>
  <li>
    <figure>
     <img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo html($project->title()) ?>" />
    </figure>
    <p><?php echo html($project->title()) ?></p>
    <p><?php echo html($project->year()) ?></p>
  </li>
  <?php endforeach ?>
 </ul>

</section>