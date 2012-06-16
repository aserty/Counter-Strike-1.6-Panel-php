<?php /* Smarty version Smarty 3.1.4, created on 2011-12-02 15:48:10
         compiled from "C:\Datos de la red\Servidor\Wamp\www\cs_panel\system/../themes/cs_panel/tpl\main.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rcon_connected' => 0,
    'rcon_connect' => 0,
    'commands' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed90f5b0c7a9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed90f5b0c7a9')) {function content_4ed90f5b0c7a9($_smarty_tpl) {?><?php if (!is_callable('smarty_block_translate')) include 'C:\Datos de la red\Servidor\Wamp\www\cs_panel\tools\Smarty\plugins\block.translate.php';
if (!is_callable('smarty_function_html_options')) include 'C:\Datos de la red\Servidor\Wamp\www\cs_panel\tools\Smarty\plugins\function.html_options.php';
?>﻿<div class="content">
	<?php if ($_smarty_tpl->tpl_vars['rcon_connected']->value==true){?>
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
				<div class="button" id="main"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"0")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Main<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"0"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="button" id="configs"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"1")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Configs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="button" id="statics"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"2")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Statics<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="button" id="players"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"3")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Players<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="button" id="bans"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"4")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bans<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="button" id="console"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"5")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Console<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
			</div>
			<div class="tab" id="tab_main">	
				<form class="config_basic" id="basic_config">
					<div class="sect clearfix" id="hostname">
						<div class="description"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"6")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hostname<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</div><div class="input"><input id="hostname" value="<?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['hostname'];?>
" name="hostname" type="text" /></div>
					</div>
					<div class="sect clearfix" id="map">
						<div class="description"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"10")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Map<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</div><div class="input"><select name="map" id="map">
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['rcon_connect']->value['maps'],'selected'=>$_smarty_tpl->tpl_vars['rcon_connect']->value['info']['map']),$_smarty_tpl);?>

						</select></div>
					</div>
					<div class="sect clearfix" id="network">
						<div class="description"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"12")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"12"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Network<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"12"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</div><div class="input"><select name="network" id="network">
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['commands']->value['sv_lan'],'selected'=>$_smarty_tpl->tpl_vars['rcon_connect']->value['network']),$_smarty_tpl);?>

						</select></div>
					</div>
					<div class="sect clearfix" id="rcon_pass">
						<div class="description">Rcon <?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"13")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"13"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"13"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</div><div class="input"><input type="text" name="rcon_pass" id="rcon_pass" value="<?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['rcon_pass'];?>
" /></div>
					</div>
					<div class="sect clearfix" id="player_pass">
						<div class="description">Player <?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"13")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"13"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"13"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</div><div class="input"><input type="text" name="player_pass" id="player_pass" value="<?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['player_pass'];?>
" /></div>
					</div>
					
					<div class="sect clearfix" id="button">
						<div class="description des"></div><div class="input button"><div class="button-blue"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"14")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"14"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"14"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div></div>
					</div>
				</form>
			</div>
			
			<div class="tab" id="tab_configs">
				<form class="config_basic" id="config">
					<div class="sect clearfix" id="time_limit">
						<div class="description">Time limit</div><div class="input"><input id="time_limit" value="<?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['time_limit'];?>
" name="time_limit" type="text" /></div>
					</div>
					<div class="sect clearfix" id="win_limit">
						<div class="description">Win limit (rounds)</div><div class="input"><input id="win_limit" value="<?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['win_limit'];?>
" name="win_limit" type="text" /></div>
					</div>
					<div class="sect clearfix" id="maxrounds">
						<div class="description">Round limit (rounds)</div><div class="input"><input id="maxrounds" value="<?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['maxrounds'];?>
" name="maxrounds" type="text" /></div>
					</div>
					<div class="sect clearfix" id="freezetime">
						<div class="description">Freeze time (seconds)</div><div class="input"><input id="freezetime" value="<?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['freezetime'];?>
" name="freezetime" type="text" /></div>
					</div>
					<div class="sect clearfix" id="buytime">
						<div class="description">Buy time (minutes)</div><div class="input"><input id="buytime" value="<?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['buytime'];?>
" name="buytime" type="text" /></div>
					</div>
					<div class="sect clearfix" id="startmoney">
						<div class="description">Starting Money</div><div class="input"><input id="startmoney" value="<?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['startmoney'];?>
" name="startmoney" type="text" /></div>
					</div>
					<div class="sect clearfix" id="footsteps">
						<div class="description">Footsteps</div><div class="input"><select name="footsteps" id="footsteps">
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['commands']->value['mp_footsteps'],'selected'=>$_smarty_tpl->tpl_vars['rcon_connect']->value['footsteps']),$_smarty_tpl);?>

						</select></div>
					</div>
					<div class="sect clearfix" id="forcechasecam">
						<div class="description">Death camera type</div><div class="input"><select name="forcechasecam" id="forcechasecam">
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['commands']->value['mp_forcechasecam'],'selected'=>$_smarty_tpl->tpl_vars['rcon_connect']->value['forcechasecam']),$_smarty_tpl);?>

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
	<?php }else{ ?>
		Ooops! He has produced an error with the connection to the server, try again :(
	<?php }?>
</div><?php }} ?>