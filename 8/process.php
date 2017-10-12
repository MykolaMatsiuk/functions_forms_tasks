<?php
header("Location: index.php");
require_once("functions.php");

if(!isset($_POST['author']) || !isset($_POST['text'])) {
  die("Incorrect input data!");
}

if(!saveComment($_POST['author'], $_POST['text'])) {
  die("Can not save comments!");
}
