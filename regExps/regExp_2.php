<?php
$filename = 'html_to_parse.txt';
$html = fopen($filename, 'r+');
$htmlText = fread($html, filesize($filename));

$mask = '/(attr__name\">|<\/span>)(?<header>[^<]+)<\/span>\s*<span class="attr__value\">(?<value>.[^<]*)<\/span/imu';
$htmlText = preg_replace('/\t*\n*/ium', '', $htmlText);
preg_match_all($mask, $htmlText, $data);

$parsed = '';
for ($i = 0; $i < count($data['header']); $i++) {
    $parsed .= $data['header'][$i] . ': ' . $data['value'][$i] . '<br>';
}
echo $parsed;