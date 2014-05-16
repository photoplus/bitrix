<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Объективы, оптика");
?>
 <? $c_el=20; 
if (isset($_POST['c_el'])) 
{$c_el=$_POST['c_el'];
$_SESSION['c_el']=$_POST['c_el'];} 
else if ($_SESSION['c_el']) 
$c_el=$_SESSION['c_el'];
$price_code=$_SESSION['CITY_SELECTED_ID'];

$f_mini=file_get_contents("http://www.fotoplus.su/catalog/objective/mini_filter.txt");
$f_mini = explode(",", $f_mini);

$f_max=file_get_contents("http://www.fotoplus.su/catalog/objective/filter.txt");
$f_max = explode(",", $f_max);
?>


<?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	".default",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "39",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/objective/",
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
		"FILTER_FIELD_CODE" => array("NAME"),
	

"FILTER_PROPERTY_CODE" =>$f_mini,
    "FILTER_PROPERTY_CODE2" =>$f_max,	

	"FILTER_PRICE_CODE" => array(),
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
		"COMPARE_FIELD_CODE" => array("PREVIEW_TEXT","DETAIL_PICTURE"),
		"COMPARE_PROPERTY_CODE" => array("objective","focus","nepolno","diafragma","min_dia","krepl","autofocus","macro","number","lepestki","ugol","l_focus","masshtab","ultra","filter","razmeri","ves","dopinfo","PROP1","PROP2","PROP3","PROP4","PROP5","PROP6","PROP7"),
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
		"LIST_PROPERTY_CODE" => array("SPECIALOFFER","NEWPRODUCT","SALELEADER"),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"DETAIL_PROPERTY_CODE" => array("objective","focus","nepolno","diafragma","min_dia","krepl","autofocus","macro","number","lepestki","ugol","l_focus","masshtab","ultra","filter","razmeri","ves","dopinfo","PROP1","PROP2","PROP3","PROP4","PROP5","PROP6","PROP7","RECOMMEND","MORE_PHOTO"),
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
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "0",
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
		"SEF_URL_TEMPLATES" => Array(
			"sections" => "",
	        "section" => "#SECTION_CODE#/",
	        "element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare/"
		),
		"VARIABLE_ALIASES" => Array(
			"sections" => Array(),
			"section" => Array(),
			"element" => Array(),
			"compare" => Array(),
		)
	)
);?>










<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>