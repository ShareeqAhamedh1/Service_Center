
<?php
  include 'conn.php';


$pName=$_REQUEST['pName'];
$pDesc=$_REQUEST['pDesc'];
$price=$_REQUEST['price'];
$stock=$_REQUEST['pStock'];
$category=$_REQUEST['category'];

$sql="INSERT INTO products (product_name,description,price,stock,category_id) VALUES('$pName','$pDesc','$price','$stock','$category')";
$rs=$conn->query($sql);

if($rs>0){
    
    header('location:../products.php');
    exit();
}else{
    echo 300;
    exit();
}


?>