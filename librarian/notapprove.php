<?php
include "connection.php";
$id = $_GET["id"];
mysqli_query($conn, "update student_deets set status='no' where id = $id")
?>

<script type= "text/javascript">
    window.location="display student.php";

</script>