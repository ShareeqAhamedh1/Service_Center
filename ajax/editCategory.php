<?php
include "../backend/conn.php";

$cat_id=$_REQUEST['cat_id'];


$sqlCat="SELECT * FROM categories WHERE category_id='$cat_id'";
$rsCat=$conn->query($sqlCat);

if($rsCat->num_rows>0){
    $rowsCat=$rsCat->fetch_assoc();
}
    ?>


<div class="container card-body">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="pName">Category Name</label>
            <input type="text" name="catName" id="catName" value="<?= $rowsCat['category_name'] ?>" class="form-control" placeholder="Enter Category name" required>
        </div>
        <button type="button" class="btn btn-warning" onClick="editCategory(<?= $cat_id ?>)">Edit</button>
    </form>
</div>
