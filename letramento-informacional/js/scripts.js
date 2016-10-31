// easing scroll ativado pelo menu
$(function() {
    $('header section nav ul li a').bind('click',function(event){
        var $anchor = $(this);
        
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 800,'easeInOutCubic');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        event.preventDefault();
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('header section nav ul li').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('header section nav ul li').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}