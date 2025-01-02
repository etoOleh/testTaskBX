<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
/** @var array $arCurrentValues */

use Bitrix\Main\Loader;

if (!Loader::includeModule('iblock'))
{
	return;
}


$arComponentParameters = [
    "PARAMETERS" => [
        "HIDE_ELEMENT" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("T_IBLOCK_DESC_HIDE_ELEMENT"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
        ),
        "LINK_URL" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("T_IBLOCK_DESC_DETAIL_PAGE_URL"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "TEXT_NAME" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("T_IBLOCK_DESC_TEXT_NAME"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
    ],
];

