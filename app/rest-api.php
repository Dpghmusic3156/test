<?php

/**
 * REST API endpoints.
 */

namespace App;

use WP_REST_Request;
use WP_Query;

/**
 * Register custom REST API routes.
 *
 * @return void
 */
add_action('rest_api_init', function () {
    // Filter docs endpoint with pagination
    register_rest_route('custom/v1', '/filter-docs', [
        'methods' => 'GET',
        'callback' => __NAMESPACE__ . '\\filter_docs_callback',
        'permission_callback' => '__return_true',
        'args' => [
            'category' => [
                'type' => 'string',
                'sanitize_callback' => 'sanitize_text_field',
                'default' => 'all',
            ],
            'query' => [
                'type' => 'string',
                'sanitize_callback' => 'sanitize_text_field',
                'default' => '',
            ],
            'paged' => [
                'type' => 'integer',
                'default' => 1,
                'minimum' => 1,
                'sanitize_callback' => 'absint',
            ],
        ],
    ]);

    // Recent docs by category
    register_rest_route('custom/v1', '/recent-docs', [
        'methods' => 'GET',
        'callback' => __NAMESPACE__ . '\\get_recent_docs_by_category',
        'permission_callback' => '__return_true',
        'args' => [
            'category' => [
                'type' => 'string',
                'sanitize_callback' => 'sanitize_text_field',
                'required' => true,
            ],
        ],
    ]);
});

/**
 * Filter docs callback function.
 *
 * @param WP_REST_Request $request
 * @return array
 */
function filter_docs_callback(WP_REST_Request $request)
{
    $cat = $request->get_param('category');
    $q = $request->get_param('query');
    $paged = max(1, intval($request->get_param('paged')));

    $args = [
        'post_type' => 'docs',
        'posts_per_page' => 20,
        'paged' => $paged,
        's' => $q,
    ];

    if ($cat && $cat !== 'all') {
        $args['tax_query'] = [[
            'taxonomy' => 'doc_category',
            'field' => 'slug',
            'terms' => $cat,
        ]];
    }

    $query = new WP_Query($args);
    $results = [];

    while ($query->have_posts()) {
        $query->the_post();
        $results[] = [
            'title' => get_the_title(),
            'link' => get_permalink(),
            'excerpt' => get_the_excerpt(),
        ];
    }

    wp_reset_postdata();

    return [
        'items' => $results,
        'has_more' => $query->max_num_pages > $paged,
    ];
}

/**
 * Get recent docs by category callback function.
 *
 * @param WP_REST_Request $request
 * @return array
 */
function get_recent_docs_by_category(WP_REST_Request $request)
{
    $slug = $request->get_param('category');

    $args = [
        'post_type' => 'docs',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => [[
            'taxonomy' => 'doc_category',
            'field' => 'slug',
            'terms' => $slug,
        ]]
    ];

    $query = new WP_Query($args);
    $results = [];

    while ($query->have_posts()) {
        $query->the_post();
        $results[] = [
            'title' => get_the_title(),
            'link' => get_permalink(),
        ];
    }

    wp_reset_postdata();

    return $results;
}
