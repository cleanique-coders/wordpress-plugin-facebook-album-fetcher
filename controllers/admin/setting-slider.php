<?php
// 1818180688401825
// 7e5e4a82137feb25dff017bebe78667a
if(!empty($_POST)) {

	// save facebook app id and facebook app secret
	if(isset($_POST['appId']) && !empty($_POST['appId']) && isset($_POST['appSecret']) && !empty($_POST['appSecret'])) {
		update_option( 'johawaki_slider_facebook_id', $_POST['appId'] );
		update_option( 'johawaki_slider_facebook_secret', $_POST['appSecret'] );
	}

	// store facebook page id
	if(isset($_POST['facebookPage'])) {
		update_option( 'johawaki_slider_facebook_page', $_POST['facebookPage'] );
	}
}