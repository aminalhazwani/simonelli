<?php snippet('header') ?>

<h3 class="intro"><?php echo html($site->description()) ?></h3>

<div id="wrapper">

	<?php 
		foreach($pages->visible() as $section) {
			snippet($section->uid(), array('data' => $section));
		}
	?>

</div>

<?php snippet('footer') ?>