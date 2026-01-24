<!-- features setion starts here -->
<section>

    <?php
    $feature_title = get_theme_mod('feature_title', 'Learner outcomes through our awesome platform');
    $feature_description = get_theme_mod('feature_description', '87% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career.

Lesson Impact Report (2022)');
    $feature_button_text = get_theme_mod('feature_button_text', 'Sign Up ');
    $feature_button_link = get_theme_mod('feature_button_link', '#');

    $feature_image_one = get_theme_mod('feature_image_one',  get_template_directory_uri() . '/assets/img/Rectangle 10.png');
    $feature_image_two = get_theme_mod('feature_image_two',  get_template_directory_uri() . '/assets/img/Rectangle 11.png');

    ?>


    <div class="hero-section py-[40px] md:py-[200px] w-full max-w-[1440px] mx-auto ">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-y-0 gap-x[40px] md:gap-x-[130px] items-center ">

                <!-- Image Section -->
                <div class="img-section flex gap-3 md:gap-7 justify-center md:justify-end ">
                    <?php if ($feature_image_one) : ?>
                        <img class="relative w-[45%] md:w-[230px] lg:w-[280px] top-5  rounded-[16px]" src="<?php echo esc_url($feature_image_one); ?>" alt="<?php esc_attr($feature_title); ?>">
                    <?php endif; ?>
                    <?php if ($feature_image_two) : ?>
                        <img class="relative w-[45%] md:w-[230px] lg:w-[280px] bottom-5 rounded-[16px]" src="<?php echo esc_url($feature_image_two); ?>" alt="<?php esc_attr($feature_title); ?>">
                    <?php endif; ?>
                </div>
                <div class="text-section flex flex-col justify-center gap-y-4 md:gap-y-10 mx-6 md:mx-12 ">
                    <?php if ($feature_title): ?>
                        <h1 class="text-[28px] md:text-[38px] sen font-bold text-[#171100] leading-[48px] tracking-[.76px]"><?php echo esc_html($feature_title); ?></h1>
                    <?php endif; ?>
                    <?php if ($feature_description) : ?>
                        <p class="poppins text-[18px] leading-[30px] text-[#5F5B53]"><?php echo esc_html($feature_description); ?></p>
                    <?php endif; ?>
                    <div class="">
                        <?php if (is_user_logged_in()) : ?>
                            <?php $dashboard_url = home_url('/dashboard'); ?>
                            <a class="poppins bg-[#FFB900] hover:bg-[#000000] text-[18px] leading-[30px] w-[137px] h-[50px] rounded-full flex justify-center items-center text-white" href="<?php echo esc_url($dashboard_url); ?>">Dashboard</a>

                        <?php else : ?>
                            <?php if ($feature_button_text): ?>
                                <a class="poppins bg-[#FFB900] hover:bg-[#000000] text-[18px] leading-[30px] w-[137px] h-[50px] rounded-full flex justify-center items-center text-white" target="_blank" href="<?php if (!empty($feature_button_link)): ?>
                                    <?php echo esc_url($feature_button_link); ?>
                                    <?php else: echo esc_url(wp_registration_url()); ?>
                                    <?php endif; ?>"><?php echo esc_html($feature_button_text); ?>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>