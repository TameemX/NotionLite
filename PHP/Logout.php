<?php

session_start();
$_SESSION['loggedin'] = false;
unset($_SESSION['user_id']);
//session_destroy();
header("Location: Home.php");

?>