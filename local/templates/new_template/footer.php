<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
			</main>
<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__row">
                <div class="footer__col">
                    <div class="footer__logo">
                        <a href="<?=SITE_DIR?>">
                            <?php $APPLICATION->IncludeFile(
                                SITE_DIR."include/footer.php",
                                Array(),
                                Array("MODE" => "html", "NAME" => "Логотип футера")
                            ); ?>
                        </a>
                    </div>
                    <div class="footer__copyright">
                        <?
                        $APPLICATION->IncludeFile(
                            SITE_DIR."include/copyright.php",
                            Array(),
                            Array("MODE"=>"html")
                        );
                        ?>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__menu">
                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            array(
                                "ROOT_MENU_TYPE" => "bottom_left",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "COMPONENT_TEMPLATE" => "bottom_left",
                                "DELAY" => "N"
                            ),
                            false
                        );
                        ?>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__menu">
                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            array(
                                "ROOT_MENU_TYPE" => "bottom_middle",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "center",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        );
                        ?>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__social">

                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            array(
                                "ROOT_MENU_TYPE" => "bottom_right",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "right",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>