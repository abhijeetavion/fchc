<style>
<?php if (!empty($design_settings['member_layout_bg_color'])) { ?>
    <?php if ($template != "template-1" || $template != "template-3") : ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper:nth-child(even){
                background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
            }
    <?php endif; ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper:nth-child(odd){
            background:<?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
        }
    <?php if ($template == 'template-1'): ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper:nth-child(odd) .ttp-content-header:before{
                border-right:30px solid <?php echo esc_attr($design_settings['member_layout_bg_color']); ?>;
            }
    <?php endif; ?>
<?php } ?>
<?php if (!empty($design_settings['member_layout_secondary_bg_color'])) { ?>
    <?php if ($template == "template-1" || $template == "template-3") { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper:nth-child(even){
                background:<?php echo esc_attr($design_settings['member_layout_secondary_bg_color']); ?>;
            }
        <?php if ($template == 'template-1'): ?>
                #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper:nth-child(even) .ttp-content-header:before{
                    border-right:30px solid <?php echo esc_attr($design_settings['member_layout_secondary_bg_color']); ?>;
                }
        <?php endif; ?>
    <?php } ?>
<?php } ?>
<?php if (!empty($design_settings['member_layout_border_color'])) { ?>
    <?php if ($template == "template-2") { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?>  .ttp-inner-whole-wrapper:first-child{
                border-top: 1px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>; 
            }

            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper {
                border-bottom: 1px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>;
            }
    <?php } else if ($template == "template-3" || $template == "template-4") { ?>
            #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper:nth-child(odd){
                border: 1px solid <?php echo esc_attr($design_settings['member_layout_border_color']); ?>;
            }
    <?php } ?>
<?php } ?> 
<?php if (!empty($design_settings['member_title_text_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-header
        {
            color:<?php echo esc_attr($design_settings['member_title_text_color']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_title_font_size']) && intval($design_settings['member_position_font_size'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-header
        {
    <?php echo intval($design_settings['member_title_font_size']) ? 'font-size:' . esc_attr($design_settings['member_title_font_size']) . 'px;' : ''; ?>
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_position_text_color'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-thumb-position
        {
            color:<?php echo esc_attr($design_settings['member_position_text_color']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['member_position_font_size']) && intval($design_settings['member_position_font_size'])): ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-thumb-position
        {
    <?php echo intval($design_settings['member_position_font_size']) ? 'font-size:' . esc_attr($design_settings['member_position_font_size']) . 'px;' : ''; ?>
        }
<?php endif; ?>
    /** Basic Info */
<?php if (!empty($design_settings['basic_info_content_text_Color'])): ?>        
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-inner-whole-wrapper .ttp-secondary-content .ttp-thumb-address,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-inner-whole-wrapper .ttp-secondary-content .ttp-thumb-telephone,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-secondary-content .ttp-thumb-emailaddress
        {
            color:<?php echo esc_attr($design_settings['basic_info_content_text_Color']); ?>; 
        }
<?php endif; ?>
<?php if (!empty($design_settings['basic_info_font_size']) && intval($design_settings['basic_info_font_size'])): ?>      
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-inner-whole-wrapper .ttp-secondary-content .ttp-thumb-address,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-inner-whole-wrapper .ttp-secondary-content .ttp-thumb-telephone,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-inner-whole-wrapper .ttp-secondary-content .ttp-thumb-emailaddress{
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
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-content-quote
        {
            color:<?php echo esc_attr($design_settings['quote_text_color']); ?>;
        }
<?php endif; ?>
<?php if (!empty($design_settings['quote_font_size '])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-quote,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-content-quote
        {
    <?php echo intval($design_settings['quote_font_size ']) ? 'font-size:' . esc_attr($design_settings['quote_font_size ']) . 'px;' : ''; ?>
        }            
<?php endif; ?>

<?php if (!empty($design_settings['link_font_size'])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-inner-link-list a
        {
    <?php echo intval($design_settings['link_font_size']) ? 'font-size:' . esc_attr($design_settings['link_font_size']) . 'px;' : ''; ?>
        }            
<?php endif; ?>
<?php if (!empty($design_settings['external_link_hover_visited_color'])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-content-inner-link-list a:hover
        {
            color:<?php echo esc_attr($design_settings['external_link_hover_visited_color']); ?>;  
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
<?php if (!empty($design_settings['description_text_color'])): ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> .ttp-inner-whole-wrapper .ttp-secondary-content .ttp-thumb-description
        {
            color:<?php echo esc_attr($design_settings['description_text_color']); ?>;  
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