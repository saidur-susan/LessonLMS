<?php
/*
lessonLMS/
    style.css
    index.php(for Blog Page)
    screenshot.png
    function.php
    assets/
        css/
        js/
        images/
    inc/
        setup.php
        enqueue.php
        customizer.php
        custom-post-type.php
        metabox.php
        ajax-functions.php
        review-functions.php
        dashboard-widgets.php
    template-parts/
       sections/
            hero
            courses
            testimonials
            ...
        content/
            content-{}.php
    languages/
        lessonlms.pot
    header.php
    footer.php
    front-page.php(for Home Page)
    */
?>

<?php get_header(); ?>


    <?php get_template_part('sections/hero'); ?>
    <?php get_template_part('sections/courses'); ?>
    <?php get_template_part('sections/testimonial'); ?>
    <?php get_template_part('sections/features'); ?>
    <?php get_template_part('sections/cta'); ?>
    <?php get_template_part('sections/blog'); ?>


<?php get_footer(); ?>