<?php
defined('ABSPATH') or die("No script kiddies please!");
?>
<div class="ttp-wrapper <?php echo 'ttp-' . $layout_type; ?>" id="<?php echo 'ttp-wrapper-' . $layout_type . '-' . $random_num; ?>">
    <div class="ttp-team-content-outer-wrap" id="ttp-<?php echo $template; ?>">
        <div class="ttp-layout-contents <?php echo 'ttp-' . $layout_type . '-content'; ?>" id="ttp-column-<?php echo $element_per_row; ?>" data-per-row="<?php echo $element_per_row; ?>">				
            <?php
            $team_member_qry = new WP_Query(array(
                'post_type' => 'totalteam',
                'post_status' => 'publish',
                'tax_query' => $category_array_value,
                'post__in' => $member_array,
                'posts_per_page' => $team_number,
                'order' => $order,
                'orderby' => $orderby
            ));

            $i = 1;
            if ($team_member_qry->have_posts()) {
                while ($team_member_qry->have_posts()) {
                    $team_member_qry->the_post();
                    $img_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), $grid_image_size);
                    $team_member_general_info = get_post_meta(get_the_id(), 'theteam_general_settings', true);
                    $count = $team_member_qry->post_count;
                    if ($i == 1) {
                        ?>
                        <div class="grid-row-wrapper">
                            <div class="grid-row-wrapper-inner clearfix">
                                <?php
                            }
                            ?>
                            <div class="ttp-inner-whole-wrapper" style="padding:0px <?php echo $margin; ?>px;">        
                                <?php if ((isset($template_type) && $template_type == 'basic') && (!in_array($template, $template_array3))) { ?>
                                    <div class="ttp-grid-thumb-wrapper">
                                        <div class="ttp-primary-content">   
                                            <?php if (has_post_thumbnail()): ?>
                                                <div class="content-wrapper" id="arrow-<?php echo $i; ?>">  
                                                    <div class="ttp-grid-image">
                                                        <?php if ((isset($template_type) && $template_type == 'basic') && (in_array($template, $template_array2))) { ?>
                                                            <div class="ttp-inner-overlay"></div>
                                                        <?php } ?>
                                                        <?php if ((isset($template_type) && $template_type == 'basic') && (in_array($template, $template_array4))) { ?>
                                                            <a class="ttp-image-hover-wrap">
                                                                <img src='<?php echo $img_thumbnail[0]; ?>' alt="<?php the_title(); ?>" />
                                                            </a>
                                                        <?php } else { ?>
                                                            <img src='<?php echo $img_thumbnail[0]; ?>' alt="<?php the_title(); ?>" />
                                                            <?php
                                                        }
                                                        if ((isset($template_type) && $template_type == 'basic')) {
                                                            switch ($additional_detail_type) {
                                                                case 'popup':
                                                                    echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click ttp-expand-popup-click-action"><i class="fa ' . $custom_expand_icon_final . '"></i></span>';
                                                                    break;
                                                                case 'none':
                                                                    break;
                                                            }
                                                        }
                                                        ?>      
                                                        <?php
                                                        if ((isset($template_type) && $template_type == 'basic') && (in_array($template, $template_array2))) {
                                                            if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])):
                                                                ?>
                                                                <span class = "ttp-thumb-position">
                                                                    <?php echo esc_attr($team_member_general_info['ttp_team_position_post']); ?>
                                                                </span>
                                                                <?php
                                                            endif;
                                                        }
                                                        ?>
                                                        <?php if ((isset($template_type) && $template_type == 'basic') && $template == 'template-3') {
                                                            ?>
                                                            <div class="ttp-thumb-social-link clearfix">
                                                                <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <?php
                                            endif;
                                            if ((isset($template_type) && $template_type == 'basic') && (in_array($template, $template_array))) {
                                                if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])):
                                                    ?>
                                                    <span class = "ttp-thumb-position">
                                                        <?php echo esc_attr($team_member_general_info['ttp_team_position_post']); ?>
                                                    </span>
                                                    <?php
                                                endif;
                                            }
                                            if ((isset($template_type) && $template_type == 'basic') && (in_array($template, $template_array))) {
                                                if (!empty(get_the_title())):
                                                    switch ($additional_detail_type) {
                                                        case 'popup':
                                                            echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</span>';
                                                            break;
                                                        case 'none':
                                                            echo '<span class="ttp-content-header">' . get_the_title() . '</span>';
                                                            break;
                                                        default:
                                                            echo '<span class="ttp-content-header">' . get_the_title() . '</span>';
                                                            break;
                                                    }
                                                endif;
                                            } else {
                                                if ((isset($template_type) && $template_type == 'basic') && (in_array($template, $template_array6))) {
                                                    echo '<div class="ttp-head-pos-temp-5-wrapper">';
                                                }
                                                if (!empty(get_the_title())):
                                                    switch ($additional_detail_type) {
                                                        case 'popup':
                                                            echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</span>';
                                                            break;
                                                        case 'none':
                                                            echo '<span class="ttp-content-header">' . get_the_title() . '</span>';
                                                            break;
                                                        default:
                                                            echo '<span class="ttp-content-header">' . get_the_title() . '</span>';
                                                            break;
                                                    }
                                                endif;
                                            }
                                            if ((isset($template_type) && $template_type == 'basic') && (!in_array($template, $template_array2)) && $template !== 'template-1' && $template !== 'template-8' && $template !== 'template-25') {
                                                if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])):
                                                    ?>
                                                    <span class = "ttp-thumb-position">
                                                        <?php echo esc_attr($team_member_general_info['ttp_team_position_post']); ?>
                                                    </span>
                                                    <?php
                                                endif;
                                            }
                                            if ((isset($template_type) && $template_type == 'basic') && (in_array($template, $template_array6))) {
                                                echo '</div>';
                                            }
                                            if ((isset($template_type) && $template_type == 'basic') && (!in_array($template, $template_array2)) && $template != 'template-3') {
                                                ?>
                                                <div class="ttp-thumb-social-link clearfix">
                                                    <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <?php if ((isset($team_member_general_info) && !empty($team_member_general_info)) && (isset($template_type) && $template_type == 'basic') && (!in_array($template, $template_array5))) { ?>        
                                            <div class="ttp-secondary-content">
                                                <?php echo $totalteam_lite_object->totalteam_member_grid_list_thumb_type_filter(get_the_id(), $thumb_content); ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ((isset($template_type) && $template_type == 'basic') && (in_array($template, $template_array2))) {
                                            ?>
                                            <div class="ttp-thumb-social-link clearfix">
                                                <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (in_array($template, $template_array5)) { ?>
                                            <div class="ttp-secondary-content-outer-wrap" >
                                                <?php
                                                if (!empty(get_the_title())):
                                                    switch ($additional_detail_type) {
                                                        case 'popup':
                                                            echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</span>';
                                                            break;
                                                        case 'none':
                                                            echo '<span class="ttp-content-header">' . get_the_title() . '</span>';
                                                            break;
                                                        default:
                                                            echo '<span class="ttp-content-header">' . get_the_title() . '</span>';
                                                            break;
                                                    }
                                                endif;
                                                if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])):
                                                    ?>
                                                    <span class = "ttp-thumb-position">
                                                        <?php echo esc_attr($team_member_general_info['ttp_team_position_post']); ?>
                                                    </span>
                                                    <?php
                                                endif;
                                                if ((isset($team_member_general_info) && !empty($team_member_general_info)) && (isset($template_type) && $template_type == 'basic')) {
                                                    ?>        
                                                    <div class="ttp-secondary-content">
                                                        <?php echo $totalteam_lite_object->totalteam_member_grid_list_thumb_type_filter(get_the_id(), $thumb_content); ?>
                                                    </div>
                                                <?php }
                                                ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="ttp-grid-thumb-wrapper">
                                        <div class="ttp-primary-content">   
                                            <div class="content-wrapper" id="arrow-<?php echo $i; ?>">  
                                                <div class="ttp-grid-image">
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <img src='<?php echo $img_thumbnail[0]; ?>' alt="<?php the_title(); ?>" />
                                                    <?php endif; ?>
                                                    <div class="ttp-inner-image-whole-wrapper">
                                                        <?php
                                                        switch ($additional_detail_type) {
                                                            case 'popup':
                                                                echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click ttp-expand-popup-click-action"><i class="fa ' . $custom_expand_icon_final . '"></i></span>';
                                                                break;
                                                            case 'none':
                                                                break;
                                                        }
                                                        if (!empty(get_the_title())):
                                                            switch ($additional_detail_type) {
                                                                case 'popup':
                                                                    echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</span>';
                                                                    break;
                                                                case 'none':
                                                                    echo '<span class="ttp-content-header">' . get_the_title() . '</span>';
                                                                    break;
                                                                default:
                                                                    echo '<span class="ttp-content-header">' . get_the_title() . '</span>';
                                                                    break;
                                                            }
                                                            ?>
                                                        <?php endif; ?>
                                                        <?php if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])): ?>
                                                            <span class = "ttp-thumb-position">
                                                                <?php echo esc_attr($team_member_general_info['ttp_team_position_post']); ?>
                                                            </span>
                                                        <?php endif; ?>
                                                        <?php if (isset($team_member_general_info) && !empty($team_member_general_info)) { ?>        
                                                            <div class="ttp-secondary-content">
                                                                <?php echo $totalteam_lite_object->totalteam_member_grid_list_thumb_type_filter(get_the_id(), $thumb_content); ?>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="ttp-thumb-social-link clearfix">
                                                            <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php
                                if (isset($additional_detail_type) && $additional_detail_type == 'slide-out') {
                                    include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/frontend/content/slide-out.php' );
                                }
                                ?>
                            </div>
                            <?php
                            if ($i % $element_per_row == 0 || $team_member_qry->current_post + 1 == $team_member_qry->post_count) {
                                ?>
                            </div>
                            <div id="team-infos-block" class="team-info-block clearfix" style="display: none; clear:both;"></div>
                        </div>
                        <?php
                        $i = 1;
                    } else {
                        $i++;
                    }
                }
                wp_reset_postdata();
            }
            ?>
        </div>
        <?php
        if (isset($additional_detail_type) && $additional_detail_type == 'popup') {
            include( TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/frontend/content/popup.php' );
        }
        ?>
    </div>
    <div class='ttp-popup-content-overlay' data-disp-type="<?php echo $additional_detail_type; ?>" style="display:none"></div>
</div>