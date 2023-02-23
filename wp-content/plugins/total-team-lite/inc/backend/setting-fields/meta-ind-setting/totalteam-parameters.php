<?php
defined('ABSPATH') or die('Error');

$parameter_type = sanitize_text_field($_POST['parameter_type']);
if (isset($parameter_type) && $parameter_type == '2') {
    ?>
    <div class="ttp-template-skill-list">
        <div class="ttp-template-first-field-wrap clearfix">
            <label class="ttp-template-inner-label" for="ttp-skill-list-title">
                <?php echo __('Title', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>

            <input type="text" id="ttp-skill-list-title" class="ttp-skill-list-review-title" name="ttp_skills_setting_parameters[skill_list_id][er_skill_list_title]"/>
        </div>
        <div class="ttp-template-second-second-field-wrap clearfix">
            <label class="ttp-template-inner-label" for="ttp-skill-list-value"> 
                <?php echo __('Percent Value', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <input type="number" min="1" max="100" id="ttp-skill-list-value" class="ttp-skill-list-review-link" name="ttp_skills_setting_parameters[skill_list_id][er_skill_list_value]"/>
        </div>
        <div class="ttp-template-feature-action-wrap clearfix">
            <span class="er_remov_skill_field"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
            <span class="ttp-sortable-skill-field-section"><i class="fa fa-arrows" aria-hidden="true"></i></span>
        </div>
    </div>
<?php } else if (isset($parameter_type) && $parameter_type == '3') { ?>
    <div class="ttp-template-social-link-list">
        <div class="ttp-template-social-link-action-wrap clearfix">
            <span class="ttp-social-link-ind-header-text"><?php echo __('Social Site Link', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></span>
            <div class="ttp-template-social-link-action-inner-wrap">
                <span class="er_remov_social_link_field"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                <span class="ttp-sortable-social-link-field-section"><i class="fa fa-arrows" aria-hidden="true"></i></span>
                <span class="ttp-ind-social-link-toggle-icon"><i class="fa fa-sort-down"></i></span>
            </div>
        </div>
        <div class="ttp-social-link-item-settings" id="ttp-social-link-item-settings" style="display:none">
            <div class="ttp-template-social-link-type-wrap">
                <label class="ttp-template-inner-label" for="ttp-social-link-list-title">
                    <?php echo __('Social Link Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                </label>
                <div class="ttp-input-field">
                    <select id="ttp-social-link-list-type" class="ttp-social-link-list-review-title" name="ttp_social_link_setting_parameters[social_link_list_id][social_link_type]">
                        <option value="facebook"><?php echo __('Facebook', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="twitter"><?php echo __('Twitter', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="google-plus"><?php echo __('Google Plus', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="linkedin"><?php echo __('Linkedin', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="skype"><?php echo __('Skype', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="instagram"><?php echo __('Instagram', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="youtube"><?php echo __('Youtube', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="wordpress"><?php echo __('WordPress', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="digg"><?php echo __('Digg', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="reddit"><?php echo __('Reddit', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="pinterest"><?php echo __('Pinterest', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        <option value="custom"><?php echo __('Custom', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                    </select>
                </div>
                <div class="ttp-inner-social-icon-custom-image" style="display:none;">
                    <label class="ttp-template-inner-label" for="ttp-social-link-list-value"> 
                        <?php echo __('Custom Icon', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-input-field">
                        <input id="ttp-upload-custom-social-link-url" type="hidden" name="ttp_social_link_setting_parameters[social_link_list_id][custom_icon_image]"/>
                        <input id="ttp-upload-custom-social-link-image-button" type="button" class="image-button button-primary input-controller" value="<?php echo __('Upload Icon', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>"/>
                    </div>
                    <div class="ttp-input-field ttp-image-preview" style="display:none;">
                        <img src="<?php TOTAL_TEAM_LITE_IMAGE_DIR  . '/default.png'; ?>" height="20px" width="20px"/>
                        <div class="ttp-template-image-action-wrap clearfix">
                            <span class="ttp-remov-social-external-image"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ttp-template-social-link-wrap">
                <label class="ttp-template-inner-label" for="ttp-social-link-list-title">
                    <?php echo __('Social Link URL', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                </label>
                <div class="ttp-input-field">
                    <input id="ttp-social-link-list-title" type="text" class="ttp-social-link-list-review-title" name="ttp_social_link_setting_parameters[social_link_list_id][url]"/>
                </div>
            </div>
        </div>
        <input type="hidden" id="ttp-social-link-type-ind-header-value" name="ttp_social_link_setting_parameters[social_link_list_id][custom_social_link_type_header]" value="Facebook"/>
    </div>
<?php } else if (isset($parameter_type) && $parameter_type == '4') {
    ?>
    <div class="ttp-input-field-wrap ttp-sortable-general-info-field">
        <label>
            <?php echo __('Custom Field', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
        </label>
        <div class="ttp-input-field">
            <label>
                <?php echo __('Field Title', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <input type="text" id="ttp-general-bio-title" class="ttp-general-bio-title" name="theteam_general_settings[custom_bio_id][ttp_team_general_field_title]"/>
        </div>
        <div class="ttp-input-field">
            <label>
                <?php echo __('Field Value', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <input type="text" id="ttp-general-bio-title" class="ttp-general-bio-title" name="theteam_general_settings[custom_bio_id][ttp_team_general_field]"/>
        </div>
        <span class="ttp-sortable-general-inf-field-section"><i class="fa fa-arrows" aria-hidden="true"></i></span>
    </div>
<?php } ?>
