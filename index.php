<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "музыка");
$APPLICATION->SetPageProperty("description", "Страница о музыкантах");
$APPLICATION->SetTitle("MAKING MUSIC <br>WITH MARSHALL");
?>


<?php

    $arr = [1,2,3];
//    dd($arr);

?>

    <section class="welcome">
        <div class="container">
            <? /**   тут я не оч понял как мне кажется так лучше
            $APPLICATION->IncludeFile(
                SITE_DIR."include/main_text_name.php",
                Array(),
                Array("MODE"=>"html")
            ); **/
            ?>
            <h1><?$APPLICATION->ShowTitle()?></h1>
            
            <div class="welcome__row">
                <div class="welcome__text">
                    <?
                    $APPLICATION->IncludeFile(
                        SITE_DIR."include/main_text.php",
                        Array(),
                        Array("MODE"=>"html")
                    );
                    ?>
                    <!--Кнопка-->
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

                </div>
                <div class="welcome__img">
                    <?php $APPLICATION->IncludeFile(
                        SITE_DIR."include/index_img.php",
                        Array(),
                        Array("MODE" => "html", "NAME" => "Логотип футера")
                    ); ?>
                </div>
            </div>
            <a href="<?=SITE_DIR?>" class="arrow-down"><img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-down.svg" alt="Down"></a>
        </div>
    </section>

    <section class="mailing">
        <div class="container">
            <div class="mailing__wrap">
                <div class="mailing__title">
                    <?php $APPLICATION->IncludeFile(
                        SITE_DIR."include/subcribe_text_one.php",
                        Array(),
                        Array("MODE" => "html", "NAME" => "Логотип футера")
                    ); ?>
                </div>
                <div class="mailing__desc">
                    <?php $APPLICATION->IncludeFile(
                        SITE_DIR."include/subcribe_text_two.php",
                        Array(),
                        Array("MODE" => "html", "NAME" => "Логотип футера")
                    ); ?>
                </div>


                <?
                /**
                 * Отправка через phpmailer или событие
                 */
                ?>

<!--                <form class="mailing__form" action="send_mail.php" method="post">-->
<!--                    <input type="text" name="email" placeholder="your email" class="mailing__input">-->
<!--                    <input type="submit" value="subscribe" class="mailing__submit">-->
<!--                    <div class="mailing__agree">-->
<!--                        BY SUBSCRIBING YOU ACCEPT OUR <a href="--><?php //=SITE_DIR?><!--">PRIVACY POLICY</a>-->
<!--                    </div>-->
<!--                </form>-->

                <?
                /**
                 * Отправка через компонент
                 */

                $APPLICATION->IncludeComponent(
                    "my:main.feedback",
                    ".default",
                    array(
                        "USE_CAPTCHA" => "N",
                        "OK_TEXT" => "Thank you, your message has been received.",
                        "EMAIL_TO" => "my@email.com",
                        "REQUIRED_FIELDS" => array(
                            0 => "EMAIL",
                        ),
                        "EVENT_MESSAGE_ID" => array(
                            0 => "7",
                        ),
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                );?>


            </div>
        </div>
    </section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>