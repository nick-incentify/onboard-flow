<?php

include 'db_configs.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$hash = $_GET['hash'];
$answers = $_POST;
$cleaned_answers = [];
$thisAction = null;
foreach($answers as $k=>$v) {
  if($k == 'save_action') {
    $thisAction = $v;
  } else {
    $thisKey = str_replace("answer-","",$k);
    $cleaned_answers[$thisKey] = $v;
  }

}
$cleaned_answers_json = json_encode($cleaned_answers);
$pass = false;

if($cleaned_answers_json != '' && strlen($hash) > 6) {

  $sql = "UPDATE discover_trial SET questionnaire='".$cleaned_answers_json."' WHERE hash='".$hash."';";
  $result = $conn->query($sql);

  $pass = true;

}


$conn->close();


$response = [];
$response['success'] = ($pass) ? 1 : 0;
$response['action'] = $thisAction;

echo json_encode($response);
?>
