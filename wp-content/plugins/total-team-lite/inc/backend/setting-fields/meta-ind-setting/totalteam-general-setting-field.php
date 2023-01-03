<?php
defined('ABSPATH') or die("No direct script allowed!!!");
$post_id = intval($post->ID);
$ttp_general_settings = get_post_meta($post_id, 'theteam_general_settings', true);
$ttp_general_array = array();
?>
<div class="ttp-default-setting-tab-wrapper ttp-default-setting-field-wrapper clearfix" id='ttp-basic-layout-setting'>
    <div class="ttp-setting-tab-wrapper ttp-setting-member-tab-wrap">
        <div class="nav-tab-wrapper">     
            <a href="javascript:void(0)" id="ttp-setting-general" class="ttp-setting-tabs-trigger nav-tab ttp-active-tab"><?php _e('General', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></a>
            <a href="javascript:void(0)" id="ttp-setting-description" class="ttp-setting-tabs-trigger nav-tab"><?php _e('Description', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></a>
            <a href="javascript:void(0)" id="ttp-setting-skill" class="ttp-setting-tabs-trigger nav-tab"><?php _e('skill', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></a>
            <a href="javascript:void(0)" id="ttp-setting-social-link" class="ttp-setting-tabs-trigger nav-tab"><?php _e('Social Link', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></a>
        </div>
    </div>
    <div class="ttp-setting-tab-content" id="content-ttp-setting-general">
        <div class="ttp-default-setting-field-wrapper" id='ttp-basic-layout-setting'>
            <div class="ttp-setting-tab-content-inner" id="content-ttp-setting-general-input-type">
                <div class="ttp-input-field-wrap" id="ttp-background-field">
                    <label>
                        <?php echo __('Post/Position', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-input-field">
                        <input type="text" name="theteam_general_settings[ttp_team_position_post]" value="<?php
                        if (isset($ttp_general_settings['ttp_team_position_post']) && !empty($ttp_general_settings['ttp_team_position_post'])) {
                            echo esc_attr($ttp_general_settings['ttp_team_position_post']);
                        }
                        ?>"/>
                    </div>
                </div>
                <div class="ttp-input-field-wrap-sortable" id="ttp-sortable-general-info-field-wrap">
                    <?php
                    if (!empty($ttp_general_settings)) {
                        foreach ($ttp_general_settings as $key => $val) {
                            if (!($key === 'ttp_gen_infcount' || $key === 'ttp_team_position_post')) {
                                $ttp_general_array[$key] = $key;
                                if ($key == 1) {
                                    ?>
                                    <div class="ttp-input-field-wrap ttp-sortable-general-info-field">
                                        <label>
                                            <?php echo __('Address', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                        </label>
                                        <div class="ttp-input-field">
                                            <input type="text" name="theteam_general_settings[1][ttp_team_general_field]" value="<?php
                                            if (isset($ttp_general_settings[1]['ttp_team_general_field']) && !empty($ttp_general_settings[1]['ttp_team_general_field'])) {
                                                echo esc_attr($ttp_general_settings[1]['ttp_team_general_field']);
                                            }
                                            ?>"/>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($key == 2) {
                                    ?>
                                    <div class="ttp-input-field-wrap ttp-sortable-general-info-field">
                                        <label>
                                            <?php echo __('Telephone', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                        </label>
                                        <div class="ttp-input-field">
                                            <input type="text" name="theteam_general_settings[2][ttp_team_general_field]" value="<?php
                                            if (isset($ttp_general_settings[2]['ttp_team_general_field']) && !empty($ttp_general_settings[2]['ttp_team_general_field'])) {
                                                echo esc_attr($ttp_general_settings[2]['ttp_team_general_field']);
                                            }
                                            ?>"/>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($key == 3) {
                                    ?>
                                    <div class="ttp-input-field-wrap ttp-sortable-general-info-field">
                                        <label>
                                            <?php echo __('Email Address', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                        </label>
                                        <div class="ttp-input-field">
                                            <input type="email" class="ttp-basic-color-call" name="theteam_general_settings[3][ttp_team_general_field]" value="<?php
                                            if (isset($ttp_general_settings[3]['ttp_team_general_field']) && !empty($ttp_general_settings[3]['ttp_team_general_field'])) {
                                                echo esc_attr($ttp_general_settings[3]['ttp_team_general_field']);
                                            }
                                            ?>"/>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($key > 3) {
                                    ?>
                                    <div class="ttp-input-field-wrap ttp-sortable-general-info-field">
                                        <label>
                                            <?php echo isset($ttp_general_settings[$key]['ttp_team_general_field_title']) && !empty($ttp_general_settings[$key]['ttp_team_general_field_title']) ? esc_attr($ttp_general_settings[$key]['ttp_team_general_field_title']) : __('Custom Field', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                        </label>
                                        <div class="ttp-input-field">
                                            <label>
                                                <?php echo __('Field Title', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                            </label>
                                            <input type="text" id="ttp-general-bio-title" class="ttp-general-bio-title" name="theteam_general_settings[<?php echo $key; ?>][ttp_team_general_field_title]" value="<?php echo isset($ttp_general_settings[$key]['ttp_team_general_field_title']) && !empty($ttp_general_settings[$key]['ttp_team_general_field_title']) ? esc_attr($ttp_general_settings[$key]['ttp_team_general_field_title']) : ''; ?>"/>
                                        </div>
                                        <div class="ttp-input-field">
                                            <label>
                                                <?php echo __('Field Value', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                                            </label>
                                            <input type="text" class="ttp-basic-color-call" name="theteam_general_settings[<?php echo $key; ?>][ttp_team_general_field]" value="<?php
                                            if (isset($ttp_general_settings[$key]['ttp_team_general_field']) && !empty($ttp_general_settings[$key]['ttp_team_general_field'])) {
                                                echo esc_attr($ttp_general_settings[$key]['ttp_team_general_field']);
                                            }
                                            ?>"/>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        }
                    } else if (isset($ttp_general_settings) && empty($ttp_general_settings)) {
                        ?>
                        <div class="ttp-input-field-wrap ttp-sortable-general-info-field">
                            <label>
                                <?php echo __('Address', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                            </label>
                            <div class="ttp-input-field">
                                <input type="text" name="theteam_general_settings[1][ttp_team_general_field]" value="<?php
                                if (isset($ttp_general_settings[1]['ttp_team_general_field']) && !empty($ttp_general_settings[1]['ttp_team_general_field'])) {
                                    echo esc_attr($ttp_general_settings[1]['ttp_team_general_field']);
                                }
                                ?>"/>
                            </div>
                        </div>
                        <div class="ttp-input-field-wrap ttp-sortable-general-info-field">
                            <label>
                                <?php echo __('Telephone', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                            </label>
                            <div class="ttp-input-field">
                                <input type="text" name="theteam_general_settings[2][ttp_team_general_field]" value="<?php
                                if (isset($ttp_general_settings[2]['ttp_team_general_field']) && !empty($ttp_general_settings[2]['ttp_team_general_field'])) {
                                    echo esc_attr($ttp_general_settings[2]['ttp_team_general_field']);
                                }
                                ?>"/>
                            </div>
                        </div>
                        <div class="ttp-input-field-wrap ttp-sortable-general-info-field">
                            <label>
                                <?php echo __('Email Address', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                            </label>
                            <div class="ttp-input-field">
                                <input type="email" class="ttp-basic-color-call" name="theteam_general_settings[3][ttp_team_general_field]" value="<?php
                                if (isset($ttp_general_settings[3]['ttp_team_general_field']) && !empty($ttp_general_settings[3]['ttp_team_general_field'])) {
                                    echo esc_attr($ttp_general_settings[3]['ttp_team_general_field']);
                                }
                                ?>"/>
                            </div>
                        </div>
                        <?php
                    }
                    $general_info_maxkey = !empty($ttp_general_array) ? array_keys($ttp_general_array, max($ttp_general_array)) : array('0' => '3');
                    ?>
                </div>
                <div class="ttp-general-bio-list-temp-holder" style="display:none"></div>
                <div class="ttp-input-field" style="display:none;">
                    <input class="ttp-add-general-bio-button button button-secondary" data-parameter-type="5" type="button" value="<?php echo __('Add Custom Field', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>" />
                </div>
            </div>
            <input type="hidden" name="theteam_general_settings[ttp_gen_infcount]" value="<?php echo esc_attr($general_info_maxkey[0]); ?>" class="ttp-general-info-count"/>
        </div>
    </div>
    <div class="ttp-setting-tab-content" id="content-ttp-setting-description" style="display:none">
        <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/meta-ind-setting/totalteam-short-description-settings.php'); ?>
    </div>
    <div class="ttp-setting-tab-content" id="content-ttp-setting-skill" style="display:none">
        <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/meta-ind-setting/totalteam-skills-settings.php'); ?>
    </div>
    
    <div class="ttp-setting-tab-content" id="content-ttp-setting-social-link" style="display:none" >
        <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/meta-ind-setting/totalteam-social-link-settings.php'); ?>
    </div>
</div> 