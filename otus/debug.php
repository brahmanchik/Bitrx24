<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Diag\Debug;

$currentDateTime = date('l jS \of F Y h:i:s A');
$fileDebugLog = __DIR__ . '/../local/logs/debug_log.txt';
Debug::writeToFile($currentDateTime, 'CURRENT_TIME', $fileDebugLog);
/*
file_put_contents(
    $fileDebugLog,
    $currentDateTime,
    FILE_APPEND
);
*/
throw new Exception("Проверка логгера OTUS");
echo 'current date: ' . $currentDateTime . ' information is written to the file local/logs/debug_log.txt';

