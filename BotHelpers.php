<?php

function getCURLOutput($url, $withScript){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_AUTOREFERER, true);
  curl_setopt($ch, CURLOPT_VERBOSE, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
  $output = curl_exec($ch);
  curl_close($ch);
  if(!$withScript)
    $output = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $output);
  return $output;
}

function splitAndGetLongest($string, $split){
	if(strpos($string, $split) === false)
		return $string;
	$array = explode($split, $string);
	$mapping = array_combine($array, array_map('strlen', $array));
  $keys = array_keys($mapping, max($mapping));
	return array_shift($keys);
}

 ?>
