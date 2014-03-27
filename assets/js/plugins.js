$(document).ready(function () {

    $('footer').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });


    // $(window).bind('scroll', function() {
    //     if ($(window).scrollTop() > 90) {
    //         $('aside').addClass('fixed');
    //     }
    //     else {
    //         $('aside').removeClass('fixed');
    //     }
    // });


    // Isotope
    $( function() {

        // init Isotope
        var $container = $('#wrapper').isotope({
            masonry: {
                columnWidth: '.item'
            }
        });

        // filters
        $('.filter').click(function() {
          var filterValue = $(this).attr('data-filter');
          $container.isotope({ filter: filterValue });
        });

        $('#wrapper').isotope({
            getSortData : {
             name : function ( $elem ) {
              return $elem.find('.date').attr('data-time');
             }
            },
            sortBy : 'name',
            sortAscending : false
        });

    });


});