<?php
setcookie('counter',0,time()+1);
$url='http://mysite.local/?page=1&ref=partner';
echo $url.'<br>';
$arr=parse_url($url);
print_r($arr);
echo '<br>';
parse_str($arr['query'],$query);
if (isset($_COOKIE['counter']))
{
	unset ($query['ref']);
}
print_r($query);
$query=http_build_query($query);
$url = $arr['scheme'] .'://'.$arr['host'].$arr['path'].'?'.$query;
echo '<br>';
echo $url;
?>