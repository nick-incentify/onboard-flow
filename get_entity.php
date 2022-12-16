<?php

$hash = $_GET['hash'];

$servername = "mysql.ngndev.com";
$username = "ffgadmin";
$password = "kd#32skD113dDDs";
$dbname = "flyfishingguides";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM discover_trial WHERE hash='".$hash."';";
$sql_2 = $conn->query($sql);
$user_data = null;
while($query = $sql_2->fetch_assoc()) {
  $user_data = $query;
  $user_data['saved_answers'] = json_decode($user_data['questionnaire'], true);
}

$conn->close();

?>
