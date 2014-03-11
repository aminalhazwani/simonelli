<?php snippet('header') ?>

<?php snippet('menu') ?>

<div id="wrapper">
	<ul id="list">
		<?php 

			foreach($pages->visible() as $section) {
				  snippet($section->uid(), array('data' => $section));
			}

		?>
	</ul>
</div>

<?php snippet('footer') ?>