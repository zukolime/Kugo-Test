<?php
$user_phone = htmlspecialchars($_POST['user_phone']);

$token = "7631308435:AAHqcGE0kbLlaI3VhsMiCdb40ZJFeLYrk20";
$chat_id = "-4610508217";

fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$user_phone}", "r");

echo "Ваш номер телефона: " . $user_phone;
?>
