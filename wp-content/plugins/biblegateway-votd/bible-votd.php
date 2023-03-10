<?php
/*
Plugin Name: BibleGateway VOTD
Plugin URI: https://wordpress.org/plugins/biblegateway-votd/
Description: Insert <a href="https://www.biblegateway.com/usage/">BibleGateway.com</a>'s verse of the day in pages or posts. Use the Widgets page to add the verse to your sidebar or add <strong>[biblevotd]</strong> in pages or posts where you want to insert the verse.
Version: 3.5
Author: Dave Zaikos
Author URI: https://dave.zaikos.com/
License: GPL2
*/

/*  Copyright 2008-2015  Dave Zaikos  (email : https://dave.zaikos.com/contact-me/)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( !class_exists( 'dz_biblegateway_votd' ) ) {
	/**
	 * dz_biblegateway_votd class.
	 *
	 * Insert BibleGateway.com's verse-of-the-day in pages, posts, or as a widget.
	 *
	 * @version 3.4
	 * @author Dave Zaikos
	 * @copyright Copyright (c) 2008-2015, Dave Zaikos
	 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
	 */
	class dz_biblegateway_votd {

		/**
		 * version
		 *
		 * Holds the current version of this plugin.
		 */
		const version = 3.4;

		/**
		 * instances
		 *
		 * Stores an array of all instances of the verse of the day used on a page load.
		 * The array contains the version abbreviations used as values.
		 *
		 * (default value: array())
		 *
		 * @var array
		 * @access private
		 * @static
		 */
		private static $instances = array();

		/**
		 * option_name
		 *
		 * The option name for the WordPress options table.
		 *
		 * @see get_option()
		 * @see update_option()
		 */
		const option_name = 'dz_biblegateway_votd';

		/**
		 * transient_name
		 *
		 * The name for the transient entry in the WordPress database. Uses the Transient API
		 * to cache remotely fetched verses.
		 *
		 * @see get_transient()
		 * @see set_transient()
		 */
		const transient_name = 'dz_biblegateway_votd_cache';

		/**
		 * shortcode_name
		 *
		 * The name of the shortcode.
		 */
		const shortcode_name = 'biblevotd';

		/**
		 * __construct function.
		 *
		 * @since 3.0
		 * @access public
		 * @return void
		 */
		public function __construct() {
			add_shortcode( self::shortcode_name, array( &$this, 'bible_votd_shortcode' ) );
		}

		/**
		 * get_available_versions function.
		 *
		 * Returns an associative array of available BibleGateway Bible versions/translations.
		 *
		 * @since 3.0
		 * @access public
		 * @static
		 * @uses get_option()
		 * @return array Associative array of available translations with keys of abbreviations and values of full names.
		 */
		public static function get_available_versions() {
			static $versions = array();

			if ( empty( $versions ) ) {
				$versions = array(
					'KJ21' => '21st Century King James Version (KJ21)',
					'ASV' => 'American Standard Version (ASV)',
					'AMP' => 'Amplified Bible (AMP)',
					'BRG' => 'BRG Bible (BRG)',
					'CEB' => 'Common English Bible (CEB)',
					'CJB' => 'Complete Jewish Bible (CJB)',
					'CEV' => 'Contemporary English Version (CEV)',
					'DARBY' => 'Darby Translation (DARBY)',
					'DLNT' => 'Disciples&#039; Literal New Testament (DLNT)',
					'DRA' => 'Douay-Rheims 1899 American Edition (DRA)',
					'ERV' => 'Easy-to-Read Version (ERV)',
					'ESV' => 'English Standard Version (ESV)',
					'ESVUK' => 'English Standard Version Anglicised (ESVUK)',
					'EXB' => 'Expanded Bible (EXB)',
					'GNV' => '1599 Geneva Bible (GNV)',
					'GW' => 'GOD&#039;S WORD Translation (GW)',
					'GNT' => 'Good News Translation (GNT)',
					'HCSB' => 'Holman Christian Standard Bible (HCSB)',
					'ICB' => 'International Children&#039;s Bible (ICB)',
					'ISV' => 'International Standard Version (ISV)',
					'PHILLIPS' => 'J.B. Phillips New Testament (PHILLIPS)',
					'JUB' => 'Jubilee Bible 2000 (JUB)',
					'KJV' => 'King James Version (KJV)',
					'AKJV' => 'Authorized (King James) Version (AKJV)',
					'LEB' => 'Lexham English Bible (LEB)',
					'TLB' => 'Living Bible (TLB)',
					'MSG' => 'The Message (MSG)',
					'MEV' => 'Modern English Version (MEV)',
					'MOUNCE' => 'Mounce Reverse-Interlinear New Testament (MOUNCE)',
					'NOG' => 'Names of God Bible (NOG)',
					'NABRE' => 'New American Bible (Revised Edition) (NABRE)',
					'NASB' => 'New American Standard Bible (NASB)',
					'NCV' => 'New Century Version (NCV)',
					'NET' => 'New English Translation (NET Bible)',
					'NIRV' => 'New International Reader&#039;s Version (NIRV)',
					'NIV' => 'New International Version (NIV)',
					'NIVUK' => 'New International Version - UK (NIVUK)',
					'NKJV' => 'New King James Version (NKJV)',
					'NLV' => 'New Life Version (NLV)',
					'NLT' => 'New Living Translation (NLT)',
					'NRSV' => 'New Revised Standard Version (NRSV)',
					'NRSVA' => 'New Revised Standard Version, Anglicised (NRSVA)',
					'NRSVACE' => 'New Revised Standard Version, Anglicised Catholic Edition (NRSVACE)',
					'NRSVCE' => 'New Revised Standard Version Catholic Edition (NRSVCE)',
					'OJB' => 'Orthodox Jewish Bible (OJB)',
					'RSV' => 'Revised Standard Version (RSV)',
					'RSVCE' => 'Revised Standard Version Catholic Edition (RSVCE)',
					'VOICE' => 'The Voice (VOICE)',
					'WEB' => 'World English Bible (WEB)',
					'WE' => 'Worldwide English (New Testament) (WE)',
					'WYC' => 'Wycliffe Bible (WYC)',
					'YLT' => 'Young&#039;s Literal Translation (YLT)'
					);

				// Add user-defined translations.

				$options = get_option( self::option_name );
				if ( !empty( $options['extra-versions'] ) )
					$versions = array_merge( $versions, $options['extra-versions'] );

				// Filter the list so final changes can be forced.

				$versions = (array) apply_filters( 'dz_biblegateway_versions', $versions );
			}

			return $versions;
		}

		/**
		 * is_version_available function.
		 *
		 * Checks a Bible version against the list of available versions.
		 *
		 * @access public
		 * @static
		 * @uses self::get_available_versions()
		 * @param string $version Version to check.
		 * @return string|bool The abbreviation as a string if the version is available, otherwise false.
		 */
		public static function is_version_available( $version ) {
			$available = self::get_available_versions();

			// Check if it is an abbreviation.

			$_version = strtoupper( $version );
			if ( array_key_exists( $_version, $available ) )
				return $_version;

			// Check if it is a full name. If would have to be an exact match though.

			if ( ( $_version = array_search( $version, $available ) ) )
				return $_version;

			return false;
		}

		/**
		 * bible_votd_footer_script function.
		 *
		 * Prints the necessary JavaScript in the footer to load the verse of the day.
		 *
		 * @access public
		 * @return void
		 */
		public function bible_votd_footer_script() {
?>
<script type="text/javascript">
/* <![CDATA[ */
jQuery(document).ready(function(b){var a=<?php echo json_encode( self::$instances ); ?>;b.each(a,function(d,c){b.getJSON("https://www.biblegateway.com/votd/get?callback=?",{format:"json",version:c},function(f){if("undefined"!=typeof f.error){return true;}var e=f.votd;b("div#biblegateway-votd-"+d).html('<a class="dailyverseheading" target="_blank" href="'+e.permalink+'">'+e.reference+"</a><br><p class='dailyversetext'>"+e.text+'</p> <a href="'+e.copyrightlink+'">'+e.copyright.replace(/\.+$/,"")+'</a>');});});});
/* ]]> */
</script>
<?php
		}

		/**
		 * get_cached_html_code function.
		 *
		 * Returns the cached verse of the day.
		 *
		 * @access private
		 * @return string The HTML code with the verse.
		 */
		private function get_cached_html_code() {
			$cache = get_transient( self::transient_name );

			end( self::$instances );
			$version = current( self::$instances );

			if ( isset( $cache[$version]['verse'] ) )
				return $cache[$version]['verse'];

			return false;
		}

		/**
		 * get_jquery_html_code function.
		 *
		 * Returns jQuery JavaScript code for embedding the verse of the day on when the DOM is completely loaded.
		 *
		 * @access private
		 * @return string The HTML code to insert the verse.
		 */
		private function get_jquery_html_code() {
			return '<div id="biblegateway-votd-%3$d">Loading BibleGateway&#8217;s verse of the day&#8230;</div>';
		}

		/**
		 * get_basic_html_code function.
		 *
		 * Returns the basic BibleGateway.com HTML/JavaScript code in a sprintf-ready format.
		 * The sprintf call should use %1$s for the version.
		 *
		 * This is the code BibleGateway.com provides but it should only ever be used as a last
		 * resort as it can significantly slow page loading.
		 *
		 * @access private
		 * @return string The HTML code to insert the verse.
		 */
		private function get_basic_html_code() {
			return '<script type="text/javascript" language="JavaScript" src="https://www.biblegateway.com/votd/votd.write.callback.js"></script>
<script type="text/javascript" language="JavaScript" src="https://www.biblegateway.com/votd/get?format=json&amp;version=%1$s&amp;callback=BG.votdWriteCallback"></script>
<noscript><iframe framespacing="0" frameborder="no" src="https://www.biblegateway.com/votd/get?format=html&amp;version=%1$s">View Verse of the Day</iframe></noscript>';
		}

		/**
		 * bible_votd_code_helper function.
		 *
		 * Determines the method of adding the verse of the day and returns the necessary
		 * code for the calling function to use.
		 *
		 * @access private
		 * @return string The sprintf-ready code to be inserted into the page.
		 */
		private function bible_votd_code_helper() {
			$options = get_option( self::option_name );
			$method = ( isset( $options['embed-method'] ) ) ? $options['embed-method'] : 'jquery';

			switch( $method ) {
				case 'cache':
					if ( get_transient( self::transient_name ) && $cache = $this->get_cached_html_code() )
						return $cache;

				case 'jquery':
					wp_enqueue_script( 'jquery' );
					add_action( 'wp_print_footer_scripts', array( &$this, 'bible_votd_footer_script' ) );
					return $this->get_jquery_html_code();

				case 'basic':
				default:
					return $this->get_basic_html_code();
			}
		}

		/**
		 * bible_votd_shortcode function.
		 *
		 * The function handler for WordPress's shortcode API. This does the work of inserting
		 * the verse of the day in a page or post.
		 *
		 * @access public
		 * @param mixed $atts
		 * @return string The Bible verse of the day.
		 */
		public function bible_votd_shortcode( $atts ) {
			extract( shortcode_atts( array(
				'version' => null,
				'class' => 'biblevotd'
				), $atts ) );

			// Validate user-provided values.

			if ( !( $version = $this->is_version_available( $version ) ) ) {
				$defaults = get_option( self::option_name );
				$version = ( isset( $defaults['default-version'] ) ) ? $defaults['default-version'] : 'NIV';
			}

			$class = implode( ' ', array_map( 'sanitize_html_class', explode( ' ', $class ) ) );

			// Get and update instance.

			self::$instances[] = $version;
			end( self::$instances );
			$instance = key( self::$instances );

			// Build the code.

			$votd = "\n<!-- BibleGateway.com Verse of the Day plugin by Dave Zaikos (https://dave.zaikos.com/). -->\n"; /* Luke 6:31. Please do not remove the credit. Thank you! */
			$votd .= "<div id='dz-biblevotd-%3\$d' class='%2\$s'>\n";
			$votd .= "\t" . $this->bible_votd_code_helper() . "\n";
			$votd .= "</div>\n";

			$votd = sprintf( $votd, $version, $class, $instance );

			// Allow other plugins and themes to filter the final verse.

			$votd = apply_filters( 'pre_dz_biblegateway_verse', $votd, $version, $class, $instance );

			return $votd;
		}

	}

	if ( !class_exists( 'dz_biblegateway_votd_widget' ) ) {
		/**
		 * dz_biblegateway_votd_widget class.
		 *
		 * Adds a widget for the BibleGateway verse of the day.
		 *
		 * @extends WP_Widget
		 */
		class dz_biblegateway_votd_widget extends WP_Widget {

			public function __construct() {
				parent::__construct( 'dz_biblegateway_votd', 'Bible VOTD', array( 'description' => "BibleGateway.com's verse of the day." ) );
			}

			public function widget( $args, $instance ) {
				extract( $args, EXTR_SKIP );
				extract( $instance, EXTR_SKIP );

				echo $before_widget;

				if ( !empty( $title ) ) {
					echo $before_title . esc_html( $title ) . $after_title;
				}

				echo do_shortcode( '[' . dz_biblegateway_votd::shortcode_name . ' version="' . $version . '"]' );

				echo $after_widget;
			}

			public function update( $new_instance, $old_instance ) {

				// Sanitize the title.

				$instance['title'] = wp_strip_all_tags( $new_instance['title'], true );

				// Sanitize the version.

				if ( !( $instance['version'] = dz_biblegateway_votd::is_version_available( $new_instance['version'] ) ) ) {
					if ( !( $instance['version'] = dz_biblegateway_votd::is_version_available( $old_instance['version'] ) ) ) {
						$options = get_option( dz_biblegateway_votd::option_name );
						$instance['version'] = ( isset( $options['default-version'] ) ) ? $options['default-version'] : 'NIV';
					}
				}

				// Return.

				return $instance;
			}

			public function form( $instance ) {

				// Get default options.

				$options = get_option( dz_biblegateway_votd::option_name );
				extract( $instance, EXTR_SKIP );

				// Validate title.

				if  ( empty( $title ) )
					$title = 'Verse of the Day';

				// Validate selected version.

				if ( empty( $version ) )
					$version = ( isset( $options['default-version'] ) ) ? $options['default-version'] : 'NIV';

				// Build the form.

				$versions = dz_biblegateway_votd::get_available_versions();
?>
<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id( 'version' ); ?>"><?php _e( 'Version:' ); ?></label>
	<select id="<?php echo $this->get_field_id( 'version' ); ?>" name="<?php echo $this->get_field_name( 'version' ); ?>">
<?php
				foreach ( $versions as $abbr => $desc ) {
					$selected = selected( $abbr, $version, false );
					printf ( "\t<option value='%1\$s'%2\$s>%3\$s</option>\n", esc_attr( $abbr ), $selected, esc_attr( $desc ) );
				}
?>
	</select>
</p>
<?php
			}

		}

	}

	if ( !isset( $plugin_dz_biblegateway_votd ) ) {
		$plugin_dz_biblegateway_votd = new dz_biblegateway_votd();
		add_action( 'widgets_init', create_function( '', 'register_widget( "dz_biblegateway_votd_widget" );' ) );
	}

	if ( is_admin() || ( defined( 'DOING_CRON' ) && DOING_CRON ) )
		include plugin_dir_path( __FILE__ ) . 'bible-votd-admin.php';
}
