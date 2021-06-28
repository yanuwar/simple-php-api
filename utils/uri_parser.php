<?php
function getPath($str) {
  if ($str{0} != '/')
  return false;

  $second_slash_pos = strpos($str, '/', 1);

  if ($second_slash_pos !== false)
    return substr($str, 1, $second_slash_pos-1);
  else
    return substr($str, 1);
}

function getMethod($str) {
  $r = $str; 
  $r = explode('/', $r);
  $r = array_filter($r);
  $r = array_merge($r, array()); 
  $r = preg_replace('/\?.*/', '', $r);

  $endofurl = $r[1];
  return $endofurl;
}
