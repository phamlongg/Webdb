<?php
    include("connect.php");
    if(isset($_GET['id']) && isset($_GET['p'])){
        $id= $_GET['id'];
        $id=(String) $id;
        $p=$_GET['p'];
        $p= (String) $p;
        $sql = "DELETE FROM sanpham WHERE ID_SP='$id'";
        $url="itemmanager.php?p=".$p;
        if (mysqli_query($con,$sql)) {
            header('Location:'.$url);
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }
    mysqli_close($con);
    unset($sql,$id,$p);
    }

?>