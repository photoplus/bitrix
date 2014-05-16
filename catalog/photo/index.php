<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Фотоаппараты ");
?> <? $c_el=20; 
if (isset($_POST['c_el'])) 
{$c_el=$_POST['c_el'];
$_SESSION['c_el']=$_POST['c_el'];} 
else if ($_SESSION['c_el']) 
$c_el=$_SESSION['c_el'];

$price_code=$_SESSION['CITY_SELECTED_ID'];
$sell_code='sell_'.$_SESSION['CITY_SELECTED_ID'];

$f_mini=file_get_contents("http://www.fotoplus.su/catalog/photo/mini_filter.txt");
$f_mini = explode(",", $f_mini);

$f_max=file_get_contents("http://www.fotoplus.su/catalog/photo/filter.txt");
$f_max = explode(",", $f_max);

?> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	".default",
	Array(
		"AJAX_MODE" => "N",
		"SEF_MODE" => "Y",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "37",
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
			"LIST_PROPERTY_CODE" => array(
		0 => $sell_code
	),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"DETAIL_PROPERTY_CODE" => array("brand", "hran_info2", "vremya_zapisi_video", "emkost_akkumulyatora", "zapis_zvuka", "interfeysy", "kolichestvo_akkumulyatorov", "korrektirovka_avtofokusa", "maksimalnoe_razreshenie_rolikov", "maksimalnaya_chastota_kadrov_pri_semke_hd_video", "material_korpusa", "obj_chislo_piks", "podsvetka_avtofokusa", "ruchnaya_fokusirovka", "fokusirovka_po_litsu", "format_akkumulyatorov", "format_zapisi_video", "svet_element", "razreshenie", "sveto4uvst", "objectiv", "stabiliz", "cif_uvel", "focus", "macro", "r_zapis", "r_szhat", "zapis_isobr", "zapis_video", "print", "zatvor", "ekspoziciya", "rezhim_ekspo", "ekspokorr", "b_white", "effect_isobr", "vidoiskatel", "zhkd", "hran_info", "vstr_vspishka", "vosproiz", "s_seriya", "autospusk", "spec_func", "komp", "audio_video", "pitanie", "razmeri", "ves", "dopinfo"),
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
		"PRICE_VAT_INCLUDE" => "N",
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
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "0",
		"PAGER_SHOW_ALL" => "N",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_FIELD_CODE" => array("DETAIL_PICTURE"),
		"COMPARE_PROPERTY_CODE" => array("PROP5"),
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"FILTER_NAME" => "arrFilter",
		"FILTER_FIELD_CODE" => array(),
	"FILTER_PROPERTY_CODE" =>$f_mini,
    "FILTER_PROPERTY_CODE2" =>$f_max,
		"FILTER_PRICE_CODE" => array("msk_retail", "cherepovez", "sochi", "ros", "nn", "nsk", "lenobl", "dzerjinsk", "omsk", "tum", "ek", "kr", "spb", "vzh", "sam", "kalin", "volgo", "lipeck", "ya", "kem", "ulsk", "chebo", "ryazan", "kazan", "chelyabinsk", "orenburg", "saratov", "tula", "belgorod", "ufa", "surgut", "tolyatti", "ivanovo", "msk"),
		"MESSAGES_PER_PAGE" => "15",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "1",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "N",
		"POST_FIRST_MESSAGE" => "N",
		"ALSO_BUY_ELEMENT_COUNT" => "3",
		"ALSO_BUY_MIN_BUYES" => "1",
		"CONVERT_CURRENCY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"SEF_FOLDER" => "/catalog/photo/",
		"SEF_URL_TEMPLATES" => Array(
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#"
		),
		"VARIABLE_ALIASES" => Array(
			"section" => Array(),
			"element" => Array(),
			"compare" => Array(
				"ACTION_CODE" => "action"
			),
		)
	)
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>