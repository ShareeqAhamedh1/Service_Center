<?php

    include "conn.php";

    $sc_s_id=$_REQUEST['sc_s_id'];

  

    $sql="DELETE FROM tbl_sc_services WHERE sc_s_id='$sc_s_id'";
    $rs=$conn->query($sql);

    if($rs>0){
        echo 200;
        exit();
    }else{
        echo $sql;
        exit();
    }
    
?>