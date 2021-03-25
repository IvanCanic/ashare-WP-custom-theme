<?php $prevPost = get_previous_post(true); ?>

<div class="main__x-left">

    <?php if($prevPost) : ?>
    <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );?>
    <?php echo $prevthumbnail; ?>
    <div class="main__x-left-desc"><?php _e('Previuos Post', 'ashare'); ?></div>
    <?php previous_post_link('%link',"  <p class=\"main__x-left-title\">%title</p>", TRUE); ?>
    <?php endif; ?>
</div>

<?php $nextPost = get_next_post(true); ?>
<div class="main__x-right">

    <?php if($nextPost) : ?>
    <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) ); ?>
    <?php echo $nextthumbnail; ?>
    <div class="main__x-right-desc"><?php _e('Next Post','ashare'); ?></div>
    <?php next_post_link('%link',"  <p class=\"main__x-right-title\">%title</p>", TRUE); ?>
    <?php endif; ?>
</div>