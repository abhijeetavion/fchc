<?php

defined('ABSPATH') or die("No script kiddies please!");

global $post;

//Defining Default Shortcode Attributes for frontend 
$layout_type = (isset($attr['layout'])) ? $attr['layout'] : 'grid-layout';
$ttp_lite_object = new TOTAL_TEAM_LITE();
if (isset($layout_type) && $layout_type == 'grid-layout') {
    include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/frontend/grid-layout-template.php');
} elseif (isset($layout_type) && $layout_type == 'carousal-layout') {
    include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/frontend/carousal-layout-template.php');
} elseif (isset($layout_type) && $layout_type == 'list-layout') {
    include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/frontend/list-layout-template.php');
} elseif (isset($layout_type) && $layout_type == 'table-layout') {
    include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/frontend/table-layout-template.php');
}
