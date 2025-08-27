<?php get_header(); ?>

<section class="blog search-result bg-[#FFFCF4] blog">
    <div class="container py-[35px] md:py-[96px]">
        <!-- Search Title -->
        <div class="flex gap-x-2 mb-4">
            <h3 class="section-title text-2xl font-bold">
                <?php printf(esc_html__('Search Result for "%s"', 'lessonlms'), get_search_query()); ?>
            </h3>
        </div>

        <?php if (have_posts()) : ?>
            <div class="blog-list flex flex-col gap-y-[20px] md:gap-x-[30px] text-black">
                <?php while (have_posts()) : the_post() ?>
                    <article class="blog-item">
                        <div class=" mx-auto py-2 px-4 bg-white rounded-[12px] shadow-lg">
                            <h3 class="poppins text-[18px] font-semibold  text-[#171100] my-[4px]">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                        <div class="blog-excerpt p-4">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p>
                <?php _e('No results found...', 'lessonlms') ?>
            </p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>