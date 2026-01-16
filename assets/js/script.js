jQuery(document).ready(function () {
    $('.courses-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow: $('.your-prev-btn'),
        nextArrow: $('.your-next-btn'),
        dots: false,
    });

    /*----- Code copy from nayem special - need to learn courses section slick add -----*/
    $(".slick-item").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        prevArrow: "<span class='left-arrow'><i class='bx bx-chevron-left'></i></span>",
        nextArrow: "<span class='right-arrow'><i class='bx bx-chevron-right'></i></span>",
        responsive: [
            {
                breakpoint: 768, // max-width: 767.98px
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576, // max-width: 575.98px
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    /*----- testimonial section slick -----*/
    $(".testimonial-items").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false
    });


    /*----- blog section slick add -----*/
    $(".blog-wrapper").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 768, // max-width: 767.98px
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });
});

