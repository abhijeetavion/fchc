<style>
<?php if (!empty($design_settings['popup_overlay_color'])) { ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-popup-content-overlay
        {
            background:<?php echo esc_attr($design_settings['popup_overlay_color']); ?>;
            opacity:<?php echo esc_attr($design_settings['popup_overlay_opacity']); ?>;  
        }
<?php } ?>

<?php if (!empty($design_settings['popup_bg_color'])) { ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-popup-content-right,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-popup-content-left,
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> .ttp-popup-content-center
        {
            background:<?php echo esc_attr($design_settings['popup_bg_color']); ?>;
        }
<?php } ?>
<?php if (!empty($design_settings['dynamic_title_text_color'])) { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> span.ttp-content-open-header
        {
            color:<?php echo esc_attr($design_settings['dynamic_title_text_color']); ?>;  
        }
<?php } ?>
<?php if (!empty($design_settings['dynamic_title_font_size']) && intval($design_settings['dynamic_title_font_size'])) { ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?>  #ttp-<?php echo $template; ?> span.ttp-content-open-header
        {
    <?php echo intval($design_settings['dynamic_title_font_size']) ? 'font-size:' . esc_attr($design_settings['dynamic_title_font_size']) . 'px;' : ''; ?>
        }
<?php } ?>
<?php if (isset($design_settings['dynamic_title_font_family']) && $design_settings['dynamic_title_font_family'] != "") { ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> span.ttp-content-open-header
        {
            font-family:<?php echo esc_attr($design_settings['dynamic_title_font_family']); ?>;
        }
<?php } ?>
<?php if (!empty($design_settings['dynamic_subtitle_text_color'])) { ?> 
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> span.ttp-content-open-subheader
        {
            color:<?php echo esc_attr($design_settings['dynamic_subtitle_text_color']); ?>;  
        }
<?php } ?>
<?php if (!empty($design_settings['dynamic_subtitle_font_size']) && intval($design_settings['dynamic_subtitle_font_size'])) { ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> span.ttp-content-open-subheader
        {
    <?php echo intval($design_settings['dynamic_subtitle_font_size']) ? 'font-size:' . esc_attr($design_settings['dynamic_subtitle_font_size']) . 'px;' : ''; ?>
        }
<?php } ?>
<?php if (isset($design_settings['dynamic_subtitle_font_family']) && $design_settings['dynamic_subtitle_font_family'] != "") { ?>
        #ttp-wrapper-<?php echo $layout_type; ?>-<?php echo $random_num; ?> #ttp-<?php echo $template; ?> span.ttp-content-open-subheader
        {
            font-family:<?php echo esc_attr($design_settings['dynamic_subtitle_font_family']); ?>;
        }
<?php } ?>
</style>