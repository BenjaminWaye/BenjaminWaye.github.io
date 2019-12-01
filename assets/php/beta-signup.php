<?php
  include_once("connect.php");
  $email = pg_escape_string($_REQUEST['email']);
  $q = "INSERT INTO beta_signup (email) VALUES ('{$email}')";
  pg_query($q);
?>
