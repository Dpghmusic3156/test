<?php

/**
 * Custom Post Types and Taxonomies.
 */

namespace App;

/**
 * Register custom post types and taxonomies.
 *
 * @return void
 */
add_action('init', function () {
    // Lab Logo
    register_extended_post_type('lab_logo', [
        'show_in_feed' => true,
        'archive' => [
            'nopaging' => true,
        ],
        'supports' => ['title', 'thumbnail', 'custom-fields'],
    ], [
        'singular' => 'Lab Logo',
        'plural' => 'Labs Logo',
        'slug' => 'labs-logo',
    ]);

    // Customer
    register_extended_post_type('customer', [
        'show_in_feed' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'has_archive' => true,
        'archive' => [
            'nopaging' => true,
        ],
        'supports' => ['title', 'thumbnail', 'custom-fields'],
    ], [
        'singular' => 'Customer',
        'plural' => 'Customers',
        'slug' => 'customer',
    ]);

    // Warranty
    register_extended_post_type('warranty', [
        'show_in_feed' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'has_archive' => true,
        'archive' => [
            'nopaging' => true,
        ],
        'supports' => ['title', 'editor', 'excerpt', 'custom-fields'],
    ], [
        'singular' => 'Warranty',
        'plural' => 'Warranties',
        'slug' => 'warranty',
    ]);

    // Price
    register_extended_post_type('price', [
        'show_in_feed' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'has_archive' => true,
        'archive' => [
            'nopaging' => true,
        ],
        'supports' => ['title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'],
    ], [
        'singular' => 'Bảng giá',
        'plural' => 'Price',
        'slug' => 'price',
    ]);

    // Docs (Documentation)
    register_post_type('docs', [
        'show_in_feed' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'label' => 'Tài liệu',
        'public' => true,
        'has_archive' => true,
        'archive' => [
            'nopaging' => true,
        ],
        'supports' => ['title', 'editor', 'excerpt'],
        'taxonomies' => ['doc_category'],
    ], [
        'singular' => 'Tài liệu',
        'plural' => 'Tài liệu',
        'slug' => 'tai-lieu',
    ]);

    // Genre taxonomy for Story (if using)
    register_extended_taxonomy('genre', 'story', [
        'meta_box' => 'radio',
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'admin_cols' => [
            'updated' => [
                'title_cb' => function () {
                    return '<em>Last</em> Updated';
                },
                'meta_key' => 'updated_date',
                'date_format' => 'd/m/Y'
            ],
        ],
    ]);

    // Doc Category taxonomy
    register_taxonomy('doc_category', 'docs', [
        'labels' => [
            'name' => 'Chuyên mục tài liệu',
            'singular_name' => 'Chuyên mục',
            'search_items' => 'Tìm chuyên mục',
            'all_items' => 'Tất cả',
            'edit_item' => 'Chỉnh sửa',
            'update_item' => 'Cập nhật',
            'add_new_item' => 'Thêm mới',
            'new_item_name' => 'Tên mới',
            'menu_name' => 'Chuyên mục tài liệu',
        ],
        'hierarchical' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'chuyen-muc-tai-lieu'],
    ]);
});

/**
 * Clear lab_logo transient when a lab_logo post is saved.
 */
add_action('save_post_lab_logo', function () {
    delete_transient('lab_logo_html');
});
