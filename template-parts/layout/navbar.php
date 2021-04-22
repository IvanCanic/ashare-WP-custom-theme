<nav class="nav">
            <div class="container">
                <div class="nav__navigation">
                    <?php
                     if ( has_nav_menu( 'primary-menu' ) ){
                        $ashare_registred_menus = get_registered_nav_menus();
                        if ( isset($ashare_registred_menus['primary-menu'])) {
                        wp_nav_menu( [ 
                        'menu'   => '',
                        'container'            => '',
                        'container_class'      => '',
                        'container_id'         => '',
                        'container_aria_label' => '',
                        'menu_class'           => 'nav__menu-list',
                        'menu_id'              => '',
                        'echo'                 => true,
                        'fallback_cb'          => false,
                        'before'               => '',
                        'after'                => '',
                        'link_before'          => '',
                        'link_after'           => '',
                        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'         => 'preserve',
                        'depth'                => 0,
                        'walker'               => '',
                        'theme_location'       => 'primary-menu'
                        ]);
                    }
                     }
                
                    ?>
                    <?php get_template_part('template-parts/layout/social', 'links'); ?>
                    <div class="nav__buttons">
                        <button class="nav__search-btn" tabindex="1">
                            <i class="fas fa-search"></i>
                        </button>
                        <div class="ashare-search">
                            <?php get_search_form(); ?>
                        </div>
                        <button type="button" class="nav__menu-toggle" tabindex="1">
                            <div class="nav__bar"></div>
                        </button>
                    </div>
                </div>
                <?php
                    $ashare_custom_logo_id = get_theme_mod( 'custom_logo' );
                    $ashare_logo = wp_get_attachment_image_src( $ashare_custom_logo_id , 'full' );
 
                    if ( has_custom_logo() ) {
                        echo '<a href="' . esc_attr(home_url('/')) . '" class="nav__brand"><img src="' . esc_url( $ashare_logo[0] ) . '" alt="' . esc_attr(get_bloginfo( 'name' )) . '"></a>';
                    } else {
                    echo '<a href="' . esc_attr(home_url('/')) . '" class="nav__brand">' . esc_attr(get_bloginfo( 'name' )) . '</a>';
                    }
                ?>
            </div>
</nav>