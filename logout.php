<?php
   session_start();
   unset($_SESSION["loggedin"]);
   unset($_SESSION["firstName"]);
   unset($_SESSION["lastName"]);
   unset($_SESSION["sid"]);

   header('Refresh: 2; URL = index.php');
?>
