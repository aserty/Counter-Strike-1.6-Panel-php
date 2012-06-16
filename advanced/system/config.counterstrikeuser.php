<?php
if($is_logged == true){
	$rcon = new counterstrike($logged["host"].":".$logged["port"], $logged["rcon_pass"]);
	global $rcon;
}