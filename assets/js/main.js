$(document).ready(function() {
    init();
    scrollSmooth();
});

function init(){
    /* Setup Carousel in Page: Index -> Section: About*/
    $('.carousel').carousel({
        interval: 1000000 //changes the speed
    });

    /* Setup Fadein Slide in Page: Index -> Section: Project-procedure*/
    $slide_url = 'url('+ $('.procedure-list-item-active')[0].getAttribute("data-slide") + ')';  
    $('.project-procedure').css('backgroundImage', $slide_url );
    $(".procedure-list-item").bind("click", function() {
        $('.procedure-list-item-active').removeClass('procedure-list-item-active');
        $(this).addClass('procedure-list-item-active');
        $slide_url = 'url('+ $('.procedure-list-item-active')[0].getAttribute("data-slide") + ')';
        $('.project-procedure').css('backgroundImage', $slide_url);
    });

    /*Setup Masonry Layout in Page: index -> Section: Quote-list*/
    $('.grid').masonry({
        itemSelector: '.quote-box',
        columnWidth: 320,
        // percentPosition: true
    });
}
/* Setup Effect: Scroll Smoothly*/
function scrollSmooth() {
    $('a[href*="#"]:not([href="#"],[href="#carousel-example-generic"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
}