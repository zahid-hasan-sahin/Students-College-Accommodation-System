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
            display: flex;
            flex-direction: column;
            width: 500px;
            position: relative;
            top: 10px;
            left: 30%;
            justify-content: center;
            align-items: center;
            background-color: black;
            color: white;
            border-radius: 10px;
        }

        .input-item {
            padding: 5px;
            margin: 10px;
            border-radius: 3px;
        }

        .submit-button {
            margin: -10px 0px 20px 0px;
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
                <li><a href="add.php" style="background-color: rgb(150, 104, 223);">add </a></li>
                <li><a href="edit.php">edit</a></li>
                <li><a href="delete.php">delete</a></li>
               <div class="user_name">Welcome <?php echo $row['name'] ?></div>
               
                <li><a href="../logout_core.php">logout</a></li>
            </ul>
        </div>
    </nav>
    <form action="add_core.php" method="post">
        <div class="form-container">
            <label for="user">Add a</label>
            <select name="user" id="user" onchange="countryHandler(this.value)">
                <option value="Student">Student</option>
                <option value="Manager">Manager</option>
            </select>
            <input type="text" class="input-item" id="username" name="username" placeholder="Choose a user name" required>
            <input type="text" class="input-item" id="pass" name="pass" placeholder="Choose a user password" required>
            <input type="text" class="input-item" id="fname" name="fname" placeholder="Enter First name" required>
            <input type="text" class="input-item" id="lname" name="lname" placeholder="Enter Last name" required>
            <input type="text" class="input-item" id="Ggpa" name="Ggpa" placeholder="Enter Ggpa">
            <input type="text" class="input-item" id="roll" name="roll" placeholder="Enter roll">
            <input type="text" class="input-item" id="College" name="College" placeholder="Enter College" style="display: none">
            <input type="text" class="input-item" id="Gender" name="Gender" placeholder="Enter Gender" required>
            <input type="text" class="input-item" id="address" name="address" placeholder="Enter Address" required>
            <br>
            <button type="submit" class="submit-button">Add</button>
    </form>
    </div>
    <script>
        function countryHandler(value) {
            if (value == "Manager") {
                const demoId = document.querySelector('#Ggpa');
                demoId.setAttribute('style', 'display: none');

                const demoId1 = document.querySelector('#College');
                demoId1.setAttribute('style', 'display: block');

                const demoId2 = document.querySelector('#roll');
                demoId2.setAttribute('style', 'display: none');


            } else {
                const demoId = document.querySelector('#Ggpa');
                demoId.setAttribute('style', 'display: block');

                const demoId1 = document.querySelector('#College');
                demoId1.setAttribute('style', 'display: none');

                const demoId2 = document.querySelector('#roll');
                demoId2.setAttribute('style', 'display: block');
            }
        }
    </script>
</body>


</html>