<div class="ttp-input-field-wrap" style="display:none;">
    <label>
        <?php echo __('Grid Template Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_template_type" id="ttp-grid-element-template-type">
            <option value=""><?php _e('Select Template Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="basic"><?php _e('Basic Template', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="advanced"><?php _e('Advanced Template', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap" id="ttp-grid-layout-basic-template" style="display:block">
    <label>
        <?php echo __('Select Template', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown ttp-inner-layout-type" name="ttp_layout_type" id="ttp-grid-layout-basic-type">
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <option class="ttp-testim-temp" value="template-<?php echo $i; ?>" <?php echo $i == 1 ? 'selected="selected"' : ''; ?>><?php
                    _e('Template', TOTAL_TEAM_LITE_TEXT_DOMAIN);
                    echo " " . $i;
                    ?> </option>
            <?php } ?>
        </select>
    </div>
    <div class="ttp-template-demo">
        <?php for ($cnt = 1; $cnt <= 6; $cnt++) { ?>
            <div class="ttp-testim-common" <?php if ($cnt != 1) { ?>style="display:none;"<?php } ?> id="ttp-testim-template-<?php echo $cnt; ?>">
                <img src="<?php echo TOTAL_TEAM_LITE_IMAGE_DIR . 'grid/layout-' . $cnt . '.jpg' ?>" width="330" alt="<?php echo 'layout-' . $cnt; ?>"/>
            </div>
        <?php } ?> 
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Element To Show on Grid', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_per_row" id="ttp-grid-element-content">
            <option value="general" selected="selected"><?php _e('General', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="description"><?php _e('Description', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="none"><?php _e('None', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Element Per Row', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_per_row" id="ttp-grid-element-per-row">
            <option value="4" selected="selected"><?php _e('4', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="3"><?php _e('3', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="2"><?php _e('2', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="1"><?php _e('1', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Element Margin', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown ttp-inner-layout-type" name="ttp_element_margin" id="ttp-element-margin-value">
            <?php for ($i = 10; $i >= 0; $i--) { ?>
                <option class="ttp-testim-temp" value="<?php echo $i; ?>" <?php echo $i == 10 ? 'selected = "selected"' : ''; ?>>
                    <?php echo $i; ?> </option>
            <?php } ?>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Image Size', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_per_row" id="ttp-grid-element-image-size">
            <?php foreach ($all_available_image_size as $image_size_key => $image_size_val) { ?>
                <option value="<?php echo $image_size_val; ?>" <?php if ($image_size_val == 'totalteam-large') { ?>selected="selected"<?php } ?>><?php echo $image_size_val; ?></option>
            <?php } ?>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Additional Detail Display Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_per_row" id="ttp-element-additional-detail-display-type">
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
        <select class="ttp-dropdown" name="ttp_element _content_position" id="ttp-element-content-position">
            <option value="center"><?php _e('Center', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>