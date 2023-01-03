<?php
$font_array = array();
if (isset($design_settings['quote_font_family']) && $design_settings['quote_font_family'] != "") {
    $fonts_final = $ttp_pro_object->totalteam_convert_font_ready($design_settings['quote_font_family']);
    array_push($font_array, $fonts_final);
}
if (isset($design_settings['dynamic_title_font_family']) && $design_settings['dynamic_title_font_family'] != "") {
    $fonts_final = $ttp_pro_object->totalteam_convert_font_ready($design_settings['dynamic_title_font_family']);
    array_push($font_array, $fonts_final);
}
if (isset($design_settings['dynamic_subtitle_font_family']) && $design_settings['dynamic_subtitle_font_family'] != "") {
    $fonts_final = $ttp_pro_object->totalteam_convert_font_ready($design_settings['dynamic_subtitle_font_family']);
    array_push($font_array, $fonts_final);
}
if (isset($design_settings['member_title_font_family']) && $design_settings['member_title_font_family'] != "") {
    $fonts_final = $ttp_pro_object->totalteam_convert_font_ready($design_settings['member_title_font_family']);
    array_push($font_array, $fonts_final);
}
if (isset($design_settings['member_position_font_family']) && $design_settings['member_position_font_family'] != "") {
    $fonts_final = $ttp_pro_object->totalteam_convert_font_ready($design_settings['member_position_font_family']);
    array_push($font_array, $fonts_final);
}
if (isset($design_settings['basic_info_font_family']) && $design_settings['basic_info_font_family'] != "") {
    $fonts_final = $ttp_pro_object->totalteam_convert_font_ready($design_settings['basic_info_font_family']);
    array_push($font_array, $fonts_final);
}
if (isset($design_settings['link_font_family']) && $design_settings['link_font_family'] != "") {
    $fonts_final = $ttp_pro_object->totalteam_convert_font_ready($design_settings['link_font_family']);
    array_push($font_array, $fonts_final);
}
if (isset($design_settings['description_font_family']) && $design_settings['description_font_family'] != "") {
    $fonts_final = $ttp_pro_object->totalteam_convert_font_ready($design_settings['description_font_family']);
    array_push($font_array, $fonts_final);
}
if (isset($design_settings['skill_bar_font_family']) && $design_settings['skill_bar_font_family'] != "") {
    $fonts_final = $ttp_pro_object->totalteam_convert_font_ready($design_settings['skill_bar_font_family']);
    array_push($font_array, $fonts_final);
}
$font_arr_val = implode("|", $font_array);
?>
<link rel='stylesheet' id='ttp-dynamic-title-google-fonts-style-css' href='//fonts.googleapis.com/css?family=<?php echo $font_arr_val; ?>' type='text/css' media='all' /> 

<style>
<?php if (!empty($design_settings['member_title_text_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> span.ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-grid-thumb-wrapper:hover .ttp-content-header
        {
            color:<?php echo esc_attr($design_settings['member_title_text_color']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_title_font_size']) && intval($design_settings['member_position_font_size'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> span.ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-primary-content .ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-grid-thumb-wrapper:hover .ttp-content-header
        {
    <?php echo intval($design_settings['member_title_font_size']) ? 'font-size:' . esc_attr($design_settings['member_title_font_size']) . 'px;' : ''; ?>
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_title_font_family']) && $design_settings['member_title_font_family'] != 'default'): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> span.ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-primary-content .ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-grid-thumb-wrapper:hover .ttp-content-header
        {
            font-family:<?php echo esc_attr($design_settings['member_title_font_family']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_position_text_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> span.ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-grid-thumb-wrapper:hover .ttp-thumb-position
        {
            color:<?php echo esc_attr($design_settings['member_position_text_color']); ?>;
        }
<?php endif; ?>
    
<?php if (!empty($design_settings['member_position_font_size']) && intval($design_settings['member_position_font_size'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> span.ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-primary-content .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-grid-thumb-wrapper:hover .ttp-thumb-position
        {
    <?php echo intval($design_settings['member_position_font_size']) ? 'font-size:' . esc_attr($design_settings['member_position_font_size']) . 'px;' : ''; ?>
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_position_font_family']) && $design_settings['member_position_font_family'] != 'default'): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> span.ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-primary-content .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-grid-thumb-wrapper:hover .ttp-thumb-position
        {
            font-family:<?php echo esc_attr($design_settings['member_position_font_family']); ?>;
        }
<?php endif; ?>
<?php
if (!empty($design_settings['member_layout_expand_bg_color'])):
    if (in_array($template, array('template-1', 'template-2'))) {
        ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-slide-out-click .fa,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-popup-click .fa{
                background:<?php echo esc_attr($design_settings['member_layout_expand_bg_color']); ?>;
            }
    <?php } else if ($template == 'template-29') {
        ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-slide-out-click,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-popup-click{
                background:<?php echo esc_attr($design_settings['member_layout_expand_bg_color']); ?>;
            }
    <?php }
    ?>
<?php endif; ?>
<?php
if (!empty($design_settings['member_layout_expand_icon_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-slide-out-click .fa,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-popup-click .fa{
            color:<?php echo esc_attr($design_settings['member_layout_expand_icon_color']); ?>;
        }
<?php endif; ?>   
<?php
if (!empty($design_settings['member_layout_border_color'])):
    if ($template == ('template-1')) {
        ?>        
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-1 .ttp-grid-thumb-wrapper .ttp-grid-image{
                border-top:5px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>;
            }
    <?php } else if ($template == 'template-7') {
        ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-primary-content .ttp-grid-image
            {
                border-bottom:3px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>;
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-primary-content .ttp-thumb-position{
                background:<?php echo esc_attr($design_settings['member_layout_border_color']); ?>;
            }
        <?php
    } else if ($template == 'template-8') {
        ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-8 .grid-row-wrapper .ttp-inner-whole-wrapper .ttp-grid-thumb-wrapper{
                border-top: 2px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>;
                border-bottom: 3px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>;
            }
    <?php } else if ($template == 'template-12') {
        ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-12 .ttp-expand-slide-out-click,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-12 .ttp-expand-popup-click{
                border-bottom: 3px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>;   
            }
    <?php }
    ?>
<?php endif; ?>
<?php if (!empty($design_settings['basic_info_content_text_Color'])): ?>        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-secondary-content .ttp-thumb-address,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-secondary-content .ttp-thumb-telephone,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-secondary-content .ttp-thumb-emailaddress,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-address,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-telephone,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-emailaddress
        {
            color:<?php echo esc_attr($design_settings['basic_info_content_text_Color']); ?>; 
        }
<?php endif; ?>
<?php if (!empty($design_settings['basic_info_font_size']) && intval($design_settings['basic_info_font_size'])): ?>      
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-secondary-content .ttp-thumb-address,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-secondary-content .ttp-thumb-telephone,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-secondary-content .ttp-thumb-emailaddress,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-address,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-telephone,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-emailaddress
        {
    <?php echo intval($design_settings['basic_info_font_size']) ? 'font-size:' . esc_attr($design_settings['basic_info_font_size']) . 'px;' : ''; ?>
        }
<?php endif; ?>
<?php if (!empty($design_settings['basic_info_font_family']) && $design_settings['basic_info_font_family'] != 'default'): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-secondary-content .ttp-thumb-address,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-secondary-content .ttp-thumb-telephone,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-secondary-content .ttp-thumb-emailaddress,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-address,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-telephone,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-emailaddress
        {
            font-family:<?php echo esc_attr($design_settings['basic_info_font_family']); ?>;
        }
<?php endif; ?>
    
<?php if (!empty($design_settings['basic_info_icon_bg_color'])) { ?>
    <?php if ($template == ('template-1')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-1 .ttp-thumb-address:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-1 .ttp-thumb-telephone:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-1 .ttp-thumb-emailaddress:before{
                background:<?php echo esc_attr($design_settings['basic_info_icon_bg_color']); ?>;   
            }
    <?php } else if ($template == ('template-3')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-thumb-address:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-thumb-telephone:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-thumb-emailaddress:before{
                background:<?php echo esc_attr($design_settings['basic_info_icon_bg_color']); ?>;   
            }
    <?php } else if ($template == ('template-7')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-thumb-address:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-thumb-telephone:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-thumb-emailaddress:before{
                background:<?php echo esc_attr($design_settings['basic_info_icon_bg_color']); ?>;   
            }
    <?php } else if ($template == ('template-10')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-10 .ttp-thumb-address:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-10 .ttp-thumb-telephone:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-10 .ttp-thumb-emailaddress:before{
                background:<?php echo esc_attr($design_settings['basic_info_icon_bg_color']); ?>;   
            }
    <?php } else if ($template == ('template-11')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-11 .ttp-thumb-address:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-11 .ttp-thumb-telephone:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-11 .ttp-thumb-emailaddress:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-11 .ttp-secondary-content .ttp-thumb-address,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-11 .ttp-secondary-content .ttp-thumb-telephone,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-11 .ttp-secondary-content .ttp-thumb-emailaddress{
                background:<?php echo esc_attr($design_settings['basic_info_icon_bg_color']); ?>;   
            }
    <?php } else if (in_array($template, array('template-12', 'template-14', 'template-15', 'template-16', 'template-17', 'template-18', 'template-20'))) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-address:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-telephone:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-emailaddress:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-address:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-telephone:before,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-emailaddress:before{
                background:<?php echo esc_attr($design_settings['basic_info_icon_bg_color']); ?>;   
            }
    <?php } ?>
<?php } ?>
<?php if (!empty($design_settings['basic_info_icon_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-address:before,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-telephone:before,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-emailaddress:before
        {
            color:<?php echo esc_attr($design_settings['basic_info_icon_color']); ?>; 
        }
<?php endif; ?>
<?php if (!empty($design_settings['basic_info_field_bg_color'])): ?>
    <?php if ($template == ('template-3')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-address,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-telephone,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-emailaddress
            {
                background:<?php echo esc_attr($design_settings['basic_info_field_bg_color']); ?>; 
            }
    <?php } else if ($template == ('template-3')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-address,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-telephone,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-emailaddress
            {
                background:<?php echo esc_attr($design_settings['basic_info_field_bg_color']); ?>; 
            }
    <?php } ?>
<?php endif; ?>
<?php if (!empty($design_settings['member_layout_overlay_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-grid-thumb-wrapper:hover .ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-grid-thumb-wrapper:hover .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-4 .ttp-grid-thumb-wrapper:hover .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-4 .ttp-grid-thumb-wrapper:hover .ttp-expand-popup-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-5 .ttp-grid-thumb-wrapper:hover .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-5 .ttp-grid-thumb-wrapper:hover .ttp-expand-popup-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-6 .ttp-grid-thumb-wrapper:hover .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-6 .ttp-grid-thumb-wrapper:hover .ttp-expand-popup-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-primary-content .ttp-inner-overlay,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-8 .ttp-grid-thumb-wrapper:hover .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-8 .ttp-grid-thumb-wrapper:hover .ttp-expand-popup-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-9 .ttp-grid-thumb-wrapper:hover,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-10 .ttp-grid-thumb-wrapper:hover .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-10 .ttp-grid-thumb-wrapper:hover .ttp-expand-popup-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-12 .ttp-grid-thumb-wrapper:hover .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-12 .ttp-grid-thumb-wrapper:hover .ttp-expand-popup-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-14 .ttp-inner-image-whole-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-16 .ttp-grid-thumb-wrapper .ttp-grid-image .ttp-expand-popup-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-16 .ttp-grid-thumb-wrapper .ttp-grid-image .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-21 .ttp-inner-whole-wrapper:hover .ttp-grid-image .ttp-expand-popup-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-21 .ttp-inner-whole-wrapper:hover .ttp-grid-image .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-24 .ttp-grid-image .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-24 .ttp-grid-image .ttp-expand-popup-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-27 .ttp-inner-whole-wrapper:hover .ttp-grid-image .ttp-expand-popup-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-27 .ttp-inner-whole-wrapper:hover .ttp-grid-image .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-29 .ttp-grid-thumb-wrapper:hover .ttp-expand-slide-out-click,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-29 .ttp-grid-thumb-wrapper:hover .ttp-expand-popup-click{
            background:<?php echo esc_attr($design_settings['member_layout_overlay_color']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_layout_secondary_overlay_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-9 .ttp-grid-thumb-wrapper:hover .ttp-grid-image img,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-25 .ttp-grid-background .ttp-grid-image-overlay{
            border:10px solid <?php echo esc_attr($design_settings['member_layout_secondary_overlay_color']); ?>;           
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_layout_ssocial_link_bg_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-3 .ttp-primary-content .ttp-thumb-social-link,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-4 .ttp-thumb-social-link .ttp-social-link-list-default,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-6 .ttp-primary-content .ttp-thumb-social-link .ttp-social-link-list-default .fa,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-thumb-social-link,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-thumb-social-link:after,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-10 .ttp-social-link-list-default,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-16 .ttp-thumb-social-link,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-16 .ttp-thumb-social-link,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-17 .ttp-inner-whole-wrapper:hover .ttp-thumb-social-link
        {
            background:<?php echo esc_attr($design_settings['member_layout_ssocial_link_bg_color']); ?>;
        }
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-thumb-social-link:before{
            border-right:40px solid <?php echo esc_attr($design_settings['member_layout_ssocial_link_bg_color']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_layout_bg_color'])): ?>        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-11 .ttp-primary-content,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-15 .ttp-details-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-15 .ttp-secondary-content,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-17 .ttp-details-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-18 .ttp-details-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-18 .ttp-secondary-content,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-19 .ttp-secondary-content-outer-wrap,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-20 .ttp-details-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-21 .ttp-details-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-22 .ttp-primary-content,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-23 .ttp-item-details,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-24 .ttp-grid-thumb-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-25 .ttp-item-details,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-26 .ttp-details-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-27 .ttp-details-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-29 .ttp-primary-content .ttp-details-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-30 .ttp-secondary-content-outer-wrap,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-30 .ttp-primary-content
        {
            background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
        }
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-28 .ttp-grid-thumb-wrapper:after{
            background: rgba(0, 0, 0, 0) linear-gradient(110deg, transparent 30%, <?php echo esc_attr($design_settings['member_layout_bg_color']); ?> 0px) repeat scroll 0 0;
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_layout_secondary_bg_color'])): ?>        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-11 .ttp-secondary-content-outer-wrap,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-19 .ttp-secondary-content-wrapper,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-22 .ttp-secondary-content-outer-wrap{
            background:<?php echo esc_attr($design_settings['member_layout_secondary_bg_color']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_layout_social_link_icon_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-social-link-list-default .fa,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-thumb-social-link .ttp-social-link-list-default .fa
        {
            color:<?php echo esc_attr($design_settings['member_layout_social_link_icon_color']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_layout_social_link_hover_color'])): ?>        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-social-link-list-default .fa:hover,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-7 .ttp-thumb-social-link .ttp-social-link-list-default .fa:hover
        {
            color:<?php echo esc_attr($design_settings['member_layout_social_link_hover_color']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_layout_bg_color'])): ?>        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-13 .ttp-primary-content:before,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-13 .ttp-primary-content:after,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-13 .ttp-grid-thumb-wrapper{
            background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
        }
<?php endif; ?>        
<?php if (!empty($design_settings['quote_text_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-content-quote,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-content-quote,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-content-quote{
            color:<?php echo esc_attr($design_settings['quote_text_color']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['quote_icon_color'])): ?>    
    <?php if ($template != 'template-8') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-content-quote:before{
                color:<?php echo esc_attr($design_settings['quote_icon_color']); ?>;  
            }
    <?php } else { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-8 .ttp-content-quote:before{
                background:<?php echo esc_attr($design_settings['quote_icon_color']); ?>;  
            }
    <?php } ?>
<?php endif; ?>
<?php if (!empty($design_settings['quote_font_size'])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-content-quote,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-content-quote,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-content-quote
        {
    <?php echo intval($design_settings['quote_font_size']) ? 'font-size:' . esc_attr($design_settings['quote_font_size']) . 'px;' : ''; ?>
        }            
<?php endif; ?>
<?php if (!empty($design_settings['quote_font_family']) && $design_settings['quote_font_family'] != 'default'): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-content-quote,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-content-quote,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-content-quote{
            font-family:<?php echo esc_attr($design_settings['quote_font_family']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['external_link_color'])) { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-inner-link-list a,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-content-inner-link-list a
        {
            color:<?php echo esc_attr($design_settings['external_link_color']); ?>;  
        }            
<?php } ?>
<?php if (!empty($design_settings['link_font_family']) && $design_settings['link_font_family'] != 'default') { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-inner-link-list a,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-content-inner-link-list a
        {
            font-family:<?php echo esc_attr($design_settings['link_font_family']); ?>;  
        }            
<?php } ?>        
<?php if (!empty($design_settings['external_link_hover_visited_color'])) { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-content-inner-link-list a:hover
        {
            color:<?php echo esc_attr($design_settings['external_link_hover_visited_color']); ?>;
        }            
<?php } ?>
<?php if (!empty($design_settings['link_font_size'])) { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> #ttp-column-<?php echo $element_per_row; ?> .ttp-content-inner-link-list a
        {
    <?php echo intval($design_settings['link_font_size']) ? 'font-size:' . esc_attr($design_settings['link_font_size']) . 'px;' : ''; ?>
        }            
<?php } ?>
<?php if (!empty($design_settings['skill_bar_color'])) { ?> 
    <?php if ($template == 'template-3') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-wrap .ttp-content-skill-list .ttp-bar-skill-title .sb_bar,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-wrap .ttp-content-skill-list .ttp-bar-skill-title .sb_bar:before{
                background-color:<?php echo esc_attr($design_settings['skill_bar_color']); ?> !important;  
            }
    <?php } else { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-wrap .ttp-content-skill-list .ttp-bar-skill-title .sb_bar{
                background-color:<?php echo esc_attr($design_settings['skill_bar_color']); ?> !important;  
            }                   
    <?php } ?>
<?php } ?>
<?php if (!empty($design_settings['skill_bar_bg_color'])) { ?> 
    <?php if ($template == 'template-5') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-wrap .ttp-content-skill-list .ttp-bar-skill-title{
                border:1px solid <?php echo esc_attr($design_settings['skill_bar_bg_color']); ?> !important;
            }
    <?php } else { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-wrap .ttp-content-skill-list .ttp-bar-skill-title.sb_progress{
                background:<?php echo esc_attr($design_settings['skill_bar_bg_color']); ?> !important;  
            }
    <?php } ?>
<?php } ?>
<?php if (!empty($design_settings['skill_bar_font_family']) && $design_settings['skill_bar_font_family'] != 'default') { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-top .ttp-skill-label,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-top .ttp-skill-value
        {
            font-family:<?php echo esc_attr($design_settings['skill_bar_font_family']); ?>;  
        }            
<?php } ?>
<?php if (!empty($design_settings['skill_bar_text_color'])) { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-top .ttp-skill-label,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-top .ttp-skill-value
        {
            color:<?php echo esc_attr($design_settings['skill_bar_text_color']); ?>;  
        }
<?php } ?>
<?php if (!empty($design_settings['skill_bar_font_size'])) { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-top .ttp-skill-label,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-top .ttp-skill-value
        {
    <?php echo intval($design_settings['skill_bar_font_size']) ? 'font-size:' . esc_attr($design_settings['skill_bar_font_size']) . 'px;' : ''; ?>
        }            
<?php } ?>
<?php if (!empty($design_settings['description_text_color'])) { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-description
        {
            color:<?php echo esc_attr($design_settings['description_text_color']); ?>;  
        }
<?php } ?>
<?php if (!empty($design_settings['description_font_size']) && intval($design_settings['description_font_size'])) { ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-description
        {
    <?php echo intval($design_settings['description_font_size']) ? 'font-size:' . esc_attr($design_settings['description_font_size']) . 'px;' : ''; ?>
        }
<?php } ?>
<?php if (!empty($design_settings['description_font_family']) && $design_settings['description_font_family'] != 'default') { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-description
        {
            font-family:<?php echo esc_attr($design_settings['description_font_family']); ?>;  
        }            
<?php } ?>
<?php if ($external_var_layout_type == 'filter-layout') { ?>
    <?php if (!empty($design_settings['filter_button_bg_color']) && !empty($design_settings['filter_button_bg_color'])) { ?> 
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-row .small-3 .button,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header .button
            {
                background:<?php echo esc_attr($design_settings['filter_button_bg_color']); ?>;
            }            
    <?php } ?>
    <?php if (!empty($design_settings['filter_button_text_color']) && !empty($design_settings['filter_button_text_color'])) { ?> 
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-row .small-3 .button,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header .button
            {
                color:<?php echo esc_attr($design_settings['filter_button_text_color']); ?> !important;
            }            
    <?php } ?>
    <?php if (!empty($design_settings['filter_button_hover_bg_color']) && !empty($design_settings['filter_button_hover_bg_color'])) { ?> 
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-row .small-3 .button:hover,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header .button:hover,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header .button.active
            {
                background:<?php echo esc_attr($design_settings['filter_button_hover_bg_color']); ?>;
            }            
    <?php } ?>
    <?php if (!empty($design_settings['filter_button_hover_text_color']) && !empty($design_settings['filter_button_hover_text_color'])) { ?> 
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-row .small-3 .button:hover,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header .button:hover,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header .button.active
            {
                color:<?php echo esc_attr($design_settings['filter_button_hover_text_color']); ?> !important;
            }            
    <?php } ?>
    <?php if (!empty($design_settings['filter_title_font_family']) && $design_settings['filter_title_font_family'] != 'default') { ?> 
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-row .small-3 .button,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header .button
            {
                font-family:<?php echo esc_attr($design_settings['filter_title_font_family']); ?>;  
            }            
    <?php } ?>
    <?php if (!empty($design_settings['filter_title_font_family']) && $design_settings['filter_title_font_family'] != 'default') { ?> 
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch::placeholder{
                font-family:<?php echo esc_attr($design_settings['filter_title_font_family']); ?>;  
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch::-webkit-input-placeholder{
                font-family:<?php echo esc_attr($design_settings['filter_title_font_family']); ?>;  
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch::-moz-placeholder{
                font-family:<?php echo esc_attr($design_settings['filter_title_font_family']); ?>;  
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch:-ms-input-placeholder{
                font-family:<?php echo esc_attr($design_settings['filter_title_font_family']); ?>;  
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch:-ms-input-placeholder{
                font-family:<?php echo esc_attr($design_settings['filter_title_font_family']); ?>;
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch:-moz-placeholder{
                font-family:<?php echo esc_attr($design_settings['filter_title_font_family']); ?>;
            }
    <?php } ?>        
    <?php if (!empty($design_settings['filter_title_font_size'])) { ?> 
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-row .small-3 .button,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header .button
            {
        <?php echo intval($design_settings['filter_title_font_size']) ? 'font-size:' . esc_attr($design_settings['filter_title_font_size']) . 'px;' : ''; ?>
            }            
    <?php } ?>
    <?php if (!empty($design_settings['filter_title_font_size']) && $design_settings['filter_title_font_size'] != 'default') { ?> 
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch::placeholder{
        <?php echo intval($design_settings['filter_title_font_size']) ? 'font-size:' . esc_attr($design_settings['filter_title_font_size']) . 'px;' : ''; ?>
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch::-webkit-input-placeholder{
        <?php echo intval($design_settings['filter_title_font_size']) ? 'font-size:' . esc_attr($design_settings['filter_title_font_size']) . 'px;' : ''; ?>
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch::-moz-placeholder{
        <?php echo intval($design_settings['filter_title_font_size']) ? 'font-size:' . esc_attr($design_settings['filter_title_font_size']) . 'px;' : ''; ?>
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch:-ms-input-placeholder{
        <?php echo intval($design_settings['filter_title_font_size']) ? 'font-size:' . esc_attr($design_settings['filter_title_font_size']) . 'px;' : ''; ?>
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch:-ms-input-placeholder{
        <?php echo intval($design_settings['filter_title_font_size']) ? 'font-size:' . esc_attr($design_settings['filter_title_font_size']) . 'px;' : ''; ?>
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-filter-header-wrap input#ttp-filter-quicksearch:-moz-placeholder{
        <?php echo intval($design_settings['filter_title_font_size']) ? 'font-size:' . esc_attr($design_settings['filter_title_font_size']) . 'px;' : ''; ?>
            }
    <?php } ?>
<?php } ?>      
</style>
<?php
include(TOTAL_TEAM_PRO_FILE_ROOT_DIR . 'inc/frontend/custom/popup-slide-out-custom.php');
