<?php
include_once '../Connect.php';
$username = $_POST["username"];
$pass = $_POST["pass"];
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$firstname = $_POST["fname"];
$Ggpa = $_POST["Ggpa"];
$roll = $_POST["roll"];
$College = $_POST["College"];
$Gender = $_POST["Gender"];
$address = $_POST["address"];

if ($_POST['user']=='Manager') {

    $q = "insert into manager values('$username','$pass','$firstname ','$lastname','$College','$Gender','$address ')";
    $qq = "insert into college values('$username','$College')";

    if ($con->query($q) === TRUE && $con->query($qq)) {
        echo "<script>
    window.location.href = 'index.php';
    alert('New Record Added');
    </script>";
    } else {
        echo "<script>
    window.location.href = 'index.php';
    alert('Duplicate value');
    </script>";
    }
} else {
    $q = "insert into student values('$username','$pass','$firstname ','$lastname','$Gender','$Ggpa','$roll','$address ')";
    if ($con->query($q) === TRUE) {
        echo "<script>
    window.location.href = 'index.php';
    alert('New Record Added');
    </script>";
    } else {
        echo "<script>
        window.location.href = 'index.php';
        alert('Duplicate value');
        </script>";
    }
}
