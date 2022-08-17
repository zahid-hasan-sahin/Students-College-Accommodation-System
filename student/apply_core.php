<?php
session_start();
if ($_SESSION['user'] != 'student') {
    header("Location:../index.html");
}
include_once '../Connect.php';

$man = $_POST['college'];
$sql1 = "select collegename from college where managerid='$man';";

$res = mysqli_query($con, $sql1);
$row = mysqli_fetch_array($res);
$college = $row['collegename'];
$status = "waiting";
$student = $_SESSION['userid'];

$sql2 = "select * from application where studentusername='$student' and managerusername='$man' and collegename='$college' and status='waiting';";

$res = mysqli_query($con, $sql2);
$row = mysqli_fetch_array($res);

if (mysqli_num_rows($res) >= 1) {
    echo "<script>
    window.location.href = 'apply.php';
    alert('you have already applied for this college. Please wait for manager approval/rejection');
    </script>";
} else {



    $sql3 = "insert into application values('$student','$man','$college','$status');";
    if ($con->query($sql3) === TRUE) {
        echo "<script>
    window.location.href = 'index.php';
    alert('Applied');
    </script>";
    } else {
        echo "<script>
     window.location.href = 'apply.php';
    alert('error');
    </script>";
    }
}
