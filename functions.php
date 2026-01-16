        <?php //nayemur vi
        function lessonlms_theme_files()
        {

            //link with css
            wp_enqueue_style('output-css', get_template_directory_uri() . '/assets/css/output.css');

            //main url css
            wp_enqueue_style('main-style', get_stylesheet_uri());


            // wp_enqueue_style('font-css', 'https://fonts.googleapis.com', array(), '1.1.0');
            // wp_enqueue_style('font2-css', 'https://fonts.gstatic.com', array(), '1.1.0');

            wp_enqueue_style('main-font-css', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', '1.1.0');

            wp_enqueue_style('slick-core-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');

            wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', array(), '1.9.0');
            //font awesome css
            wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css', array(), '7.0.0');

            //jQuery
            wp_enqueue_script('jquery');

            //slick js


            wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);


            //main js

            wp_enqueue_script(
                'main-js',
                get_template_directory_uri() . '/assets/js/script.js',
                array('jquery', 'slick-js'),
                '1.1.0'
            );
        }
        add_action("wp_enqueue_scripts", "lessonlms_theme_files");
        ?>




        <?php
        //logo
        function lessonlms_theme_registration()
        {
            add_theme_support('post-thumbnails');
            add_theme_support('custom-logo', array(
                'height' => 40,
                'width' => 95,

            ));
        }
        //menu register
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'lessonlms'),
            'mobile_menu' => __('Mobile Menu', 'lessonlms'),
            'footer_menu_1' => __('Footer Menu 1', 'lessonlms'),
            'footer_menu_2' => __('Footer Menu 2', 'lessonlms')
        ));

        //hook
        add_action('after_setup_theme', 'lessonlms_theme_registration');






        //customize section function
        function lessonlms_customize_register($wp_customize)
        {

            //hero section stars here
            $wp_customize->add_section('hero_settings', array(
                'title' => __('Hero Settings', 'lessonlms'),
                'priority' => 30,
            ));
            //Hero Image
            $wp_customize->add_setting('hero_image', array(
                'default' => get_template_directory_uri() . '/assets/img/guy-lesson 1.jpg'
            ));
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
                'label' => __('Hero Image', 'lessonlms'),
                'settings' => 'hero_image',
                'section' => 'hero_settings'
            )));

            //hero  title
            $wp_customize->add_setting('hero_title', array(
                'default' => 'Learn without limits and spread knowledge.',
            ));
            $wp_customize->add_control('hero_title', array(
                'label' => __('Hero Title', 'lessonlms'),
                'section' => 'hero_settings',
                'type' => 'text',
            ));

            //hero section description
            $wp_customize->add_setting('hero_description', array(
                'default' => 'Build new skills for that “this is my year” feeling with courses, certificates, and degrees from world-class universities and companies.',
            ));
            $wp_customize->add_control('hero_description', array(
                'label' => __('Hero Section Description', 'lessonlms'),
                'section' => 'hero_settings',
                'type' => 'textarea',
            ));

            //hero courses count 1
            $wp_customize->add_setting('hero_course_count_1', array(
                'default' => __('20 Courses', 'lessonlms')
            ));

            $wp_customize->add_control('hero_course_count_1', array(
                'label' => 'Hero Course Count 1',
                'setting' => 'hero_course_count_1',
                'section' => 'hero_settings'
            ));

            //hero courses heading 1
            $wp_customize->add_setting('hero_course_heading_1', array(
                'default' => __('UI/UX Design', 'lessonlms')
            ));

            $wp_customize->add_control('hero_course_heading_1', array(
                'label' => 'Hero Course Heading 1',
                'setting' => 'hero_course_heading_1',
                'section' => 'hero_settings'
            ));

            //hero courses count 2
            $wp_customize->add_setting('hero_course_count_2', array(
                'default' => __('20 Courses', 'lessonlms')
            ));

            $wp_customize->add_control('hero_course_count_2', array(
                'label' => 'Hero Course Count 2',
                'setting' => 'hero_course_count_2',
                'section' => 'hero_settings'
            ));

            //hero courses heading 2
            $wp_customize->add_setting('hero_course_heading_2', array(
                'default' => __('Development', 'lessonlms')
            ));

            $wp_customize->add_control('hero_course_heading_2', array(
                'label' => 'Hero Course Heading 2',
                'setting' => 'hero_course_heading_2',
                'section' => 'hero_settings'
            ));

            //hero courses count 3
            $wp_customize->add_setting('hero_course_count_3', array(
                'default' => __('40 Courses', 'lessonlms')
            ));

            $wp_customize->add_control('hero_course_count_3', array(
                'label' => 'Hero Course Count 3',
                'setting' => 'hero_course_count_3',
                'section' => 'hero_settings'
            ));

            //hero courses heading 3
            $wp_customize->add_setting('hero_course_heading_3', array(
                'default' => __('Web App Design', 'lessonlms')
            ));

            $wp_customize->add_control('hero_course_heading_3', array(
                'label' => 'Hero Course Heading 3',
                'setting' => 'hero_course_heading_3',
                'section' => 'hero_settings'
            ));

            //hero button link
            $wp_customize->add_setting('hero_button_link', array(
                'default' => '#',
            ));

            $wp_customize->add_control('hero_button_link', array(
                'label' => 'Hero Button Link',
                'setting' => 'hero_button_link',
                'section' => 'hero_settings',
                'type' => 'url'
            ));
            //hero watch button link
            $wp_customize->add_setting('hero_watch_button_link', array(
                'default' => '#',
            ));

            $wp_customize->add_control('hero_watch_button_link', array(
                'label' => 'Hero Watch Button Link',
                'setting' => 'hero_watch_button_link',
                'section' => 'hero_settings',
                'type' => 'url'
            ));

            //hero recent engagment student count
            $wp_customize->add_setting('hero_recent_engagment_student_count', array(
                'default' => __('50K', 'lessonlms')
            ));

            $wp_customize->add_control('hero_recent_engagment_student_count', array(
                'label' => 'Hero Engagment Student Count',
                'section' => 'hero_settings',
                'type' => 'text'
            ));

            //hero recent engagment course count
            $wp_customize->add_setting('hero_recent_engagment_course_count', array(
                'default' => __('70+', 'lessonlms')
            ));

            $wp_customize->add_control('hero_recent_engagment_course_count', array(
                'label' => 'Hero Engagment Course Count',
                'section' => 'hero_settings',
                'type' => 'text'
            ));





            //Feature Section Start Here
            $wp_customize->add_section('feature_setting', array(
                'title' => 'Feature Settings',
                'priority' => 100
            ));
            //Feature Title
            $wp_customize->add_setting('feature_title', array(
                'default' => __('Learner outcomes through our awesome platform', 'lessonlms')
            ));
            $wp_customize->add_control('feature_title', array(
                'label' => 'Feature Title',
                'settings' => 'feature_title',
                'section' => 'feature_setting'
            ));

            //Feature Description
            $wp_customize->add_setting('feature_description', array(
                'default' => __('87% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career.', 'lessonlms')
            ));
            $wp_customize->add_control('feature_description', array(
                'label' => 'Feature Description',
                'settings' => 'feature_description',
                'section' => 'feature_setting',
                'type' => 'textarea'
            ));

            //Feature Button Text
            $wp_customize->add_setting('feature_button_text', array(
                'default' => __('Sing Up', 'lessonlms')
            ));
            $wp_customize->add_control('feature_button_text', array(
                'label' => 'Feature Button Text',
                'settings' => 'feature_button_text',
                'section' => 'feature_setting'
            ));

            //Feature Button Link
            $wp_customize->add_setting('feature_button_link', array(
                'default' => '#'
            ));
            $wp_customize->add_control('feature_button_link', array(
                'label' => 'Feature Button Link',
                'settings' => 'feature_button_link',
                'section' => 'feature_setting',
                'type' => 'url'
            ));

            // Feature Image One
            $wp_customize->add_setting('feature_image_one', array(
                'default' => get_template_directory_uri() . '/assets/img/Rectangle 10.png'
            ));
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_one', array(
                'label' => 'Feature Image One',
                'settings' => 'feature_image_one',
                'section' => 'feature_setting'
            )));

            // Feature Image Two
            $wp_customize->add_setting('feature_image_two', array(
                'default' => get_template_directory_uri() . '/assets/img/Rectangle 11.png'
            ));
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_two', array(
                'label' => 'Feature Image Two',
                'settings' => 'feature_image_two',
                'section' => 'feature_setting'
            )));





            //CTA Section Start Here
            $wp_customize->add_section('cta_setting', array(
                'title' => __('CTA Settings', 'lessonlms'),
                'priority' => 100
            ));

            //CTA-2 Title

            $wp_customize->add_setting('cta_2_title', array(
                'default' => 'Take the next step toward your personal and professional goals with Lesson.',
            ));
            $wp_customize->add_control('cta_2_title', array(
                'label' => __('CTA-2 Title', 'lessonlms'),
                'section' => 'cta_setting',
                'type' => 'text',
            ));

            //CTA Description

            $wp_customize->add_setting('cta_2_description', array(
                'default' => 'Take the next step toward. Join now to receive personalized and more recommendations from the full Coursera catalog.',
            ));
            $wp_customize->add_control('cta_2_description', array(
                'label' => __('CTA-2 Description', 'lessonlms'),
                'section' => 'cta_setting',
                'type' => 'textarea',
            ));

            //cta button text
            $wp_customize->add_setting('cta_2_button_text', array(
                'default' => __('Join Now', 'lessonlms'),
            ));

            $wp_customize->add_control('cta_2_button_text', array(
                'label' => 'CTA-2 Button Text',
                'settings' => 'cta_2_button_text',
                'section' => 'cta_setting',
                'type' => 'text'
            ));

            //cta button link
            $wp_customize->add_setting('cta_2_button_link', array(
                'default' => '#',
            ));

            $wp_customize->add_control('cta_2_button_link', array(
                'label' => 'CTA-2 Button Link',
                'settings' => 'cta_2_button_link',
                'section' => 'cta_setting',
                'type' => 'url'
            ));

            //CTA Image
            $wp_customize->add_setting('cta_2_image', array(
                'default' => get_template_directory_uri() . '/assets/img/Rectangle 12.png'
            ));
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cta_2_image', array(
                'label' => 'CTA-2 Image',
                'settings' => 'cta_2_image',
                'section' => 'cta_setting'
            )));





            //blog section stars here
            $wp_customize->add_section('blog_settings', array(
                'title' => __('Blog Settings', 'lessonlms'),
                'priority' => 110,
            ));
            //blog section title
            $wp_customize->add_setting('blog_section_title', array(
                'default' => 'Our Blog',
            ));
            $wp_customize->add_control('blog_section_title', array(
                'label' => __('Blog Section Title', 'lessonlms'),
                'section' => 'blog_settings',
                'type' => 'text',
            ));
            //blog section description
            $wp_customize->add_setting('blog_section_description', array(
                'default' => 'Read our regular travel blog and know the latest update of tour and travel',
            ));
            $wp_customize->add_control('blog_section_description', array(
                'label' => __('Blog Section Description', 'lessonlms'),
                'section' => 'blog_settings',
                'type' => 'textarea',
            ));





            //footer section stars here
            $wp_customize->add_section('footer_settings', array(
                'title' => __('Footer Settings', 'lessonlms'),
                'priority' => 120,
            ));

            //footer logo
            $wp_customize->add_setting('footer_logo');
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
                'label' => __('Footer Logo', 'lessonlms'),
                'settings' => 'footer_logo',
                'section' => 'footer_settings'
            )));

            //social links
            $socials = ['twitter', 'facebook', 'linkedin', 'instragram'];
            foreach ($socials as $social) {
                $wp_customize->add_setting("footer_{$social}_link", array(
                    'default => ' #',
                ));
                $wp_customize->add_control("footer_{$social}_link", array(
                    'label' => sprintf(__('%s URL', 'lessonlms'), ucfirst($social)),
                    'section' => 'footer_settings',
                    'type' => 'url'
                ));
            }

            //about text
            $wp_customize->add_setting('footer_about_text', array(
                'default' => 'Need to help for your dream Career? trust us. With Lesson, study becomes a lot easier with us.',
            ));
            $wp_customize->add_control('footer_about_text', array(
                'label' => __('About Text', 'lessonlms'),
                'section' => 'footer_settings',
                'type' => 'textarea',
            ));

            //footer menu title 1
            $wp_customize->add_setting('footer_menu_title_1', array(
                'default' => 'Company',
            ));
            $wp_customize->add_control('footer_menu_title_1', array(
                'label' => __('Footer Menu Title-1', 'lessonlms'),
                'section' => 'footer_settings',
                'type' => 'text',
            ));

            //footer menu title 2
            $wp_customize->add_setting('footer_menu_title_2', array(
                'default' => 'Support',
            ));
            $wp_customize->add_control('footer_menu_title_2', array(
                'label' => __('Footer Menu Title-2', 'lessonlms'),
                'section' => 'footer_settings',
                'type' => 'text',
            ));

            //footer address location
            $wp_customize->add_setting('footer_location', array(
                'default' => '27 Division St, New York, NY 10002, USA'
            ));
            $wp_customize->add_control('footer_location', array(
                'label' => 'Footer Location',
                'section' => 'footer_settings',
                'type' => 'text',
            ));

            //email input 
            $wp_customize->add_setting('footer_email', array(
                'default' => 'example@mail.com'
            ));
            $wp_customize->add_control('footer_email', array(
                'label' => 'Input Email',
                'section' => 'footer_settings',
                'type' => 'email',
            ));

            //phone title
            $wp_customize->add_setting('footer_phone_title', array(
                'default' => 'Phone'
            ));
            $wp_customize->add_control('footer_phone_title', array(
                'label' => 'Phone Title',
                'section' => 'footer_settings',
                'type' => 'text',
            ));

            //phone number
            $wp_customize->add_setting('footer_phone_number', array(
                'default' => '+ 000 1234 567 890'
            ));
            $wp_customize->add_control('footer_phone_number', array(
                'label' => 'Phone Number',
                'section' => 'footer_settings',
                'type' => 'tel',
            ));
        }
        add_action('customize_register', 'lessonlms_customize_register');



        function lessonlms_register_sidebar()
        {
            register_sidebar(array(
                'name' => __('Blog Sidebar', 'lessonlms'),
                'id'   => 'blog-sidebar',
                'description'   => __('Widgets in this area will be shown on the blog sidebar', 'lessonlms'),
                'before_widget' => '<div class="sidebar-widget w-full md:w-80 bg-white rounded-2xl shadow-lg p-6 space-y-8 mb-4">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="text-lg font-semibold mb-3">',
                'after_title' => '</h3>',
            ));
        }
        add_action('widgets_init', 'lessonlms_register_sidebar');


        // Post Type Register

        function lessonlms_register_course()
        {
            register_post_type(
                'course',
                array(
                    'labels'      => array(
                        'name'          => __('Courses', 'lessonlms'),
                        'singular_name' => __('Course', 'lessonlms'),
                        'add_new' => __('Add New Course', 'lessonlms'),
                        'add_new_item' => __('Add New Course', 'lessonlms'),
                        'edit-item' => __('Edit Course', 'lessonlms'),
                        'view-item' => __('View Course', 'lessonlms'),
                        'not_found' => __('No Course found', 'lessonlms'),
                        'search_items' => __('Search Course', 'lessonlms'),
                    ),
                    'public'      => true,
                    'has_archive' => true,
                    'rewrite'     => array('slug' => 'course'),
                    'supports' => array('title', 'editor', 'thumbnail', 'author'), //custom-fields for custom field options
                    'menu_icon' => 'dashicons-book',
                )
            );
        }

        add_action('init', 'lessonlms_register_course');


        //register meta box

        function lesson_course_meta_box()
        {
            add_meta_box(
                'course_details',
                'Course Details',
                'lessonlms_course_meta_box_callback',
                'course',
                'normal',
                'high'
            );
        }
        add_action('add_meta_boxes', 'lesson_course_meta_box');
        //callback no need hooks
        function lessonlms_course_meta_box_callback($post)
        {
            $price = get_post_meta($post->ID, 'price', true);
            $original_price = get_post_meta($post->ID, 'original_price', true);
            $video_hours = get_post_meta($post->ID, 'video_hours', true);
            $article_count = get_post_meta($post->ID, 'article_count', true);
            $downloadable_resources = get_post_meta($post->ID, 'downloadable_resources', true);
            $language = get_post_meta($post->ID, 'language', true);
            $subtitle = get_post_meta($post->ID, 'subtitle', true);

            $learn_points_data = get_post_meta($post->ID, 'learn_points', true);
            $learn_points = is_array($learn_points_data) ? implode("\n", $learn_points_data) : $learn_points_data;

            $requirements_data = get_post_meta($post->ID, 'requirements', true);
            $requirements = is_array($requirements_data) ? implode("\n", $requirements_data) : $requirements_data;

            $target_audience_data = get_post_meta($post->ID, 'target_audience', true);
            $target_audience = is_array($target_audience_data) ? implode("\n", $target_audience_data) : $target_audience_data;
        ?>

            <div>
                <p>
                    <label for="price">Price:</label>
                    <input type="number" name="price" step="0.01" value="<?php echo esc_attr($price); ?>">
                </p>

                <p>
                    <label for="original_price">Original Price:</label>
                    <input type="number" name="original_price" step="0.01" value="<?php echo esc_attr($original_price); ?>">
                </p>
                <p>
                    <label for="video_hours">Video Hours:</label>
                    <input type="number" name="video_hours" step="0.1" value="<?php echo esc_attr($video_hours); ?>">
                </p>
                <p>
                    <label for="article_count">Article Count:</label>
                    <input type="number" name="article_count" value="<?php esc_attr($article_count); ?>">
                </p>
                <p>
                    <label for="downloadable_resources">Downloadable Resources:</label>
                    <input type="number" name="downloadable_resources" value="<?php esc_attr($downloadable_resources); ?>">
                </p>
                <p>
                    <label for="language">Language:</label>
                    <input type="text" name="language" value="<?php esc_attr($language); ?>">
                </p>
                <p>
                    <label for="subtitle">Subtitle:</label>
                    <input type="text" name="subtitle" value="<?php esc_attr($subtitle); ?>">
                </p>
                <p>
                    <label for="learn_points"><strong>What Will You Learn?</strong></label><br>
                    <small>Input your list items</small>
                    <textarea name="learn_points" id="learn_points" style="width:100%;" rows="5"><?php echo esc_textarea($learn_points) ?></textarea>
                </p>
                <p>
                    <label for="target_audience"><strong>Who this course is for:</strong></label><br>
                    <small>Input your list items</small>
                    <textarea name="target_audience" id="target_audience" style="width:100%;" rows="5"><?php echo esc_textarea($target_audience) ?></textarea>
                </p>
                <p>
                    <label for="requirements"><strong>Requirements</strong></label><br>
                    <small>Input your list items</small>
                    <textarea name="requirements" id="requirements" style="width:100%;" rows="5"><?php echo esc_textarea($requirements) ?></textarea>
                </p>
            </div>

        <?php
        }

        //data save on backend fields
        function lessonlms_save_course_meta($post_id)
        {

            $fields = array(
                'price',
                'original_price',
                'video_hours',
                'article_count',
                'downloadable_resources',
                'language',
                'subtitle'

            );
            foreach ($fields as $field) {
                if (isset($_POST[$field])) {
                    update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
                }
            }

            $textarea_fields = array(
                'learn_points',
                'requirements',
                'target_audience',
            );
            foreach ($textarea_fields as $field) {
                if (isset($_POST[$field])) {
                    update_post_meta($post_id, $field, sanitize_textarea_field($_POST[$field]));
                }
            }
        }
        add_action('save_post_course', 'lessonlms_save_course_meta');


        //ইউজার রিভিউ সাবমিট করলে তা প্রসেস হবে এবং সেভ হবে।
        function lessonlms_handle_review_submission()
        {
            if (isset($_POST['submit_review']) && isset($_POST['course_id'])) {
                $course_id = intval($_POST['course_id']);
                $rating = intval($_POST['rating']);
                $review_text = sanitize_text_field($_POST['review_text']);
                $reviewer_name = sanitize_text_field($_POST['reviewer_name']);

                if ($rating >= 1 && $rating <= 5 && !empty($review_text) && !empty($reviewer_name)) {
                    $reviews = get_post_meta($course_id, '_course_reviews', true);

                    if (!is_array($reviews)) {
                        $reviews = array();
                    }
                    $new_review = array(
                        'rating' => $rating,
                        'review' => $review_text,
                        'name' => $reviewer_name,
                        'date' => current_time('mysql')
                    );

                    $reviews[] = $new_review;

                    update_post_meta($course_id, '_course_reviews', $reviews);

                    lessonlms_update_review_stats($course_id);
                    //Redirect to prevent resubmission
                    wp_redirect(add_query_arg('review_submitted', 'true', get_permalink($course_id)));
                    exit;
                }
            }
        }
        add_action('init', 'lessonlms_handle_review_submission');


        //কোর্সের রিভিউ থেকে মোট রিভিউ সংখ্যা ও গড় রেটিং আপডেট করবে।
        function lessonlms_update_review_stats($course_id)
        {
            $reviews = get_post_meta($course_id, '_course_reviews', true);

            if (is_array($reviews) && !empty($reviews)) {
                $total_rating = 0;
                $review_count = count($reviews);

                foreach ($reviews as $review) {
                    $total_rating = $total_rating + $review['rating'];
                }

                $average_rating = round($total_rating / $review_count, 1);

                update_post_meta($course_id, '_total_reviews', $review_count);
                update_post_meta($course_id, '_avarage_rating', $average_rating);
            }
        }


        //কোর্সের মোট রিভিউ ও গড় রেটিং রিটার্ণ করবে
        function lessonlms_get_review_stats($course_id)
        {
            $total_reviews = get_post_meta($course_id, '_total_reviews', true) ?: 0;
            $average_rating = get_post_meta($course_id, '_avarage_rating', true) ?: 0;

            return array(
                'total_reviews' => $total_reviews,
                'average_rating' => $average_rating,
            );
        }
        //কোর্সের সকল রিভিউ অ্যারে রিটার্ণ করবে
        function lessonlms_get_course_reviews($course_id)
        {
            return get_post_meta($course_id, '_course_reviews', true) ?: array();
        }

        function lessonlms_handle_enrollment()
        {
            $course_id = isset($_POST['course_id']) ? intval($_POST['course_id']) : 0;

            if ($course_id <= 0) {
                wp_send_json_error('Invalid Course ID');
            }

            $user_id = get_current_user_id();

            if ($user_id == 0) {
                wp_send_json_error('Please Login to Enroll');
            }

            $current_enrolled = get_post_meta($course_id, '_enrolled_students', true ?: 0);
            $new_count = intval($current_enrolled) + 1;
            update_post_meta($course_id, '_enrolled_students', $new_count);

            $user_enrollments = get_user_meta($user_id, '_user_enrollments', true);

            if (!is_array($user_enrollments)) {
                $user_enrollments = array();
            }

            $user_enrollments[] = array(
                'course_id' => $course_id,
                'date' => current_time('mysql'),
            );

            update_user_meta($user_id, '_user_enrollments', $user_enrollments);

            $formated_count = number_format($new_count);
            wp_send_json_success($formated_count);
        }
        add_action('wp_ajax_lessonlms_enroll_course', 'lessonlms_handle_enrollment');
        add_action('wp_ajax_nopriv_lessonlms_enroll_course', 'lessonlms_handle_enrollment');

        function lessonlms_ajax_scripts()
        {
        ?>
            <script type="text/javascript">
                var ajax_object = {
                    ajaxurl: '<?php echo admin_url('admin-ajax.php'); ?>'
                }
            </script>
        <?php
        }
        add_action('wp_head', 'lessonlms_ajax_scripts');

        function lessonlms_dashboard_enrollment_widget()
        {
            global $wpdb;

            $total_enrollment = $wpdb->get_var(
                "SELECT SUM(meta_value) FROM $wpdb->postmeta WHERE meta_key = '_enrolled_students' "
            );

            $recent_enrollments = $wpdb->get_results(
                "SELECT u.user_login, p.post_title, um.meta_value
                FROM $wpdb->user_meta  um
                JOIN $wpdb->users u ON u.ID = um.user_id
                JOIN $wpdb->posts p ON p.ID = um.meta_value
                WHERE um.meta_key = '_user_enrollments'
                ORDER BY um.umeta_id DESC
                LIMIT 5"

            );

        ?>
            <div class="enrollment-dashboard-widget">
                <h3>Enrollment Status</h3>

                <div class="enrollment-stats">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo number_format($total_enrollment ?: 0); ?></span>
                        <span class="stat-label">Total Enrollment</span>
                    </div>
                </div>

                <?php if ($recent_enrollments) : ?>
                    <div class="recent-enrollments">
                        <h4>Last Enrollment</h4>
                        <ul>
                            <?php foreach ($recent_enrollments as $enrollment) : ?>
                                <li>
                                    <strong><?php echo esc_html($enrollment->user_login); ?></strong>
                                    - <?php esc_html($enrollment->post_title); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

        <?php
        }


        function lessonlms_add_enrollment_dashboard_widget()
        {
            wp_add_dashboard_widget(
                'enrollment_dashboard_widget',
                'Course Enrollment Status',
                'lessonlms_dashboard_enrollment_widget',
            );
        }
        add_action('wp_dashboard_setup', 'lessonlms_add_enrollment_dashboard_widget')
        ?>


        <?php
        //rasel vi menu register

        //function rrf_theme_basic_setup()
        //{
        //register navigation menu
        //    register_nav_menus(array(
        //        'primary' => 'Primary Menu',
        //    ));
        //}

        //add_action('init', 'rrf_theme_basic_setup');
        //
        ?>