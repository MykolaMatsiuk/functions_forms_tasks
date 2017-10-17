<?php

/*function correctText($text) {
  $text = explode(".", $text);
  foreach ($text as &$string) {
    $string = ucfirst(trim($string));
  }
  return implode(". ", $text);
}*/

function correctText($text) {
  $text = explode(".", $text);
  foreach ($text as &$string) {
    $first = mb_substr(trim($string), 0, 1);
    $rest = mb_substr(trim($string), 1);
    $string = mb_strtoupper($first) . $rest;
  }
  return implode(". ", $text);
}
