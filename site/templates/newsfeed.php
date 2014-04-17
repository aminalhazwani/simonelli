<?php 

$articles = $pages->find('/news')->children()->visible()->flip()->limit(10);

snippet('feed', array(
  'link'  => url('news'),
  'items' => $articles,
  'descriptionField'  => 'text', 
  'descriptionLength' => 300
));

?>