<?php
include_once "functions.php";
if(!isset($_POST['text']) || !($text = $_POST['text'])) {
  die("Incorrect input!");
}

echo uniqueWords($text);
