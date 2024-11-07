
<?php
  include 'conn.php';

$cat_id=$_REQUEST['cat_id'];
$catName=$_REQUEST['catName'];

$sql="UPDATE categories SET category_name = '$catName'
                                     WHERE category_id = '$cat_id'";
$rs=$conn->query($sql);

if($rs>0){
    
    echo 200;
    exit();
}else{
    echo 300;
    exit();
}


?>