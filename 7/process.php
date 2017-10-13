<?php
require_once "functions.php";

if(!($input1 = $_POST['author']) || !($input2 = $_POST['text'])) {
  exit("Input data in both fields!");
}

if(!isset($_POST['author']) || !isset($_POST['text'])) {
  die("Incorrect input data!");
}

if(!saveComment($_POST['author'], $_POST['text'])) {
  die("Can not save comments!");
}

header("Location: index.php");
