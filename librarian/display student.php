<?php 
session_start();
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index1.css" />
  
</head>
<body style="background-color: rgb(0, 0, 0);">
<!-- navbar -->
<div class="navbar">
<nav>
  <h3>Welcome</h3>
  <ul class="nav top-menu">
  <li><a href="student_Deets.php">Student info</a></li> 
  <li><a href="display student.php">Home</a></li> 
  <li><a href="/html/">Books</a></li> 
  <li><a href="logout.php">logout</a></li> 
</nav>
</div>

<div class="container">
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      
      <div class="item active">
        <img src="ai.jpg" alt="Artifical Intelligence" style="width:40%;">
      </div>

      <div class="item">
        <img src="bc.jpg" alt="Block Chain" style="width:40%;">
      </div>
    
      <div class="item">
        <img src="cn.jpg" alt="Computer Networks" style="width:40%;">
      </div>

      <div class="item">
        <img src="cs.jpg" alt="Cyber Security" style="width:40%;">
      </div>

      <div class="item">
        <img src="da.jpg" alt="Data Analysis" style="width:40%;">
      </div>

      <div class="item">
        <img src="dce.jpg" alt="Data Control Engineering" style="width:40%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <div class="x" id="x5">
  <?php
  $res= mysqli_query($conn,"select * from add_books");
  echo "<table class='table table-bordered' >";
  echo "<tr>";
  echo "<th>"; echo "books name" ;echo "</th>";
  echo "<th>"; echo "books image" ;echo "</th>";
  echo "<th>"; echo "books authors name" ;echo "</th>";
  echo "<th>"; echo "books publication name" ;echo "</th>";
  echo "<th>"; echo "books purchase date" ;echo "</th>";
  echo "<th>"; echo "books price" ;echo "</th>";
  echo "<th>"; echo "books quantity" ;echo "</th>";
  echo "<th>"; echo "Available Quantity" ;echo "</th>";
  echo "</tr>";
  while($row=mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>"; echo $row["books_name"] ;echo "</td>";
    echo "<td>"; ?> <img src="<?php echo $row["books_image"];?>" height ="100" width ="100"><?php echo "</td>";
    echo "<td>"; echo $row["books_author_name"] ;echo "</td>";
    echo "<td>"; echo $row["books_publication_name"] ;echo "</td>";
    echo "<td>"; echo $row["book_purchase_name"] ;echo "</td>";
    echo "<td>"; echo $row["book_purchase_date"] ;echo "</td>";
    echo "<td>"; echo $row["books_copy"] ;echo "</td>";
    echo "<td>"; echo $row["books_qty"] ;echo "</td>";
    echo "<td>"; echo $row["available_qty"] ;echo "</td>";
    echo "</tr>";
  }
  ?>
</div>
<div class= "x" id="x3">
  <form name="form1" action="" method= "post" class ="col-lg-6" enctype="multipart/form-data">
  <table class = "table table-bordered">
    <tr>
      <td><input type="text" class="form-control" placeholder="books name" name="bname"></td>
    </tr>
    <tr>
      image of the books
      <td><input type="file" name="f1"></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" placeholder="books author name" name="bauthorname"></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" placeholder="publication name" name="pname"></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" placeholder="books purchase date" name="bpurchasedt"></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" placeholder="books price" name="bprice"></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" placeholder="books quantity" name="bqty"></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" placeholder="Available Quantity" name="aqty"></td>
    </tr>
    <tr>
      <td><input type="submit"  name="submit1" class="btn btn-default submit" value="insert book details"></td>
    </tr>
    

  </table>
</form>

</div>
</div>
<?php
if(isset($_POST["submit1"])){

  $tm= md5(time());
  $fnm=$_FILES['f1']['name'];
  $dst="./books_img/".$tm.$fnm;
  $dst1="books_img/".$tm.$fnm;
  move_uploaded_file($_FILES['f1']['tmp_name'],$dst);
  mysqli_query($conn,"INSERT INTO `add_books` VALUES ('','$_POST[bname]','$dst1','$_POST[bauthorname]','$_POST[pname]','$_POST[bpurchasedt]','$_POST[bprice]','$_POST[bqty]','$_POST[aqty]','$_SESSION[username]')");
?>
<script type="text/javascript">
  alert("book insert successful");
  </script>
<?php

}
?>



<footer>
  <p><a href="mailto:deansalvatoremikealson@gmail.com">deansalvatoremikealson@gmail.com</a></p>
</footer>

</body>
</html>
