<?php
// 同 php.ini variables_order = "EGPCS" 保持一致 ENV, GET, POST, COOKIE and SERVER共5个
$file_log = '/data1/logs/onedrive_'.date('Ymd_H').'.txt';
$str =
    '$_ENV: ' . var_export($_ENV, true) . "\r\n\r\n" .
    '$_GET: ' . var_export($_GET, true) . "\r\n\r\n" .
    '$_POST: ' . var_export($_POST, true) . "\r\n\r\n" .
    '$_COOKIE: ' . var_export($_COOKIE, true) . "\r\n\r\n" .
    '$_SERVER: ' . var_export($_SERVER, true) . "\r\n\r\n" .
    '$_FILES: ' . var_export($_FILES, true) . "\r\n\r\n" .
    '$_SESSION: ' . var_export($_SESSION, true) . "\r\n\r\n" .
    '$_REQUEST: ' . var_export($_REQUEST, true) . "\r\n\r\n";

file_put_contents($file_log, date("Y-m-d H:i:s") . " " .  __FILE__ . " " . __LINE__ . "\r\n" . $str . "\r\n\r\n", FILE_APPEND);

echo '{"code":0,"msg":""}';
