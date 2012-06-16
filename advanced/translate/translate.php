<?php
$translate = array();

require dirname(__FILE__)."/es/es.translate";
require dirname(__FILE__)."/en/en.translate";

define("_TRANSLATE_", serialize($translate));

$langs_ = array("en" => "English", "es" => "Spanish");
$langs = array("en", "es");
global $langs; global $langs_;