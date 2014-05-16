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
    var $container = $('#wrapper').isotope({
        itemSelector: '.item',
        layoutMode: 'masonry',
        masonry: {
          columnWidth: '.work',
          gutter: '.grid-gutter'
        }
    });

    // filters
    $('.filter').click(function(){
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
    return false
    });

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

    //make educational images big onClick
    $(function(){
      var $container = $('.container')
          $items = $container.find('.edu-item');

      // trigger Isotope after images have loaded
      $('.container').isotope({
          itemSelector: '.edu-item',
          layoutMode: 'masonry',
          masonry: {
            columnWidth: '.edu-item',
            gutter: '.edu-gutter'
          }
      });

      // shows the large version of the image
      // shows small version of previously large image
      function enlargeImage( $item ) {
        $items.filter('.large').removeClass('large');
        $item.addClass('large');
        $('.container').isotope();
      }

    $items.click( function() {
      var $this = $(this),
          $item = $this.parents('edu.item');

      if ( $item.hasClass('large') ) {
        // already large, just remove
        $item.removeClass('large');
        $('.container').isotope();
        }
      else {
          if ( $item.hasClass('has-big-image') ) {
            enlargeImage( $item );
            $('html,body').animate({ scrollTop: $(this).offset().top - ( $(window).height() - $(this).outerHeight(true) ) / 2  }, 200);
          }
          else {
          // give it a wrapper and appended it to element
          enlargeImage( $this );
          $('html,body').animate({ scrollTop: $(this).offset().top - ( $(window).height() - $(this).outerHeight(true) ) / 2  }, 200);

          // add a class, so we'll know not to do this next time
          $item.addClass('has-big-image');
          }
      }
      return false;
      });
    });
});
