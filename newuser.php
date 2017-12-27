<?php header("content-type: text/html;charset=utf-8") ?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once 'login.php';
$conn = new mysqli($hn,$un,$pw,$db);
// Check Connection
if ($conn->connect_error) die ($conn->connect_error);
// Escape user inputs for security
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$firstname = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$ama = mysqli_real_escape_string($conn, $_REQUEST['ama']);
$amka = mysqli_real_escape_string($conn, $_REQUEST['amka']);
$HaveInsurance = mysqli_real_escape_string($conn, $_REQUEST['HaveInsurance']);

if($HaveInsurance == 1) {
  $HaveInsurance = 1;
  $HaveRetirement = 0;
}
else {
  $HaveInsurance = 0;
  $HaveRetirement = 1;
}

// Hash password for security
$password = password_hash ( $password , PASSWORD_BCRYPT);

// Insert greek characters in mysql database
mysqli_query($conn, "SET NAMES 'utf8'");

// attempt insert query execution
$sql = "INSERT INTO users (username, password, firstname, lastname, email, ama, amka, HaveInsurance, HaveRetirement) VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$ama', '$amka', '$HaveInsurance', '$HaveRetirement')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);
?>
