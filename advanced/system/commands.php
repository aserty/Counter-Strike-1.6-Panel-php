<?php
$commands = array(
	"sv_region" => array(
		-1 => "World",
		0 => "US East coast",
		1 => "US West coast",
		2 => "South America",
		3 => "Europe",
		4 => "Asia",
		5 => "Australia",
		6 => "Middle East",
		7 => "Africa"
	),
	"sv_lan" => array(
		0 => "Internet",
		1 => "Lan"
	),
	"mp_autoteambalance" => array(
		0 => "No",
		1 => "Yes"
	),
	"mp_autokick" => array(
		0 => "No",
		1 => "Yes"
	),
	"mp_footsteps" => array(
		1 => "Enabled",
		0 => "Disabled"
	),
	"mp_forcechasecam" => array(
		0 => "Spectate anyone",
		1 => "Spectate team only",
		2 => "Only first person",
	),
	
);

$Smarty->assign("commands", $commands);