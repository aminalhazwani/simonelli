<?php snippet('header') ?>
	<h1 class="title"><?php echo markdown($page->text()) ?></h1>
	<article>
		I can’t find <code><?php echo thisURL() ?></code>. 
	</br>
		Please use the navigation above.
	</article>
<?php snippet('footer') ?>