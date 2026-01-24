<?php
get_header();
//Template Name: All Testimonial
?>

<div class="max-w-[1440px] bg-[#FFFCF4] mx-auto">
    <div class="container  mx-auto py-[40px] md:py-[200px] px-4">

        <div class="hero-section mx-auto">
            <h2 class="sen text-[38px] leading-[48px] tracking-[0.76px] font-bold mb-[16px]">All Testimonial</h2>
            <p class="poppins text-[18px] leading-[30px] text-[#5F5B53] mb-[55px] max-w-[450px]"> What our students have
                to say</p>
        </div>


        <?php
        $args = array(
            'post_type' => 'testimonial',
            'posts_per_page' => 9,
            'post_status' => 'publish'
        );
        $testimonial_query = new WP_Query($args);
        ?>


        <!-- services card wrapper stars here -->
        <div class="testimonial-review-wrapper ">
            <div class="testimonials" style="display:grid; grid-template-columns:repeat(auto-fill, minmax(350px,1fr));gap:30px;">

                <!-- single card  -->
                <?php if ($testimonial_query->have_posts()):  ?>
                    <?php while ($testimonial_query->have_posts()) : $testimonial_query->the_post() ?>

                        <?php $designation = get_post_meta(get_the_ID(), 'testimonial_designation', true);
                        $user_id = get_post_meta(get_the_ID(), 'testimonial_user_id', true);
                        $reviewer_name = get_the_title();
                        $reviewer_avatar = '';

                        if ($user_id > 0) {
                            $reviewer_avatar = get_avatar($user_id, 60, '', $reviewer_name, array(
                                'class' => 'testimonial-avatar',
                                'style' => 'width:60px; height:60px; border-radius:50%;',
                            ));
                        }
                        ?>


                        <div class="single-testimonial max-h-[266px] max-w-[370px] overflow-hidden bg-white rounded-[12px] shadow-lg p-4">
                            <div class="flex">
                                <div class="reviewer-image w-20">
                                    <?php echo $reviewer_avatar; ?>
                                </div>
                                <div class="name-bio flex justify-center">
                                    <div class="flex justify-center ml-2 flex-col  my-2">
                                        <h3 class="poppins text-[18px] font-semibold leading-[30px] text-[#171100]  "><?php the_title(); ?>
                                        </h3>
                                        <p class="poppins text-[14px] leading-[26px] text-[#5F5B53] mb-[22px]"> <?php echo esc_html($designation); ?></p>
                                    </div>
                                </div>
                            </div>
                            <span" class="poppins text-[14px] leading-[26px] text-[#3a3937] overflow-hidden italic"> "<?php the_content(); ?>"
                                </span>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <p>No Testimonial Found!</p>
                <?php endif; ?>
                <!-- card end here -->

            </div>






            <!-- next page buttons -->
            <div class=" next-page-buttons mt-8 w-full flex gap-x-4  justify-center items-center">
                <div>
                    <a class="bg-[#FFFFFF] group hover:cursor-pointer flex justify-center items-center border border-[#FFB900] rounded-full hover:bg-[#FFB900] h-[40px] w-[40px] text-black hover:text-white font-bold"
                        href="#">1
                    </a>
                </div>

                <div>
                    <a class="bg-[#FFFFFF] group hover:cursor-pointer flex justify-center items-center border border-[#FFB900] rounded-full hover:bg-[#FFB900] h-[40px] w-[40px] text-black hover:text-white font-bold"
                        href="#">2
                    </a>
                </div>

                <div>
                    <a class="bg-[#FFFFFF] group hover:cursor-pointer flex justify-center items-center border border-[#FFB900] rounded-full hover:bg-[#FFB900] h-[40px] w-[40px] text-black hover:text-white font-bold"
                        href="#">3
                    </a>
                </div>



                <div>
                    <a class="bg-[#FFFFFF] group hover:cursor-pointer flex justify-center items-center border border-[#FFB900] rounded-full hover:bg-[#FFB900] h-[40px] px-4 text-black hover:text-white font-bold"
                        href="">Next<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="black " class="group-hover:stroke-white size-6 rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg></a>


                    </a>

                </div>
            </div>
        </div>

    </div>
</div>

<?php
get_footer();
?>