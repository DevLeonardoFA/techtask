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
            <?php $logos = get_field('logos'); ?>
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?= $logos['logo_desktop'] ?>" alt="logo" class="scale logo_desk">
                <img src="<?= $logos['logo_mobile'] ?>" alt="logo" class="scale md:hidden">
            </a>
        </div>

        <div class="header__menu_and_buttons flex items-center justify-center">
            <div class="menu items-center bg-white flex flex-auto">
                <?php wp_nav_menu( array('link_after' => '<span>></span>','theme_location' => 'header-menu', 'menu_class' => 'flex justify-between', 'container_class' => 'w-full')); ?>
            </div>

            <div class="buttons_box">
            <?php 
                $buttons = get_field('loginregister_buttons');

                $link = $buttons['login_button'];
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    echo '<a class="bg-[#6371F4] text-white text-2xl py-2 px-6 rounded-lg mx-1"" href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.esc_html( $link_title ).'</a>';
                endif;

                $link = $buttons['register_button'];
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    echo '<a class="bg-[#6371F4] text-white text-2xl py-2 px-6 rounded-lg mx-1"" href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.esc_html( $link_title ).'</a>';
                endif;

            ?>
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

