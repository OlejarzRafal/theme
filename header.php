<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

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
    <style>
        .transition-1 {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999999;
            opacity: 0;
            pointer-events: none;
            transition: 0.5s ease-in-out;
            background-color: #ffffff;
        }

        .transition-1.is-active {
            pointer-events: all;
            opacity: 1;
        }
    </style>
    <!-- styles and scripts in functions.php -->


    <?php wp_head(); ?>
</head>

<body class="<?php if (is_front_page()) : ?>home<?php else : ?>page_<?= get_the_ID(); ?><?php endif; ?>">
    <span class="overlay" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/background.svg)">
    </span>
    <!-- <div class="transition transition-1 is-active"></div> -->
    <!-- <div class="placeholder"></div> -->
    <header id="header">
        <div class="header__inner">
            <div class="header__container">
                <?php get_template_part('components/content', 'header-top') ?>
                <?php get_template_part('components/content', 'header-main') ?>
                <?php get_template_part('components/content', 'header-mobile') ?>
            </div>
        </div>
    </header>