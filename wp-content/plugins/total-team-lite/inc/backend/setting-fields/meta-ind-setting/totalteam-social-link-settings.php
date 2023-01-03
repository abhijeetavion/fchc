<?php
defined('ABSPATH') or die("No direct script allowed!!!");

$post_id = intval($post->ID);
$ttp_social_link_setting_parameters = get_post_meta($post_id, 'ttp_social_link_setting_parameters', true);
?>

<div class="ttp-default-setting-field-wrapper" id='ttp-social-link-setting-wrap'>
    <div class="basic-admin-field-general-wrap">
        <div class="ttp-setting-tab-content-inner" id="content-ttp-social-link-parameter">
            <div class="ttp-input-field-wrap" id="ttp-review-parameter-social-link">
                <div class="ttp-input-field-title">
                    <label>
                        <?php echo __('Social Links', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                </div>
                <div class="ttp-social-link-list-temp-holder" style="display:none"></div>
                <div class="ttp-input-field">
                    <input class="ttp-add-social-link-button button button-secondary" data-parameter-type="3" type="button" value="<?php echo __('Add Social Link', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>" />
                </div>
                <div class="ttp-sortable-social-link-list-field">
                    <?php
                    $social_link_keyArray = array();
                    if (!empty($ttp_social_link_setting_parameters)) {
                        foreach ($ttp_social_link_setting_parameters as $key => $val) {
                            if ($key != 'erp_count') {
                                $social_link_keyArray[$key] = $key;
                                ?>
                                <div class="ttp-template-social-link-list">
                                    <div class="ttp-template-social-link-action-wrap clearfix">
                                        <span class="ttp-social-link-ind-header-text"> 
                                            <?php echo (isset($val['custom_social_link_type_header'])) ? esc_attr($val['custom_social_link_type_header']) : __('Social Link Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                        </span>
                                        <div class="ttp-template-social-link-action-inner-wrap">
                                            <span class="er_remov_social_link_field"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                            <span class="ttp-sortable-social-link-field-section"><i class="fa fa-arrows" aria-hidden="true"></i></span>
                                            <span class="ttp-ind-social-link-toggle-icon"><i class="fa fa-sort-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="ttp-social-link-item-settings" id="ttp-social-link-item-settings" style="display:none">
                                        <div class="ttp-template-social-link-type-wrap">
                                            <label class="ttp-template-inner-label" for="ttp-social-link-list-title" class="">
                                                <?php echo __('Social Link Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                            </label>
                                            <div class="ttp-input-field">
                                                <select id="ttp-social-link-list-type" class="ttp-social-link-list-review-title" name="ttp_social_link_setting_parameters[<?php echo esc_attr($key); ?>][social_link_type]">
                                                    <option value="facebook" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'facebook') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Facebook', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="twitter" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'twitter') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Twitter', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="google-plus" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'google-plus') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Google Plus', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="linkedin" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'linkedin') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Linkedin', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="skype" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'skype') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Skype', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="instagram" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'instagram') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Instagram', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="youtube" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'youtube') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Youtube', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="wordpress" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'wordpress') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('WordPress', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="digg" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'digg') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Digg', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="reddit" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'reddit') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Reddit', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="pinterest" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'pinterest') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Pinterest', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                    <option value="custom" <?php
                                                    if (isset($val['social_link_type']) && $val['social_link_type'] == 'custom') {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>><?php echo __('Custom', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="ttp-inner-social-icon-custom-image" <?php if (isset($val['social_link_type']) && $val['social_link_type'] == 'custom') { ?>style="display:block;" <?php } else { ?>style="display:none;"<?php } ?>>
                                            <label class="ttp-template-inner-label" for="ttp-social-link-list-value"> 
                                                <?php echo __('Custom Icon', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                            </label>
                                            <div class="ttp-input-field">
                                                <input id="ttp-upload-custom-social-link-url" type="hidden" name="ttp_social_link_setting_parameters[<?php echo esc_attr($key); ?>][custom_icon_image]" value="<?php
                                                if (isset($val['custom_icon_image']) && !empty($val['custom_icon_image'])) {
                                                    echo esc_url($val['custom_icon_image']);
                                                }
                                                ?>"/>
                                                <input id="ttp-upload-custom-social-link-image-button" type="button" class="image-button button-primary input-controller"  value="<?php echo __('Upload Icon', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>"/>
                                            </div>
                                            <div class="ttp-input-field ttp-image-preview" <?php if (isset($val['custom_icon_image']) && !empty($val['custom_icon_image'])) {
                                                    ?>style="display:block;"<?php } else {
                                                    ?>style="display:none;"<?php } ?>>
                                                <img src="<?php
                                                if (isset($val['custom_icon_image']) && !empty($val['custom_icon_image'])) {
                                                    echo esc_url($val['custom_icon_image']);
                                                } else {
                                                    TOTAL_TEAM_LITE_IMAGE_DIR . '/default.png';
                                                }
                                                ?>" height="20px" width="20px"/>
                                                <div class="ttp-template-image-action-wrap clearfix">
                                                    <span class="ttp-remov-social-external-image"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ttp-template-social-link-wrap">
                                            <label class="ttp-template-inner-label" for="ttp-social-link-list-title">
                                                <?php echo __('Social Link URL', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                            </label>
                                            <div class="ttp-input-field">
                                                <input id="ttp-social-link-list-title" type="text" class="ttp-social-link-list-review-title" name="ttp_social_link_setting_parameters[<?php echo esc_attr($key); ?>][url]" value="<?php echo esc_url($val['url']); ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="ttp-social-link-type-ind-header-value" name="ttp_social_link_setting_parameters[<?php echo esc_attr($key); ?>][custom_social_link_type_header]" value="<?php echo isset($val['custom_social_link_type_header']) ? esc_attr($val['custom_social_link_type_header']) : ''; ?>"/>
                                </div>
                                <?php
                            }
                        }
                    }
                    $social_link_maxkey = !empty($social_link_keyArray) ? array_keys($social_link_keyArray, max($social_link_keyArray)) : array('0' => '0');
                    ?>
                </div>
            </div>
            <input type="hidden" name="ttp_social_link_setting_parameters[erp_count]" value="<?php echo esc_attr($social_link_maxkey[0]); ?>" class="ttp-social-link-count"/>
        </div>
    </div>
</div>