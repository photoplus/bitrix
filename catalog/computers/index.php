<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Компьютеры");
?> <? $c_el=20; 
if (isset($_POST['c_el'])) 
{$c_el=$_POST['c_el'];
$_SESSION['c_el']=$_POST['c_el'];} 
else if ($_SESSION['c_el']) 
$c_el=$_SESSION['c_el'];
$price_code=$_SESSION['CITY_SELECTED_ID'];
$sell_code='sell_'.$_SESSION['CITY_SELECTED_ID'];

$f_mini=file_get_contents("http://www.fotoplus.su/catalog/computers/mini_filter.txt");
$f_mini = explode(",", $f_mini);

$f_max=file_get_contents("http://www.fotoplus.su/catalog/computers/filter.txt");
$f_max = explode(",", $f_max);

?> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	".default",
	Array(
		"AJAX_MODE" => "N",
		"SEF_MODE" => "Y",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "46",
		"USE_FILTER" => "Y",
		"USE_REVIEW" => "Y",
		"USE_COMPARE" => "Y",
		"SHOW_TOP_ELEMENTS" => "N",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "2",
		"PAGE_ELEMENT_COUNT" => $c_el,
		"LINE_ELEMENT_COUNT" => "1",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc,nulls",
		"LIST_PROPERTY_CODE" => array("={$sell_code}"),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"DETAIL_PROPERTY_CODE" => array("brand", "opticheskiy_privod", "type", "sistema", "podderzhka_operatsionnoy_sistemy", "proccessor", "yadro", "videoproc", "vremya_raboty", "material_korpusa", "razmer_ekrana_dyuym", "razreshenie_ekrana", "sens_ekran", "tip_ekrana", "tylovaya_kamera", "frontalnaya_kamera", "ppi", "v_memory", "o_memory", "carta", "bluetooth", "wifi", "podklyuchenie_po_usb", "gps", "glonass", "qwerty_klaviatura", "avtomaticheskaya_orientatsiya_ekrana", "dinamik", "microfon", "vykhod_audio_naushniki", "datchiki", "modul_3g", "modul_4g", "podklyuchenie_garnitury", "razem_dlya_dok_stantsii", "kolichestvo_sim_kart", "mobilnaya_svyaz", "tip_sim_karty", "razmeri", "ves", "dopinfo", "support", "type_ekran", "frontcam", "ekran", "pitanie", "RECOMMEND", "MORE_PHOTO"),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
	   "PRICE_CODE" =>array(0=>$price_code),
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
		"USE_ALSO_BUY" => "Y",
		"USE_STORE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "arrows",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_FIELD_CODE" => array("PREVIEW_TEXT", "DETAIL_PICTURE"),
		"COMPARE_PROPERTY_CODE" => array("razmeri", "ves", "dopinfo", "pitanie"),
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"FILTER_NAME" => "",
		"FILTER_FIELD_CODE" => array("NAME"),
		"FILTER_PROPERTY_CODE" =>$f_mini,
    "FILTER_PROPERTY_CODE2" =>$f_max,
"FILTER_PRICE_CODE" => array(),
		"MESSAGES_PER_PAGE" => "10",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "1",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "Y",
		"POST_FIRST_MESSAGE" => "N",
		"ALSO_BUY_ELEMENT_COUNT" => "3",
		"ALSO_BUY_MIN_BUYES" => "2",
		"CONVERT_CURRENCY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"SEF_FOLDER" => "/catalog/computers/",
		"SEF_URL_TEMPLATES" => Array(
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare/"
		),
		"VARIABLE_ALIASES" => Array(
			"section" => Array(),
			"element" => Array(),
			"compare" => Array(),
		)
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>