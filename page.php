<?php
get_header(); ?>


<section class="max-w-[1440px] mx-auto bg-[#FFFCF4] blog">
    <div class="container py-[35px] md:py-[96px]">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div class="sen text-center text-[38px] sen font-bold text-[#171100] leading-[48px] tracking-[.76px]">
                    <h3><?php the_title(); ?></h3>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>



<?php
get_footer(); ?>