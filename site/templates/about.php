<?php snippet('header') ?>
<?php snippet('menu') ?>

<b>Titolo e testi</b>
<p><?php echo $page->title() ?></p>
<p><?php echo kirbytext($page->text()) ?></p>

<b>Contacts</b>
<p><?php echo $page->mail() ?></p>
<p><?php echo $page->phone() ?></p>
<p><?php echo $page->street() ?></p>
<p><?php echo $page->city() ?></p>
<p><?php echo $page->state() ?></p>


<b>Social</b>
<a href=""><p>Facebook</p></a>
<a href=""><p>Twitter</p></a>
<a href=""><p>Instagram</p></a>
<a href=""><p>Linkedin</p></a>

<b>Selected Clients</b>
<ul>
	<?php foreach(str::split($page->clients()) as $client): ?>
		<li>
			<a href="<?php echo url('blog/client:' . urlencode($client)) ?>"><?php echo $client ?></a>
		</li>
	<?php endforeach ?>
</ul>

<?php snippet('footer') ?>