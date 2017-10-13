<?php
require_once "functions.php";

echo builtHTML(getComments());

$html = "
  <form action='process.php' method='post'>
  <input type='text' name='author' placeholder='Enter your name'><br>
  <textarea name='text' placeholder='Leave your comment'></textarea><br>
  <input type='submit' value='comment'>
  </form>
";
echo $html;
