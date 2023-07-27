<?php





function dd(...$data): void
{
    var_dump($data);
    die();
}

function jsonLogger($data): void
{
    $filePath = __DIR__.'/../logs/';
    $fileName = 'log-'.time().'.json';
    $file = $filePath.$fileName;

    file_put_contents($file,$data);
}