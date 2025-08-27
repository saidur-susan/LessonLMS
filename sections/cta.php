 <!-- call for action setion starts here -->


 <section>
     <?php
        $cta_2_title = get_theme_mod('cta_2_title', 'Take the next step toward your personal and professional goals with Lesson.');

        $cta_2_description =  get_theme_mod('cta_2_description', 'Take the next step toward. J_oin now to receive personalized and more recommendations from the full Coursera catalog.');

        $cta_2_button_text = get_theme_mod('cta_2_button_text', 'Join Now');

        $cta_2_button_link = get_theme_mod('cta_2_button_link', 'Join Now');

        $cta_2_image = get_theme_mod('cta_2_image', get_template_directory_uri() . '/assets/img/Rectangle 12.png')
        ?>




     <div class="hero-section pb-[40px] md:pb-[200px] w-full max-w-[1440px] mx-auto ">
         <div class="container">
             <div class="grid grid-cols-1 md:grid-cols-2 gap-y-[20px] gap-x-[130px] ">

                 <div class="text-section flex flex-col mx-6 md:mx-auto justify-between gap-y-4 md:gap-y-10 mr-5 md:-mr-22">
                     <?php if ($cta_2_title): ?>
                         <h1 class="sen text-[28px] md:text-[38px] sen font-bold text-[#171100] leading-[48px] tracking-[0.76px]"><?php echo esc_html($cta_2_title); ?></h1>
                     <?php endif; ?>

                     <?php if ($cta_2_description) : ?>
                         <p class="poppins text-[18px] leading-[30px] text-[#5F5B53]"><?php echo esc_html($cta_2_description); ?></p>
                     <?php endif; ?>



                     <div class="">
                         <?php if ($cta_2_button_text) : ?>
                             <a class="poppins bg-[#FFB900] hover:bg-[#000000] text-[18px] leading-[30px] w-[137px] h-[50px] rounded-full flex justify-center items-center text-white" href="<?php echo esc_url($cta_2_button_link); ?>"><?php echo esc_html($cta_2_button_text); ?>
                             </a>

                         <?php endif; ?>
                     </div>
                 </div>



                 <div class="img-section flex justify-end mx-auto ">

                     <?php if ($cta_2_image) : ?>
                         <img class=" rounded-[16px]" src="<?php echo esc_url($cta_2_image) ?>" alt="<?php esc_attr($cta_2_title); ?>">
                     <?php endif; ?>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- features setion ends here -->