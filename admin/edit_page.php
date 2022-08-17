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
        <div class="container">
            <?php


            $q = "select * from admin;";
            $res = mysqli_query($con, $q);
            $row = mysqli_fetch_array($res);

            ?>
            <ul>
                <li><a href="add.php">add </a></li>
                <li><a href="edit.php" style="background-color: rgb(150, 104, 223);">edit</a></li>
                <li><a href="delete.php">delete</a></li>
                <div class="user_name">Welcome <?php echo $row['name'] ?></div>

                <li><a href="../logout_core.php">logout</a></li>
            </ul>
        </div>
    </nav>
    <form action="edit_core.php" method="post">
        <div class="form-container">
            <?php
            if ($_POST['user'] == 'Student') {
                $userid = $_POST['username'];
                $q = "select * from student where username='$userid';";
                $res = mysqli_query($con, $q);
                $row = mysqli_fetch_array($res);
                if (mysqli_num_rows($res) == 0) {
                    echo "<script>
                    window.location.href = 'edit.php';
                    alert('No user found');
                    </script>";
                }

            ?>
                <input type="text" class="input-item" id="user" name="user" value=<?php echo  $_POST['user'] ?> style="display: none">
                <input type="text" class="input-item" id="username" name="username" value=<?php echo  $row['username'] ?> style="display: none">
                password: <input type="text" class="input-item" id="pass" name="password" value=<?php echo  $row['password'] ?> placeholder="Choose a user password"><br>
                First Name:<input type="text" class="input-item" id="fname" name="fname" value=<?php echo  $row['firstname'] ?> placeholder="Enter First name"><br>
                Last Name: <input type="text" class="input-item" id="lname" name="lname" value=<?php echo  $row['lastname'] ?> placeholder="Enter Last name"><br>
                Ggpa: <input type="text" class="input-item" id="Ggpa" name="Ggpa" value=<?php echo  $row['cgpa'] ?> placeholder="Enter Ggpa"><br>
                Roll:<input type="text" class="input-item" id="roll" name="roll" value=<?php echo  $row['roll'] ?> placeholder="Enter roll"><br>
                Gender:<input type="text" class="input-item" id="Ggpa" name="Gender" value=<?php echo  $row['gender'] ?> placeholder="Enter Gender"><br>
                Address:<input type="text" class="input-item" id="address" name="address" value=<?php echo  $row['address'] ?> placeholder="Enter Address"><br>

                <button type="submit" class="update-button" class="input-item">Update</button>
            <?php
            } else {

                $userid = $_POST['username'];
                $q = "select * from manager where username='$userid';";
                $res = mysqli_query($con, $q);
                $row = mysqli_fetch_array($res);
                if (mysqli_num_rows($res) == 0) {
                    echo "<script>
                        window.location.href = 'edit.php';
                        alert('No user found');
                        </script>";
                }

            ?>
                <input type="text" class="input-item" id="user" name="user" value=<?php echo  $_POST['user'] ?> style="display: none">
                <input type="text" class="input-item" id="username" name="username" value=<?php echo  $row['username'] ?> style="display: none">
                password: <input type="text" class="input-item" id="pass" name="password" value=<?php echo  $row['password'] ?> placeholder="Choose a user password"><br>
                First Name:<input type="text" class="input-item" id="fname" name="fname" value=<?php echo  $row['firstname'] ?> placeholder="Enter First name"><br>
                Last Name:<input type="text" class="input-item" id="lname" name="lname" value=<?php echo  $row['lastname'] ?> placeholder="Enter Last name"><br>
                College:<input type="text" class="input-item" id="College" name="College" value=<?php echo  $row['college'] ?> placeholder="Enter College"><br>
                Gender:<input type="text" class="input-item" id="Ggpa" name="Gender" value=<?php echo  $row['gender'] ?> placeholder="Enter Gender"><br>
                Address:<input type="text" class="input-item" id="address" name="address" value=<?php echo  $row['address'] ?> placeholder="Enter Address"><br>

                <button type="submit" class="update-button" class="input-item">Update</button>

            <?php
            }
            ?>
    </form>
    </div>
    <script>

    </script>
</body>


</html>