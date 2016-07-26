# WordPress Plugin Development

## Workflow

1. Activation & Deactivation - `johawaki-slider.php`
	
	```
	register_activation_hook( __FILE__, 'activate_johawaki_slider' );
	register_deactivation_hook( __FILE__, 'deactivate_johawaki_slider' );
	```

2. Uninstall - `uninstall.php`

	```
	<?php

	// If uninstall not called from WordPress, then exit.
	if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
		exit;
	}

	// delete slider version
	delete_option( 'johawaki_slider_version' );

	```

3. Create admin setting pages

	- Create admin menu & submenu
	- Create admin page view
	- Use Bootstrap in admin page

4. Store Facebook API Details. Follow [this](http://www.codeofaninja.com/2013/02/facebook-appId-and-appSecret.html) tutorial to get the Facebook App ID and Secret Key

	```
	appId: somerandomkey
	appSecret: somerandomkey
	```