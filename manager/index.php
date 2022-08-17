<?php
session_start();
if ($_SESSION['user'] != 'manager') {
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

    <title>Manager</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="container">
            <?php
            $userid = $_SESSION['userid'];

            $q = "select * from manager where username='$userid';";
            $res = mysqli_query($con, $q);
            $row = mysqli_fetch_array($res);

            ?>
            <ul>
                <li><a href="edit.php">edit</a></li>
                <li><a href="request.php">All Request</a></li>
                <div class="user_name">Welcome <?php echo $row['firstname'] . " " . $row['lastname']; ?></div>
                <li><a href="../logout_core.php">logout</a></li>
            </ul>
        </div>

    </nav>
    <div id="msg">Welcome To Manager page</div>
</body>

</html>