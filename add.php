<?php
session_start();

require_once 'db.php';



extract($_POST);
    
$spassword = password_hash($password, PASSWORD_BCRYPT, array("cost"=>12));

$query = "SELECT * FROM student WHERE email = '$email'";
$result = mysqli_query($mysqli, $query);
$num_rows = mysqli_num_rows($result);
// $row = mysqli_fetch_array()
if($num_rows < 1){
$query = "INSERT INTO student (name, class, mobile,address, email, password) VALUES ('$name', '$class', '$mobile','$address','$email', '$spassword')";
$insert_row = mysqli_query($mysqli, $query);
if($insert_row){
    $_SESSION['login'] = $mysqli->insert_id;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['class'] = $class;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['address'] = $address;
    
    echo 'true';
}
}else{
    echo 'false';
}
$mysqli->close();

?>