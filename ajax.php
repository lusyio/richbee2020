<?php
if (!isset($_POST) || !isset($_POST['action'])) {
    exit();
}
include 'conf.php';

if ($_POST['action'] == 'offer') {
    $value = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $data = [
        'bot_token' => $telegramApiKey,
        'method' => 'sendMessage',
        'args' => json_encode([
            'chat_id' => $telegramOfferChatId,
            'text' => "На richbee.ru оставили заявку с номером телефона " . $value,
        ]),
    ];
    $url = $telegramProxyUrl;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_exec($curl);
    curl_close($curl);
}