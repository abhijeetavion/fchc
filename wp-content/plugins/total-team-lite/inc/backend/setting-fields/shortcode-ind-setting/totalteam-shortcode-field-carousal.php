<div class="ttp-input-field-wrap" id="ttp-grid-layout-basic-template">
    <label>
        <?php echo __('Select Template', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown ttp-inner-layout-type" name="ttp_layout_type" id="ttp-carousal-layout-basic-type">
            <?php for ($i = 1; $i <= 3; $i++) { ?>
                <option class="ttp-testim-temp" value="template-<?php echo $i; ?>" <?php echo $i == 1 ? 'selected="selected"' : ''; ?>><?php
                    _e('Template', TOTAL_TEAM_LITE_TEXT_DOMAIN);
                    echo " " . $i;
                    ?> </option>
            <?php } ?>
        </select>
    </div>
    <div class="ttp-template-demo">
        <?php for ($cnt = 1; $cnt <= 3; $cnt++) { ?>
            <div class="ttp-testim-common" <?php if ($cnt != 1) { ?>style="display:none;"<?php } ?> id="ttp-testim-template-<?php echo $cnt; ?>">
                <img src="<?php echo TOTAL_TEAM_LITE_IMAGE_DIR . 'carousel/layout-' . $cnt . '.jpg' ?>" width="330" alt="<?php echo 'layout-' . $cnt; ?>"/>
            </div>
        <?php } ?> 
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Element To Show on Grid', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_per_row" id="ttp-carousal-element-content">
            <option value="general" selected="selected"><?php _e('General', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="description"><?php _e('Description', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="none"><?php _e('None', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Element Per Carousal', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <input type="number" name="slider_pause_duration" id="ttp-carousal-element-number" value="3" />
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Auto Slide', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <label>
            <input id="ttp-carousal-options-auto" type="checkbox" name="ttp_carousal_option_auto" value="true" />
            <?php _e('True/False', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
        </label>
    </div>
    <p class="ttp-description">
        <?php _e('If checked, auto slide will be implemented.', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </p>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Show/Hide Pagination', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <label>
            <input id="ttp-carousal-options-paginate-dot" type="checkbox" name="ttp_carousal_option_auto" value="true" />
            <?php _e('True/False', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
        </label>
    </div>
    <p class="ttp-description">
        <?php _e('If checked, pagination will be shown.', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </p>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Carousal Auto Slide Speed', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <input id="ttp-carousal-options-speed" type="number" name="ttp_carousal_slider_speed" value="1000" />
    </div>
    <p class="ttp-description">
        <?php _e('Speed of Auto Slider(in milisecond). Default is 1000.', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </p>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Autoplay Pause Duration', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <input type="number" name="slider_pause_duration" id="ttp-carousal-pause-duration" value="5000" />
    </div>
    <p class="ttp-description">
        <?php _e('If auto slide enabled, slider pause duration(in millisecond).Default is 5000. ', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </p>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Additional Detail Display Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_per_row" id="ttp-carousal-element-additional-detail-display-type">
            <option value="popup"><?php _e('Popup', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="none"><?php _e('None', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Popup Content Position', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_thumbnail_element_per_row" id="ttp-carousal-popup-content-position">
            <option value="center"><?php _e('Center', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
