<?php
include_once "functions.php";

if(!isset($_POST['text']) || !($text = $_POST['text'])) {
  die("Enter data");
}

echo reverseString($text);
