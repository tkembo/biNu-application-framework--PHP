<?php
require_once('class.biNu.php');

// Assign application configuration variables during constructor
$app_config = array (
	'dev_id' => 999999,								// Your DevCentral developer ID goes here
	'app_id' => 999999,								// Your DevCentral application ID goes here
	'app_name' => 'My First biNu App',				// Your application name goes here
	'app_home' => 'http://yourdomain.com/my_app/',	// Publically accessible URI
	'ttl' => 1										// Your page "time to live" parameter here
);

try {
	// Construct biNu object
	$binu_app = new biNu_app($app_config);

	
	$binu_app->add_style( array('name' => 'body_text', 'color' => '#1540eb') );
	$binu_app->add_text('Hello world', 'body_text');
	$binu_app->add_link('accept_text.php', 'Click me to enter text');

	/* Process menu options */
	$binu_app->add_menu_item( '8', 'My App Home', $binu_app->application_URL  );
	$binu_app->add_menu_item( '9', 'biNu Home', 'http://apps.binu.net/apps/mybinu/index.php' );

	/* Show biNu page */
	$binu_app->generate_BML();

} catch (Exception $e) {
	app_error('Error: '.$e->getMessage());
}



?>