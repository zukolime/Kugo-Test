<?php
$user_email = htmlspecialchars($_POST['user_email']);

$token = "7631308435:AAHqcGE0kbLlaI3VhsMiCdb40ZJFeLYrk20";
$chat_id = "-4610508217";

fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$user_email}", "r");

echo "Ваш почта: " . $user_email;
?>