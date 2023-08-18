window.scrollTo({ top: 0, behavior: 'smooth' })
$(document).ready(function() {
    // Header Fixed on Scroll
    $(window).on("load resize scroll", function() {
        var sticky = $(".header-bottom"),
            scroll = $(window).scrollTop();

        if (scroll >= 50) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });
    // Scroll Event (Go to Top on Click)
    //To scroll top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $(".scrollToTop").fadeIn().addClass("d-block");
        } else {
            $(".scrollToTop").fadeOut().removeClass("d-block");
        }
    });
    //Click event to scroll to top
    $(".scrollToTop").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    $(".slider-banner").slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 500,
        pauseOnHover: false,
        fade: true,
        cssEase: "linear",
        prevArrow: "<span class='slick-arrow left'><i class='fa fa-chevron-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='fa fa-chevron-right'></i></slick>",
        responsive: [{
            breakpoint: 767,
            settings: {
                arrows: false,
            },
        }, ],
    });

    $(window).resize(function() {
        $(".slider-banner").slick("resize");
    });

    $(".testimonial .client-review").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: "linear",
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: "<span class='slick-arrow left'><i class='fa fa-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='fa fa-arrow-right'></i></slick>",
       
    });
    $(window).resize(function() {
        $(".testimonial .client-review").slick("resize");
    });
});



