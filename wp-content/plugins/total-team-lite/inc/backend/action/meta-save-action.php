<?php

$allowediframetags = array(
    'iframe' => array(
        'quotes' => array(),
        'br' => array(),
        'src' => array(),
        'width' => array(),
        'height' => array(),
        'frameborder' => array(),
        'style' => array(),
        'allowfullscreen' => array()
    ),
    'quotes' => array(),
);

$allowediframetags2 = array(
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
if (isset($_POST['theteam_general_settings'])) {
    $ttp_basic_bio_parameter_list = (array) $_POST['theteam_general_settings'];
    $ttp_basic_bio_parameter_temp = array();
    if (!emptY($ttp_basic_bio_parameter_list)) {
        foreach ($ttp_basic_bio_parameter_list as $key => $val) {
            if (is_array($val)) {
                $ttp_basic_bio_parameter_temp[$key] = array();
                foreach ($val as $k => $v) {
                    if (!is_array($v)) {
                        $ttp_basic_bio_parameter_temp[$key][$k] = sanitize_text_field($v);
                    } else {
                        $ttp_basic_bio_parameter_temp[$key][$k] = array_map('sanitize_text_field', $v);
                    }
                }
            } else {
                $ttp_basic_bio_parameter_temp[$key] = sanitize_text_field($val);
            }
        }
    }
    $ttp_basic_bio_parameter_temp_array = $ttp_basic_bio_parameter_temp;
    update_post_meta($post_id, 'theteam_general_settings', $ttp_basic_bio_parameter_temp_array);
}

//if (isset($_POST['theteam_general_settings'])) {
//    $theteam_general_settings = (array) $_POST['theteam_general_settings'];
//    // sanitize array
//    $theteam_general_settings_option = array_map('sanitize_text_field', $theteam_general_settings);
//    // save data
//    update_post_meta($post_id, 'theteam_general_settings', $theteam_general_settings_option);
//}

if (isset($_POST['ttp_description_seting'])) {
    $theteam_short_description_settings = (array) $_POST['ttp_description_seting'];
    // sanitize array
    $theteam_short_description_settings_temp = array();
    foreach ($theteam_short_description_settings as $key => $val) {
        if ($key == 'short_Description') {
            $theteam_short_description_settings_temp[$key] = wp_kses($val, $allowediframetags2);
        } else {
            $theteam_short_description_settings_temp[$key] = array_map('sanitize_text_field', $val);
        }
    }
    update_post_meta($post_id, 'ttp_description_seting', $theteam_short_description_settings_temp);
}

if (isset($_POST['theteam_thumbnail_grid_settings'])) {
    $theteam_thumbnail_grid_settings = (array) $_POST['theteam_thumbnail_grid_settings'];
    // sanitize array
    $theteam_thumbnail_grid_settings_option = array_map('sanitize_text_field', $theteam_thumbnail_grid_settings);
    // save data
    update_post_meta($post_id, 'theteam_thumbnail_grid_settings', $theteam_thumbnail_grid_settings_option);
}

if (isset($_POST['ttp_personal_quote_Settings'])) {
    $ttp_personal_quote_settings = (array) $_POST['ttp_personal_quote_Settings'];
    // sanitize array
    $ttp_personal_quote_settings_option = array_map('sanitize_text_field', $ttp_personal_quote_settings);
    // save data
    update_post_meta($post_id, 'ttp_personal_quote_Settings', $ttp_personal_quote_settings_option);
}

if (isset($_POST['ttp_external_link_parameter'])) {
    $ttp_external_link_parameter_list = (array) $_POST['ttp_external_link_parameter'];
    $ttp_external_link_parameter_temp = array();
    if (!emptY($ttp_external_link_parameter_list)) {
        foreach ($ttp_external_link_parameter_list as $key => $val) {
            if (is_array($val)) {
                $ttp_external_link_parameter_temp[$key] = array();
                foreach ($val as $k => $v) {
                    if (!is_array($v)) {
                        $ttp_external_link_parameter_temp[$key][$k] = sanitize_text_field($v);
                    } else {
                        $ttp_external_link_parameter_temp[$key][$k] = array_map('sanitize_text_field', $v);
                    }
                }
            } else {
                $ttp_external_link_parameter_temp[$key] = sanitize_text_field($val);
            }
        }
    }
    $ttp_external_link_parameter_temp_array = $ttp_external_link_parameter_temp;
    update_post_meta($post_id, 'ttp_external_link_parameter', $ttp_external_link_parameter_temp_array);
}

if (isset($_POST['external_image_setting'])) {
    $external_image_settings = (array) $_POST['external_image_setting'];
    // sanitize array
    $external_image_settings_option = array_map('sanitize_text_field', $external_image_settings);
    // save data
    update_post_meta($post_id, 'external_image_setting', $external_image_settings_option);
}

if (isset($_POST['ttp_skills_setting_parameters'])) {
    $ttp_skills_setting_parameters_list = (array) $_POST['ttp_skills_setting_parameters'];
    $ttp_skills_setting_parameters_temp = array();
    if (!empty($ttp_skills_setting_parameters_list)) {
        foreach ($ttp_skills_setting_parameters_list as $key => $val) {
            $ttp_skills_setting_parameters_temp[$key] = array();
            if (is_array($val)) {
                foreach ($val as $k => $v) {
                    if (!is_array($v)) {
                        $ttp_skills_setting_parameters_temp[$key][$k] = sanitize_text_field($v);
                    } else {
                        $ttp_skills_setting_parameters_temp[$key][$k] = array_map('sanitize_text_field', $v);
                    }
                }
            } else {
                $ttp_skills_setting_parameters_temp[$key] = sanitize_text_field($val);
            }
        }
    }
    $ttp_skills_setting_parameters_list_array = $ttp_skills_setting_parameters_temp;
    update_post_meta($post_id, 'ttp_skills_setting_parameters', $ttp_skills_setting_parameters_list_array);
}

if (isset($_POST['ttp_social_link_setting_parameters'])) {
    $ttp_social_link_setting_parameters_list = (array) $_POST['ttp_social_link_setting_parameters'];
    $ttp_social_link_setting_parameters_temp = array();
    if (!empty($ttp_social_link_setting_parameters_list)) {
        foreach ($ttp_social_link_setting_parameters_list as $key => $val) {
            $ttp_social_link_setting_parameters_temp[$key] = array();
            if (is_array($val)) {
                foreach ($val as $k => $v) {
                    if (!is_array($v)) {
                        $ttp_social_link_setting_parameters_temp[$key][$k] = sanitize_text_field($v);
                    } else {
                        $ttp_social_link_setting_parameters_temp[$key][$k] = array_map('sanitize_text_field', $v);
                    }
                }
            } else {
                $ttp_social_link_setting_parameters_temp[$key] = sanitize_text_field($val);
            }
        }
    }
    $ttp_social_link_setting_parameters_array = $ttp_social_link_setting_parameters_temp;
    update_post_meta($post_id, 'ttp_social_link_setting_parameters', $ttp_social_link_setting_parameters_array);
}
if (isset($_POST['ttp_video_settings'])) {
    $theteam_vide_iframe_settings = (array) $_POST['ttp_video_settings'];
    // sanitize array
    $theteam_vide_iframe_settings_temp = array();
    foreach ($theteam_vide_iframe_settings as $key => $val) {
        if ($key == 'video_iframe') {
            $theteam_vide_iframe_settings_temp[$key] = wp_kses($val, $allowediframetags);
        } else {
            $theteam_vide_iframe_settings_temp[$key] = array_map('sanitize_text_field', $val);
        }
    }
    update_post_meta($post_id, 'ttp_video_settings', $theteam_vide_iframe_settings_temp);
}

if (isset($_POST['ttp_google_map_settings'])) {
    $theteam_google_iframe_settings = (array) $_POST['ttp_google_map_settings'];
    // sanitize array
    $theteam_google_iframe_settings_temp = array();
    foreach ($theteam_google_iframe_settings as $key => $val) {
        if ($key == 'google_map_iframe') {
            $theteam_google_iframe_settings_temp[$key] = wp_kses($val, $allowediframetags);
        } else {
            $theteam_google_iframe_settings_temp[$key] = array_map('sanitize_text_field', $val);
        }
    }
    update_post_meta($post_id, 'ttp_google_map_settings', $theteam_google_iframe_settings_temp);
}
    