<?php
function senReverse($text) {
  $text = explode(".", $text);
  $temp = array_reverse($text);
  return implode(". ", $temp);
}
