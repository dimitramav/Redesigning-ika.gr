<?php header("content-type: text/html;charset=utf-8") ?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once 'login.php';
$conn = new mysqli($hn,$un,$pw,$db);
// Check Connection
if ($conn->connect_error) die ($conn->connect_error);
// Escape user inputs for security
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$ama =$_POST['ama'];
$amka = $_POST['amka'];

session_start();
$id = $_SESSION['id'];

// Insert greek characters in mysql database
mysqli_query($conn, "SET NAMES 'utf8'");

// attempt insert query execution
$sql = "UPDATE users SET username='$username',firstname='$firstname',lastname='$lastname',email='$email',ama='$ama',amka='$amka' WHERE id=$id ";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$_SESSION['user']=$username;
// close connection
mysqli_close($conn);
// Redirect to homepage
header("Location: profile.php");
?>
