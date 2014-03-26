<?php snippet('header') ?>

<p><?php echo kirbytext($page->text()) ?></p>

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