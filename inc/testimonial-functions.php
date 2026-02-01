<?php

function lessonlms_register_testimonial()
{
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => __('Testimonials', 'lessonlms'),
            'singular_name' => __('Testimonial', 'lessonlms'),
            'add_new' => __('Add New', 'lessonlms'),
            'add_new_item' => __('Add New Testimonial', 'lessonlms'),
            'edit_item' => __('Edit Testimonial', 'lessonlms'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonials')

    ));
}
add_action('init', 'lessonlms_register_testimonial');


function lessonlms_testimonial_meta_box()
{
    add_meta_box(
        'testimonial_info',
        'Student Designation',
        'lessonlms_testimonial_callback',
        'testimonial',
        'normal',
        'high',
    );
}
add_action('add_meta_boxes', 'lessonlms_testimonial_meta_box');

//testimonial callback - No hook
function lessonlms_testimonial_callback($post)
{
    $designation = get_post_meta($post->ID, 'testimonial_designation', true);
?>
    <p>
        <label><strong>Designation / Course Name:</strong></label><br>
        <input type="text" name="testimonial_designation" style="width: 100%; margin-top:5px" value="<?php echo esc_attr($designation); ?>" placeholder="e.g. Student of WordPress Theme Development">
    </p>

<?php
}



//save testimonial meta
function lessonlms_save_testimonial_meta($post_id)
{
    if (isset($_POST['testimonial_designation'])) {
        update_post_meta($post_id, 'testimonial_designation', sanitize_text_field($_POST['testimonial_designation']));
    }
}
add_action('save_post_testimonil', 'lessonlms_save_testimonial_meta');
