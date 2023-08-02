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
<div class="navbar">
<nav>
  <h3>Welcome</h3>
  <ul class="nav top-menu">
  <li><a href="edit profile.php">Profile</a></li> 
  <li><a href="index.php">Home</a></li> 
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

  <!-- display of image -->
  <ul class="image-list-small">
    <li>
      <a href="#" style="background-image: url('books_img/chemistry.png');"></a>
      <div class="details">
        <h3><a href="#">Chemistry</a></h3>
        <p class="image-author"></p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('books_img/marine.jpg');"></a>
      <div class="details">
        <h3><a href="#">Marine Biology</a></h3>
        <p class="image-author"></p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('books_img/OIP (1).jpg');"></a>
      <div class="details">
        <h3><a href="#">Science</a></h3>
        <p class="image-author"></p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('books_img/OIP.jpg');"></a>
      <div class="details">
        <h3><a href="#">Living Science</a></h3>
        <p class="image-author"></p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('books_img/science.jpg');"></a>
      <div class="details">
        <h3><a href="#">Everyday Science</a></h3>
        <p class="image-author"></p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('books_img/web.jpg');"></a>
      <div class="details">
        <h3><a href="#">Web Tech</a></h3>
        <p class="image-author"></p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('books_img/cn1.jpg');"></a>
      <div class="details">
        <h3><a href="#">Computer Networks</a></h3>
        <p class="image-author"></p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('books_img/dbms.jpg');"></a>
      <div class="details">
        <h3><a href="#">DataBase Management </a></h3>
        <p class="image-author"></p>
      </div>
    </li>
  
    
</ul>

</div>

<footer>
  <p><a href="mailto:deansalvatoremikealson@gmail.com">deansalvatoremikealson@gmail.com</a></p>
</footer>


</body>
</html>
