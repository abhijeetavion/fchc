<?php
defined('ABSPATH') or die("No script kiddies please!");
?>
<div class="ttp-wrapper <?php echo 'ttp-' . $layout_type; ?>" id="<?php echo 'ttp-wrapper-' . $layout_type . '-' . $random_num; ?>">
    <div class="ttp-team-content-outer-wrap" id="ttp-<?php echo $template; ?>">
        <div class="ttp-carousal-grid-content owl-carousel owl-theme" data-element-per-row="<?php echo esc_attr($element_per_row); ?>" data-show-hide-nextprev="<?php echo esc_attr($show_hide_control); ?>" data-pause-duration="<?php echo esc_attr($pause_duration); ?>" data-speed="<?php echo esc_attr($speed); ?>" data-auto="<?php echo esc_attr($auto); ?>">			
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
            $i = 0;
            if ($team_member_qry->have_posts()) {
                while ($team_member_qry->have_posts()) {
                    $team_member_qry->the_post();
                    $img_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'totalteam-large', false);
                    $i++;
                    $team_member_general_info = get_post_meta(get_the_id(), 'theteam_general_settings', true);
                    ?>
                    <div class="ttp-carousal-inner ttp-inner-whole-wrapper">          
                        <div class="ttp-primary-content">   
                            <div class="content-wrapper" id="arrow-<?php echo $i; ?>">  
                                <div class="ttp-grid-image">
                                    <img src='<?php echo $img_thumbnail[0]; ?>' alt="<?php the_title(); ?>" />
                                    <?php
                                    switch ($additional_detail_type) {
                                        case 'popup':
                                        case 'slide-out':
                                            echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click ttp-expand-popup-click-action"><i class="fa ' . $custom_expand_icon_final . '"></i></span>';
                                            break;
                                        case 'single-page':
                                            echo '<a href="' . get_permalink() . '"><span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-slide-out-click ttp-expand-slide-out-click-action"><i class="fa ' . $custom_expand_icon_final . '"></i></span></a>';
                                            break;
                                    }
                                    ?>    
                                </div>
                            </div>
                            <?php
                            switch ($additional_detail_type) {
                                case 'popup':
                                    echo '<div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</div>';
                                    break;
                                case 'slide-out':
                                    echo '<div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-slide-out-click-action ttp-content-header">' . get_the_title() . '</div>';
                                    break;
                                case 'single-page':
                                    echo '<a href="' . get_permalink() . '"><div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-slide-out-click-action ttp-content-header">' . get_the_title() . '</div></a>';
                                    break;
                                case 'none':
                                default:
                                    echo '<div class="ttp-content-header">' . get_the_title() . '</div>';
                                    break;
                            }
                            ?>
                            <span class = "ttp-thumb-position">
                                <?php echo $team_member_general_info['ttp_team_position_post']; ?>
                            </span>
                        </div>
                        <div class="ttp-thumb-social-link clearfix">
                            <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                        </div>
                    </div>
                    <?php
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

