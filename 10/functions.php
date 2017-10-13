<?php
$text = $_POST['text'];
function uniqueWords($text) {
  $temp = explode(" ", strtolower($text));
  return count(array_unique($temp));
}
