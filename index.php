<?php

use A14e\OxfordWordSkills\Config\Config;
use A14e\OxfordWordSkills\Request\Request;

require __DIR__ . '/vendor/autoload.php';



$config = new Config();

try {
    $request = Request::getRequest();
    $token = ($config->getConfig('telegram'))->token;
    $url ="https://api.telegram.org/bot".$token.'/sendMessage';
    $params = [
        'chat_id' => $request->message->chat->id,
        'text' => 'at the moment my father is developing me if you need to contact him you cat use this link => botamoz.com'
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$params);
    $result = curl_exec($ch);
    curl_close($ch);

}catch (Exception $e)
{
    echo $e->getMessage();
}








