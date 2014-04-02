<?php snippet('header') ?>

	<h1 class="title"><?php echo $page->title() ?></h1>
	
	<article>
		<?php echo markdown($page->text()) ?>
	</article>

	<aside>
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
				<!-- <li><a href="">Facebook</a></li> -->
				<li><a href="https://twitter.com/simosimonelli">Twitter</a></li>
				<li><a href="http://instagram.com/ssimonelli">Instagram</a></li>
				<!-- <li><a href="">Linkedin</a></li> -->
			</ul>
		</section>

		<section>
			<h3>Selected Clients</h3>
			<ul>
				<?php foreach(str::split($page->clients()) as $client): ?>
					<li>
						<!-- <a href="<?php echo url('blog/client:' . urlencode($client)) ?>"><?php echo $client ?></a> -->
						<p><?php echo $client ?></p>
					</li>
				<?php endforeach ?>
			</ul>
		</section>
	</aside>

<?php snippet('footer') ?>