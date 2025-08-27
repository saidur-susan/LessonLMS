<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>



    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="max-w-[1440px] w-full mx-auto bg-[#FFFCF4]">
        <div class="container py-[36px]">


            <div class="navbar mx-5  flex justify-between items-center gap-x-[10px] md:gap-x-[70px]">

                <!-- wordpress logo -->

                <div class="min-w-20">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="logo font-bold text-[24px] leading-[34px] sen">
                            <a href="<?php echo esc_url(home_url('/')); ?>"></a>
                        </div>
                    <?php endif; ?>
                </div>





                <nav class="rrf-menu ml-auto">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary'
                    ));
                    ?>
                </nav>



                <div class="relative md:hidden">
                    <input type="checkbox" id="menu-toggle" class="peer hidden">

                    <label for="menu-toggle" class="cursor-pointer relative  z-101">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/menu.png" alt="menu-icon" class="w-[22px]">
                    </label>

                    <ul class="translate-x-full peer-checked:translate-0 duration-300 ease-in-out fixed top-[90px] bg-[#FFFCF4]/80  right-0 w-[100%] h-screen z-100 pl-4">
                        <li class=" py-2 my-2">menu 1</li>
                        <li class="py-2 my-2">menu 2</li>
                        <li class="py-2 my-2">menu 3</li>
                        <li class="py-2 my-2">menu 4</li>

                    </ul>
                </div>


            </div>
    </header>