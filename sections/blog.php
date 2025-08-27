<!-- blog section starts here -->
<div class="max-w-[1440px] mx-auto bg-[#FFFCF4] blog">
    <div class="container py-[35px] md:py-[96px]">
        <h1 class="sen text-center text-[38px] sen font-bold text-[#171100] leading-[48px] tracking-[.76px]"><?php echo esc_html(get_theme_mod('blog_section_title', 'Our Blog')); ?></h1>
        <p class="poppins text-center text-[18px] leading-[30px] text-[#696262] mb-[55px]"><?php echo esc_html(get_theme_mod('blog_section_description', 'Read our regular travel blog and know the latest update of tour and travel')); ?></p>

        <!-- blog cards -->

        <div class="slide-blog">
            <div class="">
                <div class="">
                    <div class="flex flex-col md:flex-row gap-y-[20px] md:gap-x-[30px] text-black">

                        <?php
                        $posts = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'order' => 'DESC'
                        ));
                        if ($posts->have_posts()) :
                            while ($posts->have_posts()) : $posts->the_post();

                        ?>
                                <!-- single blog -->

                                <div class=" mx-auto h-[430px] w-[370px] bg-white rounded-[12px] shadow-lg">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large');
                                        } else {
                                            echo '<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-pic-2.png" alt="">';
                                        }
                                        ?>
                                    </a>
                                    <div class="p-[20px]">
                                        <div class="flex justify-between items-center ">

                                            <p class="inline-flex justify-between items-center"><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3" cy="3" r="3" fill="#FFB900" />
                                                </svg>

                                                <span class="poppins text-[14px] leading-[26px] text-[#5F5B53] ml-2"><?php echo get_the_date('d F Y'); ?></span> <br>
                                            </p>

                                        </div>
                                        <p class="my-[12px]"><svg width="160" height="1" viewBox="0 0 160 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="160" height="1" rx="0.5" fill="#E2DFDA" />
                                            </svg></p>
                                        <h3 class="poppins text-[18px] font-semibold leading-[28px] text-[#171100] mb-[6px]"><a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a></h3>


                                        <div class="flex justify-between items-center mt-[12px]">

                                            <div class="">
                                                <a class="poppins bg-[#171100] hover:bg-[#FFB900] text-[14px] leading-[30px] w-[118px] h-[50px] rounded-full flex justify-center items-center text-white font-semibold" href="<?php the_permalink(); ?>"> <?php _e('Read More', 'lessonlms'); ?></a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        else:
                            echo '<p>' . __('No blog post found', 'lessonlms') . '</p>';
                            ?>

                        <?php endif; ?>


                    </div>


                </div>
            </div>
        </div>

        <div class="flex gap-1 mt-[30px] mx-auto justify-center">
            <div class="w-2 h-2 rounded-full bg-[#634700]"></div>
            <div class="w-2 h-2 rounded-full bg-[#FFB900]"></div>
            <div class="w-2 h-2 rounded-full bg-[#634700]"></div>
        </div>

    </div>
</div>

<!-- blog section ends here -->