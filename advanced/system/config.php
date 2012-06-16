<?php
define("_THEME_NAME_", "cs_panel");
define("_PAGE_TITLE_", "Counter Stirke 1.6 Panel Online");
define("_PAGE_URL_", "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/"); // Page url
define("_THEME_URL_", _PAGE_URL_."themes/"._THEME_NAME_."/");
define("_THEME_DIR_", dirname(__FILE__)."/../themes/"._THEME_NAME_."/");
define("_SMARTY_DIR_", dirname(__FILE__)."/../tools/Smarty/");

//######################################

$is_logged = false; $logged = array();
global $logged; global $is_logged;

if(isset($_COOKIE["lang"])){
	if(in_array($_COOKIE["lang"], $langs)){
		define("_LANG_", $_COOKIE["lang"]);
	}else{
		setcookie("lang", "en", time()+83443, "/");
		define("_LANG_", "en");
	}	
}else{
	setcookie("lang", "en", time()+83443, "/");
	define("_LANG_", "en");
}
?>