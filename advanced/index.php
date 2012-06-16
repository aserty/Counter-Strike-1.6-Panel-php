<?php
require "system/main.php";

if($is_logged == true){
	if($rcon->Connect()){
		$Smarty->display("header.tpl");
		$Smarty->assign("rcon_connected", true);
		$maps = array();
		foreach($rcon->GetAllMaps() as $val){
			$maps[$val] = $val;
		}
				
		$Smarty->assign("rcon_connect", array(
			"maps" => $maps,
			"info" => $rcon->Info(),
			"stats" => $rcon->Stats(),
			
			"hostname" => $rcon->Config("hostname"),
			"network" => $rcon->Config("sv_lan"),
			"rcon_pass" => $rcon->Config("rcon_password"),
			"player_pass" => $rcon->Config("sv_password"),
			
			"time_limit" => $rcon->Config("mp_timelimit"),
			"win_limit" => $rcon->Config("mp_winlimit"),
			"maxrounds" => $rcon->Config("mp_maxrounds"),
			"freezetime" => $rcon->Config("mp_freezetime"),
			"buytime" => $rcon->Config("mp_buytime"),
			"startmoney" => $rcon->Config("mp_startmoney"),
			"footsteps" => $rcon->Config("mp_footsteps"),
			"forcechasecam" => $rcon->Config("mp_forcechasecam"),
			//"region" => $rcon->Config("sv_region"),
			//"autoteambalance" => $rcon->Config("mp_autoteambalance")
		));
	}else{
		$Smarty->assign("rcon_connected", false);
	}
	$rcon->Disconnect();
	$Smarty->display("main.tpl");
	$Smarty->display("footer.tpl");
}else{
	header("Location: login.php");
}