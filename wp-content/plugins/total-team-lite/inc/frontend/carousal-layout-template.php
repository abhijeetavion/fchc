<?php

defined('ABSPATH') or die("No script kiddies please!");

$category_array = array();
$member_array = '';

$display_type = (isset($attr['display_type'])) ? $attr['display_type'] : 'all';
$member_id = (isset($attr['member_id'])) ? $attr['member_id'] : '';
$category_id = (isset($attr['category_id'])) ? $attr['category_id'] : '';
$team_number = (isset($attr['team_number'])) ? $attr['team_number'] : '99';
$custom_layout = (isset($attr['custom_layout'])) ? $attr['custom_layout'] : 'default';
$element_per_row = (isset($attr['element_per_row'])) ? $attr['element_per_row'] : '2';
$show_hide_control = (isset($attr['paginate'])) ? $attr['paginate'] : '';
$pause_duration = (isset($attr['auto_pause_duration'])) ? $attr['auto_pause_duration'] : 'false';
$speed = (isset($attr['auto_speed'])) ? $attr['auto_speed'] : '1000';
$auto = (isset($attr['auto'])) ? $attr['auto'] : 'false';
$additional_detail_type = (isset($attr['additional_detail_type'])) && $attr['additional_detail_type'] !== 'slide-out' ? $attr['additional_detail_type'] : 'popup';
$content_position = (isset($attr['content_position'])) && ($attr['content_position'] !== 'right' ||$attr['content_position'] !== 'left') ? esc_attr($attr['content_position']) : 'center';
$template = (isset($attr['template'])) ? $attr['template'] : 'template-1';

$order = (isset($attr['order'])) ? $attr['order'] : 'DESC';
$orderby = (isset($attr['orderby'])) ? $attr['orderby'] : 'date';

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

$random_num = rand(111111111, 999999999);
$template_html_array = array('template-1', 'template-2', 'template-3');
if (in_array($template, $template_html_array)) {
    $custom_expand_icon_final = isset($custom_expand_icon) && !empty($custom_expand_icon) ? $custom_expand_icon : 'fa-search';
    include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/frontend/caraousal-template/' . $template . '.php' );
}
