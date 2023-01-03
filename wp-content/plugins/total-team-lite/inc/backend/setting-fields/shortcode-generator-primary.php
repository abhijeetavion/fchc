<?php
defined('ABSPATH') or die('No script kiddies please!');

$all_available_image_size = get_intermediate_image_sizes();
?>
<div class="ttp-wrapper er-clear">
    <div class="ttp-header-sec clearfix" <?php if (isset($_GET['page']) && ($_GET['page'] == 'totalteam-shortcode-generator')) { ?>style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>     
        <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/includes/header.php'); ?> 
        <span class="ttp-tab-title">
            <h3><?php echo __('Shortcode Generator', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></h3>
        </span>
    </div>
    <div class="ttp-inner-wrapper" id="poststuff">
        <div id="post-body-full" class="metabox-holder columns-2">
            <div id="post-body-content">
                <div class="postbox">
                    <div class="ttp-shortcode-generator-setting-wrapper clearfix" id="totalteam-main-custom-shortcode-popup" <?php if (isset($_GET['page']) && ($_GET['page'] == 'totalteam-shortcode-generator')) { ?>style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
                        <span class="ttp-inner-header-description" <?php if (isset($_GET['page']) && ($_GET['page'] == 'totalteam-shortcode-generator')) { ?>style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
                            <p><?php echo __('From here, you can create shortcode and use the generated shortcode anywhere either posts/pages. You can also generate shortcode from page/post editor.', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></p>
                        </span>
                        <div class="ttp-shortcode-param-inner-wrap">
                            <div class="ttp-input-field-wrap">
                                <label>
                                    <?php echo __('Layout Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                </label>
                                <div class="ttp-input-field">
                                    <select name="team_layout_type" id="ttp-team-member-layout-type" class="ttp-dropdown">
                                        <option value=""><?php _e('Select Layout', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
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
                               echo 'style="display:none;width:100%;"';
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
                            <span>
                                <a href="javascript:void(0)">
                                    <input data-shortcode-type="<?php echo isset($_GET['page']) && ($_GET['page'] == 'totalteam-shortcode-generator') ? '1' : '2'; ?>" class="button button-seconday" id="ttp-shortcode-cancel-button" type="button" value="<?php _e('Cancel', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>" />
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ttp-input-field-wrap" <?php if (isset($_GET['page']) && ($_GET['page'] == 'totalteam-shortcode-generator')) { ?>style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
                    <label>
                        <?php echo __('Generated Shortcode', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-input-field">
                        <textarea name="ttp_generated_shortcode" id="ttp-generated-shortcode" readonly="readonly" style="width: 100%; height:150px"></textarea>
                    </div>
                    <p class="ttp-description"><?php _e('Click in the textarea to copy the shortcode generated.', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></p>
                </div>
                <div data-shortcode-type="<?php echo isset($_GET['page']) && ($_GET['page'] == 'totalteam-shortcode-generator') ? '1' : '2'; ?>" class="ttp-shortcode-overlay" style="display:none;"></div>
                <div id="ttp-shortcode-copied-text" style="display:none;"><?php _e('Shortcode Copied to Clipboard.', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="apsl-postbox-container-1" class="apsl-postbox-container-1">
    <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/sidebar.php'); ?>
</div>
</div>

