<script type="text/javascript">
$(function(){
	login.ready();
});
</script>
<div class="content">
	<form class="login">
		<div class="sect clearfix" id="ip">
			<div class="description">IP:</div><div class="input"><input id="ip" {if isset($ip)}value="{$ip}"{/if}name="ip" type="text" /></div>
		</div>
		<div class="sect clearfix" id="port">
			<div class="description">PORT:</div><div class="input"><input id="port" {if isset($port)}value="{$port}"{/if}name="port" type="text" /></div>
		</div>
		<div class="sect clearfix" id="rcon">
			<div class="description">RCON PASS:</div><div class="input"><input id="rconpass" name="rconpass" type="password" /></div>
		</div>
		<div class="sect clearfix" id="lang">
			<div class="description">LANGUAGE:</div><div class="input"><select name="lang" id="lang">
				{html_options options=$langs selected=$lang}
			</select></div>
		</div>
		<div class="sect clearfix" id="button">
			<div class="description des"></div><div class="input button"><div class="button-blue">Login</div></div>
		</div>
		
		
	</form>
</div>