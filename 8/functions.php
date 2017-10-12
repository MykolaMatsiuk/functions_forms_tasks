<?php
define("COMMENTS_FILE_NAME", "comments.json");

function getComments() {
  return readJson(COMMENTS_FILE_NAME, []);
}

function  readJson($fileName, $default = null) { //if file doesn't exist return null
  if(!file_exists($fileName)) {
    return $default;
  }
  $json = file_get_contents($fileName);
  return json_decode($json, true);   //(true)-return assoc array
}

function writeJson($fileName, $data) {
  $json = json_encode($data);
  return (bool) file_put_contents($fileName, $json); //if smth written return true
}                                                    //if nth return false

function saveComment($name, $text) {
  $list = readJson(COMMENTS_FILE_NAME, []);
  $list[] = [
    'name' => $name,
    'text' => $text,
    'date' => date("Y-m-d H:i:s", time())
  ];
  return writeJson(COMMENTS_FILE_NAME, $list);
}

function builtHTML($array) {
  if(!$array) {
    return "No comments";
  }
  $html = "<table border='1'><thead>";
  $html .= "<th>".implode("</th><th>", $keys = array_keys($array[0]))."</th>";
  $html .= "</thead><tbody>";
  $banList = banList();
  foreach ($array as $row) { 
    $html .= "<tr>";
    foreach ($keys as $key) {
      $temp = strtolower($row[$key]);
      foreach ($banList as $banWord) {
        if(strpos($temp, $banWord) === false) {
          continue;
        }
        $temp = strip_tags(str_replace($banWord, "***", $temp, $count), '<b>');
        if ($count) {
          echo "Incorrect comment!";
        }
      }
      $html .= "<td>".$temp."</td>";
    }
    $html .= "</tr>";
  }
  return $html . "</tbody></table><br>";
}

function banList() {
  return [
    'flower',
    'power'
  ];
}

/*function replaceTags() {
  $content = strip_tags(json_decode("COMMENTS_FILE_NAME"), '<b>');
  return $content;
}*/
