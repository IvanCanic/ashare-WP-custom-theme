<div class="slider__content">
    <?php $args = array(
        'posts_per_page'      => 6,
        'orderby'             => 'comment_count',
    ); ?>
    <?php $loop = new WP_Query( $args );  ?>
    <?php if($loop->have_posts()) : ?>
    <?php $slideId = 0; ?>
    <?php while($loop->have_posts()) : $loop->the_post(); ?>
    <div id="slider-<?php echo $slideId; ?>">
        <article class="popular-post">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>" class="popular-post__thumb">
                <div class="popular-post__content">
                    <ul class="popular-post__category">
                        <?php $categoryName = get_the_category(); ?>
                        <?php foreach($categoryName as $cat) : ?>
                            <li><a href="<?php echo esc_url(get_category_link( $cat->term_id )); ?>"><?php echo esc_html($cat->name); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php the_permalink(); ?>" class="popular-post__title"><?php the_title(); ?></a>
                </div>
        </article>
    </div>
    <?php $slideId++; endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>
<div class="slider__btns">
    <?php $loop = new WP_Query( $args );  ?>
    <?php if($loop->have_posts()) : ?>
    <?php $slideBtnId = 0; ?>
    <?php while($loop->have_posts()) : $loop->the_post(); ?>
        <span data-id="slider-<?php echo esc_attr($slideBtnId); ?>"></span>
    <?php $slideBtnId++; endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>