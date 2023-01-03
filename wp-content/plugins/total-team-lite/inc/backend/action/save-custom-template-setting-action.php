<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<?php

global $wpdb;
$table_name = $wpdb->prefix . "ttp_custom_design_template_table";
$allowedposttags = array(
    'a' => array(
        'href' => array(),
        'title' => array()),
    'br' => array(),
    'p' => array(
        'style' => array()),
    'hr' => array(),
    'abbr' => array(
        'title' => array()),
    'b' => array(),
    'ul' => array(),
    'li' => array(),
    'ol' => array(),
    'h1' => array(
        'style' => array()),
    'h2' => array(
        'style' => array()),
    'h3' => array(
        'style' => array()),
    'h4' => array(
        'style' => array()),
    'h5' => array(
        'style' => array()),
    'h6' => array(
        'style' => array()),
    'span' => array(
        'style' => array()),
    'blockquote' => array(
        'cite' => array()),
    'cite' => array(),
    'code' => array(),
    'del' => array(
        'datetime' => array()),
    'em' => array(),
    'i' => array(),
    'q' => array(
        'cite' => array()),
    'strike' => array(),
    'strong' => array(),
);

$ttp_custom_design_template_name = $_POST['ttp_custom_design_template_name'];
$_POST = array_map('stripslashes_deep', $_POST);

/**
 * get the popup id if the action is edit
 */
$ttp_custom_template_id = (isset($_POST['ttp_id'])) ? $_POST['ttp_id'] : '';

/**
 * check id the form submission for custom design template page
 */
//Pushing all values into array for saving 
foreach ($_POST as $key => $val) {
    if ($key == 'ttp_custom_template_setting') {
        $$key = $val;
        //var_dump($ttp_custom_template_setting);
    } else {
        $$key = sanitize_text_field($val);
    }
}

$custom_design_template_settings_array = array();
if (isset($ttp_custom_template_setting) && !empty($ttp_custom_template_setting)) {
    foreach ($ttp_custom_template_setting as $key => $val) {
        $custom_design_template_settings_array[$key] = sanitize_text_field($val);
    }
}

/**
 * update the custom design template details
 */
if ($ttp_custom_template_id != '') {
    $update = $wpdb->update(
            $table_name, array(
        'title' => $ttp_custom_design_template_name,
        'template_settings' => maybe_serialize($custom_design_template_settings_array)
            ), array(
        'id' => $ttp_custom_template_id
            )
    );

    if ($update) {//if update success
        wp_redirect(admin_url() . 'edit.php?post_type=totalteam&page=totalteam-custom-template&action=edit&ttp-id=' . $ttp_custom_template_id . '&message=3');
    } else {
        wp_redirect(admin_url() . 'edit.php?post_type=totalteam&page=totalteam-custom-template&action=edit&ttp-id=' . $ttp_custom_template_id . '&message=4');
    }
} else {
    /**
     * insert the custom design template details
     */
    $insert = $wpdb->insert(
            $table_name, array(
        'title' => $ttp_custom_design_template_name,
        'template_settings' => maybe_serialize($custom_design_template_settings_array),
            )
    );

    if ($insert) { //if insert success
        $ttp_custom_template_id = $wpdb->insert_id;
        wp_redirect(admin_url() . 'edit.php?post_type=totalteam&page=totalteam-custom-template&action=edit&ttp-id=' . $ttp_custom_template_id . '&message=1');
    } else {
        wp_redirect(admin_url() . 'admin.php?post_type=totalteam&page=totalteam-custom-template&ttp-id=' . $ttp_custom_template_id . '&message=insert-fail');
    }
}
// end