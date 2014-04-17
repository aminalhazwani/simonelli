$(document).ready(function () {

    $('footer').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    // $( function(){
    //     if($(".educational").hasClass("bottom")){
    //         $(".educational a figure").insertBefore(".educational a div.arrow");   
    //         $(".educational a div.arrow").toggleClass("rotate"); 
    //         $(".educational a div.meta").toggleClass("bottom");    
    //     }
    // });

    $( function(){
            $.each($(".bottom"), function(i, val){
                $(val.children[0].children[2]).insertBefore(val.children[0].children[0]);
                $(val.children[0].children[1]).addClass("rotate");
                $(val.children[0].children[2]).addClass("bottom");
            })
    });

    $(function(){
        $('#menu').slicknav({
            label: 'Simone Simonelli',
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
});