<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
session_unset();
 session_destroy();
  header('location: ../index.php');
?>