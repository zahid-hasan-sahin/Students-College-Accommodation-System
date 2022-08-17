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
                <li><a href="edit.php">edit</a></li>
                <li><a href="apply.php" style="background-color: rgb(150, 104, 223);">apply</a></li>
                <li><a href="request.php">Request Status</a></li>
                <div class="user_name">Welcome <?php echo $row['firstname'] . " " . $row['lastname']; ?></div>
                <li><a href="../logout_core.php">logout</a></li>
            </ul>
        </div>

    </nav>
    <form action="apply_core.php" method="post">
        <div class="form-container">
            <?php

            $userid = $_SESSION['userid'];


            ?>
            <label for="college">Choose a College:</label>
            <select name="college" id="user">
                <?php

                $sql = "SELECT * FROM college";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                        $man = $row["managerid"];
                        echo  "<option value='$man'>" . $row["collegename"] . "</option>";
                    }
                }
                ?>
            </select>
            <br>
            <br>
            <button type="submit" class="update-button" class="input-item">Apply</button>


    </form>
    </div>
    <script>

    </script>
</body>


</html>