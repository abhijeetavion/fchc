<?php
defined('ABSPATH') or die("No script kiddies please!");

/**
 * Total Team Widget
 */
if (!class_exists('Totalteamlite_Widget')) {

    class Totalteamlite_Widget extends WP_Widget {

        /**
         * Register widget with WordPress.
         */
        function __construct() {
            parent::__construct(
                    'totalteam_widget', // Base ID
                    __('Total Team Lite Widget', TOTAL_TEAM_LITE_TEXT_DOMAIN), // Name OF widget
                    array('description' => __('Total Team Lite Display Widget', TOTAL_TEAM_LITE_TEXT_DOMAIN)) // Args For Widget
            );
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance) {
            $ttp_pro_object = new TOTAL_TEAM_LITE();
            $member_check = (!empty($instance['ttp_add_member_check']) ) ? $instance['ttp_add_member_check'] : '';
            $category_check = (!empty($instance['ttp_add_category_check']) ) ? $instance['ttp_add_category_check'] : '';
            $member_check_array = array();
            $category_check_array = array();
            if (isset($member_check) && !empty($member_check)) {
                foreach ($member_check as $member_check_k => $member_check_v) {
                    array_push($member_check_array, $member_check_v);
                }
            }
            if (isset($category_check) && !empty($category_check)) {
                foreach ($category_check as $category_check_k => $category_check_v) {
                    array_push($category_check_array, $category_check_v);
                }
            }
            ?>
            <div class="ttp-widget-sec-wrap">
                <div class="ttp-widget-input-field-wrap" id="ttp-widget-setting-field">
                    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></label>
                    <div class="ttp-widget-input-field">
                        <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo isset($instance['title']) ? $instance['title'] : ''; ?>">        
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap">
                    <label for="<?php echo $this->get_field_id('totalteam_layout_type'); ?>">
                        <?php echo __('Layout Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field">
                        <select id="<?php echo $this->get_field_id('layout_type'); ?>" name="<?php echo $this->get_field_name('layout_type'); ?>" class="ttp-widget-layout-type-dropdown">
                            <option value="grid-layout" <?php echo isset($instance['layout_type']) && $instance['layout_type'] == 'grid-layout' ? 'selected="selected"' : ''; ?>>
                                <?php _e('Grid Layout', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="carousal-layout" <?php echo isset($instance['layout_type']) && $instance['layout_type'] == 'carousal-layout' ? 'selected="selected"' : ''; ?>>
                                <?php _e('Carousal Layout', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        </select>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap" id="ttp-grid-layout-basic-template" <?php if (isset($instance['layout_type']) && $instance['layout_type'] == 'grid-layout') { ?> style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
                    <label>
                        <?php echo __('Select Template', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field">
                        <select class="ttp-dropdown ttp-inner-layout-type" id="<?php echo $this->get_field_id('grid_template_name'); ?>" name="<?php echo $this->get_field_name('grid_template_name'); ?>">
                            <?php for ($i = 1; $i <= 6; $i++) { ?>
                                <option class="ttp-testim-temp" value="template-<?php echo $i; ?>" <?php echo (isset($instance['grid_template_name']) && $instance['grid_template_name'] == 'template-' . $i) ? 'selected="selected"' : ''; ?>><?php
                                    _e('Template', TOTAL_TEAM_LITE_TEXT_DOMAIN);
                                    echo " " . $i;
                                    ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap" id="ttp-list-layout-basic-template" <?php if (isset($instance['layout_type']) && $instance['layout_type'] == 'list-layout') { ?> style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
                    <label>
                        <?php echo __('Select Template', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field">
                        <select class="ttp-dropdown ttp-inner-layout-type" id="<?php echo $this->get_field_id('list_template_name'); ?>" name="<?php echo $this->get_field_name('list_template_name'); ?>">
                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                                <option class="ttp-testim-temp" value="template-<?php echo $i; ?>" <?php echo (isset($instance['list_template_name']) && $instance['list_template_name'] == 'template-' . $i) ? 'selected="selected"' : ''; ?>><?php
                                    _e('Template', TOTAL_TEAM_LITE_TEXT_DOMAIN);
                                    echo " " . $i;
                                    ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap" id="ttp-carousal-layout-basic-template" <?php if (isset($instance['layout_type']) && ($instance['layout_type'] == 'carousal-layout' || $instance['layout_type'] == 'flipster-layout')) { ?> style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
                    <label>
                        <?php echo __('Select Template', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field">
                        <select class="ttp-dropdown ttp-inner-layout-type" id="<?php echo $this->get_field_id('carousal_template_name'); ?>" name="<?php echo $this->get_field_name('carousal_template_name'); ?>">
                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                                <option class="ttp-testim-temp" value="template-<?php echo $i; ?>" <?php echo (isset($instance['carousal_template_name']) && $instance['carousal_template_name'] == 'template-' . $i) ? 'selected="selected"' : ''; ?>><?php
                                    _e('Template', TOTAL_TEAM_LITE_TEXT_DOMAIN);
                                    echo " " . $i;
                                    ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div id="ttp-thumbnail-layout-basic-template" <?php if (isset($instance['layout_type']) && $instance['layout_type'] == 'thumbnail-layout') { ?> style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
                    <div class="ttp-widget-input-field-wrap" >
                        <label>
                            <?php echo __('Show/Hide Title and Position', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                        </label>
                        <div class="ttp-input-field">
                            <select class="ttp-dropdown" id="<?php echo $this->get_field_id('show_hide_thumbnail_title'); ?>" name="<?php echo $this->get_field_name('show_hide_thumbnail_title'); ?>">
                                <option value="hide" <?php echo (isset($instance['show_hide_thumbnail_title']) && $instance['show_hide_thumbnail_title'] == 'hide') ? 'selected="selected"' : ''; ?>>
                                    <?php _e('Hide', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                <option value="show" <?php echo (isset($instance['show_hide_thumbnail_title']) && $instance['show_hide_thumbnail_title'] == 'show') ? 'selected="selected"' : ''; ?>>
                                    <?php _e('Show', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="ttp-widget-input-field-wrap" id="ttp-thumbnail-layout-basic-template">
                        <label>
                            <?php echo __('Thumbnail Display type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                        </label>
                        <div class="ttp-input-field">
                            <select class="ttp-dropdown" id="<?php echo $this->get_field_id('show_hide_thumbnail_square_rounded'); ?>" name="<?php echo $this->get_field_name('show_hide_thumbnail_square_rounded'); ?>">
                                <option value="square" <?php echo (isset($instance['show_hide_thumbnail_square_rounded']) && $instance['show_hide_thumbnail_square_rounded'] == 'square') ? 'selected="selected"' : ''; ?>>
                                    <?php _e('Square', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                                <option value="circular" <?php echo (isset($instance['show_hide_thumbnail_square_rounded']) && $instance['show_hide_thumbnail_square_rounded'] == 'circular') ? 'selected="selected"' : ''; ?>>
                                    <?php _e('Circular', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap">
                    <label>
                        <?php echo __('Member Display Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field">
                        <select class="ttp-widget-display-type-dropdown" id="<?php echo $this->get_field_id('element_to_show'); ?>" name="<?php echo $this->get_field_name('element_to_show'); ?>" >
                            <option value="all" <?php echo isset($instance['element_to_show']) && $instance['element_to_show'] == 'all' ? 'selected="selected"' : ''; ?>>
                                <?php _e('No Sort Filter', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="member-id" <?php echo isset($instance['element_to_show']) && $instance['element_to_show'] == 'member-id' ? 'selected="selected"' : ''; ?>>
                                <?php _e('By Member ID', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="category-id" <?php echo isset($instance['element_to_show']) && $instance['element_to_show'] == 'category-id' ? 'selected="selected"' : ''; ?>>
                                <?php _e('By Category ID', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        </select>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap ttp-shortcode-id-checkbox-outer-wrap" id="ttp-widget-content-by-member-id" <?php if (isset($instance['element_to_show']) && $instance['element_to_show'] == 'member-id') { ?> style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
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
                                    <label class="ttp-widget-input-field">
                                        <input class="ttp-add-check ttp-shortcode-member-id-check" type="checkbox" id="<?php echo $this->get_field_id('ttp_add_member_check'); ?>" name="<?php echo $this->get_field_name('ttp_add_member_check'); ?>[]" data-author-name="<?php echo get_the_title(); ?>" value="<?php the_id(); ?>" <?php
                                        if (in_array(get_the_id(), $member_check_array)) {
                                            echo 'checked="checked"';
                                        }
                                        ?>/>
                                               <?php echo!empty(get_the_title()) ? get_the_title() : 'Untitled'; ?>
                                    </label>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap ttp-shortcode-id-checkbox-outer-wrap" id="ttp-widget-content-by-category-id" <?php if (isset($instance['element_to_show']) && $instance['element_to_show'] == 'category-id') { ?> style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
                    <label>
                        <?php echo __('Custom Category ID', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field ttp-shortcode-id-checkbox-wrap" id="ttp-member-by-category-checkbox-wrap">
                        <?php
                        $taxonomy = 'totalteam_taxonomy';
                        $terms = get_terms($taxonomy); // Get all terms of a taxonomy

                        if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term):
                                ?>
                                <div>        
                                    <label class="widget-ttp-input-field">
                                        <input class="ttp-add-check ttp-shortcode-category-id-check" type="checkbox" id="<?php echo $this->get_field_id('ttp_add_category_check'); ?>" name="<?php echo $this->get_field_name('ttp_add_category_check'); ?>[]" data-author-name="<?php echo $term->name; ?>" value="<?php echo $term->term_id; ?>" <?php
                                        if (in_array($term->term_id, $category_check_array)) {
                                            echo 'checked="checked"';
                                        }
                                        ?>/>
                                               <?php echo $term->name; ?>
                                    </label>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap">
                    <label>
                        <?php echo __('Team Member to Show', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field">
                        <input type="number" id="<?php echo $this->get_field_id('element_number_to_show'); ?>" name="<?php echo $this->get_field_name('element_number_to_show'); ?>" value="<?php echo isset($instance['element_number_to_show']) ? $instance['element_number_to_show'] : '99'; ?>"/>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap">
                    <label>
                        <?php echo __('Element To Show on Grid', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field">
                        <select class="ttp-dropdown" id="<?php echo $this->get_field_id('grid_element_to_show'); ?>" name="<?php echo $this->get_field_name('grid_element_to_show'); ?>">
                            <option value="general" <?php echo (isset($instance['grid_element_to_show']) && $instance['grid_element_to_show'] == 'general') ? 'selected="selected"' : ''; ?>>
                                <?php _e('General', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="description" <?php echo (isset($instance['grid_element_to_show']) && $instance['grid_element_to_show'] == 'description') ? 'selected="selected"' : ''; ?>>
                                <?php _e('Description', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="quote" <?php echo (isset($instance['grid_element_to_show']) && $instance['grid_element_to_show'] == 'quote') ? 'selected="selected"' : ''; ?>>
                                <?php _e('Quote', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="skills" <?php echo (isset($instance['grid_element_to_show']) && $instance['grid_element_to_show'] == 'skills') ? 'selected="selected"' : ''; ?>>
                                <?php _e('Skills', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="link" <?php echo (isset($instance['grid_element_to_show']) && $instance['grid_element_to_show'] == 'link') ? 'selected="selected"' : ''; ?>>
                                <?php _e('External links', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="none" <?php echo (isset($instance['grid_element_to_show']) && $instance['grid_element_to_show'] == 'none') ? 'selected="selected"' : ''; ?>>
                                <?php _e('None', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        </select>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap" style="display:none;">
                    <label>
                        <?php echo __('Custom Template', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field">
                        <select class="ttp-dropdown" id="<?php echo $this->get_field_id('element_custom_design'); ?>" name="<?php echo $this->get_field_name('element_custom_design'); ?>">
                            <option value="off"><?php _e('Off', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        </select>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap">
                    <label>
                        <?php echo __('Additional Detail Display Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field">
                        <select class="ttp-dropdown" id="<?php echo $this->get_field_id('additional_display_type'); ?>" name="<?php echo $this->get_field_name('additional_display_type'); ?>">
                            <option value="popup" <?php echo isset($instance['additional_display_type']) && $instance['additional_display_type'] == 'popup' ? 'selected="selected"' : ''; ?>>
                                <?php _e('Popup', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="single-page" <?php echo isset($instance['additional_display_type']) && $instance['additional_display_type'] == 'single-page' ? 'selected="selected"' : ''; ?>>
                                <?php _e('Single Page', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="none" <?php echo isset($instance['additional_display_type']) && $instance['additional_display_type'] == 'none' ? 'selected="selected"' : ''; ?>>
                                <?php _e('None', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        </select>
                    </div>
                </div>
                <div class="ttp-widget-input-field-wrap">
                    <label>
                        <?php echo __('Popup Content Position', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
                    </label>
                    <div class="ttp-widget-input-field">
                        <select class="ttp-dropdown" id="<?php echo $this->get_field_id('additional_display_position'); ?>" name="<?php echo $this->get_field_name('additional_display_position'); ?>">
                            <option value="right" <?php echo isset($instance['additional_display_position']) && $instance['additional_display_position'] == 'right' ? 'selected="selected"' : ''; ?>>
                                <?php _e('Right', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="center" <?php echo isset($instance['additional_display_position']) && $instance['additional_display_position'] == 'center' ? 'selected="selected"' : ''; ?>>
                                <?php _e('Center', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                            <option value="left" <?php echo isset($instance['additional_display_position']) && $instance['additional_display_position'] == 'left' ? 'selected="selected"' : ''; ?>>
                                <?php _e('Left', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></option>
                        </select>
                    </div>
                </div>

            </div>
            <?php
        }

        /**
         * Sanitize widget form values as they are saved.
         *
         * @see WP_Widget::update()
         *
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values from database.
         *
         * @return array Updated safe values to be saved.
         */
        public function update($new_instance, $old_instance) {
            $instance = array();
            $instance['title'] = (!empty($new_instance['title']) ) ? sanitize_text_field($new_instance['title']) : '';
            $instance['layout_type'] = (!empty($new_instance['layout_type']) ) ? sanitize_text_field($new_instance['layout_type']) : '';
            $instance['element_to_show'] = (!empty($new_instance['element_to_show']) ) ? sanitize_text_field($new_instance['element_to_show']) : '';
            $instance['element_number_to_show'] = (!empty($new_instance['element_number_to_show']) ) ? sanitize_text_field($new_instance['element_number_to_show']) : '';
            $instance['element_custom_design'] = (!empty($new_instance['element_custom_design']) ) ? sanitize_text_field($new_instance['element_custom_design']) : '';
            $instance['ttp_add_member_check'] = (!empty($new_instance['ttp_add_member_check']) && $instance['element_to_show'] == 'member-id') ? $new_instance['ttp_add_member_check'] : '';
            $instance['ttp_add_category_check'] = (!empty($new_instance['ttp_add_category_check']) && $instance['element_to_show'] == 'category-id') ? $new_instance['ttp_add_category_check'] : '';
            $instance['grid_template_name'] = (!empty($new_instance['layout_type']) && $instance['layout_type'] == 'grid-layout') ? $new_instance['grid_template_name'] : '';
            $instance['list_template_name'] = (!empty($new_instance['layout_type']) && $instance['layout_type'] == 'list-layout') ? $new_instance['list_template_name'] : '';
            $instance['carousal_template_name'] = (!empty($new_instance['layout_type']) && $instance['layout_type'] == 'carousal-layout') || (!empty($new_instance['layout_type']) && $instance['layout_type'] == 'flipster-layout') ? $new_instance['carousal_template_name'] : '';
            $instance['show_hide_thumbnail_title'] = (!empty($new_instance['layout_type']) && $instance['layout_type'] == 'thumbnail-layout') ? $new_instance['show_hide_thumbnail_title'] : '';
            $instance['show_hide_thumbnail_square_rounded'] = (!empty($new_instance['layout_type']) && $instance['layout_type'] == 'thumbnail-layout') ? $new_instance['show_hide_thumbnail_square_rounded'] : '';
            $instance['additional_display_type'] = !empty($new_instance['additional_display_type']) ? $new_instance['additional_display_type'] : '';
            $instance['additional_display_position'] = !empty($new_instance['additional_display_position']) ? $new_instance['additional_display_position'] : '';
            $instance['grid_element_to_show'] = !empty($new_instance['grid_element_to_show']) ? $new_instance['grid_element_to_show'] : '';
            return $instance;
        }

        /**
         * Front-end display of widget.
         *
         * @see WP_Widget::widget()
         *
         * @param array $args     Widget arguments.
         * @param array $instance Saved values from database.
         */
        public function widget($args, $instance) {
            $member_check = (!empty($instance['ttp_add_member_check']) ) ? $instance['ttp_add_member_check'] : array();
            $category_check = (!empty($instance['ttp_add_category_check']) ) ? $instance['ttp_add_category_check'] : array();
            $member_check_string = implode(', ', $member_check);
            $category_check_string = implode(', ', $category_check);
            echo $args['before_widget'];
            if (!empty($instance['title'])) {
                echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
            }
            if ($instance['layout_type'] == 'grid-layout') {
                if (isset($instance['element_to_show']) && $instance['element_to_show'] == 'all') {
                    echo do_shortcode("[totalteam layout='" . $instance['layout_type'] . "' display_type='" . $instance['element_to_show'] . "' team_number='" . $instance['element_number_to_show'] . "' template_type='basic' template='" . $instance['grid_template_name'] . "' custom_layout='" . $instance['element_custom_design'] . "' element_per_row='1' thumb_content='" . $instance['grid_element_to_show'] . "' additional_detail_type='" . $instance['additional_display_type'] . "' image_size='totalteam-large' content_position='" . $instance['additional_display_position'] . "' thumbnail_info='" . $instance['show_hide_thumbnail_title'] . "' thumbnail_display='" . $instance['show_hide_thumbnail_square_rounded'] . "']");
                } else if (isset($instance['element_to_show']) && $instance['element_to_show'] == 'member-id') {
                    echo do_shortcode("[totalteam layout='" . $instance['layout_type'] . "' member_id='" . $member_check_string . "' display_type='" . $instance['element_to_show'] . "' team_number='" . $instance['element_number_to_show'] . "' template_type='basic' template='" . $instance['grid_template_name'] . "' custom_layout='" . $instance['element_custom_design'] . "' element_per_row='1' thumb_content='" . $instance['grid_element_to_show'] . "' additional_detail_type='popup' image_size='totalteam-large' content_position='" . $instance['additional_display_position'] . "' thumbnail_info='" . $instance['show_hide_thumbnail_title'] . "' thumbnail_display='" . $instance['show_hide_thumbnail_square_rounded'] . "']");
                } else if (isset($instance['element_to_show']) && $instance['element_to_show'] == 'category-id') {
                    echo do_shortcode("[totalteam layout='" . $instance['layout_type'] . "' category_id='" . $category_check_string . "' display_type='" . $instance['element_to_show'] . "' team_number='" . $instance['element_number_to_show'] . "' template_type='basic' template='" . $instance['grid_template_name'] . "' custom_layout='" . $instance['element_custom_design'] . "' element_per_row='1' thumb_content='" . $instance['grid_element_to_show'] . "' additional_detail_type='popup' image_size='totalteam-large' content_position='" . $instance['additional_display_position'] . "' thumbnail_info='" . $instance['show_hide_thumbnail_title'] . "' thumbnail_display='" . $instance['show_hide_thumbnail_square_rounded'] . "']");
                }
            } else if ($instance['layout_type'] == 'carousal-layout') {
                if (isset($instance['element_to_show']) && $instance['element_to_show'] == 'all') {
                    echo do_shortcode("[totalteam layout='" . $instance['layout_type'] . "' display_type='" . $instance['element_to_show'] . "' team_number='" . $instance['element_number_to_show'] . "' template_type='basic' template='" . $instance['carousal_template_name'] . "' custom_layout='" . $instance['element_custom_design'] . "' element_per_row='1' thumb_content='" . $instance['grid_element_to_show'] . "' additional_detail_type='" . $instance['additional_display_type'] . "' image_size='totalteam-large' content_position='" . $instance['additional_display_position'] . "' thumbnail_info='" . $instance['show_hide_thumbnail_title'] . "' thumbnail_display='" . $instance['show_hide_thumbnail_square_rounded'] . "']");
                } else if (isset($instance['element_to_show']) && $instance['element_to_show'] == 'member-id') {
                    echo do_shortcode("[totalteam layout='" . $instance['layout_type'] . "' member_id='" . $member_check_string . "' display_type='" . $instance['element_to_show'] . "' team_number='" . $instance['element_number_to_show'] . "' template_type='basic' template='" . $instance['carousal_template_name'] . "' custom_layout='" . $instance['element_custom_design'] . "' element_per_row='1' thumb_content='" . $instance['grid_element_to_show'] . "' additional_detail_type='popup' image_size='totalteam-large' content_position='" . $instance['additional_display_position'] . "' thumbnail_info='" . $instance['show_hide_thumbnail_title'] . "' thumbnail_display='" . $instance['show_hide_thumbnail_square_rounded'] . "']");
                } else if (isset($instance['element_to_show']) && $instance['element_to_show'] == 'category-id') {
                    echo do_shortcode("[totalteam layout='" . $instance['layout_type'] . "' category_id='" . $category_check_string . "' display_type='" . $instance['element_to_show'] . "' team_number='" . $instance['element_number_to_show'] . "' template_type='basic' template='" . $instance['carousal_template_name'] . "' custom_layout='" . $instance['element_custom_design'] . "' element_per_row='1' thumb_content='" . $instance['grid_element_to_show'] . "' additional_detail_type='popup' image_size='totalteam-large' content_position='" . $instance['additional_display_position'] . "' thumbnail_info='" . $instance['show_hide_thumbnail_title'] . "' thumbnail_display='" . $instance['show_hide_thumbnail_square_rounded'] . "']");
                }
            }
            echo $args['after_widget'];
        }

    }

}