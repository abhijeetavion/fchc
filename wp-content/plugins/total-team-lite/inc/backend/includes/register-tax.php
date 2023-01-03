<?php

defined('ABSPATH') or die("No script kiddies please!");
$labels = array(
    'name' => _x('Total Team Categories', 'taxonomy general name', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'singular_name' => _x('Total Team Category', 'taxonomy singular name', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'search_items' => __('Search Team Category', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'all_items' => __('All Team Category', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'parent_item' => __('Parent Team Category', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'parent_item_colon' => __('Parent Team Category:', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'edit_item' => __('Edit Team Category', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'update_item' => __('Update Team Category', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'add_new_item' => __('Add New Team Category', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'new_item_name' => __('New Team Category Name', TOTAL_TEAM_LITE_TEXT_DOMAIN),
    'menu_name' => __('Team Category', TOTAL_TEAM_LITE_TEXT_DOMAIN),
);

$args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => TOTAL_TEAM_LITE_TEXT_DOMAIN),
);
