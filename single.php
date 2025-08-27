<?php get_header(); ?>


<section class="blog-details max-w-[1440px] w-full mx-auto bg-[#FFFCF4]">
    <div class="container ">
        <div class="blog-details-wrapper flex p-12 gap-x-4 ">

            <!--Main Blog Content  -->
            <div class="blog-content bg-white rounded-2xl shadow-lg p-6 w-[70%]">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="blog-meta">
                            <div class="date py-2">
                                <div class="yellow-circle">
                                    <span><?php echo get_the_date(); ?></span>
                                </div>
                            </div>
                            <h1 class="blog-title font-bold text-2xl my-2"><?php echo the_title(); ?></h1>
                            <div class="author flex gap-x-2">
                                <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                                <!-- <img class="author-avatar" src="" alt=""> -->
                                <span class="author-name flex items-center">By <?php the_author(); ?></span>
                            </div>
                        </div>

                        <div class="featured-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php echo the_post_thumbnail('full'); ?>
                            <?php endif; ?>
                        </div>

                        <div class="blog-text my-2">
                            <?php the_content(); ?>
                            <div class="blog-tags flex gap-x-2 my-2 text-center rounded-full ">
                                <span>Tags:</span>
                                <div class="bg-gray-400 hover:bg-amber-400"><?php the_tags('', '', ''); ?></div>
                            </div>
                            <div class="social-share-icon flex items-center gap-x-4">
                                <span class="text-xl">Share:</span>

                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="w-10  h-10 flex justify-center items-center bg-gray-400 rounded-full cursor-pointer hover:bg-amber-300"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?url=&text=<?php the_permalink(); ?>" target="_blank" class="w-10 h-10 flex justify-center items-center bg-gray-400 rounded-full cursor-pointer hover:bg-amber-300"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" class="w-10  h-10 flex justify-center items-center bg-gray-400 rounded-full cursor-pointer hover:bg-amber-300"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="https://pinterest.com/pin/create/button/?url=&media=&description=<?php the_permalink(); ?>" target="_blank" class="w-10  h-10 flex justify-center items-center bg-gray-400 rounded-full cursor-pointer hover:bg-amber-300"><i class="fa-brands fa-square-instagram"></i></a>

                            </div>
                        </div>



                        <!-- Author Section -->
                        <div class="author-box">
                            <div class="flex gap-x-2">
                                <div class="comment-avater">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                                </div>

                                <div class="name-description-social">

                                    <h3 class="author-name text-2xl font-bold">About <?php the_author(); ?></h3>

                                    <p><?php echo get_the_author_meta('description'); ?></p>

                                    <!-- social midea share -->
                                    <div class="social-share-icon flex gap-x-2">
                                        <?php if (get_the_author_meta('user_url')) : ?>
                                            <a href="<?php echo get_the_author_meta('user_url'); ?>">
                                                <i class="fa-brands fa-facebook-f"></i></a>
                                        <?php endif; ?>

                                        <?php if (get_the_author_meta('user_url')) : ?>
                                            <a href="<?php echo get_the_author_meta('user_url'); ?>">
                                                <i class="fa-brands fa-twitter"></i></a>
                                        <?php endif; ?>

                                        <?php if (get_the_author_meta('user_url')) : ?>
                                            <a href="<?php echo get_the_author_meta('user_url'); ?>">
                                                <i class="fa-brands fa-linkedin-in"></i></a>
                                        <?php endif; ?>

                                        <?php if (get_the_author_meta('user_url')) : ?>
                                            <a href="<?php echo get_the_author_meta('user_url'); ?>">
                                                <i class="fa-brands fa-square-instagram"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>


                            <!-- Comment Count Section -->

                            <div class="max-w-3xl mx-auto mt-8 space-y-6">
                                <?php
                                $comments_count = get_comments_number();
                                if ($comments_count > 0) :
                                    echo '<h2 class="section-title">Comments (' . $comments_count . ')</h2>';
                                endif;


                                $parent_comments = get_comments(array(
                                    'post_id' => get_the_ID(),
                                    'status' => 'approve',
                                    'order' => 'ASC',
                                    'parent' => 0
                                ));
                                ?>

                                <?php if ($parent_comments) : ?>
                                    <div class="comment-list space-y-4 ">
                                        <?php foreach ($parent_comments as $comment) : ?>
                                            <div class="comment gap-x-2  flex bg-white p-4 rounded-2xl shadow" id="comment-<?php echo $comment->comment_ID; ?>">
                                                <!-- Avatar -->
                                                <div class="w-10 h-10 rounded-full object-cover">
                                                    <?php echo get_avatar($comment, 40); ?>
                                                </div>

                                                <!-- Comment Body -->
                                                <div class="comment-content">
                                                    <!-- Name + Time -->
                                                    <div class="comment-meta flex  gap-1 items-center mb-2">
                                                        <h4 class="font-semibold text-gray-800"><?php echo esc_html($comment->comment_author); ?></h4>
                                                        <span class="comment-date text-sm text-gray-500"><?php echo human_time_diff(strtotime($comment->comment_date),  current_time('timestamp')); ?> ago</span>
                                                    </div>

                                                    <p class="text-gray-700 mb-3">
                                                        <?php echo esc_html($comment->comment_content); ?>
                                                    </p>

                                                    <div class="comment-action">
                                                        <?php
                                                        comment_reply_link(array(
                                                            'reply_text' => 'Reply',
                                                            'depth'      => 1,
                                                            'max_depth'  => get_option('thread_comments_depth'),
                                                            'class' => 'reply-btn'
                                                        ), $comment->comment_ID, get_the_ID());
                                                        ?>
                                                    </div>


                                                    <?php
                                                    $replies = get_comments(array(
                                                        'post_id' => get_the_ID(),
                                                        'status' => 'approve',
                                                        'order' => 'ASC',
                                                        'parent' => $comment->comment_ID
                                                    ));
                                                    ?>



                                                    <?php if ($replies) : ?>
                                                        <div class="ml-8 space-y-3">
                                                            <?php foreach ($replies as $reply): ?>
                                                                <div class="comment-reply gap-x-2 flex  bg-white p-4 rounded-2xl shadow" id="reply" <?php echo $reply->comment_ID; ?>">
                                                                    <!-- Avatar -->
                                                                    <div class="w-10 h-10 rounded-full object-cover">
                                                                        <?php echo get_avatar($reply, 40); ?>
                                                                    </div>

                                                                    <!-- Reply Body -->
                                                                    <div>
                                                                        <div class="comment-meta flex items-center gap-1 mb-2">
                                                                            <h4 class="font-semibold text-gray-800"><?php echo esc_html($reply->comment_author); ?></h4>
                                                                            <span class="comment-date text-sm text-gray-500"><?php echo human_time_diff(strtotime($comment->comment_date), current_time('timestamp')); ?> ago</span>
                                                                        </div>

                                                                        <!-- Reply Text -->
                                                                        <p class="text-gray-700 mb-3">
                                                                            <?php echo esc_html($reply->comment_content); ?>
                                                                        </p>

                                                                        <!-- Reply Button -->
                                                                        <button class="text-sm text-blue-600 font-medium hover:underline ">Reply</button>
                                                                    </div>
                                                                </div>

                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>

                            </div>


                            <!-- comment from section -->
                            <div class="comment-form mx-auto bg-white shadow-lg rounded-2xl p-6 mt-10">
                                <h3 class="text-xl font-semibold mb-4">Leave a Comment</h3>

                                <?php
                                comment_form(array(
                                    'fields' => array(
                                        'author' => '<div class="md:w-1/2 pr-2">
                                                            <input 
                                                                type="text" 
                                                                id="author" 
                                                                name="author"
                                                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2"
                                                                placeholder="Your Name" 
                                                                required
                                                            >
                                                        </div>',
                                        'email' => '<div class="form-group">
                                                            <input 
                                                                type="email"
                                                                id="email"
                                                                name="email"
                                                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2"
                                                                placeholder="Your Email" 
                                                            required>
                                                        </div>',
                                    ),
                                    'comment_field' => '<div class="form-group">
                                                                <textarea 
                                                                    id="comment" 
                                                                    name="comment" 
                                                                    rows="3"
                                                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2"
                                                                    placeholder="Write your comment..."
                                                                    required>
                                                                </textarea>
                                                            </div>',
                                    'class_submit' => 'submit-btn bg-blue-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200',
                                    'label_submit' => 'Post Comment'

                                ));
                                ?>

                            </div>

                    <?php endwhile;
                endif; ?>

                        </div>

            </div>
            <!-- sidebar -->
            <?php get_sidebar(); ?>
        </div>
</section>

<?php get_footer(); ?>