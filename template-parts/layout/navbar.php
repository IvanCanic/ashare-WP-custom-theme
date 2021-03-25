<nav class="nav">
            <div class="container">
                <div class="nav__navigation">
                    <?php get_template_part('template-parts/layout/social', 'links'); ?>
                    <div class="nav__buttons">
                        <div class="nav__menu-toggle" tabindex="0">
                            <div class="nav__bar"></div>
                        </div>
                        <div class="nav__search-btn" tabindex="0">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <?php 
                        if ( has_nav_menu( 'primary_menu' ) ) {
                        $menuargs = array(
                            'menu'                 => '',
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
                            'theme_location'       => 'primary_menu'
                        );
                        wp_nav_menu( $menuargs );
                    }
                    ?>
                </div>
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
                    if ( has_custom_logo() ) {
                        echo '<a href="' . home_url('/') . '" class="nav__brand"><img src="' . esc_url( $logo[0] ) . '" alt="' . esc_attr(get_bloginfo( 'name' )) . '"></a>';
                    } else {
                    echo '<a href="' . home_url('/') . '" class="nav__brand">' . esc_attr(get_bloginfo( 'name' )) . '</a>';
                    }
                ?>
            </div>
</nav>