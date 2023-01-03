<?php
defined('ABSPATH') or die('No script kiddies please!');
$all_available_image_size = get_intermediate_image_sizes();
?>
<div class="ttp-shortcode-generator-setting-wrapper clearfix" id="totalteam-main-custom-shortcode-popup" style="display:none;">
    <div class="ttp-shortcode-param-inner-wrap">
        <div class="ttp-input-field-wrap">
            <label>
                <?php echo __('Layout Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <div class="ttp-input-field">
                <select name="team_layout_type" id="ttp-team-member-layout-type" class="ttp-dropdown">
                    <option value="grid-layout"><?php _e('Select Layout', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                    <option value="grid-layout"><?php _e('Grid Layout', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                    <option value="list-layout"><?php _e('List Layout', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                    <option value="carousal-layout"><?php _e('Carousal Layout', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                </select>
            </div>
        </div>
        <div class="ttp-shortcode-content-outer-content <?php
        if (isset($_GET['page']) && ($_GET['page'] == 'totalteam-shortcode-generator')) {
            echo 'ttp-shortcode-content-outer-content-popup';
        }
        ?>" id="ttp-layout-type-content-general-settings" <?php
             if (isset($_GET['page']) && ($_GET['page'] == 'totalteam-shortcode-generator')) {
                 echo 'style="display:none;width:40%;"';
             } else {
                 echo 'style="display:none;';
             }
             ?>>
            <div class="ttp-shortcode-content-layout-type-general-content" id="ttp-layout-general-layout">
                <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/shortcode-ind-setting/totalteam-shortcode-field-general.php'); ?>
            </div>
            <div class="ttp-shortcode-content-layout-type-content" id="ttp-layout-type-content-grid-layout">
                <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/shortcode-ind-setting/totalteam-shortcode-field-grid.php'); ?>
            </div>
            <div class="ttp-shortcode-content-layout-type-content" id="ttp-layout-type-content-carousal-layout" style="display:none;">
                <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/shortcode-ind-setting/totalteam-shortcode-field-carousal.php'); ?>
            </div>
            <div class="ttp-shortcode-content-layout-type-content" id="ttp-layout-type-content-list-layout" style="display:none;">
                <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/shortcode-ind-setting/totalteam-shortcode-field-list.php'); ?>
            </div>
            <div class="ttp-shortcode-generate-button-wrap">
                <span>
                    <input data-shortcode-type="<?php echo isset($_GET['page']) && ($_GET['page'] == 'totalteam-shortcode-generator') ? '1' : '2'; ?>" class="button-primary ttp-custom-template-generate-button" type="button" name="ttp_custom_design_template_save_settings" value="<?php _e('Insert Shortcode', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>" />
                </span>
            </div>
        </div>
    </div>
</div>
