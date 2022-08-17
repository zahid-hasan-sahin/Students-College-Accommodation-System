<?php
session_start();
if ($_SESSION['user'] != 'admin') {
    header("Location:../index.html");
}
include_once '../Connect.php';
$user = $_POST['user'];
if ($user == 'Manager') {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $college = $_POST['College'];
    $gender = $_POST['Gender'];
    $address = $_POST['address'];
    $q = "UPDATE manager SET password='$password', firstname='$fname',  lastname='$lname', 
     college='$college',  gender='$gender',  address='$address' where username='$username'";
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
} else {
    $username = $_POST['username'];
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
}
