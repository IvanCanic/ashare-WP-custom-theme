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
    <meta property="og:url"           content="<?php the_permalink(); ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php the_title(); ?>" />
    <meta property="og:description"   content="<?php echo esc_attr(get_the_excerpt()); ?>" />
    <?php if(has_post_thumbnail()) : ?>
    <meta property="og:image"         content="<?php echo esc_url(get_the_post_thumbnail_url()); ?>"/>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
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