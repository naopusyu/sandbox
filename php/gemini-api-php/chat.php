<?php

require_once './vendor/autoload.php';

$apiKey = 'your-api-key';

$client = Gemini::client($apiKey);

$chat = $client->geminiFlash()->startChat([]);

for ($i = 0; $i < 3; $i++) {
    $text = readline('You: ');
    $result = $chat->sendMessage($text);
    echo $result->text() . PHP_EOL;
}

print_r($chat->history);
