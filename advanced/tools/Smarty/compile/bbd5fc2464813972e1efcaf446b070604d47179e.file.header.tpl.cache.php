<?php /* Smarty version Smarty 3.1.4, created on 2011-12-02 15:48:08
         compiled from "C:\Datos de la red\Servidor\Wamp\www\cs_panel\system/../themes/cs_panel/tpl\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166514ed90f58c2b138-71888323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbd5fc2464813972e1efcaf446b070604d47179e' => 
    array (
      0 => 'C:\\Datos de la red\\Servidor\\Wamp\\www\\cs_panel\\system/../themes/cs_panel/tpl\\header.tpl',
      1 => 1321800497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166514ed90f58c2b138-71888323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'page_title' => 0,
    'theme_url' => 0,
    'page_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed90f590b6f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed90f590b6f4')) {function content_4ed90f590b6f4($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
	<head>
		<!--
		Counter Strike 1.6 Panel Online
			Author: elvago9 <gabrieel09@gmail.com>
		-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
		<link href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
translate/translate_js.php"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/default.js"></script>
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/favicon.png" type="image/png">
	</head>

	<body>
		<div class="header">
			<a href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
" class="logo"></a>
			<div class="hr"></div>
		</div><?php }} ?>