<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);

    /**
     * Запись в ИБ (Админку)
     */

    if (CModule::IncludeModule("iblock")) {
        $el = new CIBlockElement;

        $arLoadProductArray = array(
            "IBLOCK_ID"      => 6, // Замените на ID вашего инфоблока
            "NAME"           => $email, // Используем email в качестве имени
            "PROPERTY_VALUES"=> array(
                "EMAIL" => $email,
            ),
            "ACTIVE"         => "Y", // Активный элемент
        );

        if ($PRODUCT_ID = $el->Add($arLoadProductArray)) {
            echo "New ID: ".$PRODUCT_ID;
        } else {
            echo "Error: ".$el->LAST_ERROR;
        }
    }


    /**
     * Отправка письма через событие
     */

    $arEventFields = array(
        "EMAIL_TO" => $email,
    );

    // Отправка письма через почтовое событие
    if (CEvent::Send("FEEDBACK", SITE_ID, $arEventFields, 'Y', 44)) {
        echo 'Сообщение отправлено';
    } else {
        echo 'Ошибка отправки сообщения';
    }


    /**
     * Отправка письма через PHPMailer
     */

//    $subject = "Заявка на подписку";
//    $body = "Email: test@mail.com<br>Сообщение: Вы подписались, спасибо!";
//
//    // Указание заголовков письма
//    $headers = "MIME-Version: 1.0" . "\r\n";
//    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//    $headers .= "From: <test@mail.com>" . "\r\n";
//
//    // Отправка письма
//    if (bxmail($email, $subject, $body, $headers)) {
//        echo 'Сообщение отправлено через PHPMailer';
//    } else {
//        echo 'Ошибка отправки сообщения через PHPMailer';
//    }

}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>
