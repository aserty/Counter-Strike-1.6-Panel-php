<?php /* Smarty version Smarty 3.1.4, created on 2011-12-02 15:48:11
         compiled from "C:\Datos de la red\Servidor\Wamp\www\cs_panel\system/../themes/cs_panel/tpl\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250894ed90f5b277ff7-11243009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '323e7fae82659b09583cd774f502fc66f09457ed' => 
    array (
      0 => 'C:\\Datos de la red\\Servidor\\Wamp\\www\\cs_panel\\system/../themes/cs_panel/tpl\\footer.tpl',
      1 => 1321798798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250894ed90f5b277ff7-11243009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'page_url' => 0,
    'rcon_connected' => 0,
    'rcon_connect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed90f5b914b1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed90f5b914b1')) {function content_4ed90f5b914b1($_smarty_tpl) {?><?php if (!is_callable('smarty_block_translate')) include 'C:\Datos de la red\Servidor\Wamp\www\cs_panel\tools\Smarty\plugins\block.translate.php';
?>		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value==true){?>
			<div class="nav"><a href=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"7")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
About<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
logout.php"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"8")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"8"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Exit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"8"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></div>
		<?php }?>
		
		<div class="cs"><?php if ($_smarty_tpl->tpl_vars['is_logged']->value==true){?>
			<div style="position: relative; width: 100%; height: 100%;">
				<div class="main">
					<?php if ($_smarty_tpl->tpl_vars['rcon_connected']->value==true){?>
						<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"9")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Conected to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['info']['host'];?>
</b>
						<br />
						<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"6")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hostname<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</b> <?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['info']['hostname'];?>
 
						<br />
						<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"10")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Map<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</b> <?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['info']['map'];?>
 
						<br />
						<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"3")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Players<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</b> <?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['info']['count_players']['active'];?>
  active (<?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['info']['count_players']['max'];?>
 Max)
						<br />
						<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array('id'=>"11")); $_block_repeat=true; echo smarty_block_translate(array('id'=>"11"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Uptime<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_translate(array('id'=>"11"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</b> <?php echo $_smarty_tpl->tpl_vars['rcon_connect']->value['stats']['uptime']['hours'];?>

					<?php }?>
				</div>
			</div>			
		<?php }?></div>
		
	</body>
</html><?php }} ?>