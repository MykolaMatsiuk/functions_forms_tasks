<?php

function countWords($text) {
  //$result = array_count_values(explode(" ", $text));
  //arsort($result);
  //return $result;
  $words = explode(" ", $text);
  $titles = array_fill_keys(array_unique($words), 0);
  foreach ($words as $word) {
    $titles[$word]++;
  }
  arsort($titles);
  return $titles;
}
