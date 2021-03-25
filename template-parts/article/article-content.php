<article <?php post_class('post'); ?>>
    <h2 class="post__title"><?php the_title(); ?></h2>
    <div class="post__meta">
        <div class="post__date"><?php the_date('F j, Y'); ?></div>
        <div class="post__author"><?php _e('By: ', 'ashare');?>
            <a href="<?php echo esc_attr(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
        </div>
            <a href="<?php echo esc_url(get_comments_link()); ?>" class="post__comments">
                <?php 
                    $comments = get_comments_number();
                        if( $comments == 1 ) {
                        echo esc_html($comments) . ' comment';
                        } else {
                        echo esc_html($comments) . ' comments';
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
            <a href="<?php the_permalink(); ?>" class="post__read-more"><?php _e('Read More', 'ashare'); ?></a>
</article>