$(document).foundation()

$(document).ready(function() {

    //Carousel
    $(".brands-carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }
        
        lastScrollTop = st;
    }
    
    // Scroll to Top
    toggleButton();
    $(window).scroll(toggleButton);
    //Click event to scroll to top
    $('.scroll-top').click(function(){
        $('html, body').animate({scrollTop : 0}, 2000);
        return false;
    });

    function toggleButton() {
        if ($(window).scrollTop() > 600) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    }

    // Mobile Menu
	$('#nav-toggle').click(function() {
		$(this).toggleClass('active');
		$(this).parent().toggleClass('open');
		$('#mobile-menu').toggleClass('open');
    });
    
    // Mobile Menu
	$('#search-icon').click(function() {
		$(this).toggleClass('active');
		$(this).parent().toggleClass('open');
		$('#search-menu').toggleClass('open');
	});

});
