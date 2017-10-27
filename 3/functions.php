<?php
 function deleteWords ($file) {
  if (!file_exists($file)) {
    die("There is no such file!");
  }
  if ($content = file_get_contents($file)) {
    $words = explode(" ", $content);
    $length = count($words);
    for($i = 0; $i < $length; $i++) {
      if (mb_strlen(trim($words[$i])) > $_POST['number']) {
        unset($words[$i]);
      }
    }
  }
  //print_r($words);
  return (file_put_contents($file, implode(" ", $words))) ? "file changed" : "error";
 }
