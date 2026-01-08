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
    // Logo settings
    $wp_customize->add_setting('logo');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            [
                'label' => 'Logo',
                'section' => 'title_tagline',
                'settings' => 'logo'
            ]
        )
    );

    $wp_customize->add_setting('logo_full');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'logo_full',
            [
                'label' => 'Logo Full',
                'section' => 'title_tagline',
                'settings' => 'logo_full'
            ]
        )
    );

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

    // Homepage Panel
    $wp_customize->add_panel('panel_trang_chu', [
        'capability' => 'edit_theme_options',
        'title' => 'Trang chủ',
    ]);

    // Banner Section
    $wp_customize->add_section('banner', [
        'title' => __('Banner', 'sage'),
        'panel' => 'panel_trang_chu',
    ]);

    // Banner 1
    $wp_customize->add_setting('trang_chu.banner.hinh_1');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'trang_chu.banner.hinh_1',
            [
                'label' => 'Hình banner 1',
                'section' => 'banner',
                'settings' => 'trang_chu.banner.hinh_1'
            ]
        )
    );

    $wp_customize->add_setting('trang_chu.banner.hinhnen_1');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'trang_chu.banner.hinhnen_1',
            [
                'label' => 'Hình nền 1',
                'section' => 'banner',
                'settings' => 'trang_chu.banner.hinhnen_1'
            ]
        )
    );

    $wp_customize->add_setting('trang_chu.banner.title1');
    $wp_customize->add_control('trang_chu.banner.title1', [
        'label' => 'Tiêu đề 1',
        'section' => 'banner',
        'settings' => 'trang_chu.banner.title1',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('trang_chu.banner.content1');
    $wp_customize->add_control('trang_chu.banner.content1', [
        'label' => 'Nội dung 1',
        'section' => 'banner',
        'settings' => 'trang_chu.banner.content1',
        'type' => 'text',
    ]);

    // Banner 2
    $wp_customize->add_setting('trang_chu.banner.hinh_2');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'trang_chu.banner.hinh_2',
            [
                'label' => 'Hình banner 2',
                'section' => 'banner',
                'settings' => 'trang_chu.banner.hinh_2'
            ]
        )
    );

    $wp_customize->add_setting('trang_chu.banner.hinhnen_2');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'trang_chu.banner.hinhnen_2',
            [
                'label' => 'Hình nền 2',
                'section' => 'banner',
                'settings' => 'trang_chu.banner.hinhnen_2'
            ]
        )
    );

    $wp_customize->add_setting('trang_chu.banner.title2');
    $wp_customize->add_control('trang_chu.banner.title2', [
        'label' => 'Tiêu đề 2',
        'section' => 'banner',
        'settings' => 'trang_chu.banner.title2',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('trang_chu.banner.content2');
    $wp_customize->add_control('trang_chu.banner.content2', [
        'label' => 'Nội dung 2',
        'section' => 'banner',
        'settings' => 'trang_chu.banner.content2',
        'type' => 'text',
    ]);
});
