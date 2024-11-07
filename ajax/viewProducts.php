<?php 
include "../backend/conn.php";
?>

<div class="container">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                            <th>Product price</th>
                                            <th>Stock</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sqlProducts="SELECT * FROM products";
                                            $rsProducts=$conn->query($sqlProducts);

                                            if($rsProducts->num_rows>0){
                                                while ($rowsProduct=$rsProducts->fetch_assoc()) {
                                                    $cat_id=$rowsProduct['category_id'] ;
                                                  ?> 
                                        <tr>
                                            <td><?= $rowsProduct['product_name'] ?></td>
                                            <td><?= $rowsProduct['description'] ?></td>
                                            <td><?= $rowsProduct['price'] ?></td>
                                            <td><?= $rowsProduct['stock'] ?></td>

                                            <?php
                                            $sqlCat="SELECT * FROM categories WHERE category_id='$cat_id'";
                                            $rsCat=$conn->query($sqlCat);
                                            if($rsCat->num_rows==1){
                                                $rowsCat=$rsCat->fetch_assoc();
                                                ?> 
                                            <td><?= $rowsCat['category_name'] ?></td>

                                            <?php
                                            }
                                            ?>
                                            <td><button type="button" class="btn btn-sm btn-danger" onclick="deleteProduct(<?= $rowsProduct['product_id'] ?>)"><i class="ri-delete-bin-6-line"></i></button>
                                            <button type="button" class="btn btn-sm btn-warning" onclick="openModelProduct(<?= $rowsProduct['product_id'] ?>)"><i class="ri-edit-box-fill"></i></button>
                                            </td>
                                        </tr>

                                        <?php
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>