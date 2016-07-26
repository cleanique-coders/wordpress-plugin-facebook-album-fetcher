<?php

class Johawaki_Slider {
	public function run()
	{
		
		// include css
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_styles'] );

		// include javascripts
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_scripts'] );

		// add plugin main menus
		add_action('admin_menu', [ $this, 'setting_menus' ]);
		
		add_action( 'init', [ $this, 'define_shortcodes'] );
	}

	public function define_shortcodes()
	{
		// shortcode
		add_shortcode( 'johawaki-slider', [ __CLASS__ , 'view' ] );
	}

	public function setting_menus()
	{
		//create new top-level menu
		add_menu_page('Johawaki', 'Johawaki', 'administrator', 'johawaki-setting', [ $this, 'setting'] );

		//create sub menu 
		add_submenu_page( 'johawaki-setting', 'Slider Setting', 'Slider Setting', 'administrator', 'johawaki-setting-slider', [ $this, 'setting_slider']);

		//create sub menu 
		add_submenu_page( 'johawaki-setting', 'Album', 'Album', 'administrator', 'johawaki-setting-album', [ $this, 'setting_album']);
	}

	public function enqueue_styles()
	{
		wp_enqueue_style('johawaki-swiper-style', JOHAWAKI_SLIDER_URI . 'vendor/Swiper/dist/css/swiper.min.css');
		wp_enqueue_style('johawaki-bootstrap-admin-style', JOHAWAKI_SLIDER_URI . 'assets/css/wpadmin-bootstrap.css');
	}

	public function enqueue_scripts()
	{
		// include swiper slider
		wp_enqueue_script('johawaki-swiper-script', JOHAWAKI_SLIDER_URI . 'vendor/Swiper/dist/js/swiper.min.js', ['jquery'], null, true);

		// include johawaki slider
		wp_enqueue_script('johawaki-swiper-script', JOHAWAKI_SLIDER_URI . 'assets/js/johawaki-slider.js', ['jquery','johawaki-swiper-script'], null, true);
	}

	public function setting()
	{
		// general setting information
		require_once JOHAWAKI_SLIDER_DIR . '/partials/admin/settings.php';
	}

	public function setting_slider()
	{
		require_once JOHAWAKI_SLIDER_DIR . '/controllers/admin/setting-slider.php';
		require_once JOHAWAKI_SLIDER_DIR . '/partials/admin/setting-slider.php';
	}

	public function setting_album()
	{
		require_once JOHAWAKI_SLIDER_DIR . '/controllers/admin/setting-album.php';
		require_once JOHAWAKI_SLIDER_DIR . '/partials/admin/setting-album.php';
	}

	public function view() {
		require_once JOHAWAKI_SLIDER_DIR . '/controllers/view.php';
		require_once JOHAWAKI_SLIDER_DIR . '/partials/view.php';
	}
}