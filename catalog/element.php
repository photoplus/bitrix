<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?>



<?

$res = CIBlockElement::GetByID($_REQUEST["id"]);// $_REQUEST["id"] - ID элемента.
if($ar_res = $res->GetNext())
 $_REQUEST["SECTION_ID"]= $ar_res['IBLOCK_SECTION_ID']; /*ID группы. Если не задан, то элемент не привязан к группе. Если элемент привязан к нескольким группам, то в этом поле ID одной из групп.*/
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.element",
	"elements",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "54",
		"ELEMENT_ID" => $_REQUEST["id"],
		"ELEMENT_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"PROPERTY_CODE" => array(),
		"PRICE_CODE" => array(),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_PROPERTIES" => array(),
		"USE_PRODUCT_QUANTITY" => "N",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y"
	),
false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>