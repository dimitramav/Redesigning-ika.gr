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

// Hash password for security
$password = password_hash ( $password , PASSWORD_BCRYPT);

// Insert greek characters in mysql database
mysqli_query($conn, "SET NAMES 'utf8'");

// attempt insert query execution
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);
?>
