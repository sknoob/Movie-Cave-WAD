<?php
if(isset($_GET['edit_category'])){
    $get_id = $_GET['edit_category'];
    $get_pro = "select * from categories where cat_id='$get_id'";
    $run_pro = mysqli_query($con, $get_pro);
    $row_pro = mysqli_fetch_array($run_pro);
    $cat_id = $row_pro['cat_id'];
    $cat_title = $row_pro['cat_title'];
}
if(isset($_POST['update_cat'])){
    //getting text data from the fields
    $cat_title = $_POST['cat_title'];
    $update_product = "update categories set cat_title = '$cat_title'
                   where cat_id='$cat_id'";
    $update_cat = mysqli_query($con, $update_product);
    if($update_cat){
        header("location: index.php?view_categories");
    }
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Edit & Update Category </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="cat_title">Category Title</label>
                <div class="col-12 col-sm-8 col-lg-9">

                    <input class="form-control" type="text" id="cat_title" name="cat_title" placeholder="Title"
                           value="<?php echo $cat_title;?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="update_cat" name="update_cat"
                           value="Update Category Now">
                </div>
            </div>
        </form>
    </div>
</div>