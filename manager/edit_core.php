<?php
session_start();
if ($_SESSION['user'] != 'manager') {
    header("Location:../index.html");
}
include_once '../Connect.php';


$username = $_SESSION['userid'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$college = $_POST['college'];
$gender = $_POST['Gender'];
$address = $_POST['address'];

$q = "UPDATE manager SET username='$username' , password='$password', firstname='$fname',  lastname='$lname', 
     college='$college', gender='$gender',  address='$address'   WHERE username='$username'";

if (mysqli_query($con, $q)) {
    echo "<script>
        window.location.href = 'index.php';
        alert('Updated!!!!!');
        </script>";
} else {
    echo "<script>
       window.location.href = 'index.php';
        alert('Error!!!!!');
        </script>";
}
