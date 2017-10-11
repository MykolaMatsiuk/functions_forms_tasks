<?php
require_once('functions.php');

if(!isset($_POST['text']) || !($text = $_POST['text'])) {
  die("Invalid input!");
}
$result = implode(" ", array_keys(topThreeLengthWords($text)));

echo $result;
