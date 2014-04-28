<?php snippet('header') ?>


	<h1 class="title"><?php echo $page->title() ?></h1>
	
	<article>
		<?php if($page->hasImages()): ?> 
			<ul>
			  <?php foreach($page->images() as $image): ?>
			  <li>
			  	<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
			  </li>
			  <?php endforeach ?>
			</ul>
		<?php endif ?>
		
		<?php echo markdown($page->text()) ?>
	</article>

	<aside>
		<section>
			<h3>Contacts</h3>
			<a class="e-mail" href="mailto:<?php echo $page->mail() ?>?subject=Hi there!"><?php echo $page->mail() ?></a>
			<p><?php echo $page->phone() ?></p>
			<hr class="half">
			<p><?php echo $page->street() ?></p>
			<p><?php echo $page->city() ?></p>
			<p><?php echo $page->state() ?></p>
		</section>

		<section>
			<h3>Interships</h3>
			<p>Looking for an intership? <a class="e-mail" href="mailto:<?php echo $page->mailintern() ?>?subject=I would like to apply for an intership">Apply now!</a></p>
		</section>

		<section>
			<h3>Social</h3>
			<?php snippet('social')?>
		</section>

		<?php if($page->clients() != ''): ?>
			<section>
				<h3>Selected Clients</h3>
				<ul>
					<?php foreach(str::split($page->clients()) as $client): ?>
						<li>
							<p><?php echo $client ?></p>
						</li>
					<?php endforeach ?>
				</ul>
			</section>
		<?php endif ?>

	</aside>

<?php snippet('footer') ?>
