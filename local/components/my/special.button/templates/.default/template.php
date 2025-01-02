<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>

<?php //echo '<pre>' . print_r($arResult, 1) . '</pre>'?>

<?php if($arResult['ELEMENT']['HIDE_ELEMENT'] != 'Y'):?>
<a href="<?=$arResult['ELEMENT']['LINK_URL']?>" class="empty-btn"><?=$arResult['ELEMENT']['TEXT_NAME']?></a>
<?php endif;?>
