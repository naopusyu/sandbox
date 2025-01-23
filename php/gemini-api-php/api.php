<?php

require_once './vendor/autoload.php';

$apiKey = 'your-api-key';

$client = Gemini::client($apiKey);

$result = $client->geminiFlash()->generateContent('なんかやる気が出る一言を言ってください');

echo $result->text() . PHP_EOL;
