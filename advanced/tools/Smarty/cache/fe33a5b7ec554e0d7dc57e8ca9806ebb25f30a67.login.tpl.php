<?php /*%%SmartyHeaderCode:214364ed90ed7513565-93161719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe33a5b7ec554e0d7dc57e8ca9806ebb25f30a67' => 
    array (
      0 => 'C:\\Datos de la red\\Servidor\\Wamp\\www\\cs_panel\\system/../themes/cs_panel/tpl\\login.tpl',
      1 => 1321827173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214364ed90ed7513565-93161719',
  'variables' => 
  array (
    'ip' => 0,
    'port' => 0,
    'langs' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed90ed7aba8e',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed90ed7aba8e')) {function content_4ed90ed7aba8e($_smarty_tpl) {?>﻿<script type="text/javascript">
$(function(){
	login.ready();
});
</script>
<div class="content">
	<form class="login">
		<div class="sect clearfix" id="ip">
			<div class="description">IP:</div><div class="input"><input id="ip" value="192.168.1.3"name="ip" type="text" /></div>
		</div>
		<div class="sect clearfix" id="port">
			<div class="description">PORT:</div><div class="input"><input id="port" value="27015"name="port" type="text" /></div>
		</div>
		<div class="sect clearfix" id="rcon">
			<div class="description">RCON PASS:</div><div class="input"><input id="rconpass" name="rconpass" type="password" /></div>
		</div>
		<div class="sect clearfix" id="lang">
			<div class="description">LANGUAGE:</div><div class="input"><select name="lang" id="lang">
				<option value="en" selected="selected">English</option>
<option value="es">Spanish</option>

			</select></div>
		</div>
		<div class="sect clearfix" id="button">
			<div class="description des"></div><div class="input button"><div class="button-blue">Login</div></div>
		</div>
		
		
	</form>
</div><?php }} ?>