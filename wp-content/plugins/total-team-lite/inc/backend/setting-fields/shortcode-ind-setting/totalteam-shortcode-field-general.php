<?php if (isset($_GET['page']) && ($_GET['page'] == 'totalteam-shortcode-generator')) { ?>
    <h4 class="ttp-member-shortcode-header"><?php _e('Shortcode Generator', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></h4> 
<?php } else { ?><?php } ?>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Team Member Filter', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_number_to_show" id="ttp-member-element-type-select">
            <option value="all"><?php _e('No Sort Filter', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="member-id"><?php _e('By Member ID', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="category-id"><?php _e('By Category ID', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap ttp-shortcode-id-checkbox-outer-wrap" id="ttp-content-by-member-id" style="display:none;">
    <label>
        <?php echo __('Custom Member ID', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field ttp-shortcode-id-checkbox-wrap" id="ttp-member-by-id-checkbox-wrap" >
        <?php
        $args = array(
            'post_type' => 'totalteam',
            'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <div>        
                    <label class="ttp-input-field">
                        <input class="ttp-add-check ttp-shortcode-member-id-check" type="checkbox" name="ttp_add_member_check[]" data-author-name="<?php echo get_the_title(); ?>" value="<?php the_id(); ?>"/>
                        <?php echo!empty(get_the_title()) ? get_the_title() : 'Untitled'; ?>
                    </label>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
<div class="ttp-input-field-wrap ttp-shortcode-id-checkbox-outer-wrap" id="ttp-content-by-category-id" style="display:none;">
    <label>
        <?php echo __('Custom Category ID', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field ttp-shortcode-id-checkbox-wrap" id="ttp-member-by-category-checkbox-wrap">
        <?php
        $taxonomy = 'totalteam_taxonomy';
        $terms = get_terms($taxonomy); // Get all terms of a taxonomy

        if ($terms && !is_wp_error($terms)) :
            foreach ($terms as $term):
                ?>
                <div>        
                    <label class="ttp-input-field">
                        <input class="ttp-add-check ttp-shortcode-category-id-check" type="checkbox" name="ttp_add_category_check[]" data-author-name="<?php echo $term->name; ?>" value="<?php echo $term->term_id; ?>"/>
                        <?php echo $term->name; ?>
                    </label>
                </div>
                <?php
            endforeach;
        endif;
        ?>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Team Member to Show', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <input type="number" name="ttp_member_element_to_show" id="ttp-member-element-to-show" value="99"/>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Team Member Orderby', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_number_to_show" id="ttp-member-order-by-select">
            <option value="date" selected="selected"><?php _e('Date', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="title"><?php _e('Title', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="ID"><?php _e('ID', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="modified"><?php _e('Last Modified Date', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="rand"><?php _e('Random', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap">
    <label>
        <?php echo __('Team Member Order', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_number_to_show" id="ttp-member-order-type-select">
            <option value="DESC" selected="selected"><?php _e('DESC', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
            <option value="ASC"><?php _e('ASC', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>
<div class="ttp-input-field-wrap" style='display:none;'>
    <label>
        <?php echo __('Custom Template', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
    </label>
    <div class="ttp-input-field">
        <select class="ttp-dropdown" name="ttp_element_number_to_show" id="ttp-member-element-custom-layout">
            <option value="off"><?php _e('Off', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
        </select>
    </div>
</div>


