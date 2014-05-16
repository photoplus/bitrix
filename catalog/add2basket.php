<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");



$APPLICATION->IncludeComponent(
   "photo_plus:catalog2.section",
   "empty",
   array()
);


$APPLICATION->IncludeComponent(
"photo_plus:sale.basket.basket.line", ".default", array(),
false,
Array('')
);

?>

<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>