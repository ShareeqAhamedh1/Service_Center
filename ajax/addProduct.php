<?php 
include "../backend/conn.php";
?>

<div class="container card-body">
    <form action="backend/addProduct.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="pName">Product Name</label>
            <input type="text" name="pName" id="pName" class="form-control" placeholder="Enter Product name" required>
        </div>

        <div class="form-group">
            <label for="pDesc">Description</label>
            <input type="text" name="pDesc" id="pDesc" class="form-control" placeholder="Enter product description" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Enter price" required>
        </div>

        <div class="form-group">
            <label for="pStock">Stock</label>
            <input type="text" name="pStock" id="pStock" class="form-control" placeholder="Enter stock quantity" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="" disabled selected>Select Category</option>
                <!-- Example options; replace with actual categories as needed -->

                <?php $sqlCat="SELECT * FROM categories";
                        $rsCat=$conn->query($sqlCat);

                        if($rsCat->num_rows>0){
                            while($rowsCat=$rsCat->fetch_assoc()){
                                ?> 
                     <option value="<?= $rowsCat['category_id'] ?>"><?= $rowsCat['category_name'] ?></option>
                
                <?php
                            }
                        }
                    ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
