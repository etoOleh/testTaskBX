<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <?php
        use Bitrix\Main\Page\Asset;
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.min.css");
    ?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="description" content="<?php $APPLICATION->ShowProperty("description"); ?>">
    <meta name="keywords" content="<?php $APPLICATION->ShowProperty("keywords"); ?>">
    <?php $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__row">
                <div class="header__logo">
                    <a href="<?=SITE_DIR?>">
                        <?php $APPLICATION->IncludeFile(
                            SITE_DIR."include/logo.php",
                            Array(),
                            Array("MODE" => "html", "NAME" => "Логотип")
                        ); ?>
                    </a>
                </div>

                <?$APPLICATION->IncludeComponent("bitrix:menu",
                    "new_menu", array(
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "2",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => ""
                ),
                    false,
                    array(
                        "ACTIVE_COMPONENT" => "Y"
                    )
                );?>
            </div>
        </div>
    </header>
    <main class="main">
        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "new_breadcrumb",
            Array()
        );?>
