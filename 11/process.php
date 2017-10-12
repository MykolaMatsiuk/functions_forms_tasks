<?php
include_once("functions.php");

if(!isset($_POST['text']) || !($text = $_POST['text'])) {
  die("incorrect data!");
}
echo correctText($text);

