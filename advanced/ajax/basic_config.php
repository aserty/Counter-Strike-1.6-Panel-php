<?php
require "../system/main.php";
ini_set("display_errors", false);

header("Content-type: text/json");
header("Content-type: application/json");
$json = array();
if($is_logged == true){
	if($rcon->Connect()){
		$maps = array();
		foreach($rcon->GetAllMaps() as $val){
			$maps[$val] = $val;
		}
		if(isset($_POST["hostname"], $_POST["map"], $_POST["network"], $_POST["rcon_pass"], $_POST["player_pass"])){
			$hostname = trim($_POST["hostname"]);
			$map = trim($_POST["map"]);
			$network = ((int) $_POST["network"] == 0) ? 0 : 1;
			$rcon_pass = trim($_POST["rcon_pass"]);
			$player_pass = trim($_POST["player_pass"]);
			if(!empty($hostname) and !empty($map) and !empty($rcon_pass)){
				if(in_array($map, $maps)){
					$rcon->SetConfig("hostname", $hostname);
					$rcon->SetConfig("sv_lan", $network);
					$rcon->SetConfig("map", $map);
					$rcon->SetConfig("rcon_password", $rcon_pass);
					$rcon->SetConfig("sv_password", $player_pass);
					$_SESSION["login_data"]["rcon_pass"] = $rcon_pass;
					$json = array("status" => 1);
				}else{
					$json = array("status" => 0);
				}
			}else{
				$json = array("status" => 0);
			}
		}else{
			$json = array("status" => 0);
		}
	}else{
		$json = array("status" => 0);
	}
	$rcon->Disconnect();
}else{
	$json = array("status" => 0);
}
echo json_encode($json);