<?php
defined('ABSPATH') or die("No script kiddies please!");

/**
  Plugin name: Total Team Lite
  Plugin URI: https://accesspressthemes.com/wordpress-plugins/total-team-lite/
  Description: Responsive Team Manager / Showcase Plugin for WordPress
  Version: 1.1.3
  Author: AccessPress Themes
  Author URI: http://accesspressthemes.com
  Text Domain: total-team-lite
  Domain Path: /languages/
 */
if (!defined('TOTAL_TEAM_LITE_VERSION')) {
    define('TOTAL_TEAM_LITE_VERSION', '1.1.3');
}

if (!defined('TOTAL_TEAM_LITE_IMAGE_DIR')) {
    define('TOTAL_TEAM_LITE_IMAGE_DIR', plugin_dir_url(__FILE__) . 'assets/images/');
}

if (!defined('TOTAL_TEAM_LITE_JS_DIR')) {
    define('TOTAL_TEAM_LITE_JS_DIR', plugin_dir_url(__FILE__) . 'assets/js/');
}

if (!defined('TOTAL_TEAM_LITE_CSS_DIR')) {
    define('TOTAL_TEAM_LITE_CSS_DIR', plugin_dir_url(__FILE__) . 'assets/css/');
}

if (!defined('TOTAL_TEAM_LITE_TEXT_DOMAIN')) {
    define('TOTAL_TEAM_LITE_TEXT_DOMAIN', 'total-team-lite');
}

if (!defined('TOTAL_TEAM_LITE_LANG_DIR')) {
    define('TOTAL_TEAM_LITE_LANG_DIR', basename(dirname(__FILE__)) . '/languages/');
}

if (!defined('TT_DEF_SETTINGS')) {
    define('TT_DEF_SETTINGS', 'tt-df-settings');
}
if (!defined('TOTAL_TEAM_LITE_FILE_ROOT_DIR')) {
    define('TOTAL_TEAM_LITE_FILE_ROOT_DIR', plugin_dir_path(__FILE__));
}
include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/includes/totalteam-widget.php');

/** Declaring Class for Plugin */
if (!class_exists('TOTAL_TEAM_LITE')) {

    class TOTAL_TEAM_LITE {

        var $tt_def_settings;

        function __construct() {
            $this->tt_def_settings = get_option(TT_DEF_SETTINGS);
            add_action('init', array($this, 'totalteam_plugin_text_domain'));
            register_activation_hook(__FILE__, array($this, 'totalteam_plugin_activation'));
            add_action('admin_menu', array($this, 'totalteam_add_plugin_shortcode_generator_menu'));
            add_action('admin_menu', array($this, 'totalteam_add_plugin_how_to_use_menu'));
            add_action('admin_menu', array($this, 'totalteam_add_plugin_about_us_menu'));
            add_action('init', array($this, 'totalteam_register_post_type'));
            add_action('init', array($this, 'totalteam_register_post_type_taxonomy'));
            add_action('admin_enqueue_scripts', array($this, 'totalteam_enqueue_admin_script'));
            add_action('wp_enqueue_scripts', array($this, 'totalteam_enqueue_frontend_script'));
            add_action('wp_ajax_totalteam_pull_data_contents', array($this, 'totalteam_pull_data_contents'));
            add_action('add_meta_boxes', array($this, 'totalteam_add_option_general_metabox'));
            add_action('save_post', array($this, 'totalteam_meta_general_setting_save'));
            add_filter('manage_edit-totalteam_columns', array($this, 'totalteam_my_cpt_image_columns'));
            add_action('manage_totalteam_posts_custom_column', array($this, 'totalteam_my_cpt_image_column'), 10, 2);
            add_filter('manage_edit-totalteam_columns', array($this, 'totalteam_my_cpt_id_columns'));
            add_action('manage_totalteam_posts_custom_column', array($this, 'totalteam_my_cpt_id_column'), 10, 2);
            add_filter('manage_edit-totalteam_columns', array($this, 'totalteam_my_cpt_shortcode_columns'));
            add_action('manage_totalteam_posts_custom_column', array($this, 'totalteam_my_cpt_shortcode_column'), 10, 2);
            add_filter("manage_edit-totalteam_taxonomy_columns", array($this, 'totalteam_custom_column_header'), 10);
            add_action("manage_totalteam_taxonomy_custom_column", array($this, 'totalteam_custom_column_content'), 10, 3);
            add_shortcode('totalteam', array($this, 'totalteam_shortcode'));
            add_shortcode('title', array($this, 'totalteam_title_shortcode'));
            add_shortcode('subtitle', array($this, 'totalteam_subtitle_shortcode'));
            add_shortcode('member_skills', array($this, 'totalteam_member_skill_shortcode'));
            add_shortcode('member_basic_info', array($this, 'totalteam_member_basic_info_shortcode'));
            add_action('admin_footer', array($this, 'totalteam_inner_shortcode_popup_content'));
            add_action('admin_footer', array($this, 'totalteam_main_shortcode_popup_content'));
            add_action('media_buttons', array($this, 'totalteam_inner_shortcode_popup_content_doing_media_buttons'));
            add_action('media_buttons', array($this, 'totalteam_main_shortcode_popup_content_doing_media_buttons'));
            add_action('after_setup_theme', array($this, 'totalteam_check_thumbnail_support'), 99);
            add_action('init', array($this, 'totalteam_add_new_image_size'));
            add_action('widgets_init', array($this, 'totalteam_register_widget'));
            add_filter('upload_mimes', array($this, 'totalteam_upload_svg'));
            include_once('inc/tt-block/tt-block-init.php');
        }

        /**
         * Function to load plugin text domain for translation 
         */
        function totalteam_plugin_text_domain() {
            load_plugin_textdomain('total-team', false, TOTAL_TEAM_LITE_LANG_DIR);
        }

        /**
         * Implement default setting on plugin activation 
         */
        function totalteam_plugin_activation() {
            include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/includes/activation.php' );
            if (is_plugin_active('total-team/total-team.php')) {
                wp_die(__('You need to deactivate Total Team premium plugin in order to activate Total Team Lite plugin. Please deactivate premium first.', TOTAL_TEAM_PRO_TEXT_DOMAIN));
            }
        }

        /**
         * Register post type Total Team for the plugin
         */
        function totalteam_register_post_type() {
            include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/includes/register-post.php' );
            register_post_type('Total Team', $args);
        }

        function totalteam_register_post_type_taxonomy() {
            include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/includes/register-tax.php' );
            register_taxonomy('totalteam_taxonomy', 'totalteam', $args);
        }

        function totalteam_add_plugin_shortcode_generator_menu() {
            add_submenu_page(
                    'edit.php?post_type=totalteam', __('Shortcode Generator', TOTAL_TEAM_LITE_TEXT_DOMAIN), __('Shortcode Generator', TOTAL_TEAM_LITE_TEXT_DOMAIN), 'manage_options', 'totalteam-shortcode-generator', array($this, 'totalteam_plugin_shortcode_generator_callback')
            );
        }

        function totalteam_plugin_shortcode_generator_callback() {
            include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/shortcode-generator-primary.php' );
        }

        /**
         * Add how to use for the plugin
         */
        function totalteam_add_plugin_how_to_use_menu() {
            add_submenu_page(
                    'edit.php?post_type=totalteam', __('How to Use', TOTAL_TEAM_LITE_TEXT_DOMAIN), __('How To Use', TOTAL_TEAM_LITE_TEXT_DOMAIN), 'manage_options', 'totalteam-how-to', array($this, 'totalteam_how_to_callback')
            );
        }

        function totalteam_how_to_callback() {
            include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/how-to-use.php' );
        }

        function totalteam_add_plugin_about_us_menu() {
            add_submenu_page(
                    'edit.php?post_type=totalteam', __('More WorPress Stuffs', TOTAL_TEAM_LITE_TEXT_DOMAIN), __('More WorPress Stuffs', TOTAL_TEAM_LITE_TEXT_DOMAIN), 'manage_options', 'totalteam-about-us', array($this, 'totalteam_about_us_callback')
            );
        }

        function totalteam_about_us_callback() {
            include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/about.php' );
        }

        /*
         * General Setting Metabox
         */

        function totalteam_add_option_general_metabox() {
            add_meta_box('totalteam_general_settings_option', __('Content Setting', TOTAL_TEAM_LITE_TEXT_DOMAIN), array($this, 'totalteam_add_option_general_metabox_callback'), 'totalteam', 'normal', 'default');
        }

        /*
         * General Setting Metabox callback
         */

        function totalteam_add_option_general_metabox_callback($post) {
            wp_nonce_field(basename(__FILE__), 'totalteam_settings_nonce');
            $totalteam_stored_meta_setting = get_post_meta($post->ID);
            include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/meta-ind-setting/totalteam-general-setting-field.php');
        }

        /*
         * General Setting Metabox save action
         */

        function totalteam_meta_general_setting_save($post_id) {
            // Checks save status
            $is_autosave = wp_is_post_autosave($post_id);
            $is_revision = wp_is_post_revision($post_id);
            $is_valid_nonce = ( isset($_POST['totalteam_settings_nonce']) && wp_verify_nonce($_POST['totalteam_settings_nonce'], basename(__FILE__)) ) ? 'true' : 'false';
            // Exits script depending on save status
            if ($is_autosave || $is_revision || !$is_valid_nonce) {
                return;
            } else {
                include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/action/meta-save-action.php');
            }
        }

        //Column For Image
        function totalteam_my_cpt_image_columns($columns) {
            $columns["image"] = __('Member Image', TOTAL_TEAM_LITE_TEXT_DOMAIN);
            return $columns;
        }

        function totalteam_my_cpt_image_column($colname, $cptid) {
            if ($colname == 'image') {
                if (has_post_thumbnail($cptid)) {
                    ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($cptid), 'thumbnail'); ?>
                    <span id="ttp-custom-column">
                        <img src="<?php echo $image[0]; ?>" width="100" height="100" alt="<?php _e('Total Team Member Image', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>"/>
                    </span>
                    <?php
                } else {
                    echo '-';
                }
            }
        }

        //Column For Image
        function totalteam_my_cpt_id_columns($columns) {
            $columns["id"] = __('Member ID', TOTAL_TEAM_LITE_TEXT_DOMAIN);
            return $columns;
        }

        function totalteam_my_cpt_id_column($colname, $cptid) {
            if ($colname == 'id') {
                ?>
                <span id="ttp-custom-column">
                    <?php echo $cptid; ?>
                </span>
                <?php
            }
        }

        //Column For Image
        function totalteam_my_cpt_shortcode_columns($columns) {
            $columns["shortcode"] = __('Quick Shortcode', TOTAL_TEAM_LITE_TEXT_DOMAIN);
            return $columns;
        }

        function totalteam_my_cpt_shortcode_column($colname, $cptid) {
            if ($colname == 'shortcode') {
                ?>
                <span id="ttp-custom-column" style="display:block; display: block; background: #eee; padding: 5px; border: 1px dashed #ddd; width: 95%; font-weight: 500;">
                    <?php echo "[totalteam layout='grid-layout' display_type='member-id' member_id='" . $cptid . "']"; ?>
                </span>
                <?php
            }
        }

        // To show the column header
        function totalteam_custom_column_header($columns) {
            $columns['ID'] = 'Category ID';
            return $columns;
        }

        // To show the column value
        function totalteam_custom_column_content($value, $column_name, $tax_id) {
            return $tax_id;
        }

        /*
         * Enqueue Admin Scripts JS and css files
         */

        function totalteam_enqueue_admin_script() {
            $totalteam_admin_ajax_nonce = wp_create_nonce('totalteam-admin-ajax-nonce');
            $totalteam_admin_ajax_object = array('ajax_url' => admin_url('admin-ajax.php'), 'ajax_nonce' => $totalteam_admin_ajax_nonce);
            wp_enqueue_script('totalteam-admin-script', TOTAL_TEAM_LITE_JS_DIR . 'backend.js', array('jquery', 'wp-color-picker', 'jquery-ui-sortable', 'jquery-ui-core', 'jquery-ui-slider'), TOTAL_TEAM_LITE_VERSION, false);
            wp_localize_script('totalteam-admin-script', 'totalteam_backend_js_params', $totalteam_admin_ajax_object);
            wp_enqueue_style('totalteam-admin-css', TOTAL_TEAM_LITE_CSS_DIR . 'back-end.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-fontawesome', TOTAL_TEAM_LITE_CSS_DIR . 'font-awesome/font-awesome.min.css', TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('wp-color-picker');
            wp_enqueue_media();
            wp_enqueue_script('totalteam-colorpicker-alpha', TOTAL_TEAM_LITE_JS_DIR . 'wp-color-picker-alpha.js', array('wp-color-picker'), TOTAL_TEAM_LITE_VERSION);
        }

        function totalteam_enqueue_frontend_script() {
            $totalteam_frontend_ajax_nonce = wp_create_nonce('the-team-frontend-ajax-nonce');
            $totalteam_frontend_ajax_object = array('ajax_url' => admin_url('admin-ajax.php'), 'ajax_nonce' => $totalteam_frontend_ajax_nonce);
            wp_enqueue_script('totalteam-frontend-script', TOTAL_TEAM_LITE_JS_DIR . 'frontend.js', array('jquery', 'jquery-ui-slider'), TOTAL_TEAM_LITE_VERSION, false);
            wp_localize_script('totalteam-frontend-script', 'totalteam_frontend_js_params', $totalteam_frontend_ajax_object);
            wp_enqueue_style('totalteam-fontawesome', TOTAL_TEAM_LITE_CSS_DIR . 'font-awesome/font-awesome.min.css', TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-frontend-style', TOTAL_TEAM_LITE_CSS_DIR . 'front-end.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-slider-frontend-style', TOTAL_TEAM_LITE_CSS_DIR . 'jquery-ui.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-bar-style-frontend-jquery', TOTAL_TEAM_LITE_JS_DIR . 'simple-skillbar.js', array('jquery', 'totalteam-frontend-script'), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-frontend-caraousal', TOTAL_TEAM_LITE_JS_DIR . 'owl.carousel.js', array('jquery', 'totalteam-frontend-script'), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-bar-style-frontend-animate-caraousal', TOTAL_TEAM_LITE_JS_DIR . 'owl.animate.js', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-bar-style-frontend-autoplay-caraousal', TOTAL_TEAM_LITE_JS_DIR . 'owl.autoplay.js', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-bar-style-frontend-navigation-caraousal', TOTAL_TEAM_LITE_JS_DIR . 'owl.navigation.js', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-animation-style', TOTAL_TEAM_LITE_CSS_DIR . 'animate.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-slider-frontend-carousal-style', TOTAL_TEAM_LITE_CSS_DIR . 'owl.carousel.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-slider-frontend-carousal-default-style', TOTAL_TEAM_LITE_CSS_DIR . 'owl.theme.default.min.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-frontend-custom-scrollbar', TOTAL_TEAM_LITE_JS_DIR . 'jquery.mCustomScrollbar.concat.min.js', array('jquery', 'totalteam-frontend-script'), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-frontend-scrollbar-style', TOTAL_TEAM_LITE_CSS_DIR . 'jquery.mCustomScrollbar.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-frontend-custom-gallery', TOTAL_TEAM_LITE_JS_DIR . 'jquery.colorbox.js', array('jquery', 'totalteam-frontend-script'), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-frontend-gallery-style', TOTAL_TEAM_LITE_CSS_DIR . 'colorbox.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('dashicons');
            $current = 'current';
            $total = 'total';
            $totalteam_frontend_colorbox_object = array('current' => sprintf(__('image {%1$s} of {%2$s}', TOTAL_TEAM_LITE_VERSION), $current, $total),
                'previous' => __('previous', TOTAL_TEAM_LITE_VERSION),
                'next' => __('next', TOTAL_TEAM_LITE_VERSION),
                'close' => __('close', TOTAL_TEAM_LITE_VERSION),
                'xhrError' => __('This content failed to load.', TOTAL_TEAM_LITE_VERSION),
                'imgError' => __('This image failed to load.', TOTAL_TEAM_LITE_VERSION)
            );
            wp_localize_script('totalteam-frontend-custom-gallery', 'totalteam_frontend_colorbox_params', $totalteam_frontend_colorbox_object);
        }

        function totalteam_add_new_image_size() {
            add_image_size('totalteam-medium', 300, 300, true);
            add_image_size('totalteam-large', 700, 700, true);
        }

        function totalteam_check_thumbnail_support() {
            add_theme_support('post-thumbnails');
        }

        function totalteam_title_shortcode($atts, $content = null) {
            return '<span class="ttp-content-open-header">' . $content . '</span>';
        }

        function totalteam_subtitle_shortcode($atts, $content = null) {
            return '<span class="ttp-content-open-subheader">' . $content . '</span>';
        }

        /** Member Skill Shortcode */
        function totalteam_member_skill_shortcode($atts) {
            global $post;
            $ttp_skills_setting_parameters = get_post_meta($post->ID, 'ttp_skills_setting_parameters', true);
            if (!empty($ttp_skills_setting_parameters)) {
                $skills = "";
                $skills .= '<div class="ttp-content-skill-list-wrap">';
                foreach ($ttp_skills_setting_parameters as $key => $val) {
                    if ($key != 'erp_count') {
                        $skills .= '<div class = "ttp-content-skill-list">';
                        $skills .= '<div class = "ttp-content-skill-list-top clearfix">';
                        $skills .= '<span class = "ttp-skill-label">' . esc_attr($val['er_skill_list_title']) . '</span>';
                        $skills .= '<span class = "ttp-skill-value">' . esc_attr($val['er_skill_list_value']) . '%</span>';
                        $skills .= '</div>';
                        $skills .= '<div class = "ttp-bar-skill-title" data-width = "' . esc_attr($val['er_skill_list_value']) . '" >';
                        $skills .= '</div>';
                        $skills .= '</div>';
                    }
                }
                $skills .= '</div>';
                return $skills;
            } else {
                return null;
            }
        }

        /** Function to pull Member Social Links */
        function totalteam_member_social_links_lists($post_id) {
            global $post;
            $ttp_social_link_setting_parameters = get_post_meta($post_id, 'ttp_social_link_setting_parameters', true);
            if (!empty($ttp_social_link_setting_parameters)) {
                $social_links = "";
                foreach ($ttp_social_link_setting_parameters as $key => $val) {
                    if ($key != 'erp_count') {
                        switch ($val['social_link_type']) {
                            case 'custom':
                                $social_links .= '<span class = "ttp-social-link-custom">';
                                $social_links .= '<a target="_blank" href="' . esc_url($val["url"]) . '"><img width="25px" height="25px" src="' . esc_url($val["custom_icon_image"]) . '"/></a>';
                                $social_links .= '</span>';
                                break;
                            default:
                                $social_links .= '<span class = "ttp-social-link-list-default">';
                                $social_links .= '<a target="_blank" href="' . esc_url($val["url"]) . '"><i class="fa fa-' . esc_attr($val["social_link_type"]) . '" aria-hidden="true"></i></a>';
                                $social_links .= '</span>';
                                break;
                        }
                    }
                }
                return $social_links;
            } else {
                return null;
            }
        }

        /** Function to pull Member Basic Info */
        function totalteam_member_basic_info_shortcode($atts) {
            global $post;
            $team_member_general_detail = get_post_meta($post->ID, 'theteam_general_settings', true);
            if (!empty($team_member_general_detail)) {
                $basic_info = "";
                $basic_info .= '<div class = "ttp-secondary-content">';
                foreach ($team_member_general_detail as $key => $val) {
                    if ($key != 'ttp_gen_infcount' && !empty($key)) {
                        if ($key == 1) {
                            if (isset($val['ttp_team_general_field']) && !empty($val['ttp_team_general_field'])):
                                $basic_info .= '<span class="ttp-thumb-address">' . esc_attr($val['ttp_team_general_field']) . '</span>';
                            endif;
                        }else if ($key == 2) {
                            if (isset($val['ttp_team_general_field']) && !empty($val['ttp_team_general_field'])):
                                $basic_info .= '<a href="tel:' . esc_attr($val['ttp_team_general_field']) . '"><span class="ttp-thumb-telephone">' . esc_attr($val['ttp_team_general_field']) . '</span></a>';
                            endif;
                        }else if ($key == 3) {
                            if (isset($val['ttp_team_general_field']) && !empty($val['ttp_team_general_field'])):
                                $basic_info .= '<a href="mailto:' . esc_attr($val['ttp_team_general_field']) . '"><span class="ttp-thumb-emailaddress">' . esc_attr($val['ttp_team_general_field']) . '</span></a>';
                            endif;
                        }else if (intval($key) && $key > 3) {
                            if (isset($val['ttp_team_general_field']) && !empty($val['ttp_team_general_field'])):
                                $basic_info .= '<span class="ttp-thumb-custom-field"><i class="fa fa-mobile"></i><span>' . esc_attr($val['ttp_team_general_field']) . '</span></span>';
                            endif;
                        }
                    }
                }
                $basic_info .= '</div>';
                return $basic_info;
            } else {
                return null;
            }
        }

        /** Function to Grid list thumb type filter */
        function totalteam_member_grid_list_thumb_type_filter($post_id, $thumb_content) {
            global $post;
            $team_grid_content_default = get_post_meta($post_id, 'theteam_thumbnail_grid_settings', true);
            $team_member_general_detail = get_post_meta($post_id, 'theteam_general_settings', true);
            $team_description_setting = get_post_meta($post_id, 'ttp_description_seting', true);
            if (!empty($thumb_content)) {
                $thumbnail_info = "";
                switch ($thumb_content) {
                    case 'general':
                        if (!empty($team_member_general_detail)) {
                            foreach ($team_member_general_detail as $key => $val) {
                                if ($key != 'ttp_gen_infcount' && !empty($key)) {
                                    if ($key == 1) {
                                        if (isset($val['ttp_team_general_field']) && !empty($val['ttp_team_general_field'])):
                                            $thumbnail_info .= '<span class="ttp-thumb-address">' . esc_attr($val['ttp_team_general_field']) . '</span>';
                                        endif;
                                    }else if ($key == 2) {
                                        if (isset($val['ttp_team_general_field']) && !empty($val['ttp_team_general_field'])):
                                            $thumbnail_info .= '<a href="tel:' . esc_attr($val['ttp_team_general_field']) . '"><span class="ttp-thumb-telephone">' . esc_attr($val['ttp_team_general_field']) . '</span></a>';
                                        endif;
                                    }else if ($key == 3) {
                                        if (isset($val['ttp_team_general_field']) && !empty($val['ttp_team_general_field'])):
                                            $thumbnail_info .= '<a href="mailto:' . esc_attr($val['ttp_team_general_field']) . '"><span class="ttp-thumb-emailaddress">' . esc_attr($val['ttp_team_general_field']) . '</span></a>';
                                        endif;
                                    }
                                }
                            }
                        }
                        break;
                    case 'description':
                        if (!empty($team_description_setting['short_Description'])) {
                            $thumb_description_text = strip_tags($team_description_setting['short_Description']);
                            if (strlen($thumb_description_text) > 300) {
                                // truncate string
                                $thumb_description_text_cut = substr($thumb_description_text, 0, 300);
                                // make sure it ends in a word so assassinate doesn't become ass...
                                $thumb_description_text = substr($thumb_description_text_cut, 0, strrpos($thumb_description_text_cut, ' ')) . '...';
                            }
                            $thumbnail_info .= '<span class="ttp-thumb-description">' . $thumb_description_text . '</span>';
                        }
                        break;
                    case 'none':
                        break;
                    default:
                        break;
                }
                return $thumbnail_info;
            } else {
                return null;
            }
        }

        /**
         * Add Custom Link field using ajax
         */
        function totalteam_pull_data_contents() {
            if (isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'totalteam-admin-ajax-nonce')) {
                include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/meta-ind-setting/totalteam-parameters.php' );
                die();
            }
        }

        function totalteam_get_random_token($length) {
            $token = "";
            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
            $codeAlphabet .= "0123456789";
            $max = strlen($codeAlphabet); // edited

            for ($i = 0; $i < $length; $i++) {
                $token .= $codeAlphabet[random_int(0, $max - 1)];
            }
            return $token;
        }

        function totalteam_upload_svg($mimes) {
            $mimes['svg'] = 'image/svg+xml';
            return $mimes;
        }

        /*
         * function for adding shortcode of a plugin
         */

        function totalteam_shortcode($attr) {
            ob_start();
            include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/frontend/frontend-filter.php' );
            $html = ob_get_contents();
            ob_get_clean();
            return $html;
        }

        //Function to add button for content inserter in member content
        function totalteam_inner_shortcode_popup_content() {
            include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/content-inserter.php' );
        }

        // Secondary shortcode button for team shortcode on page/post
        function totalteam_inner_shortcode_popup_content_doing_media_buttons() {
            global $post_type;
            if ($post_type == 'totalteam'):
                echo '<a href = "#TB_inline?width=200px&height=100px&inlineId=totalteam-inner-custom-shortcode-popup" class = "button thickbox wp_doin_media_link" id = "totalteam_inner_add_shortcode" title = "' . __("Total Team Content Inserter", TOTAL_TEAM_LITE_TEXT_DOMAIN) . '"><span class="ttp-dash-icon-testim"></span>' . __("Insert Content", TOTAL_TEAM_LITE_TEXT_DOMAIN) . '</a>';
            endif;
        }

        //Secondary shortcode inner content
        function totalteam_main_shortcode_popup_content() {
            include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/shortcode-generator-secondary.php' );
        }

        /**
         * Secondary shortcode inner content
         */
        function totalteam_main_shortcode_popup_content_doing_media_buttons() {
            global $post_type;
            if ($post_type !== 'totalteam'):
                echo '<a href = "#TB_inline?width=200px&height=100px&inlineId=totalteam-main-custom-shortcode-popup" class = "ttp-popup-shortcode-inserter-sec button thickbox wp_doin_media_link" id = "totalteam_main_add_shortcode" title = "' . __("Total Team Shorcode Inserter", TOTAL_TEAM_LITE_TEXT_DOMAIN) . '"><span class="ttp-dash-icon-testim"></span>' . __("Total Team Shortcode", TOTAL_TEAM_LITE_TEXT_DOMAIN) . '</a>';
            endif;
        }

        /**
         * Function to pull all the terms taxonomy
         * @global type $post_type
         * @param type $id
         * @param type $filter_taxonomy
         * @return string
         */
        function totalteam_terms($id, $filter_taxonomy) {
            global $post_type;
            $post_terms = '';
            $terms_array = get_the_terms($id, $filter_taxonomy);
            if (!empty($terms_array)):
                foreach ($terms_array as $terms_key => $terms_val):
                    $post_terms .= $terms_val->slug . ' ';
                endforeach;
            else:
                $post_terms = '';
            endif;
            return $post_terms;
        }

        /**
         * Register Total Team Widget 
         */
        function totalteam_register_widget() {
            register_widget('Totalteamlite_Widget');
        }

        /**
         * Making font ready to enqueue
         */
        function totalteam_convert_font_ready($font_family) {
            if ($font_family) {
                $fonts_final = str_replace(' ', '+', $font_family);
                return $fonts_final;
            } else {
                return null;
            }
        }

    }

    /* Ends */
    $TOTAL_TEAM_LITE_OBJECT = new TOTAL_TEAM_LITE();
}