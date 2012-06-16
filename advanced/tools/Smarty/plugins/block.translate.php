<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     block.translate.php
 * Type:     block
 * Name:     translate
 * Purpose:  translate a block of text
 * -------------------------------------------------------------
 */
function smarty_block_translate($params, $content, &$smarty, &$repeat){
	if(isset($content)) {
		$id = $params["id"];
		$translate = unserialize(_TRANSLATE_);
		if(isset($translate[_LANG_])){
			$translation = $translate[_LANG_][$id];
		}else{
			$translation = $content;
		}
		return $translation;
	}
}
?>
