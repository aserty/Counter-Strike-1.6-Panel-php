<?php
session_start();

require dirname(__FILE__)."/../translate/translate.php";
require dirname(__FILE__)."/config.php";

require dirname(__FILE__)."/../classes/class.rcon.php";
require dirname(__FILE__)."/../classes/class.counterstrike.php";
require dirname(__FILE__)."/../tools/Smarty/Smarty.class.php";
require dirname(__FILE__)."/functions.php";
require dirname(__FILE__)."/config.smarty.php";
require dirname(__FILE__)."/config.user.php";
require dirname(__FILE__)."/config.counterstrikeuser.php";
require dirname(__FILE__)."/commands.php";

$Smarty->assign("is_logged", $is_logged);
$Smarty->assign("logged", $logged);
$Smarty->assign("lang", _LANG_);