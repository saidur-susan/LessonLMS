jQuery(document).ready(function () {
    $('.courses-wrapper').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.your-prev-btn'),
        nextArrow: $('.your-next-btn'),
        dots: true
    });
});

