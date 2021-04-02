<?php

function AshareCreateSocialIcons($wp_customize) {

    $wp_customize->add_section('social', array(
        'title' => __('Social Icons', 'ashare'),
        'description' => sprintf(__('Options for social icons', 'ashare')),
        'priority' => 130
    ));

    $socialIcons = ['facebook', 'instagram', 'twitter', 'behance', 'youtube'];

    foreach($socialIcons as $icon) {
        $wp_customize->add_setting( $icon, array(
            'sanitize_callback' => 'ashare_sanitize_url',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control( $icon, array(
            /* translators: %s: Social icon name */
            'label' => sprintf( esc_html__('Add %s url', 'ashare'), $icon),
            'section' => 'social',
            'settings' => $icon,
            'priority' => 2
        ));
    }

}

add_action( 'customize_register', 'AshareCreateSocialIcons');