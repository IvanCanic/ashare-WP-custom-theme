<?php
/**
 *
 * @package Ashare
 */
?>

<?php get_header(); ?>
        <section id="main-section">
            <div class="main container">
                <main class="main__content">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                    <ul class="main__category">
                        <?php $categoryName = get_the_category(); ?>
                        <?php foreach($categoryName as $ash_cat) : ?>
                        <li><a href="<?php echo esc_url(get_category_link( $ash_cat->term_id )); ?>"><?php echo esc_html($ash_cat->name); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="main__posts">
                        <article <?php post_class('post'); ?>>
                            <h2 class="post__title"><?php the_title(); ?></h2>
                            <div class="post__meta">
                                <div class="post__date"><?php the_date('F j, Y'); ?></div>
                                <div class="post__author"><?php esc_html_e('By: ', 'ashare');?>
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
                                </div>
                                <a href="<?php echo esc_url(get_comments_link()); ?>" class="post__comments">
                                    <?php 
                                    $ash_comments = get_comments_number();
                                    if( $ash_comments == 1 ) {
                                        echo esc_html($ash_comments) . ' comment';
                                    } else {
                                        echo esc_html($ash_comments) . ' comments';
                                    }
                                    ?>
                                </a>
                            </div>
                            <?php if(has_post_thumbnail()) : ?>
                            <div class="post__thumbnail">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
                            </div>
                            <?php endif; ?>
                            <ul class="post__tags-list">
                                <?php $tags = get_the_tags(); ?>
                                <?php $i = 0; if($tags) : foreach($tags as $ash_tag) : ?>
                                <?php if(++$i > 5) break; ?>
                                <li><a href="<?php echo esc_url(get_tag_link( $ash_tag->term_id ))?>"><?php echo esc_html($ash_tag->name) ?></a></li>
                                <?php endforeach; endif; ?>
                            </ul>
                            <div class="post__content">
                                <?php the_content(); ?>
                            </div>
                            <div class="post__share">
                                <div class="post__share-title"><?php esc_html_e('Share:', 'ashare'); ?></div>
                                <div class="post__share-social">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text=my share text&amp;url=<?php the_permalink() ?>"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <ul class="post__pagination">
                        <?php wp_link_pages(); ?>
                    </ul>
                    <div class="main__x">
                       <?php get_template_part( 'template-parts/article/article-next', 'post' ); ?>
                    </div>

                    <?php if ( comments_open() || get_comments_number() ) : ?>
                    <div class="main__comments">
                        <?php comments_template(); ?>
                    </div>
                    <?php endif;?>
            
                    <?php endwhile; ?>
                    <?php endif; ?>
                </main>
                <aside class="main__sidebar">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </section>
<?php get_footer(); ?>