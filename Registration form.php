<?php
include "connection.php";
?>
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['ID'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $uname = $_POST['uname'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    if (empty($uname) || empty($password) || empty($id) || empty($email) || empty($dob)) {
        echo "All fields are required.";
    } else {
        $sql = "INSERT INTO student_deets (id, firstname, lastname, uname, pass, email, dob) VALUES ('$id', '$fname', '$lname', '$uname', '$password', '$email', '$dob')";
        mysqli_query($conn, $sql);
        header("Location: Login page.php");
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
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration.css" />
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <hr><br>
        <div class="box">        
            <form method="post">
                <label for="id">ID:</label>
                <input type="number" name="ID"><br><br>
                <label for="Firstname">First Name:</label>
                <input type="text" name="firstname"><br><br>
                <label for="Lastname">Last Name:</label>
                <input type="text" name="lastname"><br><br>
                <label for="UserName">User Name:</label>
                <input type="text" name="uname"><br><br>
                <label for="Password">Password:</label>
                <input type="password" name="pass"><br><br>
                <label for="email">Email ID:</label>
                <input type="email" name="email"><br><br>
                <label for="dob">DOB:</label>
                <input type="date" name="dob"><br><br>
                <input type="submit" name="submit" value="Sign-up">
            </form>
        </div>
    </div>
</body>
</html>
