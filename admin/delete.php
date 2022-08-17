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
                <li><a href="edit.php">edit</a></li>
                <li><a href="delete.php" style="background-color: rgb(150, 104, 223);">delete</a></li>
                <div class="user_name">Welcome <?php echo $row['name'] ?></div>

                <li><a href="../logout_core.php">logout</a></li>
            </ul>
        </div>
    </nav>
    <form action="delete_core.php" method="post">
        <div class="form-container">
            <label for="user">Delete:</label>
            <select name="user" id="user">
                <option value="Student">Student</option>
                <option value="Manager">Manager</option>
            </select>
            <br>
            <input type="text" class="input-item1" id="username" name="username" placeholder="Choose a user name" required>
            </br>
            <button type="submit" class="update-button" class="input-item">Delete</button>
    </form>
    </div>

</body>


</html>