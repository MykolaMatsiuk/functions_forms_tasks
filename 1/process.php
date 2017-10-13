<?php
require_once "functions.php";

if(!isset($_POST['text1']) && !isset($_POST['text2'])) {
  die("Something wrong!");
}

if(!($text1 = $_POST['text1']) || !($text2 = $_POST['text2'])) {
  die("You must type in both text areas!");
}

$result = getCommonWords($_POST['text1'], $_POST['text2']);

echo $result;
