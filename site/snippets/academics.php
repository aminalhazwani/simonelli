<section id="academics">

 <ul>
  <?php foreach($data->children()->visible() as $academics): ?>
  <li>
    <figure>
     	<img src="<?php echo $academics->images()->first()->url() ?>" alt="<?php echo html($academics->title()) ?>" />
    </figure>
  </li>
  <?php endforeach ?>
 </ul>

</section>