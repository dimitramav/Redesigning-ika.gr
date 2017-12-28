<?php
  // Remove session variables
  session_start();
  unset($_SESSION['user']);
  // Redirect to index.php
  header("Location: index.php");
?>
