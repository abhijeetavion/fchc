(function ($) {
    $(function () {
        $('.ttp-setting-tabs-trigger').click(function () {
            $(this).parents('.ttp-default-setting-tab-wrapper').find('.ttp-setting-tabs-trigger').each(function () {
                $(this).removeClass('ttp-active-tab');
            });
            $(this).addClass('ttp-active-tab');
            var board_id = $(this).attr('id');
            $(this).parents('.ttp-default-setting-tab-wrapper').find('.ttp-setting-tab-content').each(function () {
                $(this).hide();
            });
            $('#content-' + board_id).show();
        });



        /** Add External Link button function */
        $('body').find(".ttp-add-feature-button").click(function (e) {
            e.preventDefault();
            var form_key_count = $('.ttp-external-link-count').val();
            form_key_count++;
            $('body').find('.ttp-external-link-count').val(form_key_count);
            var parameter_type = $(this).data('parameter-type');
            $.ajax({
                url: totalteam_backend_js_params.ajax_url,
                data: {
                    parameter_type: parameter_type,
                    _wpnonce: totalteam_backend_js_params.ajax_nonce,
                    action: 'totalteam_pull_data_contents'
                },
                type: 'post',
                beforeSend: function () {
                    $('.ttp-view-wrap').show();
                },
                success: function (response) {
                    $('.ttp-feature-list-temp-holder').html(response);
                    $('.ttp-feature-list-temp-holder input').each(function () {
                        var name_attr = $(this).attr('name');
                        if (name_attr) {
                            name_attr = name_attr.replace('feature_list_id', form_key_count);
                            $(this).attr('name', name_attr);
                        }
                    });
                    var html_fields = $('.ttp-feature-list-temp-holder').html();
                    $('.ttp-sortable-feature-list-field').append(html_fields).show('fast');
                    $('.ttp-sortable-feature-list-field .er-feature-list-review-color').wpColorPicker();
                },
                complete: function () {
                    $('.ttp-view-wrap').hide();
                    $('.ttp-feature-list-temp-holder').html('');
                }
            });
        });

        /** Add General Bio Additional field function */
        $('body').find(".ttp-add-general-bio-button").click(function (e) {
            e.preventDefault();
            var form_key_count = $('.ttp-general-info-count').val();
            form_key_count++;
            $('body').find('.ttp-general-info-count').val(form_key_count);
            var parameter_type = $(this).data('parameter-type');
            $.ajax({
                url: totalteam_backend_js_params.ajax_url,
                data: {
                    parameter_type: parameter_type,
                    _wpnonce: totalteam_backend_js_params.ajax_nonce,
                    action: 'totalteam_pull_data_contents'
                },
                type: 'post',
                beforeSend: function () {
                    $('.ttp-view-wrap').show();
                },
                success: function (response) {
                    $('.ttp-general-bio-list-temp-holder').html(response);
                    $('.ttp-general-bio-list-temp-holder input').each(function () {
                        var name_attr = $(this).attr('name');
                        if (name_attr) {
                            name_attr = name_attr.replace('custom_bio_id', form_key_count);
                            $(this).attr('name', name_attr);
                        }
                    });
                    var html_fields = $('.ttp-general-bio-list-temp-holder').html();
                    $('#ttp-sortable-general-info-field-wrap').append(html_fields).show('fast');
                    //$('.ttp-sortable-feature-list-field .er-feature-list-review-color').wpColorPicker();
                },
                complete: function () {
                    $('.ttp-view-wrap').hide();
                    $('.ttp-general-bio-list-temp-holder').html('');
                }
            });
        });

        /** Delete Custom Link List when clicked remove */
        $('.ttp-sortable-feature-list-field').on("click", ".ttp_remov_fl_field", function (e) {
            e.preventDefault();
            if (confirm('Are you sure?')) {
                $(this).parents('.ttp-template-feature-list').fadeOut(300, function () {
                    $(this).remove();
                });
            }
            return false;
        });

        $('body').find(".ttp-custom-template-save-button").click(function (e) {
            error_flag = 0;
            $(this).parents('#ppt-custom-design-template-form').find('.ttp-custom-design-template-title').each(function () {
                var error_data = $(this).parent().find('.ttp-custom-design-template-title').attr('error-field-data');
                if ($(this).hasClass('ttp-form-value-required') && ($(this).val() == '')) {
                    error_flag = 1;
                    $(this).parents('#ppt-custom-design-template-form').find('.ttp-hidden-message').addClass('ttp-form-required');
                    $(this).parents('#ppt-custom-design-template-form').find('.ttp-form-required').fadeIn(400).html(error_data);
                    $(this).parents('#ppt-custom-design-template-form').find('.ttp-form-required').fadeOut(3000);
                } else {
                    $(this).parents('#ppt-custom-design-template-form').find('.ttp-hidden-message').removeClass('ttp-form-required').fadeOut(200).html('');
                }
            });
            if (error_flag == 1) {
                return false;
            }
        });

        /** Menu option checkbox click for page function */
        $('body').find(".ttp-add-skill-button").click(function (e) {
            e.preventDefault();
            var skill_key_count = $('.ttp-skill-count').val();
            skill_key_count++;
            $('body').find('.ttp-skill-count').val(skill_key_count);
            var parameter_type = $(this).data('parameter-type');
            $.ajax({
                url: totalteam_backend_js_params.ajax_url,
                data: {
                    parameter_type: parameter_type,
                    _wpnonce: totalteam_backend_js_params.ajax_nonce,
                    action: 'totalteam_pull_data_contents'
                },
                type: 'post',
                beforeSend: function () {
                    $('.ttp-view-wrap').show();
                },
                success: function (response) {
                    $('.ttp-skill-list-temp-holder').html(response);
                    $('.ttp-skill-list-temp-holder input').each(function () {
                        var name_attr = $(this).attr('name');
                        if (name_attr) {
                            name_attr = name_attr.replace('skill_list_id', skill_key_count);
                            $(this).attr('name', name_attr);
                        }
                    });
                    var html_fields = $('.ttp-skill-list-temp-holder').html();
                    $('.ttp-sortable-skill-list-field').append(html_fields).show('fast');
                },
                complete: function () {
                    $('.ttp-view-wrap').hide();
                    $('.ttp-skill-list-temp-holder').html('');
                }
            });
        });
        /** Delete Skill List when clicked remove */
        $('.ttp-sortable-skill-list-field').on("click", ".er_remov_skill_field", function (e) {
            e.preventDefault();
            if (confirm('Are you sure?')) {
                $(this).parents('.ttp-template-skill-list').fadeOut(300, function () {
                    $(this).remove();
                });
            }
            return false;
        });

        /** Delete Skill List when clicked remove */
        $('body').on("change", "#ttp-grid-element-template-type", function (e) {
            e.preventDefault();
            if ($(this).val() == 'basic') {
                $(this).parents('.ttp-shortcode-content-outer-content').find('#ttp-grid-layout-basic-template').fadeIn();
            } else {
                $(this).parents('.ttp-shortcode-content-outer-content').find('#ttp-grid-layout-basic-template').fadeOut();
            }
        });

        $('body').on("change", ".ttp-inner-layout-type", function (e) {
            e.preventDefault();
            var template_type = $(this).val();
            $(this).closest('.ttp-input-field-wrap').find('.ttp-template-demo .ttp-testim-common').hide();
            $(this).closest('.ttp-input-field-wrap').find('.ttp-template-demo #ttp-testim-' + template_type).show();
        });

        /** option to add social link */
        $('body').find(".ttp-add-social-link-button").click(function (e) {
            e.preventDefault();
            var social_key_count = $('.ttp-social-link-count').val();
            social_key_count++;
            $('body').find('.ttp-social-link-count').val(social_key_count);
            var parameter_type = $(this).data('parameter-type');
            $.ajax({
                url: totalteam_backend_js_params.ajax_url,
                data: {
                    parameter_type: parameter_type,
                    _wpnonce: totalteam_backend_js_params.ajax_nonce,
                    action: 'totalteam_pull_data_contents'
                },
                type: 'post',
                beforeSend: function () {
                    $('.ttp-view-wrap').show();
                },
                success: function (response) {
                    $('.ttp-social-link-list-temp-holder').html(response);
                    $('.ttp-social-link-list-temp-holder input').each(function () {
                        var name_attr = $(this).attr('name');
                        if (name_attr) {
                            name_attr = name_attr.replace('social_link_list_id', social_key_count);
                            $(this).attr('name', name_attr);
                        }
                    });
                    $('.ttp-social-link-list-temp-holder select').each(function () {
                        var name_attr = $(this).attr('name');
                        if (name_attr) {
                            name_attr = name_attr.replace('social_link_list_id', social_key_count);
                            $(this).attr('name', name_attr);
                        }
                    });
                    var html_fields = $('.ttp-social-link-list-temp-holder').html();
                    $('.ttp-sortable-social-link-list-field').append(html_fields).show('fast');
                    $('.ttp-sortable-social-link-list-field #ttp-social-link-bg-color').wpColorPicker();
                },
                complete: function () {
                    $('.ttp-view-wrap').hide();
                    $('.ttp-social-link-list-temp-holder').html('');
                }
            });
        });

        $('.erp-basic-color-call').wpColorPicker();

        /** Skill Sortable initialization */

        $('.ttp-sortable-skill-list-field').sortable({
            handle: 'span.ttp-sortable-skill-field-section',
            containment: "parent",
            cursor: 'move',
            revert: true,
            axis: 'y',
            opacity: 0.9
        });

        /** Social Link Sortable initialization */
        $('.ttp-sortable-social-link-list-field').sortable({
            handle: 'span.ttp-sortable-social-link-field-section',
            containment: "parent",
            cursor: 'move',
            revert: true,
            axis: 'y',
            opacity: 0.9
        });

        //sortable admin External link section initialization
        $('.ttp-sortable-feature-list-field').sortable({
            handle: 'span.ttp-sortable-feature-field-section',
            containment: "parent",
            cursor: 'move',
            axis: 'y',
        });

        //sortable general info field initialization
        $('body').find('#ttp-sortable-general-info-field-wrap').sortable({
            handle: 'span.ttp-sortable-general-inf-field-section',
            containment: "parent",
            cursor: 'move',
            axis: 'y',
        });

        /** 
         * Show/Hide sortable and inner content for social link
         */
        /** Slide toggle for social link inner fields */
        $('.ttp-sortable-social-link-list-field').on('click', 'span.ttp-ind-social-link-toggle-icon', function () {
            $(this).parents().children('div[id^="ttp-social-link-item-settings"]').slideToggle(300);
            $(this).find('i').toggleClass('fa-sort-down fa-sort-up');
        });

        /** Delete Menu when clicked remove */
        $('.ttp-sortable-social-link-list-field').on("click", ".er_remov_social_link_field", function (e) {
            e.preventDefault();
            if (confirm('Are you sure?')) {
                $(this).parents('.ttp-template-social-link-list').fadeOut(300, function () {
                    $(this).remove();
                });
            }
            return false;
        });

        /** Menu icon color selector show hide */
        $('body').on('change', '#ttp-social-link-list-type', function () {
            if ($(this).val() == 'custom') {
                $(this).parents('.ttp-template-social-link-list').find('.ttp-inner-social-icon-custom-image').slideDown(200);
            } else {
                $(this).parents('.ttp-template-social-link-list').find('.ttp-inner-social-icon-custom-image').slideUp(200);
            }
        });

        //Js for Media Uploader for additional image section
        $('#ttp-upload-additional-image').click(function (e) {
            var image_this = $(this);
            e.preventDefault();
            var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
                    .on('select', function (e) {
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        image_this.parent().find('#ttp-upload-additional-url').val(image_url);
                        //image_this.parents('#content-ttp-setting-additional-image').find('.ttp-image-preview').css('background-image', 'url(' + image_url + ')');
                        image_this.parents('#content-ttp-setting-additional-image').find('.ttp-image-preview img').attr('src', image_url).parent().show();
                    });
        });

        $('.er_remov_im_field').on('click', function () {
            $(this).parents('#content-ttp-setting-additional-image').find('#ttp-upload-additional-url').val('');
            $(this).parents('#content-ttp-setting-additional-image').find('.ttp-image-preview img').attr('src', '').parent().fadeOut(200);
        });

        //Js for Media Uploader for additional image section external
        $('body').on("click", "#ttp-upload-custom-social-link-image-button", function (e) {
            e.preventDefault();
            var social_image_this = $(this);
            var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open()
                    .on('select', function (e) {
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        social_image_this.parent().find('#ttp-upload-custom-social-link-url').val(image_url);
                        social_image_this.parents('.ttp-inner-social-icon-custom-image').find('.ttp-image-preview img').attr('src', image_url).parent().show();
                    });
        });
        $('body').on("click", ".ttp-remov-social-external-image", function (e) {
            $(this).parents('.ttp-inner-social-icon-custom-image').find('#ttp-upload-custom-social-link-url').val('');
            $(this).parents('.ttp-inner-social-icon-custom-image').find('.ttp-image-preview img').attr('src', '').parent().fadeOut(200);
        });

        $('body').find('#ttp-social-link-bg-color').wpColorPicker();

        //change description dynamically
        $('body').on('change', '#ttp-social-link-list-type', function () {
            var social_link_type_desc = $("option:selected", this).text();
            $(this).parents('.ttp-template-social-link-list').find('span.ttp-social-link-ind-header-text').text(social_link_type_desc);
            $(this).parents('.ttp-template-social-link-list').find('#ttp-social-link-type-ind-header-value').val(social_link_type_desc);
        });

        //General color call
        $('.ttp-general-color-field').wpColorPicker();

        /**
         * Shortcode generator jquery starts
         */

        // Shortcode Main Layout type
        $('body').on('change', '#ttp-team-member-layout-type', function () {
            var member_layout_type = $(this).val();
            if (member_layout_type !== '') {
                if (member_layout_type != 'filter-layout') {
                    $(this).parents('.ttp-shortcode-param-inner-wrap').find('#ttp-layout-general-layout').show();
                    $(this).parents('.ttp-shortcode-param-inner-wrap').find('.ttp-shortcode-content-outer-content').show();
                    $(this).parents('.ttp-shortcode-param-inner-wrap').find('.ttp-shortcode-content-layout-type-content').hide();
                    $(this).parents('.ttp-shortcode-param-inner-wrap').find('#ttp-layout-type-content-' + member_layout_type).show();
                    $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('.ttp-shortcode-overlay').show();
                } else {
                    $(this).parents('.ttp-shortcode-param-inner-wrap').find('.ttp-shortcode-content-outer-content').show();
                    $(this).parents('.ttp-shortcode-param-inner-wrap').find('.ttp-shortcode-content-layout-type-content').hide();
                    $(this).parents('.ttp-shortcode-param-inner-wrap').find('#ttp-layout-type-content-' + member_layout_type).show();
                    $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('.ttp-shortcode-overlay').show();
                    $(this).parents('.ttp-shortcode-param-inner-wrap').find('#ttp-layout-general-layout').hide();
                }
            }
        });

        // Shortcode member content Display type
        $('body').on('change', '#ttp-member-element-type-select', function () {
            var member_element_type = $(this).val();
            $(this).parents('#ttp-layout-type-content-general-settings').find('.ttp-shortcode-id-checkbox-outer-wrap').hide();
            $(this).parents('#ttp-layout-type-content-general-settings').find('#ttp-content-by-' + member_element_type).show();
        });

        $('body').on('click', '.ttp-shortcode-overlay, #ttp-shortcode-cancel-button', function () {
            var shortcode_type = $(this).data('shortcode-type');
            if (shortcode_type == '1') {
                $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('.ttp-shortcode-content-outer-content').hide();
                $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('.ttp-shortcode-content-layout-type-content').hide();
                $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('.ttp-shortcode-overlay').fadeOut();
                $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('.ttp-dropdown').prop('selectedIndex', 0);
                $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('#ttp-add-check').removeAttr('checked');
                $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('#ttp-content-by-category-id, #ttp-content-by-member-id').hide();
            } else {
                $(this).parents('.ttp-shortcode-content-outer-content').find('.ttp-shortcode-content-outer-content').hide();
                $(this).parents('#TB_window').hide();
                $(this).parents('body').find('#TB_overlay').hide();
                $(this).parents('.ttp-shortcode-content-outer-content').find('.ttp-dropdown').prop('selectedIndex', 0);
                $(this).parents('.ttp-shortcode-content-outer-content').find('#ttp-add-check').removeAttr('checked');
                $(this).parents('.ttp-shortcode-content-outer-content').find('#ttp-content-by-category-id, #ttp-content-by-member-id').hide();
            }
        });

        /** display dynamic shorcode on jquery on generatehortcode button clicked */
        $(".ttp-custom-template-generate-button").click(function () {

            var ok_type = $(this).data('shortcode-type');
            var layout_type = $("#ttp-team-member-layout-type option:selected").val();
            //testim_template = $("#testimonial-template option:selected").val();

            var testim_show_type = $("#ttp-member-element-type-select option:selected").val();
            if (testim_show_type == 'member-id') {
                var testim_show_by_memberid = [];
                $('.ttp-shortcode-member-id-check:checked').each(function (i) {
                    testim_show_by_memberid[i] = $(this).val();
                });
            }
            if (testim_show_type == 'category-id') {
                var testim_show_by_categoryid = [];
                $('.ttp-shortcode-category-id-check:checked').each(function (i) {
                    testim_show_by_categoryid[i] = $(this).val();
                });
            }
            var testim_order = $("#ttp-member-order-type-select option:selected").val();
            var testim_orderby = $("#ttp-member-order-by-select option:selected").val();
            var testim_show_number = $('input[name=ttp_member_element_to_show]').val() !== '' ? $('input[name=ttp_member_element_to_show]').val() : '-1';
            var custom_layout_val = $("#ttp-member-element-custom-layout option:selected").val();

            var grid_elem_per_row = $("#ttp-grid-element-per-row option:selected").val();
            var grid_elem_margin_value = $("#ttp-element-margin-value option:selected").val();
            var grid_elem_add_det_disp_type = $("#ttp-element-additional-detail-display-type option:selected").val();
            var grid_elem_template_type = $("#ttp-grid-element-template-type option:selected").val();
            if (grid_elem_template_type === '') {
                grid_elem_template_type_val = 'basic';
            } else {
                grid_elem_template_type_val = grid_elem_template_type;
            }
            if (grid_elem_template_type === 'basic') {
                grid_template = $("#ttp-grid-layout-basic-type option:selected").val();
            } else if (grid_elem_template_type === 'advanced') {
                grid_template = $("#ttp-grid-layout-advanced-type option:selected").val();
            } else if (grid_elem_template_type === '') {
                grid_template = $("#ttp-grid-layout-basic-type option:selected").val();
            }
            var grid_elem_content_thumb = $("#ttp-grid-element-content option:selected").val();
            var grid_elem_content_position = $("#ttp-element-content-position option:selected").val();
            var grid_elem_content_image_size = $("#ttp-grid-element-image-size option:selected").val();

            var list_elem_margin_value = $("#ttp-list-element-margin-value").val();
            var list_elem_add_det_disp_type = $("#ttp-list-additional-detail-display-type option:selected").val();
            var list_elem_content_position = $("#ttp-list-element-additional-content-position option:selected").val();
            var list_template = $("#ttp-list-layout-basic-type option:selected").val();
            var list_elem_content_thumb = $("#ttp-list-element-content option:selected").val();

            var carousal_pause_duration = $("#ttp-carousal-pause-duration").val();
            var carousal_element_number = $("#ttp-carousal-element-number").val();
            
            var carousel_elem_add_det_disp_type = $("#ttp-list-additional-detail-display-type option:selected").val();
            var carousal_element_slide_speed = $("#ttp-carousal-options-speed").val();
            var carousal_auto_slide = ($("#ttp-carousal-options-auto").attr('checked')) ? 'true' : 'false';
            var carousal_pause_duration = $("#ttp-carousal-pause-duration").val();
            var carousal_popup_content_position = $("#ttp-carousal-popup-content-position option:selected").val();
            var carousel_template = $("#ttp-carousal-layout-basic-type option:selected").val();
            var carousel_elem_add_det_disp_type = $("#ttp-carousal-element-additional-detail-display-type option:selected").val();
            var carousal_dot_paginate = ($("#ttp-carousal-options-paginate-dot").attr('checked')) ? 'true' : 'false';

            var table_additional_detail_display_type = $("#ttp-table-additional-detail-display-type option:selected").val();
            var table_additional_detail_content_position = $("#ttp-table-popup-content-position option:selected").val();
            var table_template = $("#ttp-table-layout-basic-type option:selected").val();
            var table_elem_content_thumb = $("#ttp-table-element-content option:selected").val();

            var testim_filter_by_category = [];
            $('.ttp-shortcode-filter-category-check:checked').each(function (i) {
                testim_filter_by_category[i] = $(this).val();
            });

            if (layout_type == 'grid-layout') {
                if (testim_show_type == 'all') {
                    var grid_all_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template_type='" + grid_elem_template_type_val + "'" + " " + "template='" + grid_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "element_per_row='" + grid_elem_per_row + "'" + " " + "margin='" + grid_elem_margin_value + "'" + " " + "thumb_content='" + grid_elem_content_thumb + "'" + " " + "additional_detail_type='" + grid_elem_add_det_disp_type + "'" + " " +
                            "image_size='" + grid_elem_content_image_size + "'" + " " + "content_position='" + grid_elem_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(grid_all_html);
                    } else {
                        window.send_to_editor(grid_all_html);
                    }
                } else if (testim_show_type == 'member-id') {
                    var grid_member_id_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "member_id='" + testim_show_by_memberid + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template_type='" + grid_elem_template_type_val + "'" + " " + "template='" + grid_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "element_per_row='" + grid_elem_per_row + "'" + " " + "margin='" + grid_elem_margin_value + "'" + " " + "thumb_content='" + grid_elem_content_thumb + "'" + " " + "additional_detail_type='" + grid_elem_add_det_disp_type + "'" + " " +
                            "image_size='" + grid_elem_content_image_size + "'" + " " + "content_position='" + grid_elem_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(grid_member_id_html);
                    } else {
                        window.send_to_editor(grid_member_id_html);
                    }

                } else if (testim_show_type == 'category-id') {
                    var grid_category_id_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "category_id='" + testim_show_by_categoryid + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template_type='" + grid_elem_template_type_val + "'" + " " + "template='" + grid_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "element_per_row='" + grid_elem_per_row + "'" + " " + "margin='" + grid_elem_margin_value + "'" + " " + "thumb_content='" + grid_elem_content_thumb + "'" + " " + "additional_detail_type='" + grid_elem_add_det_disp_type + "'" + " " +
                            "image_size='" + grid_elem_content_image_size + "'" + " " + "content_position='" + grid_elem_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(grid_category_id_html);
                    } else {
                        window.send_to_editor(grid_category_id_html);
                    }
                }
            } else if (layout_type == 'list-layout') {
                if (testim_show_type == 'all') {
                    var list_all_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template='" + list_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "thumb_content='" + list_elem_content_thumb + "'" + " " + "additional_detail_type='" + list_elem_add_det_disp_type + "'" + " " + "content_position='" + list_elem_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(list_all_html);
                    } else {
                        window.send_to_editor(list_all_html);
                    }
                } else if (testim_show_type == 'member-id') {
                    var list_member_id_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "member_id='" + testim_show_by_memberid + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template='" + list_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "thumb_content='" + list_elem_content_thumb + "'" + " " + "additional_detail_type='" + list_elem_add_det_disp_type + "'" + " " + "content_position='" + list_elem_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(list_member_id_html);
                    } else {
                        window.send_to_editor(list_member_id_html);
                    }
                } else if (testim_show_type == 'category-id') {
                    var list_category_id_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "category_id='" + testim_show_by_categoryid + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template='" + list_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "thumb_content='" + list_elem_content_thumb + "'" + " " + "additional_detail_type='" + list_elem_add_det_disp_type + "'" + " " + "content_position='" + list_elem_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(list_category_id_html);
                    } else {
                        window.send_to_editor(list_category_id_html);
                    }
                }
            } else if (layout_type == 'carousal-layout') {
                if (testim_show_type == 'all') {
                    var carousel_all_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template='" + carousel_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "element_per_row='" + carousal_element_number + "'" + " " + "auto='" + carousal_auto_slide + "'" + " " + "auto_pause_duration='" + carousal_pause_duration +
                            "'" + " " + "auto_speed='" + carousal_element_slide_speed + "'" + " " + "paginate='" + carousal_dot_paginate + "'" + " " + "additional_detail_type='" + carousel_elem_add_det_disp_type + "'" + " " + "content_position='" + carousal_popup_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(carousel_all_html);
                    } else {
                        window.send_to_editor(carousel_all_html);
                    }
                } else if (testim_show_type == 'member-id') {
                    var carousel_member_id_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "member_id='" + testim_show_by_memberid + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template='" + carousel_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "element_per_row='" + carousal_element_number + "'" + " " + "auto='" + carousal_auto_slide + "'" + " " + "auto_pause_duration='" + carousal_pause_duration +
                            "'" + " " + "auto_speed='" + carousal_element_slide_speed + "'" + " " + "paginate='" + carousal_dot_paginate + "'" + " " + "additional_detail_type='" + carousel_elem_add_det_disp_type + "'" + " " + "content_position='" + carousal_popup_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(carousel_member_id_html);
                    } else {
                        window.send_to_editor(carousel_member_id_html);
                    }
                } else if (testim_show_type == 'category-id') {
                    var carousel_category_id_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "category_id='" + testim_show_by_categoryid + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template='" + carousel_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "element_per_row='" + carousal_element_number + "'" + " " + "thumb_content='" + carousal_elem_content_thumb + "'" + " " + "auto='" + carousal_auto_slide + "'" + " " + "auto_pause_duration='" + carousal_pause_duration +
                            "'" + " " + "auto_speed='" + carousal_element_slide_speed + "'" + " " + "paginate='" + carousal_dot_paginate + "'" + " " + "additional_detail_type='" + carousel_elem_add_det_disp_type + "'" + " " + "content_position='" + carousal_popup_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(carousel_category_id_html);
                    } else {
                        window.send_to_editor(carousel_category_id_html);
                    }
                }
            } else if (layout_type == 'table-layout') {
                if (testim_show_type == 'all') {
                    var table_all_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template='" + table_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "thumb_content='" + table_elem_content_thumb + "'" + " " + "additional_detail_type='" + table_additional_detail_display_type +
                            "'" + " " + "content_position='" + table_additional_detail_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(table_all_html);
                    } else {
                        window.send_to_editor(table_all_html);
                    }
                } else if (testim_show_type == 'member-id') {
                    var table_member_id_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "member_id='" + testim_show_by_memberid + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template='" + table_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "thumb_content='" + table_elem_content_thumb + "'" + " " + "additional_detail_type='" + table_additional_detail_display_type + "'" + " " + "content_position='" + table_additional_detail_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(table_member_id_html);
                    } else {
                        window.send_to_editor(table_member_id_html);
                    }
                } else if (testim_show_type == 'category-id') {
                    var table_category_id_html = "[totalteam" + " " + "layout='" + layout_type + "'" + " " + "display_type='" + testim_show_type + "'" + " " + "category_id='" + testim_show_by_categoryid + "'" + " " + "team_number='" + testim_show_number +
                            "'" + " " + "template='" + table_template + "'" + " " + "order='" + testim_order + "'" + " " + "orderby='" + testim_orderby + "'" + " " + "custom_layout='" + custom_layout_val + "'" + " " + "thumb_content='" + table_elem_content_thumb + "'" + " " + "additional_detail_type='" + table_additional_detail_display_type + "'" + " " + "content_position='" + table_additional_detail_content_position + "']";
                    if (ok_type == '1') {
                        $("#ttp-generated-shortcode").html(table_category_id_html);
                    } else {
                        window.send_to_editor(table_category_id_html);
                    }
                }
            }
            $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('.ttp-shortcode-content-outer-content').hide();
            $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('.ttp-shortcode-content-layout-type-content').hide();
            $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('.ttp-shortcode-overlay').fadeOut();
            $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('.ttp-dropdown').prop('selectedIndex', 0);
            $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('#ttp-add-check').removeAttr('checked');
            $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('#ttp-content-by-category-id, #ttp-content-by-member-id').hide();
        });

        /* Shortcode Generator ends */

        $('body').on('click', '#ttp-generated-shortcode', function () {
            copyToClipboard(document.getElementById("ttp-generated-shortcode"));
            if ($(this).val() !== '') {
                $(this).parents('.ttp-shortcode-generator-setting-wrapper').find('#ttp-shortcode-copied-text').show().hide(3000);
            }
        });

        function copyToClipboard(elem) {
            // create hidden text element, if it doesn't already exist
            var targetId = "_hiddenCopyText_";
            var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
            var origSelectionStart, origSelectionEnd;
            if (isInput) {
                // can just use the original source element for the selection and copy
                target = elem;
                origSelectionStart = elem.selectionStart;
                origSelectionEnd = elem.selectionEnd;
            } else {
                // must use a temporary form element for the selection and copy
                target = document.getElementById(targetId);
                if (!target) {
                    var target = document.createElement("textarea");
                    target.style.position = "absolute";
                    target.style.left = "-9999px";
                    target.style.top = "0";
                    target.id = targetId;
                    document.body.appendChild(target);
                }
                target.textContent = elem.textContent;
            }
            // select the content
            var currentFocus = document.activeElement;
            target.focus();
            target.setSelectionRange(0, target.value.length);

            // copy the selection
            var succeed;
            try {
                succeed = document.execCommand("copy");

            } catch (e) {
                succeed = false;
            }
            // restore original focus
            if (currentFocus && typeof currentFocus.focus === "function") {
                currentFocus.focus();
            }

            if (isInput) {
                // restore prior selection
                elem.setSelectionRange(origSelectionStart, origSelectionEnd);
            } else {
                // clear temporary content
                target.textContent = "";
            }
            return succeed;
        }

        $('body').on('change', '#ttp-team-member-content-insertion-type', function () {
            contet_type = $("#ttp-team-member-content-insertion-type option:selected").val();
            if (contet_type !== '') {
                if (contet_type == 'title') {
                    window.send_to_editor("[title]Title[/title]");
                } else if (contet_type == 'subtitle') {
                    window.send_to_editor("[subtitle]Subtitle[/subtitle]");
                } else if (contet_type == 'quote') {
                    window.send_to_editor("[member_quote]");
                } else if (contet_type == 'skill') {
                    window.send_to_editor("[member_skills]");
                } else if (contet_type == 'image') {
                    window.send_to_editor("[member_image]");
                } else if (contet_type == 'video') {
                    window.send_to_editor("[member_video]");
                } else if (contet_type == 'external-links') {
                    window.send_to_editor("[member_external_links]");
                } else if (contet_type == 'basic-info') {
                    window.send_to_editor("[member_basic_info]");
                } else if (contet_type == 'google-map') {
                    window.send_to_editor("[member_gmap]");
                }
            }
            $(this).prop('selectedIndex', 0);
        });
        $('body').on('change', '.ttp-widget-display-type-dropdown', function () {
            widget_element_type = $(this).val();
            if (widget_element_type == 'member-id') {
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-widget-content-by-member-id').show();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-widget-content-by-category-id').hide();
            } else if (widget_element_type == 'category-id') {
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-widget-content-by-category-id').show();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-widget-content-by-member-id').hide();
            } else if (widget_element_type == 'all') {
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-widget-content-by-member-id').hide();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-widget-content-by-category-id').hide();
            }
        });
        $('body').on('change', '.ttp-widget-layout-type-dropdown', function () {
            widget_element_type = $(this).val();
            if (widget_element_type == 'grid-layout') {
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-grid-layout-basic-template').show();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-list-layout-basic-template').hide();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-carousal-layout-basic-template').hide();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-thumbnail-layout-basic-template').hide();
            } else if (widget_element_type == 'list-layout') {
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-grid-layout-basic-template').hide();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-list-layout-basic-template').show();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-carousal-layout-basic-template').hide();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-thumbnail-layout-basic-template').hide();
            } else if (widget_element_type == 'carousal-layout' || widget_element_type == 'flipster-layout') {
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-grid-layout-basic-template').hide();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-list-layout-basic-template').hide();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-carousal-layout-basic-template').show();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-thumbnail-layout-basic-template').hide();
            } else if (widget_element_type == 'thumbnail-layout') {
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-grid-layout-basic-template').hide();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-list-layout-basic-template').hide();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-carousal-layout-basic-template').hide();
                $(this).parents('.ttp-widget-sec-wrap').find('#ttp-thumbnail-layout-basic-template').show();

            }
        });
        $('body').on('change', '#ttp-custom-expand-icon-select', function () {
            custom_icon_type = $(this).val();
            if (custom_icon_type !== "custom") {
                $(this).parent().find('#ttp-input-custom-icon-preiew').html("<i class='fa " + custom_icon_type + "'></i>");
                $(this).parents('.ttp-input-field-wrap').find('#ttp-custom-icon-fa-select').fadeOut().hide();
            } else {
                $(this).parent().find('#ttp-input-custom-icon-preiew').html("");
                $(this).parents('.ttp-input-field-wrap').find('#ttp-custom-icon-fa-select').fadeIn().show();
            }
        });

        $('#totalteam_main_add_shortcode').click(function () {
            var TB_WIDTH = 50,
                    TB_HEIGHT = 50; // set the new width and height dimensions here..
            $("#TB_window").animate({
                marginLeft: '-' + parseInt((TB_WIDTH / 2), 10) + 'px',
                width: TB_WIDTH + 'px',
                height: TB_HEIGHT + 'px',
                marginTop: '-' + parseInt((TB_HEIGHT / 2), 10) + 'px'
            });
        });

        $('#totalteam_inner_add_shortcode').click(function () {
            var TB_WIDTH = 50,
                    TB_HEIGHT = 50; // set the new width and height dimensions here..
            $("#TB_window").animate({
                marginLeft: '-' + parseInt((TB_WIDTH / 2), 10) + 'px',
                width: TB_WIDTH + 'px',
                height: TB_HEIGHT + 'px',
                marginTop: '-' + parseInt((TB_HEIGHT / 2), 10) + 'px'
            });
        });
    }); /** Function ends */


}(jQuery));