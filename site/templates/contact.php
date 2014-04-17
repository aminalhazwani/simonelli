<?php snippet('header') ?>
	
	<aside class="contact">
		<section>
			<h3>Contacts</h3>
			<a class="e-mail" href="mailto:<?php echo ($pages->find('/about')->mail()) ?>"><?php echo ($pages->find('/about')->mail()) ?></a>
			<p><?php echo ($pages->find('/about')->phone()) ?></p>
			<hr class="half">
			<p><?php echo ($pages->find('/about')->street()) ?></p>
			<p><?php echo ($pages->find('/about')->city()) ?></p>
			<p><?php echo ($pages->find('/about')->state()) ?></p>
		</section>

		<section>
			<h3>Social</h3>
			<?php snippet('social')?>
		</section>
	</aside>

<?php snippet('footer') ?>