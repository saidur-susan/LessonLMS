<?php
/*
 Template Name: Student Dashboard
 */
if (! is_user_logged_in()) {
    wp_redirect(wp_login_url());
    exit;
}
get_header();
$current_user = wp_get_current_user();
?>
<section class="dashboard-area">
    <div class=" container mx-auto py-10 md:py-[50px] px-4">
        <div class=" flex justify-between border-b border-gray-400/30 py-5">
            <p class="text-[18px] poppins leading-7 font-semibold">Student Learning Dashboard</p>
            <div class="log-out btn-2">
                <a href="">Log Out</a>
            </div>
        </div>
        <h2 class="sen my-10 text-[38px] leading-12 tracking-[0.76px] font-bold mb-4">Welcome, <?php echo esc_html($current_user->display_name); ?>! </h2>
        <h2 class="sen my-10 text-[28px] leading-12 tracking-[0.76px] font-bold mb-4">My Enrolled Courses</h2>
        <div class="course-wrapper">
            <div class="courses py-2 flex justify-center gap-x-8 lg:justify-between flex-wrap gap-y-10 ">
                <?php
                $enrolled_courses = get_user_meta($current_user->ID, '_user_enrollments', true);

                if (!empty($enrolled_courses) && is_array($enrolled_courses)) :
                    foreach ($enrolled_courses as $enrolled_course) :
                        $course_id = $enrolled_course['course_id'];
                        $course_post = get_post($course_id);
                        if ($course_post && $course_post->post_status == 'publish'):

                ?>
                            <div class="single-course relative rounded-xl w-[350px] bg-amber-300 h-[470px] shadow-2xl">
                                <div class="image h-[50%] m-0 overflow-hidden rounded-t-xl">
                                    <!-- <img width="100%" height="100%" src="assets/img/blog-pic-2.png" alt=""> -->
                                    <?php echo get_the_post_thumbnail($course_id, 'medium', array(
                                        'style' => 'width:100%; height:100%; object-fit:cover;'
                                    )); ?>
                                </div>
                                <div class="content h-[50%] p-6 flex flex-col">
                                    <p class="my-2"><strong><?php echo get_the_title($course_id);  ?></strong></p>
                                    <p class="text-sm text-gray-600 grow my-2">Enrolled Date: <?php echo date('M j, Y', strtotime($enrolled_course['date'])); ?></p>
                                    <button class=" w-full"><a href="<?php echo get_permalink($course_id) ?>"
                                            class="w-full block py-1 rounded-sm text-white font-semibold text-center text-xl bg-lime-600 hover:bg-black">Start
                                            Learning</a></button>
                                </div>
                            </div>

                    <?php
                        endif;
                    endforeach;
                else:
                    ?>

                    <h3>You have not enrolled in any courses yet!</h3>
                <?php endif ?>



            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>