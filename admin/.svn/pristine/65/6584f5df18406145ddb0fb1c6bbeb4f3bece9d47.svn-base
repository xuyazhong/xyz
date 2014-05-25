<?php
$install = false;
if ( !file_exists('conf.ini') ){
	$install = true;

} else {

	$conf = parse_ini_file('conf.ini', true);
	if ( $conf['_database']['user'] == 'Your Username Here' ){
		$install = true;
	}
}

if ( $install ){
	header("Location: install.php");
	exit;
}
require_once 'config.inc.php';
require_once CONF_DATAFACE_PATH.'/dataface-public-api.php';
df_init(__FILE__,CONF_DATAFACE_URL);
$app =& Dataface_Application::getInstance();
$app->display();
?>
