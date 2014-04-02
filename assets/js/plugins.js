$(document).ready(function () {

    $('footer').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $( function(){
        if($(".education").hasClass("bottom")){
            $(".education a figure").insertBefore(".education a div.arrow");   
            $(".education a div.arrow").toggleClass("rotate"); 
            $(".education a div.meta").toggleClass("bottom");    
        }
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

    // $(window).bind('scroll', function() {
    //     if ($(window).scrollTop() > 88) {
    //         $('.sidebar').addClass('fixed');
    //     }
    //     else {
    //         $('.sidebar').removeClass('fixed');
    //     }
    // });

});

// Isotope
$(window).load(function() {
    // init Isotope
    var $container = $('#wrapper').isotope({
        itemSelector: '.item',
        layoutMode: 'masonry',
        masonry: {
          columnWidth: '.work',
          gutter: '.grid-gutter'
        }
    });

    // filters
    $('.filter').click(function() {
      var filterValue = $(this).attr('data-filter');
      $container.isotope({ filter: filterValue });
    });

    $('#wrapper').isotope({
        getSortData: {
            date: function (elem) {
                return Date.parse($(elem).find('.date').attr('date-time'));
            }
        },
        sortAscending: false,
        sortBy : 'date'
    });

    $('#wrapper')
        .isotope('updateSortData')
        .isotope();
});