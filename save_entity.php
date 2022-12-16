<?php include 'header.php';?>

<?php

include 'db_configs.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['legal_entity_name'];
$employee_count = $_POST['employee_count'];
$average_salary = $_POST['average_salary'];

//Santize a little
$name = str_replace("'", "", $name);
$employee_count = preg_replace('/[^0-9]/', '', $employee_count);
$average_salary = preg_replace('/[^0-9]/', '', $average_salary);

$random_base64 = md5(random_bytes(18));

$pass = false;

if(strlen($name) < 4 || $employee_count < 1 || $average_salary < 1) {

} else {

  $sql = "INSERT INTO discover_trial (name,employee_count,average_salary,hash) VALUES ('".$name."',".$employee_count.",".$average_salary.",'".$random_base64."');";
  $result = $conn->query($sql);

  $pass = true;

}


$conn->close();


?>

<?php if($pass) { ?>
  <script>
  window.location.replace("<?php echo $base_url; ?>questionnaire/<?php echo $random_base64; ?>");
  </script>
<?php } else { ?>
  <script>
  window.location.replace("<?php echo $base_url; ?>");
  </script>
<?php } ?>
