$(document).ready(function () {

    $('footer').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $( function(){
            $.each($(".bottom"), function(i, val){
                $(val.children[0].children[2]).insertBefore(val.children[0].children[0]);
                $(val.children[0].children[1]).addClass("rotate");
                $(val.children[0].children[2]).addClass("bottom");
            })
    });

    $(function(){
        $('#menu').slicknav({
            label: '',
            closeOnClick: 'true',
            prependTo:'header',
            open : function (trigger){
                    var numElem = $(trigger).next().children("li").length;
                    $(trigger).next().children("li").each(function( index ) {
                        var opacityValue = (index ) * (1) / (numElem);
                        $( this ).css("background-color","rgba(6,58,128,"+(1-opacityValue)+")");
                    }); 
            }
        });
    });

});


// Isotope
$(window).load(function() {
    // init Isotope
    var $container = $('#wrapper').fadeIn(1000).isotope({
        itemSelector: '.item',
        layoutMode: 'masonry',
        masonry: {
          columnWidth: '.work',
          gutter: '.grid-gutter'
        }
    });


    $.param({ filter: '.work' })
    $.param({ filter: '.educational' })

    $('.filter').click(function(){
          // get href attr, remove leading #
      var href = $(this).attr('href').replace( /^#/, '' );
          // convert href into object
          // i.e. 'filter=.work' -> { filter: '.work' }
          console.log(href);
       var  option = $.deparam( href, true );
      // set hash, triggers hashchange on window
      $.bbq.pushState( option );
      return false;
    });

    $(window).bind( 'hashchange', function( event ){
    // get options object from hash
    var hashOptions = $.deparam.fragment();
    // apply options from hash
    $('#wrapper').isotope( hashOptions );
    })
    // trigger hashchange to capture any hash data on init
    .trigger('hashchange');


    // sorting
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