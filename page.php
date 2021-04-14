<?php
/**
 *
 * @package Ashare
 */
?>

<?php get_header(); ?>
        <section>
            <div id="content" class="main container">
                <main class="main__content">
                    <div class="main__posts">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <article class="post">
                            <h2 class="post__title"><?php the_title(); ?></h2>
                            <div class="post__thumbnail">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
                            </div>
                            <div class="post__content">
                                <?php the_content(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </main>
                <aside class="main__sidebar">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </section>
<?php get_footer(); ?>