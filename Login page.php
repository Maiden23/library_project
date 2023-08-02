<?php
include "connection.php";

if (isset($_POST["submit"])) {
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']); 

    $query = "SELECT * FROM student_deets WHERE uname='$uname' AND pass='$pass' && status ='yes'";
    $res = mysqli_query($conn, $query);
    $count = mysqli_num_rows($res); 

    if ($count == 0) {
        echo "Invalid password or username";
    } else {
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <div class="container">
        <h2>USER LOGIN</h2>
        <hr><br>
        <div class="box">
            <form action="" method="post">
                <label for="UserName">User Name:</label>
                <input type="text" name="uname"><br><br>
                <label for="Password">Password:</label>
                <input type="password" name="pass"><br><br><br>
                <input type="submit" name="submit" value="Login">
                <button type="button" class="Registration"><a href="Registration form.php">Register</a></button>
            </form>
        </div>
    </div>
</body>
</html>
