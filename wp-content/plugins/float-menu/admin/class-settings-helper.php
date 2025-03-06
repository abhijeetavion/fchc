<?php

/**
 * Class Settings_Helper
 *
 * This class contains helper methods for retrieving menu item types, share services,
 * and translation options.
 *
 * @package    FloatMenuLite
 * @subpackage Admin
 * @author     Dmytro Lobov <dev@wow-company.com>, Wow-Company
 * @copyright  2024 Dmytro Lobov
 * @license    GPL-2.0+
 */

namespace FloatMenuLite;

defined( 'ABSPATH' ) || exit;

class Settings_Helper {

	public static function item_type(): array {
		return [
			'links_start'   => __( 'Links', 'float-menu' ),
			'link'          => __( 'Link', 'float-menu' ),
			'login'         => __( 'Login', 'float-menu' ),
			'logout'        => __( 'Logout', 'float-menu' ),
			'lostpassword'  => __( 'Lostpassword', 'float-menu' ),
			'register'      => __( 'Register', 'float-menu' ),
			'links_end'     => __( 'Links', 'float-menu' ),
		];
	}


}
