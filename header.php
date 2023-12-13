<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' );?></title>
    <?php wp_head();?>
</head>
<body>
    <?php get_template_part( 'partials/mobile-menu' ); ?>
    <header class="main-header">
        <div class="container">
            <a href="<?php echo site_url(); ?>" class="main-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Yarra Valley Support Coordination Logo">
            </a>
            <span class="nav-wrapper">
                <?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
                <div id="menu-button" class="burger">
                    <div class="patty"></div>
                    <div class="patty"></div>
                    <div class="patty"></div>
                </div>
                <span class="ndis">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO-I-Heart-NDIS-PNG.png" alt="I love NDIS">
                    <p>Registered NDIS Provider</p>
                </span>
            </span>
        </div>
    </header>
   <?php if(is_page('home')) { ?>
        <?php get_template_part( 'partials/home-hero' ); ?>
    <?php } else { ?>
        <?php get_template_part( 'partials/page-hero' ); ?>
    <?php } ?>