<?php
/**
 * Handler for [etl_guten_block] shortcode
 *
 * @param $atts
 *
 * @return string
 */
function tt_block_handler($atts)
{
	$atts = shortcode_atts([
		'heading' => __('Total Team-Lite Title'),
		'heading_tag' => 'h2',
		'tt_id' => '',
	], $atts, 'tt_guten_block');

	return tt_block_renderer($atts[ 'heading' ],$atts[ 'heading_tag' ],$atts[ 'tt_id' ]);
}

add_shortcode('tt_guten_block', 'tt_block_handler');

/**
 * Handler for post title block
 * @param $atts
 *
 * @return string
 */
function tt_block_render_handler($atts)
{
	return tt_block_renderer($atts[ 'heading' ],$atts[ 'heading_tag' ],$atts[ 'tt_id' ]);
}

/**
 * Output the post title wrapped in a heading
 *
 * @param int $etl_id The post ID
 * @param string $heading Allows : h2,h3,h4 only
 *
 * @return string
 */
function tt_block_renderer($heading,$heading_tag,$tt_id)
{	
	$ret = '';
	if(!empty($heading)){
		$ret .= "<$heading_tag>$heading</$heading_tag>";
	}

	if($tt_id!=null){
		$sht = "[totalteam layout='grid-layout' display_type='member-id' member_id='$tt_id']"; 
		$title = do_shortcode($sht);
		$ret .= "$title";
	}

	return $ret;
}

/**
 * Register block
 */
add_action('init', function () {
	// Skip block registration if Gutenberg is not enabled/merged.
	if (!function_exists('register_block_type')) {
		return;
	}
	$dir = dirname(__FILE__);

			$totalteam_frontend_ajax_nonce = wp_create_nonce('the-team-frontend-ajax-nonce');
            $totalteam_frontend_ajax_object = array('ajax_url' => admin_url('admin-ajax.php'), 'ajax_nonce' => $totalteam_frontend_ajax_nonce);
            wp_enqueue_script('totalteam-frontend-script', TOTAL_TEAM_LITE_JS_DIR . 'frontend.js', array('jquery', 'jquery-ui-slider'), TOTAL_TEAM_LITE_VERSION, false);
            wp_localize_script('totalteam-frontend-script', 'totalteam_frontend_js_params', $totalteam_frontend_ajax_object);
            wp_enqueue_style('totalteam-fontawesome', TOTAL_TEAM_LITE_CSS_DIR . 'font-awesome/font-awesome.min.css', TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-frontend-style', TOTAL_TEAM_LITE_CSS_DIR . 'front-end.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-slider-frontend-style', TOTAL_TEAM_LITE_CSS_DIR . 'jquery-ui.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-bar-style-frontend-jquery', TOTAL_TEAM_LITE_JS_DIR . 'simple-skillbar.js', array('jquery', 'totalteam-frontend-script'), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-frontend-caraousal', TOTAL_TEAM_LITE_JS_DIR . 'owl.carousel.js', array('jquery', 'totalteam-frontend-script'), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-bar-style-frontend-animate-caraousal', TOTAL_TEAM_LITE_JS_DIR . 'owl.animate.js', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-bar-style-frontend-autoplay-caraousal', TOTAL_TEAM_LITE_JS_DIR . 'owl.autoplay.js', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-bar-style-frontend-navigation-caraousal', TOTAL_TEAM_LITE_JS_DIR . 'owl.navigation.js', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-animation-style', TOTAL_TEAM_LITE_CSS_DIR . 'animate.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-slider-frontend-carousal-style', TOTAL_TEAM_LITE_CSS_DIR . 'owl.carousel.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-slider-frontend-carousal-default-style', TOTAL_TEAM_LITE_CSS_DIR . 'owl.theme.default.min.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-frontend-custom-scrollbar', TOTAL_TEAM_LITE_JS_DIR . 'jquery.mCustomScrollbar.concat.min.js', array('jquery', 'totalteam-frontend-script'), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-frontend-scrollbar-style', TOTAL_TEAM_LITE_CSS_DIR . 'jquery.mCustomScrollbar.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_script('totalteam-frontend-custom-gallery', TOTAL_TEAM_LITE_JS_DIR . 'jquery.colorbox.js', array('jquery', 'totalteam-frontend-script'), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('totalteam-frontend-gallery-style', TOTAL_TEAM_LITE_CSS_DIR . 'colorbox.css', array(), TOTAL_TEAM_LITE_VERSION);
            wp_enqueue_style('dashicons');
            $current = 'current';
            $total = 'total';
            $totalteam_frontend_colorbox_object = array('current' => sprintf(__('image {%1$s} of {%2$s}', TOTAL_TEAM_LITE_VERSION), $current, $total),
                'previous' => __('previous', TOTAL_TEAM_LITE_VERSION),
                'next' => __('next', TOTAL_TEAM_LITE_VERSION),
                'close' => __('close', TOTAL_TEAM_LITE_VERSION),
                'xhrError' => __('This content failed to load.', TOTAL_TEAM_LITE_VERSION),
                'imgError' => __('This image failed to load.', TOTAL_TEAM_LITE_VERSION)
            );
            wp_localize_script('totalteam-frontend-custom-gallery', 'totalteam_frontend_colorbox_params', $totalteam_frontend_colorbox_object);


	$index_js = 'tt-block.js';
	wp_register_script(
		'tt-block-script',
		plugins_url($index_js, __FILE__),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
			'wp-components',
			'wp-editor'
		),
		filemtime("$dir/$index_js")
	);

	$tt_logos_array = get_tt_logos();
	wp_localize_script( 'tt-block-script', 'TT_logos_array', $tt_logos_array);

	register_block_type('tt-display-block/tt-widget', array(
		'editor_script' => 'tt-block-script',
		'render_callback' => 'tt_block_render_handler',
		'attributes' => [			
			'heading' => [
				'type' => 'string',
				'default' => __('Total Team-Lite Title')
			],
			'heading_tag' => [
				'type' => 'string',
				'default' => 'h2'
			],
			'tt_id' => [
				'type' => 'string',
				'default' => ''
			],
		]
	));
});

function get_tt_logos(){
	$args = array('post_type'=>'totalteam',
		'post_status'=>'publish',
		'posts_per_page'=>'25'
	);
    // The Query
	$the_query = new WP_Query( $args );

	$total_team = array(array('value'=>'0','label'=>__('Select team')));

    // The Loop
	if ( $the_query->have_posts() ) {
		while($the_query->have_posts()){
			$the_query->the_post();
			global $post;
			$total_team[] = array('value'=>get_the_ID(), 'label'=> $post->post_name);
		}
	}

	return $total_team;
}

