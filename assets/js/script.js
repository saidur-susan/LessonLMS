jQuery(document).ready(function () {
    jQuery('.courses-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow: jQuery('.your-prev-btn'),
        nextArrow: jQuery('.your-next-btn'),
        dots: true,
    });

    /*----- Code copy from nayemur vai - need to learn  -----*/
    // jQuery(".slick-item").slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     autoplay: false,
    //     autoplaySpeed: 2000,
    //     dots: false,
    //     arrows: true,
    //     prevArrow: "<span class='left-arrow'><i class='bx bx-chevron-left'></i></span>",
    //     nextArrow: "<span class='right-arrow'><i class='bx bx-chevron-right'></i></span>",
    //     responsive: [
    //         {
    //             breakpoint: 768, // max-width: 767.98px
    //             settings: {
    //                 slidesToShow: 2
    //             }
    //         },
    //         {
    //             breakpoint: 576, // max-width: 575.98px
    //             settings: {
    //                 slidesToShow: 1
    //             }
    //         }
    //     ]
    // });

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
    jQuery(".blog-wrapper").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
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

