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

5. Get Facebook Page ID - see the Facebook page URI

6. Get Album List and administrator should be able to select which album want to display to public

7. Short Code provided in order to use the Facebook Albums in WordPress Post or Page

	```
	[johawaki-slider]
	```