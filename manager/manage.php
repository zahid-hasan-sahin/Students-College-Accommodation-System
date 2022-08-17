<?php
session_start();
if ($_SESSION['user'] != 'manager') {
    header("Location:../index.html");
}
include_once '../Connect.php';
$studentusername = $_GET['studentusername'];
$managerusername = $_GET['managerusername'];
$collegename = $_GET['collegename'];
$type = $_GET['type'];
if ($type == 'approve') {
    $q = "update application set status = 'Approved' where studentusername='$studentusername' and managerusername='$managerusername' and 
    collegename='$collegename' and status= 'waiting' ";

    mysqli_query($con, $q);
    echo "<script>
            window.location.href = 'request.php';
            </script>";
} else {

    $q = "update application set status = 'Rejected' where studentusername='$studentusername' and managerusername='$managerusername' and 
    collegename='$collegename' and status= 'waiting' ";

    mysqli_query($con, $q);
    echo "<script>
            window.location.href = 'request.php';
            </script>";
}
