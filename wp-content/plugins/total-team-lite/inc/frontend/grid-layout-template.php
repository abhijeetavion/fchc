<?php

defined('ABSPATH') or die("No script kiddies please!");

$category_array = array();
$member_array = '';
$display_type = (isset($attr['display_type'])) ? $attr['display_type'] : 'all';
$member_id = (isset($attr['member_id'])) ? $attr['member_id'] : '';
$category_id = (isset($attr['category_id'])) ? $attr['category_id'] : '';
$team_number = (isset($attr['team_number'])) ? $attr['team_number'] : '99';
$custom_layout = (isset($attr['custom_layout'])) ? $attr['custom_layout'] : 'default';
$template_type = (isset($attr['template_type'])) ? $attr['template_type'] : 'basic';
$element_per_row = (isset($attr['element_per_row'])) ? $attr['element_per_row'] : '3';
$margin = (isset($attr['margin'])) ? $attr['margin'] : '10';
$order = (isset($attr['order'])) ? $attr['order'] : 'DESC';
$orderby = (isset($attr['orderby'])) ? $attr['orderby'] : 'date';
/* @var $template type */
$template = (isset($attr['template'])) ? $attr['template'] : 'template-1';
$additional_detail_type = (isset($attr['additional_detail_type'])) && $attr['additional_detail_type'] !== 'slide-out' ? $attr['additional_detail_type'] : 'popup';
$content_position = (isset($attr['content_position'])) && ($attr['content_position'] !== 'right' ||$attr['content_position'] !== 'left') ? esc_attr($attr['content_position']) : 'center';
$thumbnail_display = (isset($attr['thumbnail_display'])) ? $attr['thumbnail_display'] : 'square';
$grid_image_size = (isset($attr['image_size'])) ? $attr['image_size'] : 'totalteam-large';
$thumb_content = (isset($attr['thumb_content'])) ? $attr['thumb_content'] : 'general';
$filter_taxonomy = 'totalteam_taxonomy';
$myArray = explode(',', $category_id);
$filter_terms = get_terms($filter_taxonomy);
foreach ($myArray as $filter_key => $filter_val) {
    array_push($category_array, $filter_val);
}

$category_array_check = array_filter($category_array);
if (!empty($category_array_check)) {
    $category_array_value = array(
        array(
            'taxonomy' => 'totalteam_taxonomy',
            'field' => 'term_id',
            'terms' => $category_array
        ),
    );
} else {
    $category_array_value = '';
}

if (!empty($member_id)) {
    $member_array = explode(',', $member_id);
} else {
    $member_array = '';
}
$template_array = array('template-1', 'template-8', 'template-25');
$template_array2 = array('template-7');
$template_array3 = array('template-14');
$template_array4 = array('template-10');
$template_array5 = array('template-11');
$template_array6 = array('template-5');
$random_num = rand(111111111, 999999999);

if (isset($custom_expand_icon) && !empty($custom_expand_icon)) {
    $custom_expand_icon_final = $custom_expand_icon;
} else if (isset($custom_expand_icon) && $design_settings['member_expand_font_icon'] != 'custom') {
    if (in_array($template, array('template-11', 'template-12', 'template-26'))) {
        $custom_expand_icon_final = 'fa-plus-circle';
    }
} else if (!isset($custom_expand_icon) && in_array($template, array('template-11', 'template-12'))) {
    $custom_expand_icon_final = 'fa-plus-circle';
} else if (!isset($custom_expand_icon) && in_array($template, array('template-19', 'template-26'))) {
    $custom_expand_icon_final = 'fa-plus';
} else {
    $custom_expand_icon_final = 'fa-search';
}

$template_html_array = array('template-1', 'template-2', 'template-3', 'template-4', 'template-5', 'template-6');
if ($template_type == 'basic' && in_array($template, $template_html_array)) {
    include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/frontend/grid-template/template-1-14.php' );
}