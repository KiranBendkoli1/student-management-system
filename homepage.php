<?php
session_start();
if(isset($_SESSION['login'])){
    $name = $_SESSION['name'];
    $email = $_SESSION['email']; 
    $class = $_SESSION['class'];
    $mobile = $_SESSION['mobile'];
    $address = $_SESSION['address'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Students Information</h1> <a href="logout.php">LOGOUT</a>
    <table border='1'>
        <tr>
            <td>Student's Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Student's Class </td>
            <td><?php echo $class; ?></td>
        </tr>
        <tr>
            <td>Student's Email Address</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Student's Mobile Number</td>
            <td><?php echo $mobile; ?></td>
        </tr>
        <tr>
            <td>Student's Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
<?php
}else{
    header("location:index.php");
}
?>