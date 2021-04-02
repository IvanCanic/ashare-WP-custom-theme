<div class="nav__social">

    <?php if(get_theme_mod('facebook')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('facebook')); ?>" title="<?php esc_attr_e('Facebook', 'ashare'); ?>" target="_blank" class="nav__social-icon"><i class="fab fa-facebook-f"></i></a>
    <?php endif; ?>

    <?php if(get_theme_mod('instagram')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('instagram')); ?>" title="<?php esc_attr_e('Instagram', 'ashare'); ?>" target="_blank" class="nav__social-icon"><i class="fab fa-instagram"></i></a>
    <?php endif; ?>
    
    <?php if(get_theme_mod('twitter')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('twitter')); ?>" title="<?php esc_attr_e('Twitter', 'ashare'); ?>" target="_blank" class="nav__social-icon"><i class="fab fa-twitter"></i></a>
    <?php endif; ?>

    <?php if(get_theme_mod('behance')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('behance')); ?>" title="<?php esc_attr_e('Behance', 'ashare'); ?>" target="_blank" class="nav__social-icon"><i class="fab fa-behance"></i></a>
    <?php endif; ?>

    <?php if(get_theme_mod('youtube')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('youtube')); ?>" title="<?php esc_attr_e('Youtube', 'ashare'); ?>" target="_blank" class="nav__social-icon"><i class="fab fa-youtube"></i></a>
    <?php endif; ?>

</div>