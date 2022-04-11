<?php

/**
 * Create taxonomies for custom post types.
 *
 * @see register_post_type() for registering custom post types.
 */
if (!function_exists('create_taxonomy')) :

    function create_taxonomy()
    {
        // Add new taxonomy, make it hierarchical (like categories)
        // $labels = array(
        //     'name'              => _x('Categorieën', 'taxonomy general name', 'wp-dev-ready'),
        //     'singular_name'     => _x('Categorie', 'taxonomy singular name', 'wp-dev-ready'),
        //     'search_items'      => __('Zoek categorieën', 'wp-dev-ready'),
        //     'all_items'         => __('Alle categorieën', 'wp-dev-ready'),
        //     'parent_item'       => __('Parent Categorie', 'wp-dev-ready'),
        //     'parent_item_colon' => __('Parent Categorie:', 'wp-dev-ready'),
        //     'edit_item'         => __('Bewerk Categorie', 'wp-dev-ready'),
        //     'update_item'       => __('Update Categorie', 'wp-dev-ready'),
        //     'add_new_item'      => __('Categorie toevoegen', 'wp-dev-ready'),
        //     'new_item_name'     => __('Categorie naam', 'wp-dev-ready'),
        //     'menu_name'         => __('Categorie', 'wp-dev-ready'),
        // );

        // $args = array(
        //     'hierarchical'      => true,
        //     'labels'            => $labels,
        //     'show_ui'           => true,
        //     'show_admin_column' => true,
        //     'query_var'         => true,
        //     'show_in_rest'      => true,
        //     //'rewrite'           => array('slug' => 'genre'),
        // );

        // register_taxonomy('category', array('page'), $args);

        // unset($args);
        // unset($labels);

    }

    add_action('init', 'create_taxonomy');

endif; // ####