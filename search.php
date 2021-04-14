<?php
/**
 *
 * @package Ashare
 */
?>
<?php
/**
 *
 * @package Ashare
 */
?>

<?php get_header() ?>
        <section id="search-section">
            <div id="content" class="main container">
                <main class="main__content">
                    <h3 class="main__title"><?php esc_html_e('Search results for: ', 'ashare'); echo esc_attr(get_search_query()); ?></h3>
                    <div class="main__posts">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part( 'template-parts/article/article', 'content' ); ?>
                    <?php endwhile; ?>
                    <?php else: ?> 
                        <div class="main__search">
                            <h2 class="main__search-desc">
                                <?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ashare'); ?>
                            </h2>
                            <?php get_template_part('template-parts/article/article', 'search'); ?>
                        </div>
                    <?php endif; ?>
                    </div>
                    <?php ashare_pagination(); ?>
                </main>
                <aside class="main__sidebar">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </section>
<?php get_footer(); ?>