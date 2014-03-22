	<footer>
		<?php echo kirbytext($site->copyright()) ?>
	</footer>

	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<?php echo js('assets/js/jquery.isotope.min.js') ?>

	<script type="text/javascript">

	$(window).load(function(){
    var $container = $('#list');

    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: true
        }
    });
 
    $('.menu .selector').click(function(){
        $('.menu .current').removeClass('current');
        $(this).addClass('current');
 
	        var selector = $(this).attr('data-filter');
	        $container.isotope({
	            filter: selector,
	            animationOptions: {
	                duration: 750,
	                easing: 'linear',
	                queue: false
	            }
	         });
	         return false;
	    }); 
	});

	$container.isotope({
		getSortData : {
			bydate : function ( $elem ) {
				return $elem.find('.meta data').attr('date-time');
			}
		},
		sortBy : 'bydate',
		sortAscending : false
	});

	</script>

</body>

</html>