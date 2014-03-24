<?php snippet('header') ?>

<?php snippet('menu') ?>

<p>
Simone Simonelli is a multidisciplinary designer crossing his activities between practice and educational activity (da defiinire). Praesent commodo cursus magna, vel scelerisque nisl
</p>

<div id="wrapper" 
	class="js-isotope" 
	data-isotope-options='{ 
		"itemSelector": ".item",
		"cellsByColumn": { "columnWidth": ".item" } 
	}'>

	<?php 
		foreach($pages->visible() as $section) {
			snippet($section->uid(), array('data' => $section));
		}
	?>
	
</div>

<?php snippet('footer') ?>