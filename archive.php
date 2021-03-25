<?php
/**
 *
 * @package Ashare
 */
?>

<?php get_header(); ?>
        <section>
            <div class="main container">
                <main class="main__content">
                    <h3 class="main__title"><?php _e('Category -> ','ashare'); ?><?php wp_title(''); ?></h3>
                    <div class="main__posts">
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <?php get_template_part( 'template-parts/article/article', 'content' ); ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <h2 class="main__no-posts">
                            <?php _e('We are sorry, no posts found.', 'ashare'); ?>
                        </h2>
                    <?php endif; ?>
                    </div>
                    <ul class="post__pagination">
                        <?php echo paginate_links(); ?>
                    </ul>
                </main>
                <aside class="main__sidebar">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </section>
<?php get_footer(); ?>