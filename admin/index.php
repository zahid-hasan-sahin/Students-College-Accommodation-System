<?php
session_start();
if ($_SESSION['user'] != 'admin') {
    header("Location:../index.html");
}
include_once '../Connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="container">
            <?php


            $q = "select * from admin;";
            $res = mysqli_query($con, $q);
            $row = mysqli_fetch_array($res);

            ?>
            <ul>
                <li><a href="add.php">add </a></li>
                <li><a href="edit.php">edit</a></li>
                <li><a href="delete.php">delete</a></li>
                <div class="user_name">Welcome <?php echo $row['name'] ?></div>

                <li><a href="../logout_core.php">logout</a></li>
            </ul>
        </div>
    </nav>
    <div id="msg">Welcome To Admin page</div>
</body>

</html>