<?php
/**
 *
 * @package Ashare
 */
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET" class="ashare-search__form">
    <label class="ashare-search__label" for="search"><?php esc_html_e('Search','ashare'); ?></label>
    <input type="text" tabindex="1" value="<?php esc_attr(the_search_query()); ?>" name="s" id="search" class="ashare-search__input" autocomplete="off">
    <button type="submit" tabindex="1" class="ashare-search__btn"><?php esc_html_e('Search','ashare'); ?></button>
    <button type="button" class="ashare-search__close" tabindex="1"><i class="far fa-window-close"></i></button>
</form>