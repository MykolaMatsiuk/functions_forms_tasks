<?php
include_once "functions.php";
if (!($number = $_POST['number'])) {
  die("Choose value!");
}

$result = deleteWords('file.txt');
echo $result;
