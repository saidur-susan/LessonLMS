<div class="blog-sidebar w-[30%]">


    <!-- wordpress default widgets show with function-php widget id -->

    <?php dynamic_sidebar('blog-sidebar'); ?>


    <!-- Search Box -->
    <div class="sidebar-widget search-widget w-full md:w-80 bg-white rounded-2xl shadow-lg p-6 space-y-8 mb-4">
        <h3 class="text-lg font-semibold mb-3"><?php _e('Search', 'lessonlms'); ?></h3>

        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="relative">
            <input type="search" name="s" placeholder="<?php esc_attr_e('Search...', 'lessonlms'); ?>"
                value="<?php echo get_search_query(); ?>" class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            <button type="submit" class="absolute right-2 top-2 text-gray-500 hover:text-yellow-500">
                🔍
            </button>
        </form>
    </div>

    <!-- Recent Posts -->
    <div class="sidebar-widget recent-posts w-full md:w-80 bg-white rounded-2xl shadow-lg p-6 space-y-8 mb-4">
        <h3 class="text-lg font-semibold mb-3">Recent Posts</h3>
        <ul class="space-y-2 text-gray-700">
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 4,
                'post_status' => 'publish'
            ));; ?>


            <?php foreach ($recent_posts as $post) : ?>
                <li>
                    <a href="<?php echo get_permalink($post['ID']); ?>" class="hover:text-yellow-500 font-bold">
                        <?php echo esc_html($post['post_title']); ?>
                    </a><br>
                    <span class="post-date text-sm"><?php echo get_the_date('M j, Y', $post['ID']); ?></span>
                </li>
            <?php endforeach; ?>


        </ul>
    </div>

    <!-- Categories -->
    <div class="sidebar-widget category-widget w-full md:w-80 bg-white rounded-2xl shadow-lg p-6 space-y-8 mb-4">
        <h3 class="text-lg font-semibold mb-3"><?php _e('Categories', 'lessonlms'); ?></h3>
        <ul class="space-y-2 text-gray-700">
            <?php
            wp_list_categories(array(
                'title_li' => '',
                'show_count' => true
            ));
            ?>

            <!-- <li>
                <a href="#" class="hover:text-yellow-500 flex justify-between">Web Design <span>(05)</span></a>
            </li> -->

        </ul>
    </div>

    <!-- Tags -->
    <div class="sidebar-widget w-full md:w-80 bg-white rounded-2xl shadow-lg p-6 space-y-8 mb-4">
        <h3 class="text-lg font-semibold mb-3"><?php _e('Tags', 'lessonlms'); ?></h3>
        <div class="tag-cloud flex flex-wrap gap-2">
            <?php
            wp_tag_cloud(array(
                'smallest' => 12,
                'largest' => 12,
                'unit' => 'px',
                'number' => 10,
                'format' => 'flat'

            ))
            ?>

            <!-- <a href="#" class="px-3 py-1 bg-gray-100 rounded-full text-sm hover:bg-yellow-400 hover:text-white">Tips</a> -->
        </div>
    </div>

</div>