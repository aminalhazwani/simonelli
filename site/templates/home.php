<?php 
	snippet('header');
	snippet('menu');
	snippet('submenu');

	foreach($pages->visible() as $section) {
  		snippet($section->uid(), array('data' => $section));
	}
		
	snippet('footer');
?>