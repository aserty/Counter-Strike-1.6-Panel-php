<?php
/*
counterstrike Class
	Author: elvago9 <gabrieel09@gmail.com>
	Depends: RCon Class
*/ 
class counterstrike extends RCon{
	public function Config($config){
		$config = strtolower($config);
		$return = explode("is", $this->Command($config));
		$return = trim($return[1]);
		$return = str_replace('"', '', $return);
		return $return;
	}
	public function SetConfig($config, $value){
		$config = strtolower($config);
		$this->Command($config.' "'.$value.'"');
		return $this->Config($config);
	}
	public function Stats(){
		$stats = explode("\n", $this->Command("stats"));
		$stats_ = explode(" ", trim($stats[1]));
		$stats_all = array();
		foreach($stats_ as $val){
			$val = trim($val);
			if($val != "") $stats_all[] = $val;
		}
		$stats_all_ = array(
			"cpu" => $stats_all[0],
			"in" => $stats_all[1],
			"out" => $stats_all[2],
			"uptime" => array(
				"minutes" => $stats_all[3],
				"hours" => ConvertMinutes2Hours($stats_all[3])
			),
			"users" => $stats_all[4],
			"fps" => $stats_all[5],
		);
		return $stats_all_;
	}
	public function Info(){
		$status = $this->Command("stat");
		$data = array();
		$status_ = explode("\n", $status);
		$map = explode(": ", $status_[3]);
		$map = trim($map[1]); $map = str_replace("at", "", $map);
		$players = explode(": ", $status_[4]);
		$players = trim($players[1]);
		$players_active = explode("active", $players);
		$players_max = trim($players_active[1]);
		$players_active = trim($players_active[0]);
		$players_max = trim(str_replace(array("(", ")", "max"), "", $players_max));
		$data["players"] = array();
		if($players_active > 0){
			for($i = 7; $i < $players_active + 7; $i++){
				$user_ = explode("	", $status_[$i]);
				$user = array(
					"id" => trim($user_[0]),
					"name" => trim(str_replace('"', "", $user_[1])),
					"userid" => trim($user_[2]),
					"uniqueid" => trim($user_[3]),
					"frag" => trim($user_[4]),
					"time" => trim($user_[5]),
					"ping" => trim($user_[6]),
					"loss" => trim($user_[7]),
				);
				$data["players"][] = $user;
			}
		}
		$data["hostname"] = $this->Config("hostname");
		$data["host"] = $this->Config("ip").":".$this->Config("port");
		$data["map"] = trim($map);
		$data["count_players"] = array(
			"active" => $players_active,
			"max" => $players_max
		);
		return $data;
	}
	public function GetAllMaps(){
		$maps = array();
		$maps_ = explode("\n", $this->Command("maps *"));
		foreach($maps_ as $i => $val){
			if($i != 0){
				$val = trim($val);
				if(!empty($val)){
					$maps__ = explode(".", $val);
					$maps[] = $maps__[0];
				}
			}
		}
		return $maps;
	}
	
}

/* 
CommandsConfig:
	hostname: The name of the server.
	sv_password: Set server password. Leave blank to disable.
	mp_friendlyfire <0/1>: Turn on/off friendlyfire. Default: off.
	mp_footsteps <0/1>: Turn on/off footsteps. Default: on.
	mp_autoteambalance <0/1>: Force clients to auto-join the opposite team if they are not balanced. Default: on.
	mp_autokick <0/1>: Kick idle/team-killing players. Default: off.
	mp_flashlight <0/1>: Turn on/off the ability for clients to use flashlight. Default: off.
	mp_tkpunish <0/1>: Punish TK'ers on next round? Default: on.
	mp_forcecamera <0/1>: Force dead players to first person mode, effectively disabling freelook. Default: off.
	sv_alltalk <0/1>: Players can hear all other players, no team restrictions. Default: off.
	sv_pausable <0/1>: Can the server be paused Default: 0.
	sv_consistency <0/1>: Force cleints to pass consistency check for critical files before joining server? Default: 0.
	sv_cheats <0/1>: Allow cheats on server. Default: 0.
	sv_gravity <0/1>: World Gravity Default: 800.
	sv_maxvelocity: Maximum speed any ballistically moving object is allowed to attain per axis. Default: 3500.
	sv_unlag <0/1>: Enables player lag compensation. Default: 1.
	sv_voicecodec: Specifies which voice codec DLL to use in a game. Set to the name of the DLL without the extension.. Default: vaudio_miles.
	sv_hltv <0/1>: Enables HLTV on the server. Default: 0.
	sv_allowupload <0/1>: Allow clients to upload their custom decals to the server. Default: 1.
	sv_allowdownload <0/1>: Allow clients to downnload files. Default: 1.
	sv_maxspeed: Maximum speed a player can move. Default: 320.
	mp_limitteams <0-20>: Max # of players 1 team can have over another. Default: 2.
	mp_hostagepenalty <##>: How many hostages a Terrorist can kill before being kicked, 0 to disable. Default: 5.
	sv_voiceenable <0/1>: Allow clients to use mic. Default: 1.
	mp_allowspectators <0/1>: Allow spectators on the server. Default: 1.
	mp_chattime <0-120>: Amount of time in seconds players can chat after the game is over. Lower value = faster map load change. Default: 10.
	sv_timeout <##>: After this many seconds without a message from a client, the client is dropped. Default: 65.
	
	rcon_password: Set rcon passsword. Leave blank to disable rcon.
	sv_rcon_banpenalty <mins>: Number of minutes to ban users who fail rcon authentication. Default: 0.
	sv_rcon_maxfailures <0-20>: Max number of times a user can fail rcon authentication before being banned. Default: 10.
	sv_rcon_minfailures <0-20>: Number of times a user can fail rcon authentication in sv_rcon_minfailuretime before being banned. Default: 5.
	sv_rcon_minfailuretime <1-seconds>: Number of seconds to track failed rcon authentications. Default: 30.
	
	mp_freezetime <0-60>: Time in seconds to keep players frozen when the round starts. Default: 6.
	mp_roundtime <1-9>: How much time in minutes does a round last. Default: 5.
	mp_startmoney <800-16000>: Amount of money each player gets when they reset (16000 max) Default: 800.
	mp_c4timer <10-90>: The amount of time in seconds before bomb explodes after planted. Default: 45.
	mp_fraglimit <##>: Amount of frags a player can exceed before changing maps. Default: 0.
	mp_maxrounds <##>: Amount of round to play before server changes maps. Default: 0.
	mp_winlimit <0-20>: Max number of rounds one team can win before server changes maps. Default: 0.
	mp_playerid <0/1/2>: Controls what information player see in the status bar: 0 all names; 1 team names; 2 no names. Default: 0.
	mp_spawnprotectiontime: Time in seconds to Kick players who team-kill after round restart. Default: 5.
	
	sv_minrate <0-25000>: Min bandwidth rate allowed on server. Default: 0 (unlimited).
	sv_maxrate <0-25000>: Max bandwidth rate allowed on server. Default: 0 (unlimited).
	decalfrequency: Amount of time in seconds a player can spray their decal. Default: 10.
	sv_maxupdaterate: Maximum updates per second that the server will allow. Default: 60.
	sv_minupdaterate: Minimum updates per second that the server will allow. Default: 10.
	
	log <on/off>: Enable server logging? Default: off.
	sv_logbans <0/1>: Log server bans in the server logs. Default: 0.
	sv_logecho <0/1>: Echo log information to the console. Default: 1.
	sv_logfile <0/1>: Log server information in the log file. Default: 1.
	sv_log_onefile <0/1>: Log server information to only one file. Default: 0.
	sv_logsdir: Folder in the game directory where server logs will be stored.
	
	sv_lan <0/1>: 0=Public/LAN, 1=LAN Default: 0.
	sv_region: Geographic location of the server:
																							-1 World
																							0 US East coast
																							1 US West coast
																							2 South America
																							3 Europe
																							4 Asia
																							5 Australia
																							6 Middle East
																							7 Africa
	sv_contact: Contact email for server sysop																						
*/