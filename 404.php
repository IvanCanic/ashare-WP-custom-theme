<?php
/**
 *
 * @package Ashare
 */
?>

<?php get_header(); ?>
        <section>
            <div id="content" class="main container main__404">

                <h1 class="main__404-title"><?php esc_html_e('404', 'ashare'); ?></h1>

                <div class="main__search">
                    <h2 class="main__search-desc">
                        <?php esc_html_e( 'We are sorry, but the page you are looking for doesn\'t exist.', 'ashare' ); ?>
                    </h2>
                    <?php get_template_part('template-parts/article/article', 'search'); ?>
                </div>
 
            </div>
        </section>
<?php get_footer(); ?>