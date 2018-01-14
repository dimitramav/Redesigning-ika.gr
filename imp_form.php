<?php
  // script to insert data in the applications table
  /* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
  require_once 'helpers/greek_to_uppercase.php';
  require_once 'login.php';
  $conn = new mysqli($hn,$un,$pw,$db);
  // Check Connection
  if ($conn->connect_error) die ($conn->connect_error);
  // Escape user inputs for security
  $imp_name = mysqli_real_escape_string($conn, $_REQUEST['name']);
  $imp_name =  grstrtoupper($imp_name);
  $imp_surname = mysqli_real_escape_string($conn, $_REQUEST['surname']);
  $imp_surname =  grstrtoupper($imp_surname);
  // 1 for child, 0 for husband / wife
  $relative = mysqli_real_escape_string($conn, $_REQUEST['relative']);
  $imp_birthday=mysqli_real_escape_string($conn,$_REQUEST['date']);
  $app_date = date("d-m-Y");

  if($relative == 1) {
    $isChild = 1;
    $isHusband_Wife = 0;
  }
  else {
    $isChild = 0;
    $isHusband_Wife = 1;
  }

  // progress 1
  // completed 0
  // imp_insured 1
  $inprogress = 1;
  $completed = 0;
  $imp_insured = 1;

  // Insert greek characters in mysql database
  mysqli_query($conn, "SET NAMES 'utf8'");
  session_start();
  // take the id of the user from Session storage
  $id = $_SESSION['id'];
  // insert into the database
  // attempt insert query execution
  $sql = "INSERT INTO applications (imp_insured, inprogress, completed, imp_name, imp_surname, imp_birthday, users_id, isChild, isHusband_Wife, app_date) VALUES ('$imp_insured', '$inprogress', '$completed', '$imp_name', '$imp_surname', '$imp_birthday', '$id', '$isChild', '$isHusband_Wife', '$app_date')";
  if(mysqli_query($conn, $sql)){
      echo "Records added successfully.";
  } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }

  // close connection
  mysqli_close($conn);
  // Redirect to success_form
  header("Location: success_form.php");
 ?>
