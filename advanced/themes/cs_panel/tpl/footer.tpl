		{if $is_logged == true}
			<div class="nav"><a href="">{translate id="7"}About{/translate}</a> | <a href="{$page_url}logout.php">{translate id="8"}Exit{/translate}</a></div>
		{/if}
		
		<div class="cs">{if $is_logged == true}
			<div style="position: relative; width: 100%; height: 100%;">
				<div class="main">
					{if $rcon_connected == true}
						<b>{translate id="9"}Conected to{/translate} {$rcon_connect.info.host}</b>
						<br />
						<b>{translate id="6"}Hostname{/translate}:</b> {$rcon_connect.info.hostname} 
						<br />
						<b>{translate id="10"}Map{/translate}:</b> {$rcon_connect.info.map} 
						<br />
						<b>{translate id="3"}Players{/translate}:</b> {$rcon_connect.info.count_players.active}  active ({$rcon_connect.info.count_players.max} Max)
						<br />
						<b>{translate id="11"}Uptime{/translate}:</b> {$rcon_connect.stats.uptime.hours}
					{/if}
				</div>
			</div>			
		{/if}</div>
		
	</body>
</html>