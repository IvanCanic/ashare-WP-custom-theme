<?php $asharePrevPost = get_previous_post(true); ?>

<?php 
function ashare_get_prev_post($id) {

    $thumbnail = get_the_post_thumbnail($id, array(100,100) );
    $allowedTags = array(
        'img' => array(
            'class' => array(),
            'src' => array(),
            'loaded' => array(),
            'alt' => array(),
            'width' => array(),
            'height' => array()
        ),
    );

    return printf('%1$s', wp_kses($thumbnail, $allowedTags));
}
?>

<div class="main__x-left">

    <?php if($asharePrevPost) : ?>
    <?php ashare_get_prev_post($asharePrevPost->ID); ?>
    <div class="main__x-left-desc"><?php esc_html_e('Previuos Post', 'ashare'); ?></div>
    <?php previous_post_link('%link',"  <p class=\"main__x-left-title\">%title</p>", TRUE); ?>
    <?php endif; ?>
</div>

<?php $AshareNextPost = get_next_post(true); ?>
<div class="main__x-right">

    <?php if($AshareNextPost) : ?>
    <?php ashare_get_prev_post($AshareNextPost->ID); ?>
    <div class="main__x-right-desc"><?php esc_html_e('Next Post','ashare'); ?></div>
    <?php next_post_link('%link',"  <p class=\"main__x-right-title\">%title</p>", TRUE); ?>
    <?php endif; ?>
</div>