<!DOCTYPE html>
<?php
require "server/functions.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MovieCave</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <script>
        function checkSearch(search) {
            var xmlhttp  = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if(this.readyState === 4 && this.status === 200){
                    document.getElementById("proz").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","server/functions.php?search=" + search);
            xmlhttp.send();
        }
    </script>
</head>
<body>

<header class="container-fluid">
    <div class="row">
        <div class="col-12 no-padding">
            <nav class="navbar navbar-light bg-light navbar-expand-sm">
                <a class="navbar-brand" href="index.php"><img src="media/logo.png" width="190" height="100" alt="logo">
                </a>
                <button class="navbar-toggler" type="button"
                        data-toggle="collapse"
                        data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse row" id="navbarToggler">
                    <div class="col-lg-8 offset-lg-1 col-md-8 col-sm-7">
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="search" class="form-control"
                                       id="search-bar" name="search"
                                       placeholder="Find Movies, Trailers and more.." onkeyup="checkSearch(this.value)" >
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-lg" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-sm-right">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php"><i class="fas fa-heart sc-color fa-2x"></i></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php"><i class="fas fa-shopping-cart sc-color fa-2x"></i></a>
                            </li>
                            <?php if(isset($_SESSION['user_email'])): ?>
                                <a class="theme_color" style="padding: 10px" href="logout.php" style="text-decoration:none">logout</a>
                            <?php else: ?>
                                <a class="theme_color" style="padding: 10px" href="login.php" style="text-decoration:none"><span class="sc-fs">Login </span></a>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</header>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="bg-light">
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle nav-link">
                    <i class="fas fa-sitemap"></i>
                    Categories
                </a>
                <ul class="collapse show list-unstyled" id="homeSubmenu">
                    <?php getCats(); ?>
                </ul>
            </li>

            <li>
                <a class="nav-link"  href="#">
                    <i class="fas fa-question"></i>
                    FAQ
                </a>
            </li>
            <li>
                <a class="nav-link"  href="#">
                    <i class="fas fa-paper-plane"></i>
                    Contact
                </a>
            </li>
        </ul>
    </nav>
    <article id="content" class="container-fluid bg-white">
        <div class="row" id="proz">
            <?php getTrilers(); ?>
        </div>
    </article>


</div>
<footer class="container-fluid">
    <div class="row">
        <div class="col text-center">
            &copy; 2019 by USB
        </div>
    </div>
</footer>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>