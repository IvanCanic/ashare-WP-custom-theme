
<?php if(get_header_textcolor()) : ?>
<div class="header__overlay" style="background:#<?php echo esc_attr(get_header_textcolor()); ?>; opacity:0.5;"></div>
<?php endif; ?>

<?php if(get_header_image()) : ?>
<img src="<?php header_image(); ?>" alt="header thumbnail" class="header__thumb">
<?php endif; ?>

<div class="header__content">
    <h2 class="header__title"><?php bloginfo( 'name' ); ?></h2>
</div>