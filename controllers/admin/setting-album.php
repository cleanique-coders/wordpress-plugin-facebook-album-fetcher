<?php

$appId = get_option('johawaki_slider_facebook_id');
$appSecret = get_option('johawaki_slider_facebook_secret');
$facebookPage = get_option('johawaki_slider_facebook_page');
$facebookAlbum = get_option('johawaki_slider_facebook_albums');
$fb_api = [];

if(empty($appId) || empty($appSecret) || empty($facebookPage)) {
	$empty = true;
} else {
	$empty = false;
	$fb_api  = [
		'application_id' => $appId,
		'application_secret' => $appSecret,
		'facebook_page' => $facebookPage,
		'facebook_album' => $facebookAlbum
	];
}

if(!empty($_POST) && isset($_POST['albums'])) {
	update_option('johawaki_slider_facebook_albums', $_POST['albums']);
}