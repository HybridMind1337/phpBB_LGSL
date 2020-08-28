<?php
if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP
	'LGSL_ACP'		=> 'LGSL Extension',
	'LGSL_ACTIVE'		=> 'Enabled',
	'LGSL_TITLE'		=> 'LGSL Extension Settings',
	'LGSL_VERSION'	=> 'LGSL Version',
	'LGSL_MOD'	=> 'LGSL',
	'LGSL_CONFIG'		=> 'Settings',
	'LGSL_SELECT'		=> 'LGSL',
	'LGSL_SAVED'		=> 'Changes Saved',
	'LGSL_LOCATION'	=> 'Location on forum',
	'LGSL_LOCATION_EXPLAIN'	=> 'Where do you want the mod to display on the index page',
	'TOP_OF_FORUM'	=> 'Top of Forum',
	'BOTTOM_OF_FORUM'	=> 'Bottom of Forum',

));
