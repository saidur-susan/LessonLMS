<!-- services section starts here -->
<div class="container mx-auto py-[40px] md:py-[100px] ">




    <div class="mx-5">
        <div class="left-heading max-w-[50%]">
            <h2 class="sen text-[38px] max-w-[450px] leading-[48px] tracking-[0.76px] font-bold mb-[16px]">Our popular courses</h2>


            <p class="poppins text-[18px] leading-[30px] text-[#5F5B53] mb-[55px] max-w-[450px]"> Build new skills with new trendy courses and shine for the next future career.</p>
        </div>



    </div>

    <!-- services card stars here -->
    <div class="slicks pb-30">
        <div class="courses-wrapper relative  flex flex-col items-center md:flex-row gap-[30px] ">
            <!-- slider button -->
            <div class="absolute z-100 -top-20 right-0 flex gap-4">
                <div class="bg-[#FFFFFF]  your-prev-btn group hover:cursor-pointer flex justify-center items-center border border-[#FFB900] rounded-full hover:bg-[#FFB900] h-[40px] w-[40px]"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFB900 " class="group-hover:stroke-white size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </div>

                <div class="bg-[#FFFFFF] your-next-btn  group hover:cursor-pointer flex justify-center items-center border border-[#FFB900] rounded-full hover:bg-[#FFB900] h-[40px] w-[40px]"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFB900 " class="group-hover:stroke-white size-6 rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </div>
            </div>

        </div>

        <!-- services card stars here -->
        <div class="slicks">
            <div class="courses-wrapper  flex flex-col items-center md:flex-row gap-[30px] ">

                <?php
                $courses = new WP_Query(array(
                    'post_type' => 'course',
                    'posts_per_page' => 3,
                ));
                if ($courses->have_posts()):
                    while ($courses->have_posts()): $courses->the_post();

                        $rating = get_post_meta(get_the_ID(), 'rating', true);
                        $price = get_post_meta(get_the_ID(), 'price', true);

                        $rating = !empty($rating) ? $rating : '0.0';
                        $price = !empty($price) ? $price : '0.00';
                ?>
                        <!-- Course 1 -->
                        <div class="course course-1 active-btn h-[466px] w-[370px] bg-white rounded-[12px] shadow-xl ">

                            <div class="course-image h-[50%] overflow-hidden">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array(
                                        'alt' => get_the_title()
                                    )); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image1.png" alt="">
                                <?php endif; ?>
                            </div>

                            <div class="course-content p-[16px] relative">
                                <div class="flex justify-between items-center">
                                    <h3 class="poppins text-[18px] font-semibold leading-[30px] text-[#171100] "><?php the_title(); ?></h3>
                                    <p class="inline-flex justify-between items-center"> <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#FEA31B" />
                                        </svg>
                                        <span class="text-[#FEA31B] text-[16px] poppins leading-[28px] ml-1"><?php echo esc_html($rating); ?></span>
                                    </p>

                                </div>
                                <p class="poppins text-[14px] leading-[26px] text-[#5F5B53] mb-[22px]"> <?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>

                                <div class="  flex justify-between items-center ">
                                    <h3 class="poppins text-[18px] font-semibold leading-[30px] text-[#171100] ">$<?php echo esc_html($price); ?></h3>
                                    <div class="">
                                        <a class="poppins bg-[#171100] hover:bg-[#FFB900] text-[18px] leading-[30px] px-4 h-[50px] rounded-full flex justify-center items-center text-white" href="">Book Now</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!--End Course 1 -->
                    <?php endwhile; ?>
                <?php else : ?>
                    <h2>No Course found.</h2>
                <?php endif;
                wp_reset_postdata(); ?>


            </div>
        </div>


        <div class=" mx-5">
            <div class="flex justify-end items-center pr-[30px]">
                <a class="poppins bg-[#FFB900] hover:bg-black text-[18px] leading-[30px] px-4 h-[50px] rounded-full flex justify-center items-center text-white mt-8 " href="<?php echo get_post_type_archive_link('course'); ?> ">See all Course</a>
            </div>

        </div>
    </div>


    <!-- services section ends here -->