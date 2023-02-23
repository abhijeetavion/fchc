<?php
defined('ABSPATH') or die("No direct script allowed!!!");
$post_id = intval($post->ID);
$theteam_thumbnail_grid_settings = get_post_meta($post_id, 'theteam_thumbnail_grid_settings', true);
?>
<div class="ttp-default-setting-field-wrapper" id='ttp-basic-layout-setting'>
    <div class="ttp-feature-list-temp-holder" style="display:block;"></div>
    <div class="ttp-setting-tab-content-inner" id="content-ttp-setting-review-rating-input-type">
        <div class="ttp-input-field-wrap" id="ttp-background-field">
            <label>
                <?php echo __('Content: General', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <div class="ttp-input-field">
                <div class="ttp-input-field">
                    <input type="radio" name="theteam_thumbnail_grid_settings[ttp_team_thumbnail_content_default]" value="general" <?php
                    if ((isset($theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default']) && $theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default'] == 'general') || !isset($theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default'])) {
                        echo 'checked="checked"';
                    }
                    ?>/>
                </div>
            </div>
        </div>
        <div class="ttp-input-field-wrap">
            <label>
                <?php echo __('Content: Short Description', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <div class="ttp-input-field">
                <input type="radio" class="ttp-basic-color-call" name="theteam_thumbnail_grid_settings[ttp_team_thumbnail_content_default]" value="description" <?php
                if (isset($theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default']) && $theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default'] == 'description') {
                    echo 'checked="checked"';
                }
                ?>/>
            </div>
        </div>
        <div class="ttp-input-field-wrap" id="ttp-background-field">
            <label>
                <?php echo __('Content: Quote', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <div class="ttp-input-field">
                <div class="ttp-input-field">
                    <input type="radio" name="theteam_thumbnail_grid_settings[ttp_team_thumbnail_content_default]" value="quote" <?php
                    if (isset($theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default']) && $theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default'] == 'quote') {
                        echo 'checked="checked"';
                    }
                    ?>/>
                </div>
            </div>
        </div>
        <div class="ttp-input-field-wrap">
            <label>
                <?php echo __('Content: Skills', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <div class="ttp-input-field">
                <input type="radio" name="theteam_thumbnail_grid_settings[ttp_team_thumbnail_content_default]" value="skills" <?php
                if (isset($theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default']) && $theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default'] == 'skills') {
                    echo 'checked="checked"';
                }
                ?>/>
            </div>
        </div>
        <div class="ttp-input-field-wrap">
            <label>
                <?php echo __('Content: External Website Link', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <div class="ttp-input-field">
                <input type="radio" class="ttp-basic-color-call" name="theteam_thumbnail_grid_settings[ttp_team_thumbnail_content_default]" value="link" <?php
                if (isset($theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default']) && $theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default'] == 'link') {
                    echo 'checked="checked"';
                }
                ?>/>
            </div>
        </div>
        <!--<div class="ttp-input-field-wrap">
            <label>
        <?php //echo __('Content: Image', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <div class="ttp-input-field">
                <input type="radio" class="ttp-basic-color-call" name="theteam_thumbnail_grid_settings[ttp_team_thumbnail_content_default]" value="image" <?php
        //if (isset($theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default']) && $theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default'] == 'image') {
        //    echo 'checked="checked"';
        //}
        ?>/>
            </div>
        </div>-->
        <div class="ttp-input-field-wrap">
            <label>
                <?php echo __('Content: Video', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <div class="ttp-input-field">
                <input type="radio" class="ttp-basic-color-call" name="theteam_thumbnail_grid_settings[ttp_team_thumbnail_content_default]" value="video" <?php
                if (isset($theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default']) && $theteam_thumbnail_grid_settings['ttp_team_thumbnail_content_default'] == 'video') {
                    echo 'checked="checked"';
                }
                ?>/>
            </div>
            <p class="ttp-description"><?php echo __('Please select content to display. "Social links" & "General Details" except "Member Position" are optional.', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></p>
        </div>
    </div>
</div>