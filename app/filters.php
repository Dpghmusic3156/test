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

    // Primary Color 1 (Mặc định: rgb(46, 133, 67) -> #2e8543)
    $wp_customize->add_setting('primary1_color', [
        'default' => '#2e8543',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $wp_customize->add_control(new \WP_Customize_Color_Control($wp_customize, 'primary1_color', [
        'label' => __('Màu chủ đạo 1', 'sage'),
        'section' => 'theme_colors',
    ]));

    // Primary Color 2 (Mặc định: rgb(3, 169, 244) -> #03a9f4)
    $wp_customize->add_setting('primary2_color', [
        'default' => '#03a9f4',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $wp_customize->add_control(new \WP_Customize_Color_Control($wp_customize, 'primary2_color', [
        'label' => __('Màu chủ đạo 2', 'sage'),
        'section' => 'theme_colors',
    ]));

    // Primary Color 3 (Mặc định: #ffda6a)
    $wp_customize->add_setting('primary3_color', [
        'default' => '#ffda6a',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $wp_customize->add_control(new \WP_Customize_Color_Control($wp_customize, 'primary3_color', [
        'label' => __('Màu chủ đạo 3', 'sage'),
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
    $primary1 = get_theme_mod('primary1_color', '#2e8543');
    $primary2 = get_theme_mod('primary2_color', '#03a9f4');
    $primary3 = get_theme_mod('primary3_color', '#ffda6a');
    $logo_width = get_theme_mod('logo_width', 150);

    // Helper chuyển đổi hex sang rgb
    $hex2rgb = function ($hex) {
        $hex = str_replace("#", "", $hex);
        if (strlen($hex) == 3) {
            $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        return "$r, $g, $b";
    };
?>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style type="text/css">
        :root {
            --primary-color-1: <?php echo esc_attr($primary1);
                                ?>;
            --primary-color-2: <?php echo esc_attr($primary2);
                                ?>;
            --primary-color-3: <?php echo esc_attr($primary3);
                                ?>;
            --primary-color-1-rgb: <?php echo $hex2rgb($primary1);
                                    ?>;
            --primary-color-2-rgb: <?php echo $hex2rgb($primary2);
                                    ?>;
            --primary-color-3-rgb: <?php echo $hex2rgb($primary3);
                                    ?>;
        }

        body {
            background-color: #ffffff;
        }

        /* Áp dụng kích thước cho logo */
        .custom-logo-link img,
        .custom-logo {
            width: <?php echo intval($logo_width);
                    ?>px;
            height: auto;
            max-width: 100%;
        }
    </style>
<?php
});

/**
 * Override weDocs plugin template to use Sage template
 */
add_filter('template_include', function ($template) {
    if (is_singular('docs')) {
        // Force use Sage template for docs post type
        $sage_template = locate_template('single-docs.blade.php');
        if ($sage_template) {
            return $sage_template;
        }
    }
    return $template;
}, 99);
