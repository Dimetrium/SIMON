<?php
include 'config.php';
$ua = 'opera';
$cookieFile = str_replace('\\','/', getcwd()).'/tmp/cookie.txt';
$word = $_POST["q"];
$count = "30";

$link = "http://www.google.ru/search?client=opera&rls=ru&q=".rawurlencode($word)."&sourceid=opera&channel=suggest";

function getPage($url,$cookieFile) 
{
global $ua,$cookieFile,$word,$count;
$ch=curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_USERAGENT, $ua); 
curl_setopt($ch, CURLOPT_TIMEOUT,50); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookieFile);
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookieFile);
$answer=curl_exec($ch);
$re="/(?=\<div id=\"ires\">)(<div[^>]*>(?:(?:(?!<\/div>)(?!<div[^>]*>).)*|(?1))+<\/div>)(?<=\<\/div>)/is";
$ans = preg_match_all($re, $answer, $arr);
if($ans)
{
	return $arr[0][0];
}
else
{

} 
}
$a = getPage($link,$cookieFile);

//echo $a;

include TEMPLATES;