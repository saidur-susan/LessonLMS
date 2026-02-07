jQuery(document).ready(function () {

    jQuery(".courses-wrapper").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow: jQuery('.your-prev-btn'),
        nextArrow: jQuery('.your-next-btn'),
        responsive: [
            {
                breakpoint: 768, // max-width: 767.98px
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 425, // max-width: 767.98px
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*----- testimonial section slick -----*/
    jQuery(".testimonial-items").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
    });


    /*----- blog section slick add -----*/
    jQuery('.blog-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 768, // max-width: 767.98px
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 425, // max-width: 767.98px
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});

