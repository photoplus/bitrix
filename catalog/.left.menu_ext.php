<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:store.menu.sections", "", array(
		"IBLOCK_TYPE_ID" => "catalog",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000"
		),
		true,
		Array('HIDE_ICONS' => 'Y')
	);
	$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>