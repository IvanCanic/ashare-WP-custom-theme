<div class="slider__content">
    <?php $ashare_args = array(
        'posts_per_page'      => 6,
        'orderby'             => 'comment_count',
    ); ?>
    <?php $ashare_loop = new WP_Query( $ashare_args );  ?>
    <?php if($ashare_loop->have_posts()) : ?>
    <?php $ashareSlideId = 0; ?>
    <?php while($ashare_loop->have_posts()) : $ashare_loop->the_post(); ?>
    <div id="slider-<?php echo esc_attr($ashareSlideId); ?>">
        <article class="popular-post">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>" class="popular-post__thumb">
                <div class="popular-post__content">
                    <ul class="popular-post__category">
                        <?php $ashareCategoryName = get_the_category(); ?>
                        <?php foreach($ashareCategoryName as $ashare_cat) : ?>
                            <li><a href="<?php echo esc_url(get_category_link( $ashare_cat->term_id )); ?>"><?php echo esc_html($ashare_cat->name); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php the_permalink(); ?>" class="popular-post__title"><?php the_title(); ?></a>
                </div>
        </article>
    </div>
    <?php $ashareSlideId++; endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>
<div class="slider__btns">
    <?php $ashare_loop = new WP_Query( $ashare_args );  ?>
    <?php if($ashare_loop->have_posts()) : ?>
    <?php $AshareSlideBtnId = 0; ?>
    <?php while($ashare_loop->have_posts()) : $ashare_loop->the_post(); ?>
        <span data-id="slider-<?php echo esc_attr($AshareSlideBtnId); ?>"></span>
    <?php $AshareSlideBtnId++; endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>