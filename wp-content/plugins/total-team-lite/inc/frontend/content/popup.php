<?php
$team_member_qry = new WP_Query(array(
    'post_type' => 'totalteam',
    'post_status' => 'publish',
    'tax_query' => $category_array_value,
    'post__in' => $member_array,
    'posts_per_page' => $team_number,
    'order' => 'DESC'
        ));
$i = 0;
if ($team_member_qry->have_posts()) {
    while ($team_member_qry->have_posts()) {
        $team_member_qry->the_post();
        $img_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'totalteam-large', false);
        $team_member_general_info = get_post_meta(get_the_id(), 'theteam_general_settings', true);
        ?>
        <div class="ttp-team-inner-hidden <?php echo 'ttp-' . $layout_type . '-' . $additional_detail_type; ?> <?php echo 'ttp-popup-content-' . $content_position; ?>" id="ttp-inner-content-<?php echo get_the_id(); ?>" style='display:none'>        
            <?php
            switch ($additional_detail_type) {
                case 'popup':
                case 'slide-out':
                    echo '<span data-id="' . get_the_id() . '" data-disp-type="' . $additional_detail_type . '"class="ttp-additional-detail-close"></span>';
                    break;
            }
            if (isset($additional_detail_type) && $additional_detail_type == 'popup' && $content_position != 'center') {
                ?>      
                <div class="ttp-popup-content-fix-wrap">
                    <?php if (has_post_thumbnail()): ?>
                        <span class="ttp-thumb-image">
                            <img src='<?php echo $img_thumbnail[0]; ?>' alt="<?php the_title(); ?>" />
                        </span>
                        <?php
                    endif;
                    if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])):
                        ?>
                        <span class="ttp-thumb-position">
                            <?php echo $team_member_general_info['ttp_team_position_post']; ?>
                        </span>
                        <?php
                    endif;
                    if (!empty(get_the_title())):
                        ?>
                        <div class="ttp-content-header">
                            <?php echo get_the_title(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="ttp-thumb-social-link clearfix">
                        <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                    </div>
                </div>
                <div class="ttp-team-member-content">
                    <?php the_content(); ?>
                </div>
                <?php
            }else if (isset($additional_detail_type) && $additional_detail_type == 'popup' && $content_position == 'center') {
                ?>
                <div class="ttp-popup-content-fix-wrap">
                    <?php if (has_post_thumbnail()): ?>
                        <span class="ttp-thumb-image">
                            <img src='<?php echo $img_thumbnail[0]; ?>' alt="<?php the_title(); ?>" />
                        </span>
                        <?php
                    endif;
                    if (!empty(get_the_title())):
                        ?>
                        <div class="ttp-content-header">
                            <?php echo get_the_title(); ?>
                        </div>
                        <?php
                    endif;
                    if (isset($team_member_general_info) && !empty($team_member_general_info['ttp_team_position_post'])):
                        ?>
                        <span class="ttp-thumb-position">
                            <?php echo $team_member_general_info['ttp_team_position_post']; ?>
                        </span>
                        <?php
                    endif;
                    ?>
                    <div class="ttp-thumb-social-link clearfix">
                        <?php echo $totalteam_lite_object->totalteam_member_social_links_lists(get_the_id()); ?>
                    </div>
                </div>
                <div class="ttp-team-member-content">
                    <?php the_content(); ?>
                </div>
            <?php }
            ?>
        </div>
        <?php
    }
    wp_reset_postdata();
}