<?php
/**
 * Plugin Name: Admin Themes
 * Version: 0.1-alpha
 */

class Admin_Themes {

	public $themes = array();

	public $headers = array(
		'name'        => 'Admin Theme Name',
		'uri'         => 'Theme URI',
		'description' => 'Description',
		'colors'      => 'Colors',
		'version'     => 'Version',
		'author'      => 'Author',
		'author-uri'  => 'Author URI'
	);

	public function __construct() {

		add_action( 'admin_menu', array( &$this, 'register_admin_themes' ) ); 

		define( 'ADMIN_THEMES_DIR', trailingslashit( trailingslashit( WP_CONTENT_DIR ) . 'admin-themes' ) );

		define( 'ADMIN_THEMES_URI', trailingslashit( content_url( 'admin-themes' ) ) );
	}

	public function register_admin_themes() {

		$this->get_themes();

		if ( empty( $this->themes ) )
			return;

		foreach ( $this->themes as $theme_dir => $theme_data ) {

			$url = ADMIN_THEMES_URI . "{$theme_dir}/style.css";

			$colors = explode( ",", $theme_data['colors'] );

			wp_admin_css_color( $theme_dir, esc_html( $theme_data['name'] ), $url, $colors );
		}
	}

	public function get_themes() {

		$results = scandir( ADMIN_THEMES_DIR );

		if ( false !== $results ) {

			foreach ( $results as $result ) {

				if ( !in_array( $result, array( '.', '..' ) ) && is_dir( ADMIN_THEMES_DIR . $result ) ) {

					$file = ADMIN_THEMES_DIR . "{$result}/style.css";

					if ( file_exists( $file ) ) {

						$file_data = get_file_data( $file, $this->headers, 'admin_theme' );

						if ( !empty( $file_data['name'] ) && !empty( $file_data['colors'] ) )
							$this->themes[ $result ] = $file_data;
					}
				}
			}
		}
	}
}

new Admin_Themes();

?>