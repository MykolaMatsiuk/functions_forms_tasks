<?php

function topThreeLengthWords($text, $num = 3, $index = false) {
  $words = array_unique(explode(" ", $text));

  if ($num < count($text)) {
    return null;
  }

  $arr = [];
  foreach ($words as $word) {
    $arr[$word] = strlen($word);
  }

  arsort($arr);
  $top = array_slice($arr, 0, $num);

  return ($index) ? array_keys($top) : $top;
}
