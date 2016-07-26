<?php

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// delete slider version
delete_option( 'johawaki_slider_version' );

delete_option( 'johawaki_slider_facebook_id' );
delete_option( 'johawaki_slider_facebook_secret' );
delete_option( 'johawaki_slider_facebook_page' );
delete_option( 'johawaki_slider_facebook_albums' );