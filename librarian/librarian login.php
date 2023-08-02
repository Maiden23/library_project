<?php
session_start();
include "connection.php";

if (isset($_POST["submit"])) {
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM librarian_registration WHERE username='$uname' AND password='$pass'";
    $res = mysqli_query($conn, $query);
    $count = mysqli_num_rows($res); // Count the number of rows returned

    if ($count == 0) {
        echo "Invalid password or username";
    } else {
        $_SESSION['username'] = $_POST["username"];
        header("Location: display student.php");
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
    <title>Librarian Login</title>
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <div class="container">
        <h2>LIBRARIAN LOGIN</h2>
        <hr><br>
        <div class="box">
            <form action="" method="post">
                <label for="UserName">User Name:</label>
                <input type="text" name="username"><br><br>
                <label for="Password">Password:</label>
                <input type="password" name="password"><br><br><br>
                <input type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
