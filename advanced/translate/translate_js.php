<?php
require "../system/main.php";
header("Content-type: application/x-javascript");

echo "//Lang: "._LANG_;
echo "\n";
echo "var lang = new Array();";
echo "\n";
foreach($translate[_LANG_."_js"] as $i => $val){
	echo "lang[\"".$i."\"] = \"".$val."\";";
	echo "\n";
}
