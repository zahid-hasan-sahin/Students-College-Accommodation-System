<?php
session_start();
include_once 'Connect.php';

$sql ="SELECT * FROM admin";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['username'] == $_POST["username"] && $row['password'] == $_POST["password"]) {
            $_SESSION['user'] = 'admin';
            header("Location: admin");
        }
    }
}
$sql ="SELECT * FROM student";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['username'] == $_POST["username"] && $row['password'] == $_POST["password"]) {
            $_SESSION['user'] = 'student';
            $_SESSION['userid'] = $row['username'];

            header("Location: student");
        }
    }
}
$sql ="SELECT * FROM manager";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['username'] == $_POST["username"] && $row['password'] == $_POST["password"]) {

            $_SESSION['user'] = 'manager';
            $_SESSION['userid'] = $row['username'];
            header("Location: manager");
        }
    }
}

echo "<script>
    window.location.href = 'index.html';
    alert('username or password is wrong');
    </script>";
