<?php

/**
 * Class WOWP_Admin
 *
 * The main admin class responsible for initializing the admin functionality of the plugin.
 *
 * @package    FloatMenuLite
 * @subpackage Admin
 * @author     Dmytro Lobov <dev@wow-company.com>, Wow-Company
 * @copyright  2024 Dmytro Lobov
 * @license    GPL-2.0+
 */

namespace FloatMenuLite;

use FloatMenuLite\Admin\AdminActions;
use FloatMenuLite\Admin\Dashboard;
use FloatMenuLite\Admin\Settings;

defined( 'ABSPATH' ) || exit;

class WOWP_Admin {
	public function __construct() {
		Dashboard::init();
		AdminActions::init();
		$this->includes();

		add_action( 'wp_ajax_' . WOWP_Plugin::PREFIX . '_ajax_settings', [ Settings::class, 'save_item' ] );
		add_action( WOWP_Plugin::PREFIX . '_admin_header_links', [ $this, 'plugin_links' ] );
		add_filter( WOWP_Plugin::PREFIX . '_save_settings', [ $this, 'save_settings' ] );
		add_action( WOWP_Plugin::PREFIX . '_admin_load_assets', [ $this, 'load_assets' ] );

	}

	public function includes(): void {
		require_once plugin_dir_path( __FILE__ ) . 'class-settings-helper.php';
	}

	public function plugin_links(): void {
		?>
        <div class="wpie-links">
            <a href="<?php echo esc_url( WOWP_Plugin::info( 'pro' ) ); ?>" target="_blank">Plugin Page</a>
            <a href="<?php echo esc_url( WOWP_Plugin::info( 'docs' ) ); ?>" target="_blank">Documentation</a>
            <a href="<?php echo esc_url( WOWP_Plugin::info( 'rating' ) ); ?>" target="_blank" class="wpie-color-orange">Rating</a>
            <a href="https://demo.wow-estore.com/float-menu-pro/" target="_blank" style="color: rgb(var(--wpie-rgb-blurple));">View Pro Demo</a>
        </div>
		<?php
	}

	public function save_settings( $request ) {

		$param = ! empty( $request ) ? map_deep( wp_unslash( $request ), 'sanitize_text_field' ) : [];

		if ( isset( $request['menu_1']['item_text'] ) ) {
			$param['menu_1']['item_text'] = map_deep( wp_unslash( $request['menu_1']['item_text'] ), array(
				$this,
				'sanitize_text'
			) );
		}

		if ( isset( $request['menu_1']['popupcontent'] ) ) {
			$param['menu_1']['popupcontent'] = map_deep( wp_unslash( $request['menu_1']['popupcontent'] ), array(
				$this,
				'sanitize_text'
			) );
		}

		return $param;
	}

	public function sanitize_text( $text ): string {
		return wp_kses_post( wp_unslash( $text ) );
	}

	public function sanitize_tooltip( $text ): string {
		return sanitize_text_field( wp_unslash( $text ) );
	}


	public function load_assets(): void {

		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_editor();
		wp_enqueue_media();

		$handle     = WOWP_Plugin::SLUG;
		$version    = WOWP_Plugin::info( 'version' );
		$url_assets = WOWP_Plugin::url() . 'vendors/';

		$url_fontawesome = $url_assets . 'fontawesome/css/all.min.css';
		wp_enqueue_style( $handle . '-fontawesome', $url_fontawesome, null, '6.7.1' );

		$fonticonpicker_js = $url_assets . 'fonticonpicker/js/jquery.fonticonpicker.js';
		wp_enqueue_script( $handle . '-fonticonpicker', $fonticonpicker_js, array( 'jquery' ), $version, true );

		$fonticonpicker_css = $url_assets . 'fonticonpicker/css/base/jquery.fonticonpicker.css';
		wp_enqueue_style( $handle . '-fonticonpicker', $fonticonpicker_css, null, $version );

		$fonticonpicker_dark_css = $url_assets . 'fonticonpicker/css/themes/dark-grey-theme/jquery.fonticonpicker.darkgrey.css';
		wp_enqueue_style( $handle . '-fonticonpicker-darkgrey', $fonticonpicker_dark_css, null, $version );

	}

}