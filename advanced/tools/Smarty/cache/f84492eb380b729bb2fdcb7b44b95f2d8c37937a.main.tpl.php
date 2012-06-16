<?php /*%%SmartyHeaderCode:153364ed90f5a02f7e2-58019521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f84492eb380b729bb2fdcb7b44b95f2d8c37937a' => 
    array (
      0 => 'C:\\Datos de la red\\Servidor\\Wamp\\www\\cs_panel\\system/../themes/cs_panel/tpl\\main.tpl',
      1 => 1321805478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153364ed90f5a02f7e2-58019521',
  'variables' => 
  array (
    'rcon_connected' => 0,
    'rcon_connect' => 0,
    'commands' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed90f5b1d96c',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed90f5b1d96c')) {function content_4ed90f5b1d96c($_smarty_tpl) {?>﻿<div class="content">
			<script type="text/javascript">
		$(function(){
			tabs.ready(".tabs", "main");
		});
		</script>
		<script type="text/javascript">
			$(function(){
		basic_config.ready();
		});
		</script>
		<div class="tabs">
			<div class="buttons clearfix">
				<div class="button" id="main">Main</div>
				<div class="button" id="configs">Configs</div>
				<div class="button" id="statics">Statics</div>
				<div class="button" id="players">Players</div>
				<div class="button" id="bans">Bans</div>
				<div class="button" id="console">Console</div>
			</div>
			<div class="tab" id="tab_main">	
				<form class="config_basic" id="basic_config">
					<div class="sect clearfix" id="hostname">
						<div class="description">Hostname:</div><div class="input"><input id="hostname" value="Counter Strike 1.6 Server" name="hostname" type="text" /></div>
					</div>
					<div class="sect clearfix" id="map">
						<div class="description">Map:</div><div class="input"><select name="map" id="map">
								<option value="as_oilrig">as_oilrig</option>
<option value="awp_map">awp_map</option>
<option value="cs_747">cs_747</option>
<option value="cs_assault" selected="selected">cs_assault</option>
<option value="cs_backalley">cs_backalley</option>
<option value="cs_estate">cs_estate</option>
<option value="cs_havana">cs_havana</option>
<option value="cs_italy">cs_italy</option>
<option value="cs_militia">cs_militia</option>
<option value="cs_office">cs_office</option>
<option value="cs_siege">cs_siege</option>
<option value="de_airstrip">de_airstrip</option>
<option value="de_aztec">de_aztec</option>
<option value="de_cbble">de_cbble</option>
<option value="de_chateau">de_chateau</option>
<option value="de_cpl_fire">de_cpl_fire</option>
<option value="de_cpl_mill">de_cpl_mill</option>
<option value="de_cpl_strike">de_cpl_strike</option>
<option value="de_dust">de_dust</option>
<option value="de_dust2">de_dust2</option>
<option value="de_inferno">de_inferno</option>
<option value="de_nuke">de_nuke</option>
<option value="de_piranesi">de_piranesi</option>
<option value="de_prodigy">de_prodigy</option>
<option value="de_storm">de_storm</option>
<option value="de_survivor">de_survivor</option>
<option value="de_torn">de_torn</option>
<option value="de_train">de_train</option>
<option value="de_vertigo">de_vertigo</option>
<option value="fy_iceworld">fy_iceworld</option>
<option value="fy_iceworld2k">fy_iceworld2k</option>

						</select></div>
					</div>
					<div class="sect clearfix" id="network">
						<div class="description">Network:</div><div class="input"><select name="network" id="network">
								<option value="0" selected="selected">Internet</option>
<option value="1">Lan</option>

						</select></div>
					</div>
					<div class="sect clearfix" id="rcon_pass">
						<div class="description">Rcon Password:</div><div class="input"><input type="text" name="rcon_pass" id="rcon_pass" value="123" /></div>
					</div>
					<div class="sect clearfix" id="player_pass">
						<div class="description">Player Password:</div><div class="input"><input type="text" name="player_pass" id="player_pass" value="" /></div>
					</div>
					
					<div class="sect clearfix" id="button">
						<div class="description des"></div><div class="input button"><div class="button-blue">Save</div></div>
					</div>
				</form>
			</div>
			
			<div class="tab" id="tab_configs">
				<form class="config_basic" id="config">
					<div class="sect clearfix" id="time_limit">
						<div class="description">Time limit</div><div class="input"><input id="time_limit" value="20" name="time_limit" type="text" /></div>
					</div>
					<div class="sect clearfix" id="win_limit">
						<div class="description">Win limit (rounds)</div><div class="input"><input id="win_limit" value="0" name="win_limit" type="text" /></div>
					</div>
					<div class="sect clearfix" id="maxrounds">
						<div class="description">Round limit (rounds)</div><div class="input"><input id="maxrounds" value="0" name="maxrounds" type="text" /></div>
					</div>
					<div class="sect clearfix" id="freezetime">
						<div class="description">Freeze time (seconds)</div><div class="input"><input id="freezetime" value="6" name="freezetime" type="text" /></div>
					</div>
					<div class="sect clearfix" id="buytime">
						<div class="description">Buy time (minutes)</div><div class="input"><input id="buytime" value="1.5" name="buytime" type="text" /></div>
					</div>
					<div class="sect clearfix" id="startmoney">
						<div class="description">Starting Money</div><div class="input"><input id="startmoney" value="800" name="startmoney" type="text" /></div>
					</div>
					<div class="sect clearfix" id="footsteps">
						<div class="description">Footsteps</div><div class="input"><select name="footsteps" id="footsteps">
								<option value="1" selected="selected">Enabled</option>
<option value="0">Disabled</option>

						</select></div>
					</div>
					<div class="sect clearfix" id="forcechasecam">
						<div class="description">Death camera type</div><div class="input"><select name="forcechasecam" id="forcechasecam">
								<option value="0" selected="selected">Spectate anyone</option>
<option value="1">Spectate team only</option>
<option value="2">Only first person</option>

						</select></div>
					</div>
					
					<div class="sect clearfix" id="button">
						<div class="description des"></div><div class="input button"><div class="button-blue">Save</div></div>
					</div>
				</form>
			</div>
			<div class="tab" id="tab_statics">Statics :)</div>
			<div class="tab" id="tab_players">Players :)</div>
			<div class="tab" id="tab_bans">Bans :)</div>
			<div class="tab" id="tab_console">Console :)</div>
		</div>
	</div><?php }} ?>