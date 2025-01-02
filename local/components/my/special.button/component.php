<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

if (!isset($arParams["CACHE_TIME"]))
{
	$arParams["CACHE_TIME"] = 36000000;
}

$arResult["ELEMENT"]['HIDE_ELEMENT'] = $arParams["HIDE_ELEMENT"];
$arResult["ELEMENT"]['LINK_URL'] = $arParams["LINK_URL"];
$arResult["ELEMENT"]['TEXT_NAME'] = $arParams["TEXT_NAME"];

$this->IncludeComponentTemplate();