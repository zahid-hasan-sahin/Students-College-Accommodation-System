<?php
session_start();
if ($_SESSION['user'] != 'admin') {
    header("Location:../index.html");
}

include_once '../Connect.php';
$user = $_POST['user'];

if ($user == 'Manager') {

    $username = $_POST['username'];

    $q = "delete from manager  where username='$username'";
    $qq = "delete from college  where managerid='$username'";
    mysqli_query($con, $qq) && mysqli_query($con, $q);
    if (mysqli_affected_rows($con) >= 1) {
        echo "<script>
        window.location.href = 'index.php';
        alert('deleted!!!!');
        </script>";
    } else {
        echo "<script>
        window.location.href = 'delete.php';
        alert('No user found!!!!');
        </script>";
    }
} else {
    $username = $_POST['username'];

    $q = "delete from student  WHERE username='$username'";
    mysqli_query($con, $q);
    if (mysqli_affected_rows($con) >= 1) {

        echo "<script>
        window.location.href = 'index.php';
        alert('deleted!!!!');
        </script>";
    } else {
        echo "<script>
        window.location.href = 'delete.php';
        alert('No user found!!!!');
        </script>";
    }
}
