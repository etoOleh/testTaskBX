<?php
require_once __DIR__ . '/vendor/autoload.php';


/**
 * Функция для отправки через phpmailer
 *
 * @param $to
 * @param $subject
 * @param $message
 * @param $additionalHeaders
 * @return void
 * @throws \PHPMailer\PHPMailer\Exception
 */
function custom_mail($to, $subject, $message, $additionalHeaders = '')
{
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;

    //сервера нету на локалке так что тут рандомные
    $mail->Host = 'smtp-server';
    $mail->Port = 25;
    $mail->Username = 'smtp-login';
    $mail->Password = 'smtp-password';

    $mail->IsHTML = true;
    $mail->CharSet = 'UTF-8';

    $to = str_replace(' ','', $to);
    $address = explode(',', $to);
    foreach ($address as $addr)
        $mail->addAddress($addr);

    $headers = explode("\n", $additionalHeaders);
    $attachHeader = 'Content-Type: multipart/mixed; boundary=';
    foreach( $headers as $h )
    {
        if( stripos($h, $attachHeader) === 0 )
        {
            $bndr = substr($h, strlen($attachHeader));
            $bndr = trim($bndr, '"');
            $mail->ContentType = 'multipart/mixed; boundary="' . $bndr . '"';
        }
    }


    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->From = 'eto_oleh@vk.com';
    $mail->send();
}

AddEventHandler("main", "OnBeforeEventSend", "OnBeforeEventSendHandler");

function OnBeforeEventSendHandler(&$arFields, &$arTemplate)
{
    if ($arTemplate['EVENT_NAME'] == "FEEDBACK_FORM") {

        if (CModule::IncludeModule("iblock")) {
            $el = new CIBlockElement;

            $arLoadProductArray = array(
                "IBLOCK_ID"      => 6, // Замените на ID вашего инфоблока
                "NAME"           => $arFields["AUTHOR_EMAIL"], // Используем email в качестве имени
                "PROPERTY_VALUES"=> array(
                    "EMAIL" => $arFields["AUTHOR_EMAIL"],
                ),
                "ACTIVE"         => "Y", // Активный элемент
            );

            $el->Add($arLoadProductArray);
        }
    }
}