<?php
function showFolderContent($dir) {
  $path = scandir($dir);
  //print_r($path);
  array_shift($path);
  array_shift($path);
  foreach ($path as $subdir) {
    echo $dir . "/" . $subdir . "<br>";
    if (is_dir($directory = $dir . "/" . $subdir)) {
      showFolderContent($directory);
    }
  }
}
const DIR = 'hello';
showFolderContent(DIR);
