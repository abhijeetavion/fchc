<?php
defined('ABSPATH') or die("No script kiddies please!");

$category_array = array();
$member_array = '';

$display_type = (isset($attr['display_type'])) ? esc_attr($attr['display_type']) : 'all';
$member_id = (isset($attr['member_id'])) ? $attr['member_id'] : '';
$category_id = (isset($attr['category_id'])) ? $attr['category_id'] : '';
$team_number = (isset($attr['team_number'])) ? $attr['team_number'] : '99';
$custom_layout = (isset($attr['custom_layout'])) ? $attr['custom_layout'] : 'default';
$element_per_row = '1';
$grid_image_size = 'totalteam-large';
$margin = (isset($attr['margin'])) ? $attr['margin'] : '2';
$width = (isset($attr['width'])) ? $attr['width'] : '2';
$additional_detail_type = (isset($attr['additional_detail_type'])) && $attr['additional_detail_type'] !== 'slide-out' ? $attr['additional_detail_type'] : 'popup';
$content_position = (isset($attr['content_position'])) && ($attr['content_position'] !== 'right' || $attr['content_position'] !== 'left') ? esc_attr($attr['content_position']) : 'center';
$thumbnail_display = (isset($attr['thumbnail_display'])) ? $attr['thumbnail_display'] : 'square';
$template = (isset($attr['template'])) ? $attr['template'] : 'template-1';
$thumb_content = (isset($attr['thumb_content'])) ? $attr['thumb_content'] : 'general';
$order = (isset($attr['order'])) ? $attr['order'] : 'DESC';
$orderby = (isset($attr['orderby'])) ? $attr['orderby'] : 'date';
$filter_taxonomy = 'totalteam_taxonomy';
$myArray = explode(',', $category_id);
$filter_terms = get_terms($filter_taxonomy);
foreach ($myArray as $filter_key => $filter_val) {
    array_push($category_array, $filter_val);
}
$category_array_check = array_filter($category_array);
if (!empty($category_array_check)) {
    $category_array_value = array(
        array(
            'taxonomy' => 'totalteam_taxonomy',
            'field' => 'term_id',
            'terms' => $category_array
        ),
    );
} else {
    $category_array_value = '';
}

if (!empty($member_id)) {
    $member_array = explode(',', $member_id);
} else {
    $member_array = '';
}
$template_array = array('template-3');
$template_array2 = array('template-4');
$template_array3 = array('template-5');
$template_array4 = array('template-7');
$template_array5 = array('template-6');
$random_num = rand(111111111, 999999999);
$list_template_html_array = array('template-1', 'template-2');
if (in_array($template, $list_template_html_array)) {
    $custom_expand_icon_final = isset($custom_expand_icon) && !empty($custom_expand_icon) ? $custom_expand_icon : 'fa-search';
    ?>
    <div class="ttp-wrapper <?php echo 'ttp-' . $layout_type; ?>" id="<?php echo 'ttp-wrapper-' . $layout_type . '-' . $random_num; ?>">
        <div class="ttp-team-content-outer-wrap" id="ttp-<?php echo $template; ?>">
            <div class="ttp-layout-contents <?php echo 'ttp-' . $layout_type . '-content'; ?>" id="ttp-column-1">
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
                        $inner_team_description_setting = get_post_meta(get_the_id(), 'ttp_description_seting', true);
                        $count = $team_member_qry->post_count;
                        ?>
                        <div class="grid-row-wrapper">
                            <div class="grid-row-wrapper-inner clearfix">
                                <div class="ttp-inner-whole-wrapper clearfix">        
                                    <?php if (!in_array($template, $template_array4) && !in_array($template, $template_array5)) { ?>
                                        <div class="ttp-primary-content-left">  
                                            <div class="ttp-primary-content">   
                                                <div class="content-wrapper" id="arrow-<?php echo $i; ?>">  
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <div class="ttp-grid-image">
                                                            <img src='<?php echo $img_thumbnail[0]; ?>' alt="<?php the_title(); ?>" />
                                                            <?php
                                                            switch ($additional_detail_type) {
                                                                case 'slide-out':
                                                                case 'popup':
                                                                    echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click ttp-expand-popup-click-action"><i class="fa ' . $custom_expand_icon_final . '"></i></span>';
                                                                    break;
                                                                case 'none';
                                                                    break;
                                                            }
                                                            ?>
                                                            <?php if (in_array($template, $template_array3)) { ?>
                                                                <div class="ttp-list-title-pos-wrap">
                                                                    <?php if (!empty(get_the_title())): ?>
                                                                        <?php
                                                                        switch ($additional_detail_type) {
                                                                            case 'slide-out':
                                                                            case 'popup':
                                                                                echo '<div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</div>';
                                                                                break;
                                                                           case 'none':
                                                                                echo '<div class="ttp-content-header">' . get_the_title() . '</div>';
                                                                                break;
                                                                        }
                                                                        ?>
                                                                    <?php endif; ?>
                                                                    <?php if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])): ?>
                                                                        <span class = "ttp-thumb-position">
                                                                            <?php echo $team_member_general_info['ttp_team_position_post']; ?>
                                                                        </span>
                                                                    <?php endif; ?>
                                                                </div>
                                                            <?php } ?>
                                                            <?php if (in_array($template, $template_array3)) { ?>
                                                                <div class="ttp-team-member-social-link">
                                                                    <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                                                                </div>
                                                            <?php } ?>   
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php
                                                    if (!in_array($template, $template_array) && !in_array($template, $template_array3) && in_array($template, $template_array2) ||
                                                            !in_array($template, $template_array) && !in_array($template, $template_array3) && in_array($template, array('template-1', 'template-2', 'template-3'))) {
                                                        ?>
                                                        <div class="ttp-team-member-social-link">
                                                            <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                                                        </div>
                                                    <?php } ?>   
                                                    <?php if (in_array($template, $template_array)) { ?>
                                                        <div class="ttp-list-title-pos-wrap">
                                                            <?php if (!empty(get_the_title())): ?>
                                                                <?php
                                                                switch ($additional_detail_type) {
                                                                    case 'slide-out':
                                                                    case 'popup':
                                                                        echo '<div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</div>';
                                                                        break;
                                                                    case 'none':
                                                                        echo '<div class="ttp-content-header">' . get_the_title() . '</div>';
                                                                        break;
                                                                }
                                                                ?>
                                                            <?php endif; ?>
                                                            <?php if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])): ?>
                                                                <span class = "ttp-thumb-position">
                                                                    <?php echo $team_member_general_info['ttp_team_position_post']; ?>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ttp-primary-content-right">
                                            <?php if (!in_array($template, $template_array) && !in_array($template, $template_array2) && !in_array($template, $template_array3)) { ?>
                                                <div class="ttp-list-title-pos-wrap">
                                                    <?php if (!empty(get_the_title())): ?>
                                                        <?php
                                                        switch ($additional_detail_type) {
                                                            case 'slide-out':
                                                            case 'popup':
                                                                echo '<div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</div>';
                                                                break;
                                                            case 'none':
                                                                echo '<div class="ttp-content-header">' . get_the_title() . '</div>';
                                                                break;
                                                        }
                                                        ?>
                                                    <?php endif; ?>
                                                    <?php if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])): ?>
                                                        <span class = "ttp-thumb-position">
                                                            <?php echo $team_member_general_info['ttp_team_position_post']; ?>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            <?php }else if (!in_array($template, $template_array) && in_array($template, $template_array2)) { ?>
                                                <div class="ttp-list-title-pos-wrap">
                                                    <?php if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])): ?>
                                                        <span class = "ttp-thumb-position">
                                                            <?php echo $team_member_general_info['ttp_team_position_post']; ?>
                                                        </span>
                                                    <?php endif; ?>
                                                    <?php if (!empty(get_the_title())): ?>
                                                        <?php
                                                        switch ($additional_detail_type) {
                                                            case 'slide-out':
                                                            case 'popup':
                                                                echo '<div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</div>';
                                                                break;
                                                            case 'single-page':
                                                                echo '<a href="' . get_permalink() . '"><div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-slide-out-click-action ttp-content-header">' . get_the_title() . '</div></a>';
                                                                break;
                                                            case 'none':
                                                                echo '<div class="ttp-content-header">' . get_the_title() . '</div>';
                                                                break;
                                                        }
                                                        ?>
                                                    <?php endif; ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (!empty($inner_team_description_setting['short_Description'])) { ?>
                                                <span class="ttp-thumb-description"><?php echo $inner_team_description_setting['short_Description']; ?></span>
                                            <?php } ?>
                                            <?php if (isset($team_member_general_info) && !empty($team_member_general_info)) { ?>        
                                                <div class="ttp-secondary-content">
                                                    <?php echo $totalteam_lite_object->totalteam_member_grid_list_thumb_type_filter(get_the_id(), $thumb_content); ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (in_array($template, $template_array)) { ?>
                                                <div class="ttp-team-member-social-link">
                                                    <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                                                </div>
                                            <?php } ?>   
                                        </div>

                                    <?php } else if (in_array($template, $template_array5)) {
                                        ?>
                                        <div class="ttp-primary-content-top">  
                                            <div class="ttp-primary-content">   
                                                <div class="content-wrapper" id="arrow-<?php echo $i; ?>">  
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <div class="ttp-grid-image">
                                                            <img src='<?php echo $img_thumbnail[0]; ?>' alt="<?php the_title(); ?>" />
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php
                                                    switch ($additional_detail_type) {
                                                        case 'slide-out':
                                                        case 'popup':
                                                            echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click ttp-expand-popup-click-action"><i class="fa ' . $custom_expand_icon_final . '"></i></span>';
                                                            break;
                                                        case 'single-page':
                                                            echo '<a href="' . get_permalink() . '"><span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-slide-out-click ttp-expand-slide-out-click-action"><i class="fa ' . $custom_expand_icon_final . '"></i></span></a>';
                                                            break;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="ttp-primary-content-bottom">
                                            <?php if (!empty(get_the_title())): ?>
                                                <?php
                                                switch ($additional_detail_type) {
                                                    case 'slide-out':
                                                    case 'popup':
                                                        echo '<div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</div>';
                                                        break;
                                                    case 'single-page':
                                                        echo '<a href="' . get_permalink() . '"><div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-slide-out-click-action ttp-content-header">' . get_the_title() . '</div></a>';
                                                        break;
                                                    case 'none':
                                                        echo '<div class="ttp-content-header">' . get_the_title() . '</div>';
                                                        break;
                                                }
                                                ?>
                                            <?php endif; ?>
                                            <?php if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])): ?>
                                                <span class = "ttp-thumb-position">
                                                    <?php echo $team_member_general_info['ttp_team_position_post']; ?>
                                                </span>
                                            <?php endif; ?>
                                            <?php if (!empty($inner_team_description_setting['short_Description'])) { ?>
                                                <span class="ttp-thumb-description"><?php echo $inner_team_description_setting['short_Description']; ?></span>
                                            <?php } ?>
                                            <?php if (isset($team_member_general_info) && !empty($team_member_general_info)) { ?>        
                                                <div class="ttp-secondary-content">
                                                    <?php echo $totalteam_lite_object->totalteam_member_grid_list_thumb_type_filter(get_the_id(), $thumb_content); ?>
                                                </div>
                                            <?php } ?>
                                            <div class="ttp-team-member-social-link">
                                                <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="ttp-primary-content-right">
                                            <?php if (!empty(get_the_title())): ?>
                                                <?php
                                                switch ($additional_detail_type) {
                                                    case 'popup':
                                                    case 'slide-out':
                                                        echo '<div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click-action ttp-content-header">' . get_the_title() . '</div>';
                                                        break;
                                                    case 'single-page':
                                                        echo '<a href="' . get_permalink() . '"><div data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-slide-out-click-action ttp-content-header">' . get_the_title() . '</div></a>';
                                                        break;
                                                    case 'none':
                                                        echo '<div class="ttp-content-header">' . get_the_title() . '</div>';
                                                        break;
                                                }
                                                ?>
                                            <?php endif; ?>
                                            <?php if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])): ?>
                                                <span class = "ttp-thumb-position">
                                                    <?php echo $team_member_general_info['ttp_team_position_post']; ?>
                                                </span>
                                            <?php endif; ?>
                                            <?php if (!empty($inner_team_description_setting['short_Description'])) { ?>
                                                <span class="ttp-thumb-description"><?php echo $inner_team_description_setting['short_Description']; ?></span>
                                            <?php } ?>
                                            <?php if (isset($team_member_general_info) && !empty($team_member_general_info)) { ?>        
                                                <div class="ttp-secondary-content">
                                                    <?php echo $totalteam_lite_object->totalteam_member_grid_list_thumb_type_filter(get_the_id(), $thumb_content); ?>
                                                </div>
                                            <?php } ?>
                                            <div class="ttp-team-member-social-link">
                                                <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                                            </div>
                                        </div>
                                        <div class="ttp-primary-content-left">  
                                            <div class="ttp-primary-content">   
                                                <div class="content-wrapper" id="arrow-<?php echo $i; ?>">  
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <div class="ttp-grid-image">
                                                            <img src='<?php echo $img_thumbnail[0]; ?>' alt="<?php the_title(); ?>" />
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php
                                                    switch ($additional_detail_type) {
                                                        case 'slide-out':
                                                        case 'popup':
                                                            echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-popup-click ttp-expand-popup-click-action"><i class="fa ' . $custom_expand_icon_final . '"></i></span>';
                                                            break;
                                                        case 'single-page':
                                                            echo '<a href="' . get_permalink() . '"><span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '" data-disp-pos="' . $content_position . '" class="ttp-expand-slide-out-click ttp-expand-slide-out-click-action"><i class="fa ' . $custom_expand_icon_final . '"></i></span></a>';
                                                            break;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="team-infos-block" class="team-info-block clearfix" style="display: none;"></div>
                        </div>
                        <?php
                        $i++;
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
    <?php
}