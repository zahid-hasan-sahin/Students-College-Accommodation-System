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

    <title>Student</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container {
            padding: 10px;
            width: 500px;
            position: relative;
            top: 10px;
            left: 30%;


            background-color: black;
            color: white;
            border-radius: 10px;
        }

        .input-item {
            padding: 5px;
            margin: 10px;
            border-radius: 3px;
        }

        .input-item1 {
            padding: 5px;
            margin: 10px;
            border-radius: 3px;
        }

        .submit-button {
            margin: 0px 0px 20px 0px;
            width: 100px;
            padding: 5px;
        }

        .update-button {
            margin: 0px 0px 20px 0px;
            width: 100px;
            padding: 5px;
        }
    </style>
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
                <li><a href="edit.php" style="background-color: rgb(150, 104, 223);">edit</a></li>
                <li><a href="apply.php">apply</a></li>
                <li><a href="request.php">Request Status</a></li>
                <div class="user_name">Welcome <?php echo $row['firstname'] . " " . $row['lastname']; ?></div>
                <li><a href="../logout_core.php">logout</a></li>
            </ul>
        </div>

    </nav>
    <form action="edit_core.php" method="post">
        <div class="form-container">
            <?php

            $userid = $_SESSION['userid'];
            $q = "select * from student where username='$userid';";
            $res = mysqli_query($con, $q);
            $row = mysqli_fetch_array($res);

            ?>

            password: <input type="text" class="input-item" id="pass" name="password" value=<?php echo  $row['password'] ?> placeholder="Choose a user password"required><br>
            First Name:<input type="text" class="input-item" id="fname" name="fname" value=<?php echo  $row['firstname'] ?> placeholder="Enter First name"required><br>
            Last Name: <input type="text" class="input-item" id="lname" name="lname" value=<?php echo  $row['lastname'] ?> placeholder="Enter Last name"required><br>
            Ggpa: <input type="text" class="input-item" id="Ggpa" name="Ggpa" value=<?php echo  $row['cgpa'] ?> placeholder="Enter Ggpa"required><br>
            Roll:<input type="text" class="input-item" id="roll" name="roll" value=<?php echo  $row['roll'] ?> placeholder="Enter roll"required><br>
            Gender:<input type="text" class="input-item" id="Ggpa" name="Gender" value=<?php echo  $row['gender'] ?> placeholder="Enter Gender"required><br>
            Address:<input type="text" class="input-item" id="address" name="address" value=<?php echo  $row['address'] ?> placeholder="Enter Address"required><br>

            <button type="submit" class="update-button" class="input-item">Update</button>


    </form>
    </div>
    <script>

    </script>
</body>


</html>