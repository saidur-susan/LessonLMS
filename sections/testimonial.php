<!-- testimonial section starts here -->
<div class="max-w-[1440px] mx-auto bg-[#2E2100]">
    <div class="container">
        <div class="">
            <div class="testimonial-items">
                <div class="testimonial-items">
                    <?php
                    $args = array(
                        'post_type' => 'testimonial',
                        'post_per_page' => 1,
                        'order' => 'DESC'
                    );
                    $testimonial_query = new WP_Query($args);

                    if ($testimonial_query->have_posts()) :
                        while ($testimonial_query->have_posts()) : $testimonial_query->the_post();

                            $designation = get_post_meta(get_the_ID(), 'testimonial_designation', true); ?>
                            <div class="testimonial-wrapper">
                                <div class="flex justify-between items-center min-h-[380px]">

                                    <div class="left-section w-[25%] flex flex-col mx-5 md:mx-auto justify-center ">
                                        <div class="w-[72px] h-[72px] rounded-full mb-5">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('thumbnail', array(
                                                    'alt' => get_the_title(),
                                                    'class' => 'w-full h-full object-cover rounded-full'
                                                ));
                                            }
                                            ?>

                                        </div>
                                        <h3 class="text-[16px] md:text-[24px] sen leading-[34px] text-[#F7F7F7]"><?php echo the_title(); ?></h3>
                                        <?php if (!empty($designation)): ?>
                                            <p class="poppins text-[14px] text-[#BFBCB2]"><?php echo esc_html($designation); ?></p>
                                        <?php endif; ?>
                                        <div class="flex gap-1 mt-5">
                                            <div class="w-2 h-2 rounded-full bg-[#634700]"></div>
                                            <div class="w-2 h-2 rounded-full bg-[#FFB900]"></div>
                                            <div class="w-2 h-2 rounded-full bg-[#634700]"></div>
                                        </div>
                                    </div>
                                    <div class="right-section w-[60%] text-white p-2 poppins text-[20px] md:text-[26px] leading-[26px] md:leading-[40px] italic">
                                        <div class="-ml-8">
                                            <svg width="30" height="28" viewBox="0 0 30 28" fill="white" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.9168 1.23505V6.26199C12.9168 6.94407 12.3663 7.49652 11.6875 7.49652C9.26544 7.49652 7.94779 9.99114 7.76491 14.9155H11.6875C12.3662 14.9155 12.9168 15.4688 12.9168 16.1501V26.7647C12.9168 27.4465 12.3663 27.999 11.6875 27.999H1.22938C0.550795 27.999 1.90735e-06 27.4459 1.90735e-06 26.7647V16.15C1.90735e-06 13.7896 0.237282 11.6235 0.703081 9.71055C1.1816 7.74949 1.91613 6.035 2.8858 4.61422C3.88306 3.15417 5.13161 2.00845 6.59457 1.21054C8.06863 0.407543 9.78211 0 11.688 0C12.3662 0.000516891 12.9168 0.553486 12.9168 1.23505ZM28.771 7.49696C29.4496 7.49696 30 6.94407 30 6.26294V1.23497C30 0.553488 29.4496 0.000951767 28.771 0.000951767C26.866 0.000951767 25.1517 0.408579 23.6785 1.21149C22.2148 2.00931 20.9664 3.15408 19.9693 4.61517C18.999 6.03595 18.2645 7.75052 17.786 9.71254C17.32 11.6255 17.0832 13.7917 17.0832 16.151V26.7657C17.0832 27.4476 17.6341 28 18.3125 28H28.771C29.4496 28 30 27.447 30 26.7657V16.151C30 15.4693 29.4496 14.9165 28.771 14.9165H24.9035C25.0841 9.99165 26.3828 7.49696 28.771 7.49696Z" fill="#634700" />
                                            </svg>
                                            <h5 class="ml-2"><?php the_content(); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p class="poppins  text-[20px] md:text-[26px] leading-[26px] md:leading-[40px] italic text-white text-center">No testimonial found.</p>
                    <?php endif; ?>

                </div>
            </div>
            <div class="testimonials-btn flex justify-center items-center gap-2" style="padding-bottom:30px;">
                <div class="all-testimonials-btn">
                    <a class="poppins bg-[#FFB900] hover:bg-black text-[18px] leading-[30px] px-4 h-[50px] rounded-full flex justify-center items-center text-black hover:text-white mt-8 " href="<?php echo get_post_type_archive_link('testimonial'); ?> ">All Testimonials</a>
                </div>
                <div class="feedback-btn">
                    <a class="poppins   text-[18px] leading-[30px] px-4 h-[50px] rounded-full flex justify-center items-center text-white mt-8 border border-amber-800 hover:border-amber-400 " href="<?php echo home_url('/submit'); ?> ">Submit Feedback</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial section ends here -->