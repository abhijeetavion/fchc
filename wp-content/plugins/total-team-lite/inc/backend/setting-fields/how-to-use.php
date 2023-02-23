<?php defined('ABSPATH') or die('No script kiddies please!'); ?>
<div class="ttp_manage-review-forms ttp-page-main-wrapper ttp-how-to-desc-wrap clearfix">
    <div class="ttp-header-sec clearfix">     
        <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/includes/header.php'); ?> 
        <span class="ttp-tab-title">
            <h3><?php _e('How To Use', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></h3>
        </span>
    </div>
    <div class="about-content">                                    
        <div class="how-to-main-content">
            <p><?php _e('Before Using the plugin', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></p>
            <p><?php _e('Here\'s how the plugin works or how to work with the plugin', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></p>
            <div class="how-to-main-content-inner">
                <div class="ttp-how-to-use-wrapper">
                    <div class="ttp-title">
                        <h4><?php _e('Create New Members', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></h4>
                    </div>
                    <p><?php _e('You will need to add at least one "Team Member" and enter related setting as you require or need and hit enter or click "Publish" button.', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></p>
                </div>
            </div>
            <div class="how-to-main-content-inner">
                <div class="ttp-how-to-use-wrapper">
                    <div class="ttp-title">
                        <h4><?php _e('Member Additional Detail Type', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></h4>
                    </div>
                    <p><?php _e('You can add various member additional detail that will be displayed when clicked on certain section of the member element section as per defined in frontend.', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></p>
                    <p><strong><?php _e('Popup: ', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></strong><?php _e('Display additional detail as popup content. Default to Center', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></p>
                </div>
            </div>
            <div class="how-to-main-content-inner">
                <div class="ttp-how-to-use-wrapper">
                    <div class="ttp-title">
                        <h4><?php _e('Member Additional Detail Elements', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></h4>
                    </div>
                    <p><?php _e('You can add various member additional detail that will be displayed when clicked on certain section of the member element section. While few things such as Team member name, Posiiton, social link, and basic info can be displayed, few things can be controlled and set using shortcode from button titled "Content Insterter" above team member text editor while adding/ editing team member. Element that can be inserted using shortcode are:', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></p>
                    <ul>
                        <li><strong><?php _e('Dynamic Title', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></strong></li>
                        <li><strong><?php _e('Dynamic Subtitle', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></strong></li>
                        <li><strong><?php _e('Skills', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></strong></li>
                        <li><strong><?php _e('Default WordPress Gallery: ', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></strong><?php _e('You can also insert he default WordPress gallery shortcode into the content editor. For this could be little tricky, so please read following step carefully.<p> While generating the shortcode, please set the "GALLERY SETTINGS" select option on right hand side of the screen and set it to "Link" option. This will link the media file into lightbox.</p>', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></li>
                        <li><strong><?php _e('Other Shortcodes: ', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></strong><?php _e('We have also tested and workable with shortcodes such as "Contact Form 7", "Everest Gallery".', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></li>

                    </ul>
                </div>
            </div>
            <div class="how-to-main-content-inner">
                <div class="ttp-how-to-use-wrapper">
                    <div class="ttp-title">
                        <h4><?php _e('Generating Required Shortcode ', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></h4>
                    </div>
                    <p><?php _e('You can generate the shortcode from either this page according to the requirement of yours from page ', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?> <a href="<?php echo admin_url() . 'edit.php?post_type=totalteam&page=totalteam-shortcode-generator'; ?>"><?php _e('Shortcode Generator', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></a> <?php _e('or from the button titled "Total Team Shortcode" in individual Page/Post editor.', TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></p>
                </div>
            </div>
        </div>
        <h4>
            <?php _e("If you wish to view complete documentation please check your plugin folder or , please visit:", TOTAL_TEAM_LITE_TEXT_DOMAIN); ?>
            <a target='blank' href='http://accesspressthemes.com/documentation/total-team-lite/'><?php _e("HERE", TOTAL_TEAM_LITE_TEXT_DOMAIN); ?></a>
        </h4>
    </div>
</div>
<div id="apsl-postbox-container-1" class="apsl-postbox-container-1">
    <?php include(TOTAL_TEAM_LITE_FILE_ROOT_DIR . 'inc/backend/setting-fields/sidebar.php'); ?>
</div>