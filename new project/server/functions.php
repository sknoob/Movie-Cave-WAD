<?php
require_once "db_connection.php";


if(isset($_GET['search'])){
    getMovies();
    getTrilers();
}

function getCats(){
    global $con;
    $getCatsQuery = "select * from categories";
    $getCatsResult = mysqli_query($con,$getCatsQuery);
    while($row = mysqli_fetch_assoc($getCatsResult)){
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "<li><a class='nav-link'  href='movindex.php?cat=$cat_id'>$cat_title</a></li>";
    }
}


function getMovies(){
    global $con;
    $getProQuery = '';
    if(!isset($_GET['cat']) && !isset($_GET['search'])){
        $getProQuery = "select * from movies order by RAND();";
    }
    else if(isset($_GET['cat'])){
        $pro_cat_id = $_GET['cat'];
        $getProQuery = "select * from movies where mov_cat = '$pro_cat_id'";
    }
    else if(isset($_GET['search'])){
        $user_query = $_GET['search'];
        $getProQuery = "select * from movies where mov_keywords like '%$user_query%'";
    }
    $getProResult = mysqli_query($con,$getProQuery);
    $count_pro = mysqli_num_rows($getProResult);
    if($count_pro==0){
        echo "<h4 class='alert-warning align-center my-2 p-2'> No Movies found in selected criteria </h4>";
    }
    while($row = mysqli_fetch_assoc($getProResult)){
        /*$pro_id = $row['pro_id'];*/
        $mov_title = $row['mov_title'];
        $mov_desc = $row['mov_desc'];
        $mov_image = $row['mov_image'];
        echo "
                <div class='col-sm-6 col-md-4 col-lg-3 text-center product-summary'>
                    <h5 class='text-capitalize'>$mov_title</h5>
                    <img src='admin/movie_images/$mov_image'>
                    <p> <b> $mov_desc  </b> </p>
                    <a href='detail.php' class='btn btn-info btn-sm'>Details</a>
                    <a href='#'>
                        <button class='btn btn-primary btn-sm'>
                            <i class='fas fa-cart-plus'></i> Download
                        </button>
                    </a>
                </div>
        ";
    }
}


function getTrilers(){
    global $con;
    $getProQuery = '';
    if(!isset($_GET['cat']) && !isset($_GET['search'])){
        $getProQuery = "select * from trailers order by RAND();";
    }
    else if(isset($_GET['cat'])){
        $pro_cat_id = $_GET['cat'];
        $getProQuery = "select * from trailers where tra_cat = '$pro_cat_id'";
    }
    else if(isset($_GET['search'])){
        $user_query = $_GET['search'];
        $getProQuery = "select * from trailers where tra_keywords like '%$user_query%'";
    }
    $getProResult = mysqli_query($con,$getProQuery);
    $count_pro = mysqli_num_rows($getProResult);
    if($count_pro==0){
        echo "<h4 class='alert-warning align-center my-2 p-2'> No Trailers found in selected criteria </h4>";
    }
    while($row = mysqli_fetch_assoc($getProResult)){
        /*$pro_id = $row['pro_id'];*/
        $tra_title = $row['tra_title'];
        $tra_desc = $row['tra_desc'];
        $tra_image = $row['tra_image'];
        echo "
                <div class='col-sm-6 col-md-4 col-lg-3 text-center product-summary'>
                    <h5 class='text-capitalize'>$tra_title</h5>
                    <img src='admin/trailer_images/$tra_image'>
                    <p> <b> $tra_desc  </b> </p>
                    <a href='detail.php' class='btn btn-info btn-sm'>Details</a>
                    <a href='#'>
                        <button class='btn btn-primary btn-sm'>
                            <i class='fas fa-cart-plus'></i> Download
                        </button>
                    </a>
                </div>
        ";
    }
}
