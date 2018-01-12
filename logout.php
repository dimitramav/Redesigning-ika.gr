<?php
  // Remove session variables
  session_start();
  unset($_SESSION['user']);
  unset($_SESSION['id']);
  // Redirect to index.php
  header("Location: index.php");
?>
