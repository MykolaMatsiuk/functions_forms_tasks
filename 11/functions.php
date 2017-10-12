<?php

function correctText($text) {
  $text = explode(".", $text);
  foreach ($text as &$string) {
    $string = ucfirst(trim($string));
  }
  return implode(". ", $text);
}
