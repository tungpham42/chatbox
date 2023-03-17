<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = OpenAI::client('YOUR-API-KEY'); // Get your API Key here: https://platform.openai.com/account/api-keys

$response = $client->chat()->create([
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'user', 'content' => $question],
    ],
]);

foreach ($response->choices as $result) {
    $result->index;
    $result->message->role;
    $result->message->content;
    $result->finishReason;
    $answer = $result->message->content;
}

$answer = str_replace("<","&lt;",$answer);
$answer = str_replace(">","&gt;",$answer);

echo $answer;
