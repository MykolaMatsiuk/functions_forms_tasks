<?php
include_once("functions.php");

if(!isset($_POST['text']) || !($text = $_POST['text'])) {
  die("Invalid data!");
}
print_r(countWords($text));
