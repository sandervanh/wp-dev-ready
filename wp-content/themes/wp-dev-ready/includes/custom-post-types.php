<?php
if (!function_exists('create_post_type')) :

    function create_post_type()
    {
        // register_post_type(
        //     'events',
        //     array(
        //         'labels' => array(
        //             'name' => __('Evenementen'),
        //             'singular_name' => __('Evenement'),
        //             'add_new'       => __('Toevoegen'),
        //         ),
        //         'show_in_rest' => true,
        //         'public' => true,
        //         'publicly_queryable'  => true,
        //         'has_archive' => false,
        //         'supports' => array('title', 'editor', 'thumbnail', 'custom_fields', 'revisions', 'page-attributes'), // do you need all of these options?
        //         //'taxonomies' => array('news-categories'),
        //         //'hierarchical' => true,
        //         'menu_icon' => 'dashicons-calendar',
        //         'rewrite' => array('slug' => 'evenementen', 'with_front' => false),
        //     )
        // );

    }
    add_action('init', 'create_post_type');

endif; // ####