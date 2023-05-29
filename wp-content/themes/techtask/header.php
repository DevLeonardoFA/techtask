<!DOCTYPE html>
<html <?= language_attributes(); ?> >
<head>

    <?php wp_head(); ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_the_title(); ?></title>

</head>
<body <?= body_class(); ?> >

<h1 class="hidden"><?= get_the_title(); ?></h1>

<div class="sticky top-0 left-0 w-full flex justify-center z-10 bg-white" id="header">
    <div class="wid_mob w-4/5 h-20 flex justify-between max-[1025px]:items-center max-[1025px]:h-auto max-[1025px]:relative">

        <div class="header__logo">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?= esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="logo" class="scale">
            </a>
        </div>

        <div class="header__menu_and_buttons flex items-center justify-center">
            <div class="menu items-center bg-white flex flex-auto">
                <?php wp_nav_menu( array('theme_location' => 'header-menu', 'menu_class' => 'flex justify-between', 'container_class' => 'w-full')); ?>
            </div>

            <div class="buttons_box">
                <a href="http://" class="bg-[#6371F4] text-white text-2xl py-2 px-6 rounded-lg mx-1">Log In</a>
                <a href="http://" class="bg-[#6371F4] text-white text-2xl py-2 px-6 rounded-lg mx-1">Sing Up</a>
            </div>
        </div>

        <div class="burger min-[1025px]:hidden">
            <label for="check">
                <input type="checkbox" id="check"/> 
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>

    </div>
</div>

