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

<div class="sticky top-0 left-0 w-full flex justify-center" id="header">
    <div class="w-4/5 h-20 flex justify-between">

        <div class="header__logo">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?= esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="logo" class="scale">
            </a>
        </div>

        <div class="header__menu_and_buttons">
            <div class="menu items-center bg-white">
                <?php wp_nav_menu('header-menu'); ?>
            </div>

            <div class="buttons_box">
                <a href="http://">Login</a>
                <a href="http://">Register</a>
            </div>
        </div>

    </div>
</div>
