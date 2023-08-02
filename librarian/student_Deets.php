<?php
include "connection.php";
?>
<?php
     
      $res = mysqli_query($conn, "select * from student_deets");
      echo "<table class='student-table'>";
      echo "<tr>";
      echo "<th class='text-center'>Firstname</th>";
      echo "<th class='text-center'>Lastname</th>";
      echo "<th class='text-center'>Username</th>";
      echo "<th class='text-center'>Email</th>";
      echo "<th class='text-center'>Date of Birth</th>";
      echo "<th class='text-center'>Status</th>";
      echo "<th class='text-center'>Approve</th>";
      echo "<th class='text-center'>Not Approve</th>";
      echo "</tr>";
      while ($row = mysqli_fetch_array($res)) {
          echo "<tr>";
          echo "<td class='text-center'>" . $row["firstname"] . "</td>";
          echo "<td class='text-center'>" . $row["lastname"] . "</td>";
          echo "<td class='text-center'>" . $row["uname"] . "</td>";
          echo "<td class='text-center'>" . $row["email"] . "</td>";
          echo "<td class='text-center'>" . $row["dob"] . "</td>";
          echo "<td class='text-center'>" . $row["status"] . "</td>";
          echo "<td class='text-center'>" ; ?> <a href ="approve.php?id=<?php echo $row["id"];?>">Approve</a><?php echo "</td>";
          echo "<td class='text-center'>" ; ?> <a href ="notapprove.php?id=<?php echo $row["id"];?>">Not Approve</a><?php echo "</td>";

          echo "</tr>";
      }
      echo "</table>";
      ?>
      
     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
    .student-table {
  width: 100%;
  border-collapse: collapse;
}

.student-table th,
.student-table td {
  padding: 8px;
  border-bottom: 1px solid #ddd;
  text-align: center;
}

.student-table th {
  background-color: #f2f2f2;
  font-weight: bold;
}

        </style>
</head>
<body>
    
</body>
</html>