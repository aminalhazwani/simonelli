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

    if ($('aside').length == 1) {
      //fixed sidebar
      fixit = function(){
        if ($(window).width() >= 768){
          $('aside').addClass("fixed");
          if ($('.fixed').height() + 38 + 112 > $(window).height()){
            //console.log("Sidebar is LONGER than browser height");
            //console.log($('.fixed').height() + 38 + 112);
            //console.log($(window).height());
            //console.log($(window).scrollTop());
            if (($('.fixed').height() + 38 + 112 + 112 - $(window).height()) < $(window).scrollTop() ) {
                //$('.fixed').css({ position: 'fixed', top: $(window).scrollTop() - ($('.fixed').height() - $(window).height()) });
                $('.fixed').css({ position: 'fixed', bottom: 0, top: 'auto' });
              }
            else {
                $('.fixed').css('position','static');
            }
          }
          else{
            //console.log("Sidebar is SHORTER than browser height");
              var stickyTop = $('.fixed').offset().top; // returns number 
              var windowTop = $(window).scrollTop(); // returns number
              if ( windowTop > 106) {
                $('.fixed').css({ position: 'fixed', top: 60, bottom: 'auto' });
              }
              else {
                $('.fixed').css('position','static');
              }
          }
        }
        else {
            $('.fixed').css('position','static');
        }
      }
      $(document).ready(fixit);
      $(window).bind('resize', fixit);
      $(window).bind('scroll', fixit);
    }

  text = function(){
    if ( $(document).height() <= $(window).height() ){
      $('footer span').css('display', 'none');
    }
    else{
      $('footer span').css('display', 'block');
    }
  };
  $(document).ready(text);
  $(window).bind('resize', text);
  $(window).bind('scroll', text);
        
});


// Isotope for homepage
$(document).ready(function() {
    if ($('#wrapper').length == 0) {
      return;
    }

    $('#wrapper .item figure img').each(function() {
      $(this).closest('figure').imagesLoaded(function(instance) {
        $(instance.elements).addClass('is-loaded');
        $('#wrapper').isotope('layout');
      });
    });

    // init Isotope
    var options = {
        itemSelector: '.item',
        layoutMode: 'masonry',
        masonry: {
          columnWidth: '.work',
          gutter: '.grid-gutter'
        }
    };

    if ($('#wrapper').attr('data-filter') != null) {
      options.filter = $('#wrapper').attr('data-filter');
    }

    var $container = $('#wrapper').isotope(options);

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

// filters
$(document).on('click', '.filter', function(){
  if ($('#wrapper').length == 0) {
    return true;
  }

  var selector = $(this).attr('data-filter');
  $('#wrapper').isotope({
      filter: selector,
      animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false
      }
  });

  $('#menu').slicknav('close');

  if (History.enabled) {
    History.replaceState(null, document.title, $(this).attr('href'));
  }

  return false;
});


// Isotope for work tempalte
$(document).ready(function() {
    if ($('.container').length == 0) {
      return;
    }

    $('.container li img').each(function() {
      $(this).closest('li').imagesLoaded(function(instance) {
        $(instance.elements).addClass('is-loaded');
        $('.container').isotope('layout');
      });
    });

    // init Isotope
    $('.container').isotope({
        itemSelector: '.edu-item',
        layoutMode: 'masonry',
        masonry: {
          columnWidth: '.edu-item',
          gutter: '.edu-gutter'
        }
    });

    // $('.container')
    //     .isotope('updateSortData')
    //     .isotope();
});

