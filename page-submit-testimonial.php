<?php
/*
* Template Name: Submit Testimonial
*/
get_header();
$message = '';
$massage_type = '';

$current_user = wp_get_current_user();
$user_id = $current_user->ID;

if (isset($_POST['submit_testimonial_form']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['testimonial_nonce_field']) && wp_verify_nonce($_POST['testimonial_nonce_field'], 'testimonial_form_action')) {
        $student_name = sanitize_text_field($_POST['student_name']);
        $student_designation = sanitize_text_field($_POST['student_designation']);
        $student_massage = sanitize_text_field($_POST['student_massage']);
    }

    if (!empty($student_name) && !empty($student_massage)) {
        $new_testimonial = array(
            'post_title' => $student_name,
            'post_content' => $student_massage,
            'post_type' => 'testimonial',
            'post_status' => 'pending'

        );

        $post_id = wp_insert_post($new_testimonial);

        if ($post_id) {
            update_post_meta($post_id, 'testimonial_designation', $student_designation);
            update_post_meta($post_id, 'testimonial_user_id', $user_id);
            $massage = "Thank you for your valuable feedback";
            $massage_type = "success";
        } else {
            $massage = "Sorry! Try again";
            $massage_type = "error";
        }
    } else {
        $massage = "Please fill up all information";
        $massage_type = "error";
    }
} elseif (!is_user_logged_in()) {
    $massage = "Please Login First";
    $massage_type = "error";
} else {
    $massage = "Failed for security. Please refresh your page again";
    $massage_type = "error";
}
?>

<div class="max-w-[1440px] mx-auto bg-[#FFFCF4] testimonial">
    <div class="container flex justify-center my-6 px-4">
        <div class="feedback-form max-w-[450px] p-8 shadow-2xl bg-white rounded-2xl mb-4">
            <div class="text-center">
                <h2 class="sen text-[28px] tracking-[0.76px] font-bold mb-2">Submit Your Review</h2>

                <p class="poppins text-[18px] leading-[30px] text-[#5F5B53] mb-4 max-w-[450px]"> Share your
                    learning experience with us.</p>


            </div>

            <?php if (!empty($massage)) : ?>
                <?php echo esc_html($massage); ?>
            <?php endif; ?>

            <?php if (is_user_logged_in()) : ?>

                <form action="#" method="POST">

                    <?php wp_nonce_field('testimonial_form_action', 'testimonial_nonce_field'); ?>
                    <p>
                        <label for="student_name"><strong>Name</strong></label><br>
                        <input style="padding: 8px;" class="w-full border border-gray-200 rounded-lg px-2 mb-2" required type="text" name="student_name"
                            placeholder="Your Name" value="<?php echo isset($_POST['student_name']) ? esc_attr($_POST['student_name']) : ''; ?>">
                    </p>

                    <p><label for="student_designation"><strong>Designation / Course</strong></label><br>
                        <input style="padding: 8px;" class="w-full border border-gray-200 rounded-lg px-2 mb-2" type="text" name="student_designation"
                            placeholder="e.g. Student of Web Design"
                            value="<?php echo isset($_POST['student_designation']) ? esc_attr($_POST['student_designation']) : ''; ?>">
                    </p>

                    <label><strong>Review</strong></label>
                    <textarea class="w-full border border-gray-200 rounded-lg px-2" style="padding: 8px;" name="student_massage" required rows="5" placeholder="Write your feedback..."><?php echo isset($_POST['student_massage']) ? esc_attr($_POST['student_massage']) : ''; ?></textarea>

                    <div>
                        <button type="submit" name="submit_testimonial_form" class="cursor-pointer  poppins bg-[#FFB900] hover:bg-black text-[18px] leading-[30px] h-[40px] rounded-full flex justify-center items-center text-white mt-8 w-full">Submit Now</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>