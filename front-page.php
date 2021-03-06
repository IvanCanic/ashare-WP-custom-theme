<?php
/**
 *
 * @package Ashare
 */
?>

<?php get_header(); ?>
    
        <section class="container">
            <h2 class="section__title"><?php esc_html_e('Popular posts', 'ashare'); ?></h2>
            <div class="slider" >
                <?php get_template_part('template-parts/layout/slider'); ?>
            </div>
        </section>

        <section id="main-section">
            <div id="content" class="main container">
                <main class="main__content">
                    <h3 class="main__title"><?php bloginfo('name'); ?></h3>
                    <div class="main__posts">
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <?php get_template_part( 'template-parts/article/article', 'content' ); ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <h2 class="main__no-posts">
                            <?php esc_html_e('We are sorry, no posts found.', 'ashare'); ?>
                        </h2>
                    <?php endif; ?> 
                    </div>
                    <?php ashare_pagination(); ?>
                </main>
                <aside class="main__sidebar">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </section>
   
<?php get_footer();