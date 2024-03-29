<!DOCTYPE html>
<html lang="en">

<?php
require "server/functions.php";
session_start();
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <meta name="keywords" content="">

  <title>Movie Cave home page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"> Movie Cave</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html">Register</a>
          </li>
          
      
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://images6.alphacoders.com/517/thumb-1920-517273.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Movies</h3>
            <p>All the best movies available here.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item"  style="background-image: url('https://images7.alphacoders.com/610/thumb-1920-610211.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Trailers</h3>
            <p>Get your hands on all the trailers of latest movies here.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://images3.alphacoders.com/932/thumb-1920-932825.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Movie Information</h3>
            <p>Get all the given information about the movies.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to Movie Cave</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-6 mb-6">
        <div class="card h-100">
          <h4 class="card-header">Movies</h4>
          <div class="card-body">
            <p class="card-text">Here we have different movies with theirs trailers and more for our viewers.</p>

            <div class="iframe-container">  <iframe width="424" height="238" src="https://www.youtube.com/embed/HbTf_dYogeg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

          </div>
          <div class="card-footer">
            <a href="movindex.php" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-6">
        <div class="card h-100">
          <h4 class="card-header">Trailers</h4>
          <div class="card-body">
            <p class="card-text">You can get all the upcoming movies and previous movies trailers available till now.</p>

              <div class="iframe-container"> <iframe src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              </div>

          </div>
          <div class="card-footer">
            <a href="trailerindex.php" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
   
    </div>

    <hr>

   
  </div> 


  <!-- Footer -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom "> -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Movie cave 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
