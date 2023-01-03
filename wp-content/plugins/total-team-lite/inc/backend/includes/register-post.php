<?php

defined('ABSPATH') or die("No script kiddies please!");
$labels = array(
    'name' => _x('Total Teams', 'post type general name', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'singular_name' => _x('Total Team', 'post type singular name', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'menu_name' => _x('Total Team  Lite', 'admin menu', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'name_admin_bar' => _x('Total Team', 'add new on admin bar', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'add_new' => _x('Add New Member', 'Total Team', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'add_new_item' => __('Add New Member', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'new_item' => __('New Member', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'edit_item' => __('Edit Member', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'view_item' => __('View Member', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'all_items' => __('Team Members', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'search_items' => __('Search Team Member', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'parent_item_colon' => __('Parent The Team:', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'not_found' => __('No Team Member found.', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'not_found_in_trash' => __('No Team Member found in Trash.', TOTAL_TEAM_LITE_TEXT_DOMAIN)
);

$args = array(
    'labels' => $labels,
    'description' => __('Description.', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'public' => false,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-admin-users',
    'query_var' => true,
    'rewrite' => array('slug' => 'teams'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail',)
);

