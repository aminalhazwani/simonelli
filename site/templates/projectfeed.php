<?php 

$projects = $pages->find('/projects')->children()->visible()->flip()->limit(10);

snippet('feed', array(
  'link'  => url(''),
  'items' => $projects,
  'descriptionField'  => 'text', 
  'descriptionLength' => 300
));

?>