<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system-configuration-overrides.html

$config['app_version'] = '6.0.6';
$config['encryption_key'] = '01e6f4dd5847a57010b97fdf0eb8f0ca3ac9d18d';
$config['session_crypt_key'] = 'cceac895ae7e7db5574146979e1848b9e8d71395';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'localhost',
		'database' => 'ee-blog',
		'username' => 'ee-blog-usr',
		'password' => 'nothingspecialgetlostgohome',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);
$config['show_ee_news'] = 'y';
$config['share_analytics'] = 'y';

// EOF