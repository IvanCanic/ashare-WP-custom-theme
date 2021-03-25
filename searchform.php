<?php
/**
 *
 * @package Ashare
 */
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET" class="ashare-search__form">
    <div class="ashare-search__close"><i class="far fa-window-close"></i></div>
    <label class="ashare-search__label" for="search"><?php _e('Search','ashare'); ?></label>
    <input type="text" value="<?php esc_attr(the_search_query()); ?>" name="s" id="search" class="ashare-search__input" autocomplete="off">
    <button type="submit" class="ashare-search__btn"><?php _e('Search','ashare'); ?></button>
</form>