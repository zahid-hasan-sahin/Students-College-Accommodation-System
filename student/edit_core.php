<?php
session_start();
if ($_SESSION['user'] != 'student') {
    header("Location:../index.html");
}
include_once '../Connect.php';


$username = $_SESSION['userid'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$cgpa = $_POST['Ggpa'];
$roll = $_POST['roll'];
$gender = $_POST['Gender'];
$address = $_POST['address'];

$q = "UPDATE student SET username='$username' , password='$password', firstname='$fname',  lastname='$lname', 
     cgpa='$cgpa',roll='$roll',   gender='$gender',  address='$address'   WHERE username='$username'";

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
