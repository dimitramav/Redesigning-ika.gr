<?php
  session_start();
  require_once 'login.php';
  $conn = new mysqli($hn,$un,$pw,$db);
  // Check Connection
  if ($conn->connect_error) die ($conn->connect_error);
  // Escape user inputs for security
  // Take arguments from POST method
  $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
  $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
  //echo $username;
  //echo $password;
  // Select from users where username and password
  mysqli_query($conn, "SET NAMES 'utf8'");

  $query = "SELECT * FROM users WHERE username = '$username'";
  $res= $conn->query($query);
  $res->data_seek(0);
  $row = $res->fetch_assoc();
  // Hash the password
  // If it exists
  // Second argument is from the select in the database
  if($res->num_rows == 1 && password_verify($password, $row['password'])) {
    // Create Session Variable
    //session_start();
    $_SESSION['user'] = $username;
    $_SESSION['id'] = $row['id'];
    $_SESSION['retire'] = $row['HaveRetirement'];
    // close connection
    mysqli_close($conn);
    // Redirect to homepage
    header("Location: index.php");
  }
  else {
    // Close Connection
    mysqli_close($conn);
    // Put the $error message into a variable and with echo show this on html sign in page
    // Show an error message that auth failed
    session_start();
    $_SESSION['message'] = 'Παρακαλώ ελέγξτε το όνομα χρήστη και τον κωδικό σας.';
    // Redirect to signup
    header("Location: signin.php");
  }
?>
