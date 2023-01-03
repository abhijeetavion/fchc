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
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-content-header
        {
            color:<?php echo esc_attr($design_settings['member_title_text_color']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['member_title_font_size']) && intval($design_settings['member_position_font_size'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-content-header
        {
    <?php echo intval($design_settings['member_title_font_size']) ? 'font-size:' . esc_attr($design_settings['member_title_font_size']) . 'px;' : ''; ?>
        }
    <?php
endif;
if (!empty($design_settings['member_title_font_family']) && $design_settings['member_title_font_family'] != 'default'):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-content-header
        {
            font-family:<?php echo esc_attr($design_settings['member_title_font_family']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['member_position_text_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-thumb-position
        {
            color:<?php echo esc_attr($design_settings['member_position_text_color']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['member_position_font_size']) && intval($design_settings['member_position_font_size'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-thumb-position
        {
    <?php echo intval($design_settings['member_position_font_size']) ? 'font-size:' . esc_attr($design_settings['member_position_font_size']) . 'px;' : ''; ?>
        }
    <?php
endif;
if (!empty($design_settings['member_position_font_family']) && $design_settings['member_position_font_family'] != 'default'):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-position,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-thumb-position
        {
            font-family:<?php echo esc_attr($design_settings['member_position_font_family']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['member_layout_overlay_color'])) {
    ?>
    <?php if ($template == 'template-1' || $template == 'template-2' || $template == 'template-10') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-slide-out-click,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-popup-click
            {
                background:<?php echo esc_attr($design_settings['member_layout_overlay_color']); ?>;
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-template-10 .ttp-member-name-divider{
                background:<?php echo esc_attr($design_settings['member_layout_overlay_color']); ?>;
            }
    <?php } else if ($template == 'template-4') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-item-details:hover
            {
                background:<?php echo esc_attr($design_settings['member_layout_overlay_color']); ?>;
            }
    <?php } else if ($template == 'template-6') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-carousal-inner:hover .ttp-content-header,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-carousal-inner:hover .ttp-thumb-position{
                background:<?php echo esc_attr($design_settings['member_layout_overlay_color']); ?>;
            }
    <?php } else if ($template == 'template-7') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper:hover .ttp-grid-image .ttp-expand-popup-click,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper:hover .ttp-grid-image .ttp-expand-slide-out-click{
                background:<?php echo esc_attr($design_settings['member_layout_overlay_color']); ?>;
            }
        <?php
    }
} if (!empty($design_settings['member_layout_border_color'])) {
    ?>
    <?php if ($template == 'template-1') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-slide-out-click,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-popup-click
            {
                border-bottom:3px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>;
            }
    <?php } else if ($template == 'template-5') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-grid-image{
                border-top:5px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>;
            }
        <?php
    }
} if (!empty($design_settings['member_layout_ssocial_link_bg_color'])) {
    ?>
    <?php if ($template == 'template-2') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-social-link .ttp-social-link-list-default .fa{
                border:2px solid <?php echo esc_attr($design_settings['member_layout_ssocial_link_bg_color']); ?>;
            }
    <?php } else if (in_array($template, array('template-6', 'template-7', 'template-9'))) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-social-link{
                background: <?php echo esc_attr($design_settings['member_layout_ssocial_link_bg_color']); ?>;
            }
    <?php } else if ($template == 'template-8') { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content:hover .ttp-thumb-social-link
            {
                background: <?php echo esc_attr($design_settings['member_layout_ssocial_link_bg_color']); ?>; 
            }
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content:hover .ttp-thumb-position{
                border-bottom: 1px solid <?php echo esc_attr($design_settings['member_layout_ssocial_link_bg_color']); ?>; 
            }
        <?php
    }
} if (!empty($design_settings['member_layout_social_link_icon_color'])):
    ?>        
    <?php //if (!in_array($template, array('template-1', 'template-5', 'template-8', 'template-9', 'template-12'))):                                 ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-social-link .ttp-social-link-list-default .fa
        {
            color:<?php echo esc_attr($design_settings['member_layout_social_link_icon_color']); ?>;
        }
    <?php
//endif;
endif;
if (!empty($design_settings['member_layout_social_link_hover_color'])):
    ?>        
    <?php //if (!in_array($template, array('template-1', 'template-5', 'template-8', 'template-9', 'template-12'))):                                 ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-thumb-social-link .ttp-social-link-list-default .fa:hover
        {
            color:<?php echo esc_attr($design_settings['member_layout_social_link_hover_color']); ?>;
        }
    <?php
//endif;
endif;

if (!empty($design_settings['member_layout_expand_bg_color'])):
    if ($template == ('template-5')) {
        ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-slide-out-click .fa,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-popup-click .fa
            {
                background:<?php echo esc_attr($design_settings['member_layout_expand_bg_color']); ?>;
            }
        <?php
    } endif;
if (!empty($design_settings['member_layout_expand_icon_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-slide-out-click .fa,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-expand-popup-click .fa
        {
            color:<?php echo esc_attr($design_settings['member_layout_expand_icon_color']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['member_layout_secondary_overlay_color'])):
    ?>
    <?php if ($template == ('template-7')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper:hover .ttp-details-wrapper
            {
                background:<?php echo esc_attr($design_settings['member_layout_secondary_overlay_color']); ?>;
            }
        <?php
    } endif;
if (!empty($design_settings['member_layout_bg_color'])):
    ?>
    <?php if ($template == ('template-8')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-introduction-details
            {
                background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
            }
    <?php } else if ($template == ('template-6')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-content-header,
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-primary-content .ttp-thumb-position
            {
                background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
            }
    <?php } else if ($template == ('template-7') || $template == ('template-9')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-details-wrapper
            {
                background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>; 
            }
    <?php } else if ($template == ('template-4')) { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-item-details
            {
                background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
            }
    <?php } else { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper
            {
                background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;  
            }
    <?php } ?>
    <?php
endif;
if (!empty($design_settings['carousal_prev_next_icon_bg_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .owl-theme .owl-nav [class*=owl-]
        {
            background:<?php echo esc_attr($design_settings['carousal_prev_next_icon_bg_color']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['carousal_prev_next_icon_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .owl-theme .owl-nav [class*=owl-]
        {
            color:<?php echo esc_attr($design_settings['carousal_prev_next_icon_color']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['carousal_prev_next_icon_hover_bg_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .owl-theme .owl-nav [class*=owl-]:hover
        {
            background:<?php echo esc_attr($design_settings['carousal_prev_next_icon_hover_bg_color']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['carousal_prev_next_hover_icon_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .owl-theme .owl-nav [class*=owl-]:hover
        {
            color:<?php echo esc_attr($design_settings['carousal_prev_next_hover_icon_color']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['carousal_pagination_active_hover_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .owl-theme .owl-dots .owl-dot.active span,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .owl-theme .owl-dots .owl-dot:hover span
        {
            background:<?php echo esc_attr($design_settings['carousal_pagination_active_hover_color']); ?>;
        }
    <?php
endif;
/**
 * Flispter Design Starts Here 
 */
if (!empty($design_settings['carousal_pagination_text_icon_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster__nav__link 
        {
            color: <?php echo esc_attr($design_settings['carousal_pagination_text_icon_color']); ?> !important;
            border-bottom: 10px solid <?php echo esc_attr($design_settings['carousal_pagination_text_icon_color']); ?> !important;
        }
    <?php
endif;
if (!empty($design_settings['carousal_pagination_text_bg_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster__nav__link
        {
            background: <?php echo esc_attr($design_settings['carousal_pagination_text_bg_color']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['carousal_pagination_bg_hover_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster__nav__item--current>.flipster__nav__link
        {
            background: <?php echo esc_attr($design_settings['carousal_pagination_bg_hover_color']); ?>;
        }
    <?php
endif;
if (!empty($design_settings['carousal_pagination_active_hover_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster__nav__item--current>.flipster__nav__link 
        {
            color: <?php echo esc_attr($design_settings['carousal_pagination_active_hover_color']); ?> !important;
            border-bottom: 10px solid <?php echo esc_attr($design_settings['carousal_pagination_active_hover_color']); ?> !important;
        }
    <?php
endif;
/** Flipster Pagination Button */
if (!empty($design_settings['carousal_prev_next_icon_bg_color'])):
    ?>
                
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster__button{
            background: <?php echo esc_attr($design_settings['carousal_prev_next_icon_bg_color']); ?> !important;
            
        }
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster__button.flipster__button--next:after,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster__button.flipster__button--prev:after{
            border-left: none !important;
        }
    <?php
endif;
if (!empty($design_settings['carousal_prev_next_icon_hover_bg_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster__button:hover{
            background: <?php echo esc_attr($design_settings['carousal_prev_next_icon_hover_bg_color']); ?> !important;
        }
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster__button.flipster__button--next:after,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster__button.flipster__button--prev:after{
            border-right: none !important;
        }
    <?php
endif;
if (!empty($design_settings['carousal_prev_next_icon_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster button.flipster__button{
            color: <?php echo esc_attr($design_settings['carousal_prev_next_icon_color']); ?> !important;
        }
<?php
endif;
if (!empty($design_settings['carousal_prev_next_hover_icon_color'])):
    ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .flipster button.flipster__button:hover{
            color: <?php echo esc_attr($design_settings['carousal_prev_next_hover_icon_color']); ?> !important;
        }
<?php endif;
?>
</style>
<?php
include(TOTAL_TEAM_PRO_FILE_ROOT_DIR . 'inc/frontend/custom/popup-slide-out-custom.php');
