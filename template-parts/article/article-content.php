<article <?php post_class('post'); ?>>
    <h2 class="post__title"><?php the_title(); ?></h2>
    <div class="post__meta">
        <div class="post__date"><?php the_date('F j, Y'); ?></div>
        <div class="post__author"><?php esc_html_e('By: ', 'ashare');?>
            <a href="<?php echo esc_attr(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
        </div>
            <a href="<?php echo esc_url(get_comments_link()); ?>" class="post__comments">
                <?php 
                    $ashare_comments = get_comments_number();
                        if( $ashare_comments == 1 ) {
                        echo esc_html($ashare_comments) . ' comment';
                        } else {
                        echo esc_html($ashare_comments) . ' comments';
                    }
                ?>
            </a>
    </div>
        <?php if(has_post_thumbnail()) : ?>
            <div class="post__thumbnail">
                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
            </div>
        <?php endif; ?>
            <div class="post__content">
                <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="post__read-more"><?php esc_html_e('Read More', 'ashare'); ?></a>
</article>