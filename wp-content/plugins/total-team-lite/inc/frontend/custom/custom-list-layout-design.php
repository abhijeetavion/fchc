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
    /** Member Title Subtitle Size */
    <?php if (!empty($design_settings['member_title_text_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> span.ttp-content-header,        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content-right .ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-header
        {
            color:<?php echo esc_attr($design_settings['member_title_text_color']); ?>;
        }
    <?php endif; ?>
    <?php if (!empty($design_settings['member_title_font_size']) && intval($design_settings['member_title_font_size'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content-right .ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-header
        {
            <?php echo intval($design_settings['member_title_font_size']) ? 'font-size:' . esc_attr($design_settings['member_title_font_size']) . 'px;' : ''; ?>
        }
    <?php endif; ?>
    <?php if (!empty($design_settings['member_position_text_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content-right .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-position
        {
            color:<?php echo esc_attr($design_settings['member_position_text_color']); ?>;
        }
    <?php endif; ?>
    <?php if (!empty($design_settings['member_position_font_size']) && intval($design_settings['member_position_font_size'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content-right.ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-position
        {
            <?php echo intval($design_settings['member_position_font_size']) ? 'font-size:' . esc_attr($design_settings['member_position_font_size']) . 'px;' : ''; ?>
        }
    <?php endif; ?>
    <?php if (!empty($design_settings['description_text_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-description
        {
            color:<?php echo esc_attr($design_settings['description_text_color']); ?>;
        }
    <?php endif; ?>
    <?php if (!empty($design_settings['description_font_size']) && intval($design_settings['description_font_size'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-description
        {
            <?php echo intval($design_settings['description_font_size']) ? 'font-size:' . esc_attr($design_settings['description_font_size']) . 'px;' : ''; ?>
        }
    <?php endif; ?>

    <?php
    if (!empty($design_settings['member_layout_border_color'])) {
        ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-popup-click:before,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-slide-out-click:before{
            border: 1px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>;
        }
    <?php } ?>
    <?php
    if (!empty($design_settings['member_layout_overlay_color'])) {
        if ($template == 'template-1' || $template == 'template-2'):
            ?>  
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-popup-click,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-slide-out-click{
                background:<?php echo esc_attr($design_settings['member_layout_overlay_color']); ?>;
            }
            <?php
        endif;
    }
    ?>
    <?php
    if (!empty($design_settings['member_layout_bg_color'])) {
        if (in_array($template, array('template-4', 'template-3', 'template-2'))) {
            ?>  
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .grid-row-wrapper{
                background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
            }
        <?php } else if (in_array($template, array('template-5', 'template-7'))) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content-right{
                background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
            }
        <?php } else if (in_array($template, array('template-6'))) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper{
                background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
            }
        <?php } ?>
    <?php } ?>   
    <?php
    if (!empty($design_settings['member_layout_secondary_bg_color'])) {
        if ($template == 'template-3' || $template == 'template-5'):
            ?>  
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-list-title-pos-wrap{
                background:<?php echo esc_attr($design_settings['member_layout_secondary_bg_color']); ?>;
            }
            <?php
        endif;
    }
    ?>
    <?php
    if (!empty($design_settings['member_layout_ssocial_link_bg_color'])) {
        if ($template == 'template-3' || $template == 'template-7'):
            ?>  
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-team-member-social-link .ttp-social-link-list-default .fa{
                border:1px solid <?php echo esc_attr($design_settings['member_layout_ssocial_link_bg_color']); ?>;
            }
            <?php
        endif;
    }
    ?>
    <?php
    if (!empty($design_settings['member_layout_ssocial_link_bg_color'])) {
        if ($template == 'template-4' || $template == 'template-5'):
            ?>  
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-team-member-social-link{
                background:<?php echo esc_attr($design_settings['member_layout_ssocial_link_bg_color']); ?>;
            }
            <?php
        endif;
    }
    ?>

    /** Basic Info */
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
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-secondary-content .ttp-thumb-emailaddress{
            <?php echo intval($design_settings['basic_info_font_size']) ? 'font-size:' . esc_attr($design_settings['basic_info_font_size']) . 'px;' : ''; ?>
        }
    <?php endif; ?>

    <?php if (!empty($design_settings['member_layout_social_link_icon_color'])): ?>        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-inner-whole-wrapper .ttp-social-link-list-default .fa,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?>  #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-social-link-list-default .fa
        {
            color:<?php echo esc_attr($design_settings['member_layout_social_link_icon_color']); ?>;
        }
        <?php
    endif;
    ?>
    <?php if (!empty($design_settings['member_layout_social_link_hover_color'])): ?>        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-inner-whole-wrapper .ttp-social-link-list-default .fa:hover,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?>  #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-social-link-list-default .fa:hover
        {
            color:<?php echo esc_attr($design_settings['member_layout_social_link_hover_color']); ?>;
        }
        <?php
    endif;
    ?>
    /** Expand icon */
    <?php
    if (!empty($design_settings['member_layout_expand_icon_color'])):
        ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-grid-image .ttp-expand-slide-out-click fa,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-grid-image .ttp-expand-popup-click .fa
        {
            color:<?php echo esc_attr($design_settings['member_layout_expand_icon_color']); ?>;
        }
    <?php endif; ?>

    <?php if (!empty($design_settings['quote_text_color'])): ?>        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-quote,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-quote
        {
            color:<?php echo esc_attr($design_settings['quote_text_color']); ?>;
        }
    <?php endif; ?>
    <?php if (!empty($design_settings['quote_font_size '])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-quote,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-quote
        {
            <?php echo intval($design_settings['quote_font_size ']) ? 'font-size:' . esc_attr($design_settings['quote_font_size ']) . 'px;' : ''; ?>
        }            
    <?php endif; ?>

    /** Links */
    <?php if (!empty($design_settings['external_link_color'])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-inner-link-list a
        {
            color:<?php echo esc_attr($design_settings['external_link_color']); ?>;  
        }            
    <?php endif; ?>
    <?php if (!empty($design_settings['external_link_hover_visited_color'])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-inner-link-list a:hover
        {
            color:<?php echo esc_attr($design_settings['external_link_hover_visited_color']); ?>;  
        }            
    <?php endif; ?>
    <?php if (!empty($design_settings['link_font_size'])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-inner-link-list a
        {
            <?php echo intval($design_settings['link_font_size']) ? 'font-size:' . esc_attr($design_settings['link_font_size']) . 'px;' : ''; ?>
        }            
    <?php endif; ?>
    <?php if (!empty($design_settings['skill_bar_color'])): ?> 
        <?php if ($template == 'template-3') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-skill-list-wrap .ttp-content-skill-list .ttp-bar-skill-title .sb_bar,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-skill-list .ttp-bar-skill-title .sb_bar:before{
                background-color:<?php echo esc_attr($design_settings['skill_bar_color']); ?> !important;  
            }
        <?php } else { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-skill-list-wrap .ttp-content-skill-list .ttp-bar-skill-title .sb_bar{
                background-color:<?php echo esc_attr($design_settings['skill_bar_color']); ?> !important;  
            }                   
        <?php } ?>
    <?php endif; ?>
    <?php if (!empty($design_settings['skill_bar_bg_color'])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-skill-list-wrap .ttp-content-skill-list .ttp-bar-skill-title.sb_progress{
            background:<?php echo esc_attr($design_settings['skill_bar_bg_color']); ?> !important;  
        }
    <?php endif; ?>
    <?php if (!empty($design_settings['skill_bar_text_color'])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-skill-list-top .ttp-skill-label,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-skill-list-top .ttp-skill-value
        {
            color:<?php echo esc_attr($design_settings['skill_bar_text_color']); ?>;  
        }
    <?php endif; ?>
    <?php if (!empty($design_settings['member_title_font_family']) && $design_settings['member_title_font_family'] != 'default'): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> span.ttp-content-header,        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content-right .ttp-content-header,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-header
        {
            font-family:<?php echo esc_attr($design_settings['member_title_font_family']); ?>;
        }
    <?php endif; ?>

    <?php if (!empty($design_settings['member_position_font_family']) && $design_settings['member_position_font_family'] != 'default'): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content-right.ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-position
        {
            font-family:<?php echo esc_attr($design_settings['member_position_font_family']); ?>;
        }
    <?php endif; ?>

    <?php if (!empty($design_settings['link_font_family']) && $design_settings['link_font_family'] != 'default') { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-inner-link-list a
        {
            font-family:<?php echo esc_attr($design_settings['link_font_family']); ?>;  
        }            
    <?php } ?>        

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

    <?php if (!empty($design_settings['skill_bar_font_family']) && $design_settings['skill_bar_font_family'] != 'default') { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-top .ttp-skill-label,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-top .ttp-skill-value
        {
            font-family:<?php echo esc_attr($design_settings['skill_bar_font_family']); ?>;  
        }            
    <?php } ?>

    <?php if (!empty($design_settings['description_font_family']) && $design_settings['description_font_family'] != 'default') { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-description
        {
            font-family:<?php echo esc_attr($design_settings['description_font_family']); ?>;  
        }            
    <?php } ?>

    <?php if (!empty($design_settings['skill_bar_font_size'])) { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-top .ttp-skill-label,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-skill-list-top .ttp-skill-value
        {
            <?php echo intval($design_settings['skill_bar_font_size']) ? 'font-size:' . esc_attr($design_settings['skill_bar_font_size']) . 'px;' : ''; ?>
        }            
    <?php } ?>
    <?php if (!empty($design_settings['quote_font_family']) && $design_settings['quote_font_family'] != 'default'): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-quote,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-content-quote
        {
            font-family:<?php echo esc_attr($design_settings['quote_font_family']); ?>;
        }
    <?php endif; ?>
</style>
<?php include(TOTAL_TEAM_PRO_FILE_ROOT_DIR . 'inc/frontend/custom/popup-slide-out-custom.php'); ?>