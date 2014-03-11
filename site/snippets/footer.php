	<footer>
		<?php echo kirbytext($site->copyright()) ?>
	</footer>

	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<?php echo js('assets/js/jquery.isotope.min.js') ?>

	<script type="text/javascript">

	$( window ).load( function()
	{
	    var columns    = 3,
	        setColumns = function() { columns = $( window ).width() > 640 ? 3 : $( window ).width() > 320 ? 2 : 1; };
	 
	    setColumns();
	    $( window ).resize( setColumns );
	 
	    $( '#list' ).isotope(
	    {
	        itemSelector: '.item',
	        columnWidth:  function( containerWidth ) { return containerWidth / columns; }
	    });
	});

	</script>

</body>

</html>