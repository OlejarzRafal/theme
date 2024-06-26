<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <!-- remove bellow after migrate to correct domain -->
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <meta name="googlebot" content="noindex">
    <meta name="googlebot-news" content="nosnippet">
    <meta name=”robots” content=”noindex, nofollow”>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->



    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <!-- Google -->
    <meta name="description" content="<?php bloginfo('description'); ?>" />

    <!-- Facebook -->
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:site_name" content="<?php the_title(); ?>">
    <meta property="og:url" content="<?php echo get_home_url(); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo get_home_url(); ?>">
    <meta property="twitter:title" content="<?php the_title(); ?>">
    <meta property="twitter:description" content="<?php bloginfo('description'); ?>">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg">

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- styles and scripts in functions.php -->

    <?php if (is_paged()) : ?>
        <link rel="canonical" href="<?php echo esc_url(get_pagenum_link()); ?>" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    $page_class = is_front_page() ? 'home' : 'page_' . get_the_ID();
    ?>
    <script>
        document.querySelector('body').classList.add('<?php echo esc_attr($page_class); ?>');
    </script>
    <div class="bg-splash bg-splash--1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-splash-1.png" alt="splash-1"></div>
    <div class="bg-splash bg-splash--2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-splash-2.png" alt="splash-2"></div>
    <div class="bg-splash bg-splash--3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-splash-3.png" alt="splash-3"></div>
    <?php if (is_page(7) || is_page(61)) : ?>
        <div class="bg-splash bg-splash--4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-splash-4.png" alt="splash-4"></div>
    <?php endif; ?>


    <div class="preloader"></div>

    <header id="header">
        <div class="header__inner">
            <div class="header__container">
                <?php get_template_part('components/content', 'header-top') ?>
                <?php get_template_part('components/content', 'header-main') ?>
                <?php get_template_part('components/content', 'header-mobile') ?>
                <?php get_template_part('components/content', 'header-top-fixed') ?>
            </div>
        </div>
    </header>