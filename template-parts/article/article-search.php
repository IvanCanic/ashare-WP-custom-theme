<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET" class="main__search-form">
    <input type="text" name="s" id="search-alternate" value="<?php esc_attr(the_search_query()); ?>" class="main__search-input" placeholder="Search" autocomplete="off">
    <button class="main__search-btn" type="submit"><i class="fas fa-search"></i></button>
</form>