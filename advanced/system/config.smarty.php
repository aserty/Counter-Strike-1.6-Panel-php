<?php
global $Smarty;
$Smarty = new Smarty;
$Smarty->template_dir = _THEME_DIR_.'tpl';
$Smarty->compile_dir = _SMARTY_DIR_.'compile';
$Smarty->cache_dir = _SMARTY_DIR_.'cache';
$Smarty->config_dir = _SMARTY_DIR_.'configs';
$Smarty->cache_lifetime = 120;
$Smarty->force_compile = (true);
$Smarty->compile_check = false;
$Smarty->assign("page_title", _PAGE_TITLE_);
$Smarty->assign("page_url", _PAGE_URL_);
$Smarty->assign("theme_url", _THEME_URL_);

$Smarty->caching = true;
$Smarty->debugging = false; 
?>