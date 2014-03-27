<?php snippet('header') ?>
	
	<aside class="contact">
		<section>
			<h3>Contacts</h3>
			<a class="e-mail" href="mailto:<?php echo $page->mail() ?>"><?php echo $page->mail() ?></a>
			<p><?php echo $page->phone() ?></p>
			<hr class="half">
			<p><?php echo $page->street() ?></p>
			<p><?php echo $page->city() ?></p>
			<p><?php echo $page->state() ?></p>
		</section>

		<section>
			<h3>Social</h3>
			<ul>
				<li><a href="">Facebook</a></li>
				<li><a href="">Twitter</a></li>
				<li><a href="">Instagram</a></li>
				<li><a href="">Linkedin</a></li>
			</ul>
		</section>
	</aside>

<?php snippet('footer') ?>