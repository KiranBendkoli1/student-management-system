<?php
session_start();

require_once 'db.php';

extract($_POST);

$query = "SELECT * FROM student WHERE email='$email'";

$result = $mysqli->query($query);
$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_rows>=1){
    if(password_verify($password, $row['password'])){

        $_SESSION['login'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['class'] =$row['class'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['address'] = $row['address'];

        echo 'true';
    }else{
        echo 'pwd';
    }
}else{
    echo 'no_std';
}

$mysqli->close();
?>