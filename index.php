<?php
$token = getenv('BOT_TOKEN');

$content = file_get_contents("php://input");
$update = json_decode($content, true);

if(!$update) {
    exit;
}

$message = $update["message"];
$text = $message["text"];
$chat_id = $message["chat"]["id"];

if($text == "/start") {
    $reply = "سلام! 👋 ربات روی Railway فعاله.";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($reply));
}
?>
