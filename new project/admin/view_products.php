     <div class="row">
    <div class="col-sm-12">
        <h1>Movies</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_pro = "select * from movies";
            $run_pro = mysqli_query($con,$get_pro);
            $count_pro = mysqli_num_rows($run_pro);
            if($count_pro==0){
                echo "<h2> No Movies found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_pro)) {
                    $pro_id = $row_pro['mov_id'];
                    $pro_cat = $row_pro['mov_cat'];
                    /*$pro_brand = $row_pro['pro_brand'];*/
                    $pro_title = $row_pro['mov_title'];
                    /*$pro_price = $row_pro['pro_price'];*/
                    $pro_image = $row_pro['mov_image'];
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $pro_title; ?></td>
                        <td><img class="img-thumbnail" src='movie_images/<?php echo $pro_image;?>' width='80' height='80'></td>
                        <td><?php echo $pro_cat; ?></td>
                        <td><a href="index.php?edit_pro=<?php echo $pro_id?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="index.php?del_pro=<?php echo $pro_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
