<?php
$str = 'bla @bla akka-k@gmail.com fdhbdfv';
$mask = '/(?<login>[\w-_.]{4,})@(?<domain>\w{3,7}\.\w{2,})/i';
$mailTo = '<a href="mailto:$0">$0</a>';
echo preg_replace($mask, $mailTo, $str);

preg_match($mask, $str, $userEmail);
echo '<pre>';
print_r($userEmail);