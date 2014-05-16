<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Видеокамеры");
?>

<? $c_el=20; 
if (isset($_POST['c_el'])) 
{$c_el=$_POST['c_el'];
$_SESSION['c_el']=$_POST['c_el'];} 
else if ($_SESSION['c_el']) 
$c_el=$_SESSION['c_el'];

$price_code=$_SESSION['CITY_SELECTED_ID'];

$f_mini=file_get_contents("http://www.fotoplus.su/catalog/video/mini_filter.txt");
$f_mini = explode(",", $f_mini);

$f_max=file_get_contents("http://www.fotoplus.su/catalog/video/filter.txt");
$f_max = explode(",", $f_max);


	
?>



<?$APPLICATION->IncludeComponent("bitrix:catalog", ".default", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "54",
	"BASKET_URL" => "/personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/catalog/video/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "Y",
	"USE_FILTER" => "Y",
	"FILTER_NAME" => "",
	"FILTER_FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
"FILTER_PROPERTY_CODE" =>$f_mini,
    "FILTER_PROPERTY_CODE2" =>$f_max,

	"FILTER_PRICE_CODE" => array(
		0 => "msk",
	),
	"USE_REVIEW" => "Y",
	"MESSAGES_PER_PAGE" => "10",
	"USE_CAPTCHA" => "Y",
	"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
	"FORUM_ID" => "1",
	"URL_TEMPLATES_READ" => "",
	"SHOW_LINK_TO_FORUM" => "N",
	"POST_FIRST_MESSAGE" => "N",
	"USE_COMPARE" => "Y",
	"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
	"COMPARE_FIELD_CODE" => array(
		0 => "PREVIEW_TEXT",
		1 => "DETAIL_PICTURE",
		2 => "",
	),
	"COMPARE_PROPERTY_CODE" => array(
		0 => "svet_element",
		1 => "razreshenie",
		2 => "sveto4uvst",
		3 => "objectiv",
		4 => "stabiliz",
		5 => "cif_uvel",
		6 => "SUPER_PRICE",
		7 => "focus",
		8 => "macro",
		9 => "r_zapis",
		10 => "r_szhat",
		11 => "zapis_isobr",
		12 => "zapis_video",
		13 => "print",
		14 => "zatvor",
		15 => "ekspoziciya",
		16 => "rezhim_ekspo",
		17 => "ekspokorr",
		18 => "b_white",
		19 => "effect_isobr",
		20 => "vidoiskatel",
		21 => "zhkd",
		22 => "hran_info",
		23 => "vstr_vspishka",
		24 => "vnesh_vspishka",
		25 => "vosproiz",
		26 => "s_seriya",
		27 => "autospusk",
		28 => "spec_func",
		29 => "komp",
		30 => "audio_video",
		31 => "pitanie",
		32 => "razmeri",
		33 => "ves",
		34 => "dopinfo",
		35 => "PROP1",
		36 => "PROP2",
		37 => "PROP3",
		38 => "PROP4",
		39 => "",
	),
	"COMPARE_ELEMENT_SORT_FIELD" => "sort",
	"COMPARE_ELEMENT_SORT_ORDER" => "asc",
	"DISPLAY_ELEMENT_SELECT_BOX" => "N",
	"PRICE_CODE" =>array(0=>$price_code),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"SHOW_TOP_ELEMENTS" => "N",
	"PAGE_ELEMENT_COUNT" => $c_el,
	"LINE_ELEMENT_COUNT" => "1",
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc,nulls",
	"LIST_PROPERTY_CODE" => array(
		0 => "SPECIALOFFER",
		1 => "NEWPRODUCT",
		2 => "SALELEADER",
		3 => "",
	),
	"INCLUDE_SUBSECTIONS" => "Y",
	"LIST_META_KEYWORDS" => "-",
	"LIST_META_DESCRIPTION" => "-",
	"LIST_BROWSER_TITLE" => "-",
		"DETAIL_PROPERTY_CODE" => array("podderzhka_video_vysokogo_razresheniya_full_hd", "maksimalnoe_razreshenie_videosemki", "shirokoformatnyy_rezhim_video", "tip_matritsy", "kolichestvo_matrits", "matritsa", "fizicheskiy_razmer_matritsy", "vyderzhka", "stabilizator_izobrazheniya", "zhkd", "vidoiskatel", "b_white", "formaty_zapisi", "maksimalnaya_chastota_kadrov_pri_semke_hd_video", "avtoekspozitsiya", "spec_func", "fotorezhim", "maksimalnoe_razreshenie_fotosemki", "svet_element", "shirokoformatnyy_rezhim_foto", "interfeysy", "minimalnaya_osveshchennost", "razmery_shkhvkhg", "ves", "razmeri", "dopinfo", "maksimalnoe_vremya_raboty_ot_akkumulyatora", "zapis_video", "print", "autospusk", "brand", "opticheskiy_zoom", "rating", "vote_count", "vote_sum", "FORUM_MESSAGE_CNT", "podderzhka_video_vysokogo_razresheniya_full_hd", "zoom", "razreshenie", "sveto4uvst", "objectiv", "stabiliz", "cif_uvel", "focus", "macro", "r_zapis", "r_szhat", "zapis_isobr", "zatvor", "ekspoziciya", "rezhim_ekspo", "ekspokorr", "effect_isobr", "hran_info", "vstr_vspishka", "vnesh_vspishka", "vosproiz", "s_seriya", "komp", "audio_video", "pitanie", "PROP1", "PROP2", "PROP3", "PROP4", "RECOMMEND", "MORE_PHOTO"),
	"DETAIL_META_KEYWORDS" => "-",
	"DETAIL_META_DESCRIPTION" => "-",
	"DETAIL_BROWSER_TITLE" => "-",
	"LINK_IBLOCK_TYPE" => "",
	"LINK_IBLOCK_ID" => "",
	"LINK_PROPERTY_SID" => "",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
	"USE_ALSO_BUY" => "Y",
	"ALSO_BUY_ELEMENT_COUNT" => "3",
	"ALSO_BUY_MIN_BUYES" => "2",
	"DISPLAY_TOP_PAGER" => "Y",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "arrows",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
	"PAGER_SHOW_ALL" => "N",
	"PATH_TO_SHIPPING" => "#SITE_DIR#about/delivery/",
	"DISPLAY_IMG_WIDTH" => "75",
	"DISPLAY_IMG_HEIGHT" => "225",
	"DISPLAY_DETAIL_IMG_WIDTH" => "350",
	"DISPLAY_DETAIL_IMG_HEIGHT" => "1000",
	"DISPLAY_MORE_PHOTO_WIDTH" => "50",
	"DISPLAY_MORE_PHOTO_HEIGHT" => "50",
	"SHARPEN" => "30",
	"AJAX_OPTION_ADDITIONAL" => "",
	"SEF_URL_TEMPLATES" => array(
		"sections" => "",
	        "section" => "#SECTION_CODE#/",
	        "element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		"compare" => "compare/",
	)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>,
	
