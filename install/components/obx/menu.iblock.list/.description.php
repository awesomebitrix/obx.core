<?php
/***********************************************
 ** @product OBX:Market Bitrix Module         **
 ** @authors                                  **
 **         Maksim S. Makarov aka pr0n1x      **
 ** @license Affero GPLv3                     **
 ** @mailto rootfavell@gmail.com              **
 ** @copyright 2013 DevTop                    **
 ***********************************************/

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	'NAME' => GetMessage('OBX_CMP_MENU_IB_LIST_NAME'),
	'DESCRIPTION' => GetMessage(''),
	'ICON' => '/images/menu_ext.gif',
	'CACHE_PATH' => 'Y',
	'PATH' => array(
		'ID' => 'utility',
		'CHILD' => array(
			'ID' => 'navigation',
			'NAME' => GetMessage('MAIN_NAVIGATION_SERVICE')
		)
	),
);
