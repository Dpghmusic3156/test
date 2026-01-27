<?php

/**
 * Theme Customizer settings.
 */

namespace App;

/**
 * Register Site Identity settings.
 *
 * @param \WP_Customize_Manager $wp_customize
 * @return void
 */
add_action('customize_register', function ($wp_customize) {


    // Contact Information
    $wp_customize->add_setting('address');
    $wp_customize->add_control('address', [
        'label' => 'Địa chỉ',
        'section' => 'title_tagline',
        'settings' => 'address',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('address_link');
    $wp_customize->add_control('address_link', [
        'label' => 'Link địa chỉ',
        'section' => 'title_tagline',
        'settings' => 'address_link',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('phone');
    $wp_customize->add_control('phone', [
        'label' => 'Điện thoại',
        'section' => 'title_tagline',
        'settings' => 'phone',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('phoneus');
    $wp_customize->add_control('phoneus', [
        'label' => 'Điện thoại Mỹ',
        'section' => 'title_tagline',
        'settings' => 'phoneus',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('email1');
    $wp_customize->add_control('email1', [
        'label' => 'Email 1',
        'section' => 'title_tagline',
        'settings' => 'email1',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('email2');
    $wp_customize->add_control('email2', [
        'label' => 'Email 2',
        'section' => 'title_tagline',
        'settings' => 'email2',
        'type' => 'text',
    ]);

    // Social Media Links
    $wp_customize->add_setting('facebook');
    $wp_customize->add_control('facebook', [
        'label' => 'Facebook',
        'section' => 'title_tagline',
        'settings' => 'facebook',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('youtube');
    $wp_customize->add_control('youtube', [
        'label' => 'Youtube',
        'section' => 'title_tagline',
        'settings' => 'youtube',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('skype');
    $wp_customize->add_control('skype', [
        'label' => 'Skype',
        'section' => 'title_tagline',
        'settings' => 'skype',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('zalo');
    $wp_customize->add_control('zalo', [
        'label' => 'Zalo',
        'section' => 'title_tagline',
        'settings' => 'zalo',
        'type' => 'text',
    ]);
    // Footer Settings
    $wp_customize->add_section('footer_settings', [
        'title' => 'Footer',
        'priority' => 120,
    ]);

    $wp_customize->add_setting('footer_logo');
    $wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'footer_logo', [
        'label' => 'Footer Logo',
        'section' => 'footer_settings',
        'settings' => 'footer_logo',
    ]));
});
