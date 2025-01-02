<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "музыка");
$APPLICATION->SetPageProperty("description", "Страница о музыкантах");
$APPLICATION->SetTitle("MAKING MUSIC <br>WITH MARSHALL");
?>


<? $APPLICATION->IncludeComponent(
	"my:special.button", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"HIDE_ELEMENT" => "N",
		"LINK_URL" => "https://dev.1c-bitrix.ru",
		"TEXT_NAME" => "explore"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
