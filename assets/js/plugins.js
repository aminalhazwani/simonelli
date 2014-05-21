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

    //fixed sidebar
    fixit = function(){
      if ($(window).width() >= 768){
        $('aside').addClass("fixed");
        if($('.fixed').height() + 190 > $(window).height()){
          console.log("Sidebar is LONGER than browser height");
        }
        else{
          console.log("Sidebar is SHORTER than browser height");
          $(function(){
            var stickyTop = $('.fixed').offset().top; // returns number 
            $(window).scroll(function(){ // scroll event  
              var windowTop = $(window).scrollTop(); // returns number
              if (stickyTop < windowTop + 60) {
                $('.fixed').css({ position: 'fixed', top: 60 });
              }
              else {
                $('.fixed').css('position','static');
              }
            });
          });
        }
      }
      else {
        $('aside').removeClass("fixed");
      }
    }
    $(document).ready(fixit);
    $(window).bind('resize', fixit);
        
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

    //make educational images masonry
    $(function(){
      var $container = $('.container')
          $items = $container.find('.edu-item');

      // trigger Isotope after images have loaded
      $container.isotope({
          itemSelector: '.edu-item',
          layoutMode: 'masonry',
          masonry: {
            columnWidth: '.edu-item',
            gutter: '.edu-gutter'
          }
      });
    });

});
