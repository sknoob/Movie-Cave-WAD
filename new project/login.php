<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Login Page Movie Cave</title>
    <link rel="stylesheet" href="css/logincss.css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1 class="mt-4 mb-3">Login
         <!--<small>Subheading</small>-->
    </h1>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Movie Cave</a>
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

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="contact.html">Contact</a>
        </li>
        <li class="breadcrumb-item active">Login</li>
    </ol>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <form name="sentMessage" id="contactForm" novalidate="">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Enter your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" required pattern="(.+@ucp.edu.pk)|(^[a-z0-9](\.?[a-z0-9]){5,}@((g(oogle)?mail)|(hotmail|yahoo|outlook))?\.com$)" data-validation-required-message="Please enter your email address.">
                        <p class="help-block"></p>
                     </div>
                    <div class="controls">
                        <label>Enter your Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" required pattern="[0-9a-zA-Z]{6,}" data-validation-required-message="Please enter your password.">
                        <p class="help-block"></p>
                        <a href="forgotpassword.html" id="forgot_password" tabindex="3"><p align="right">Forgot Password?</p></a>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary" id="Login_accept">Login</button>
            </form>
                <div class="col-lg-12">
                    <hr>
                        <p align="center">OR</p>
                </div>
            <div row>
            <div id="socialLoginCol" class="col-lg-8">
                <p>Log in using the following</p>
                <div id="socialSigninError">
                </div>
                <ul>
                    <li><button id="signinWithFacebook" type="button" class="btn btn-primary"><i class="fab fa-facebook"></i><a href="https://www.facebook.com" style="color: white">  Log in with Facebook</a></button></li>
                    <br>
                    <li id="gapiSignin"><button id="signinWithGoogle" type="button" class="btn btn-primary"><i class="fab fa-google"></i><a href="https://www.gmail.com" style="color: white"> Log in with Google</button></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Movie cave 2019</p>
        </div>
        <!-- /.container -->
    </footer>

</body>
</html>