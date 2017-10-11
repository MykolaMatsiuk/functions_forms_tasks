<?php
function getCommonWords($a, $b) {
  $words1 = array_unique(explode(' ', $a));
  $words2 = array_unique(explode(' ', $b));

  //return implode(" ", array_intersect($words1, $words2));
  $arr = [];
  
  $cw1 = count($words1);
  $cw2 = count($words2);

  for ($i = 0; $i < $cw1; $i++) {
    for ($j = 0; $j < $cw2; $j++) {
      if ($words1[$i] == $words2[$j]) {
        $arr[] = $words1[$i];
      }
    }
  }
  return implode(" ", $arr);
}
