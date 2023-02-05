<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = OpenAI::client('YOUR-API-KEY'); // Get your API Key here: https://platform.openai.com/account/api-keys

$result = $client->completions()->create([
    'model' => 'text-davinci-003',
    'prompt' => $_POST['message'],
    'max_tokens' => 4000,
    'temperature' => 0,
]);

$answer = $result['choices'][0]['text'];

$answer = str_replace("<","&lt;",$answer);
$answer = str_replace(">","&gt;",$answer);

echo $answer;
