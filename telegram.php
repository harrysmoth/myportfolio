<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$lastname = $_POST['user_lastname'];
$data = $_POST['user_data'];
$com = $_POST['user_com'];
$mes = $_POST['user_mes'];
$token = "802878051:AAFMbeCUWsRTrz7mESuUhL7IFxHhpa7LESg";
$chat_id = "-386438143";
$arr = array(
  'Имя: ' => $name,
  'Фамилия: ' => $lastname,
  'Данные для связи: ' => $data,
  'Как связываться: ' => $com,
  'Сообщение клиента:' => $mes
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header ('Location: form.html');
} else {
  echo "Error";
}
?>