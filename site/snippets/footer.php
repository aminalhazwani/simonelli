	<footer>
		<?php echo kirbytext($site->copyright()) ?>
	</footer>

	<script type="text/javascript">
	 
	$(window).load(function(){
	    var $container = $('.container');
	    $container.isotope({
	        filter: '*',
	        animationOptions: {
	            duration: 750,
	            easing: 'linear',
	            queue: false
	        }
	    });
	 
	    $('.menu a').click(function(){
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

	</script>

</body>

</html>