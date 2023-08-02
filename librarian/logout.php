<?php

include "connection.php";
?>
<?php


session_start();
session_unset();
session_destroy();
header("Location: librarian login.php");

exit;

?>