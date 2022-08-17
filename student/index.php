<?php
session_start();
if ($_SESSION['user'] != 'student') {
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

    <title>student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <?php
        $userid = $_SESSION['userid'];

        $q = "select * from student where username='$userid';";
        $res = mysqli_query($con, $q);
        $row = mysqli_fetch_array($res);
        
        ?>
        <div class="container">
            <ul>
                <li><a href="edit.php">edit</a></li>
                <li><a href="apply.php">apply</a></li>
                <li><a href="request.php">Request Status</a></li>
                <div class="user_name">Welcome <?php echo $row['firstname']." ".$row['lastname'];?></div>
                <li><a href="../logout_core.php">logout</a></li>
            </ul>
        </div>

    </nav>
    <div id="msg">Welcome To student page</div>
</body>

</html>