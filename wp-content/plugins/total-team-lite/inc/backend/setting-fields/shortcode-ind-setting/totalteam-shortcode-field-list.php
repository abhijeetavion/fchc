<div class="ttp-input-field-wrap" id="ttp-grid-layout-basic-template">
    <label>
        <?php echo __('Select Template', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown ttp-inner-layout-type" name="ttp_layout_type" id="ttp-list-layout-basic-type">
            <?php for ($i = 1; $i <= 2; $i++) { ?>
                <option class="ttp-testim-temp" value="template-<?php echo $i; ?>" <?php echo $i == 1 ? 'selected="selected"' : ''; ?>><?php
                    _e('Template', TOTAL_TEAM_LITE_TEXT_DOMAIN);
                    echo " " . $i;
                    ?> </option>
            <?php } ?>
        </select>
    </div>
    <div class="ttp-template-demo">
        <?php for ($cnt = 1; $cnt <= 2; $cnt++) { ?>
            <div class="ttp-testim-common" <?php if ($cnt != 1) { ?>style="display:none;"<?php } ?> id="ttp-testim-template-<?php echo $cnt; ?>">
                <img src="<?php echo TOTAL_TEAM_LITE_IMAGE_DIR . 'list/layout-' . $cnt . '.jpg' ?>" width="330" alt="<?php echo 'layout-' . $cnt; ?>"/>
            </div>
        <?php } ?> 
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Element To Show on Grid', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_per_row" id="ttp-list-element-content">
            <option value="general" selected="selected"><?php _e('General', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="description"><?php _e('Description', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="none"><?php _e('None', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Element Margin', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <input type="number" name="ttp_list_element_margin" id="ttp-list-element-margin-value" value="2"/>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Additional Detail Display Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_list_additional-detail-display-type" id="ttp-list-additional-detail-display-type">
            <option value="popup" selected="selected"><?php _e('Popup', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="none"><?php _e('None', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Popup Content Position', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_list_element_per_row" id="ttp-list-element-additional-content-position">
            <option value="center"><?php _e('Center', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>