<?php
//$lightOn = $lightOff = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $lightOn = test_input($_POST["lightOn"]);
  $lightOff = test_input($_POST["lightOff"]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  echo $lightOn ;
?>