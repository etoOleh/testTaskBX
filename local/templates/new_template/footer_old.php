</main>

<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__row">
                <div class="footer__col">
                    <div class="footer__logo">
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="">
                        </a>
                    </div>

                    <?
                    $APPLICATION->IncludeFile(
                        SITE_DIR."include/copyright_new.php",
                        Array(),
                        Array("MODE"=>"html")
                    );
                    ?>


<!--                    <div class="footer__copyright">-->
<!--                        ©2020 zound industries. <br>-->
<!--                        all rights reserved. org. nr 5567574610-->
<!--                    </div>-->
                </div>
                <div class="footer__col">
                    <div class="footer__menu">


                        <?
                        $APPLICATION->IncludeComponent("bitrix:menu", "bottom_new", array(
                            "ROOT_MENU_TYPE" => "bottom",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );
                        ?>

<!--                        <ul class="footer__menu-list">-->
<!--                            <li>-->
<!--                                <a href="#" class="footer__menu-link">headphones</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="footer__menu-link">speakers</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="footer__menu-link">accessories</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="footer__menu-link">amps</a>-->
<!--                            </li>-->
<!--                        </ul>-->
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__menu">
                        <ul class="footer__menu-list">
                            <li>
                                <a href="#" class="footer__menu-link">marshall records</a>
                            </li>
                            <li>
                                <a href="#" class="footer__menu-link">history</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__social">
                        <ul class="footer__social-list">
                            <li>
                                <a href="#" class="footer__social-link">spotify</a>
                            </li>
                            <li>
                                <a href="#" class="footer__social-link">facebook</a>
                            </li>
                            <li>
                                <a href="#" class="footer__social-link">instagram</a>
                            </li>
                            <li>
                                <a href="#" class="footer__social-link">pinterest</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
</body>
</html>