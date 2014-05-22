<?php snippet('header') ?>

<h3 class="intro"><?php echo html($site->description()) ?></h3>

<div id="wrapper" data-filter=".work">

	<?php 
		foreach($pages->visible()->without('online')->without('press') as $section) {
		  snippet($section->uid(), array('data' => $section));
		}
	?>

</div>

<?php snippet('footer') ?>