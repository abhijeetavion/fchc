<?php
defined('ABSPATH') or die("No direct script allowed!!!");

$post_id = intval($post->ID);
$ttp_skills_setting_parameters = get_post_meta($post_id, 'ttp_skills_setting_parameters', true);
?>
<div class="ttp-default-setting-field-wrapper" id='ttp-skills-setting-wrap'>
    <div class="basic-admin-field-general-wrap">
        <div class="ttp-setting-tab-content-inner" id="content-ttp-admin-setting-review-parameter">
            <div class="ttp-input-field-wrap" id="ttp-review-parameter-skill">
                <div class="ttp-input-field-title">
                    <label>
                        <?php _e('Skills', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                </div>
                <div class="ttp-skill-list-temp-holder" style="display:none"></div>
                <div class="ttp-input-field">
                    <input class="ttp-add-skill-button button button-secondary" data-parameter-type="2" type="button" value="<?php _e('Add Skill', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>" />
                </div>
                <div class="ttp-sortable-skill-list-field">
                    <?php
                    $skillkeyArray = array();
                    if (!empty($ttp_skills_setting_parameters)) {
                        foreach ($ttp_skills_setting_parameters as $key => $val) {
                            if ($key != 'erp_count') {
                                $skillkeyArray[$key] = $key;
                                ?>
                                <div class="ttp-template-skill-list">
                                    <div class="ttp-template-first-field-wrap clearfix">
                                        <label class="ttp-template-inner-label" for="ttp-skill-list-title">
                                            <?php echo __('Title', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                        </label>
                                        <input id="ttp-skill-list-title" type="text" class="ttp-skill-list-review-title" name="ttp_skills_setting_parameters[<?php echo esc_attr($key); ?>][er_skill_list_title]" value="<?php echo esc_attr($val['er_skill_list_title']); ?>"/>
                                    </div>
                                    <div class="ttp-template-second-second-field-wrap clearfix">
                                        <label class="ttp-template-inner-label" for="ttp-skill-list-value"> 
                                            <?php echo __('Percent Value', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                        </label>
                                        <input type="number" min="1" max="100" id="ttp-skill-list-value" class="ttp-skill-list-review-link" name="ttp_skills_setting_parameters[<?php echo esc_attr($key); ?>][er_skill_list_value]" value="<?php echo esc_attr($val['er_skill_list_value']); ?>"/>
                                    </div>
                                    <div class="ttp-template-first-field-wrap clearfix">
                                        <span class="er_remov_skill_field"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                        <span class="ttp-sortable-skill-field-section"><i class="fa fa-arrows" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    $max_skillArraykey = !empty($skillkeyArray) ? array_keys($skillkeyArray, max($skillkeyArray)) : array('0' => '0');
                    ?>
                </div>
            </div>
            <input type="hidden" name="ttp_skills_setting_parameters[erp_count]" value="<?php echo esc_attr($max_skillArraykey[0]); ?>" class="ttp-skill-count"/>
        </div>
    </div>
</div>