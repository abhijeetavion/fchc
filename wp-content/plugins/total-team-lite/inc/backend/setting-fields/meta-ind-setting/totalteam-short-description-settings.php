<?php
defined('ABSPATH') or die("No direct script allowed!!!");

$post_id = intval($post->ID);
$ttp_description_seting = get_post_meta($post_id, 'ttp_description_seting', true);
?>
<div class="ttp-default-setting-field-wrapper" id='ttp-basic-layout-setting'>
    <div class="ttp-setting-tab-content-inner" id="content-ttp-setting-review-rating-input-type">
        <div class="ttp-input-field-wrap">
            <label>
                <?php _e('Short Description', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            </label>
            <div class="ttp-input-field">
                <textarea name="ttp_description_seting[short_Description]"><?php
                    if (isset($ttp_description_seting['short_Description']) && !empty($ttp_description_seting['short_Description'])) {
                        echo $ttp_description_seting['short_Description'];
                    }
                    ?>
                </textarea>
            </div>
        </div>
    </div>
</div>