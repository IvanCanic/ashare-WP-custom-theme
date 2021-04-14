<?php
/**
 *
 * @package Ashare
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <a class="skip-link screen-reader-text" href="#content" tabindex="1"><?php esc_html_e( 'Skip to content', 'ashare' ); ?></a>

    <div class="ashare-search">
        <?php get_search_form(); ?>
    </div>
        <?php get_template_part('template-parts/layout/navbar'); ?>
        <?php if( is_home() || is_front_page() ) : ?>
        <div class="container">
            <header class="header">
                <?php get_template_part('template-parts/layout/header'); ?>
            </header>
        </div>
        <?php endif; ?>
        <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>