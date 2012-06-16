<div class="content">
	{if $rcon_connected == true}
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
				<div class="button" id="main">{translate id="0"}Main{/translate}</div>
				<div class="button" id="configs">{translate id="1"}Configs{/translate}</div>
				<div class="button" id="statics">{translate id="2"}Statics{/translate}</div>
				<div class="button" id="players">{translate id="3"}Players{/translate}</div>
				<div class="button" id="bans">{translate id="4"}Bans{/translate}</div>
				<div class="button" id="console">{translate id="5"}Console{/translate}</div>
			</div>
			<div class="tab" id="tab_main">	
				<form class="config_basic" id="basic_config">
					<div class="sect clearfix" id="hostname">
						<div class="description">{translate id="6"}Hostname{/translate}:</div><div class="input"><input id="hostname" value="{$rcon_connect.hostname}" name="hostname" type="text" /></div>
					</div>
					<div class="sect clearfix" id="map">
						<div class="description">{translate id="10"}Map{/translate}:</div><div class="input"><select name="map" id="map">
								{html_options options=$rcon_connect.maps selected=$rcon_connect.info.map}
						</select></div>
					</div>
					<div class="sect clearfix" id="network">
						<div class="description">{translate id="12"}Network{/translate}:</div><div class="input"><select name="network" id="network">
								{html_options options=$commands.sv_lan selected=$rcon_connect.network}
						</select></div>
					</div>
					<div class="sect clearfix" id="rcon_pass">
						<div class="description">Rcon {translate id="13"}Password{/translate}:</div><div class="input"><input type="text" name="rcon_pass" id="rcon_pass" value="{$rcon_connect.rcon_pass}" /></div>
					</div>
					<div class="sect clearfix" id="player_pass">
						<div class="description">Player {translate id="13"}Password{/translate}:</div><div class="input"><input type="text" name="player_pass" id="player_pass" value="{$rcon_connect.player_pass}" /></div>
					</div>
					
					<div class="sect clearfix" id="button">
						<div class="description des"></div><div class="input button"><div class="button-blue">{translate id="14"}Save{/translate}</div></div>
					</div>
				</form>
			</div>
			
			<div class="tab" id="tab_configs">
				<form class="config_basic" id="config">
					<div class="sect clearfix" id="time_limit">
						<div class="description">Time limit</div><div class="input"><input id="time_limit" value="{$rcon_connect.time_limit}" name="time_limit" type="text" /></div>
					</div>
					<div class="sect clearfix" id="win_limit">
						<div class="description">Win limit (rounds)</div><div class="input"><input id="win_limit" value="{$rcon_connect.win_limit}" name="win_limit" type="text" /></div>
					</div>
					<div class="sect clearfix" id="maxrounds">
						<div class="description">Round limit (rounds)</div><div class="input"><input id="maxrounds" value="{$rcon_connect.maxrounds}" name="maxrounds" type="text" /></div>
					</div>
					<div class="sect clearfix" id="freezetime">
						<div class="description">Freeze time (seconds)</div><div class="input"><input id="freezetime" value="{$rcon_connect.freezetime}" name="freezetime" type="text" /></div>
					</div>
					<div class="sect clearfix" id="buytime">
						<div class="description">Buy time (minutes)</div><div class="input"><input id="buytime" value="{$rcon_connect.buytime}" name="buytime" type="text" /></div>
					</div>
					<div class="sect clearfix" id="startmoney">
						<div class="description">Starting Money</div><div class="input"><input id="startmoney" value="{$rcon_connect.startmoney}" name="startmoney" type="text" /></div>
					</div>
					<div class="sect clearfix" id="footsteps">
						<div class="description">Footsteps</div><div class="input"><select name="footsteps" id="footsteps">
								{html_options options=$commands.mp_footsteps selected=$rcon_connect.footsteps}
						</select></div>
					</div>
					<div class="sect clearfix" id="forcechasecam">
						<div class="description">Death camera type</div><div class="input"><select name="forcechasecam" id="forcechasecam">
								{html_options options=$commands.mp_forcechasecam selected=$rcon_connect.forcechasecam}
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
	{else}
		Ooops! He has produced an error with the connection to the server, try again :(
	{/if}
</div>