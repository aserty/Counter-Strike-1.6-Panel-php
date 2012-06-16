<?php
require "system/main.php";
ini_set("display_errors", false);

if($is_logged != true){
	if(!isset($_POST["login"])){
		$Smarty->display("header.tpl");
		if(isset($_COOKIE["ip"])){
			$ip = trim($_COOKIE["ip"]);
			if(!empty($ip)){
				$Smarty->assign("ip", $ip);
			}
		}
		if(isset($_COOKIE["port"])){
			$port = trim($_COOKIE["port"]);
			if(!empty($port)){
				$Smarty->assign("port", $port);
			}
		}
		$Smarty->assign("langs", $langs_);
		$Smarty->display("login.tpl");
		$Smarty->display("footer.tpl");
	}else{
		header("Content-type: text/json");
		header("Content-type: application/json");
		$json = array();
		if(isset($_POST["ip"], $_POST["port"], $_POST["rcon"], $_POST["lang"])){
			$ip = trim($_POST["ip"]);
			$port = trim($_POST["port"]);
			$rcon_pass = trim($_POST["rcon"]);
			$lang_ = trim($_POST["lang"]);
			if(!empty($ip) and !empty($port) and !empty($rcon_pass) and !empty($lang_)){
				if(validate_ip($ip)){
					if(is_numeric($port)){
						$rcon = new RCon($ip.":".$port, $rcon_pass);
						if($rcon->Connect()){
							$_SESSION["login"] = true;
							$_SESSION["login_data"] = array(
								"host" => $ip,
								"port" => $port,
								"rcon_pass" => $rcon_pass
							);
							setcookie("ip", $ip, time()+546667686);
							setcookie("port", $port, time()+546667686);
							if(in_array($lang_, $langs)){setcookie("lang", $lang_, time()+83443, "/");}
							$json = array("status" => 4);
						}else{
							$json = array("status" => 5);
						}
						$rcon->Disconnect();
					}else{
						$json = array("status" => 3);
					}
				}else{
					$json = array("status" => 1);
				}
			}else{
				$json = array("status" => 0);
			}
		}else{
			$json = array("status" => 0);
		}
		echo json_encode($json);
	}	
}else{
	header("Location: index.php");
}
