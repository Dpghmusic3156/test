<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * Customizer: Theme Colors
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    $wp_customize->add_section('theme_colors', [
        'title' => __('Màu sắc giao diện', 'sage'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('primary_color', [
        'default' => '#2271b1',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);

    $wp_customize->add_control(new \WP_Customize_Color_Control($wp_customize, 'primary_color', [
        'label' => __('Màu chủ đạo', 'sage'),
        'section' => 'theme_colors',
    ]));

    // Thêm chỉnh kích thước Logo vào mục Site Identity
    $wp_customize->add_setting('logo_width', [
        'default' => 150,
        'sanitize_callback' => 'absint',
    ]);

    $wp_customize->add_control('logo_width', [
        'label' => __('Kích thước Logo (px)', 'sage'),
        'section' => 'title_tagline',
        'type' => 'range',
        'input_attrs' => [
            'min' => 20,
            'max' => 500,
            'step' => 5,
        ],
    ]);
});

add_action('wp_head', function () {
    $primary_color = get_theme_mod('primary_color', '#2271b1');
    $logo_width = get_theme_mod('logo_width', 150);
?>
    <style type="text/css">
        :root {
            --body-bg-color: <?php echo esc_attr($primary_color); ?>;
        }

        body {
            background-color: var(--body-bg-color);
        }

        /* Áp dụng kích thước cho logo */
        .custom-logo-link img,
        .custom-logo {
            width: <?php echo intval($logo_width); ?>px;
            height: auto;
            max-width: 100%;
        }
    </style>
<?php
});
