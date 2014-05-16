<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?> <?$APPLICATION->IncludeComponent(
	"photo_plus:store.catalog.index",
	"index",
	Array(
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y"
	)
);?>


<? /* ADCITY */
?>
<script id="xcntmyAsync" type="text/javascript">
(function(d){
var xscr = d.createElement( 'script' ); xscr.async = 1;
xscr.src = '//x.cnt.my/async/track/?r=' + Math.random();
var x = d.getElementById( 'xcntmyAsync' );
x.parentNode.insertBefore( xscr, x );
})(document);
</script>
<?
?>

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>