<?php snippet('header') ?>

<h3 class="intro"><?php echo kirbytext($page->text()) ?></h3>

<div id="wrapper">

	<?php 
		foreach($pages->visible() as $section) {
			snippet($section->uid(), array('data' => $section));
		}
	?>

</div>

<?php snippet('footer') ?>