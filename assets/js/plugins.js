$(document).ready(function () {

    $('footer').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $(function(){
        $('#menu').slicknav({
            label: 'Simone Simonelli',
            prependTo:'header',
            open : function (trigger){
                console.log($(trigger).next().children("li").length);
                    var numElem = $(trigger).next().children("li").length;
                    $(trigger).next().children("li").each(function( index ) {
                        var opacityValue = (index ) * (1) / (numElem);
                        $( this ).css("background-color","rgba(6,58,128,"+(1-opacityValue)+")");
                    }); 
            }
        });
    });

    $(window).bind('scroll', function() {
        if ($(window).scrollTop() > 88) {
            $('.sidebar').addClass('fixed');
        }
        else {
            $('.sidebar').removeClass('fixed');
        }
    });


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