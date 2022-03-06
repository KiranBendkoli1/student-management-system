<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['class']);
unset($_SESSION['mobile']);
unset($_SESSION['address']);

header("location:index.php?logout=true")

?>