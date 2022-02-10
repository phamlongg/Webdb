<?php
    session_start();
    include("connect.php");

    if(isset($_GET['submit'])){
        $sl= $_GET['num'];
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $sql=(String) "SELECT * FROM sanpham WHERE ID_SP='".$id."'";
            $rerult=mysqli_query($con,$sql);
            $row =mysqli_fetch_array($rerult);
        } 
        if(!isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]= array(
                'name'=> $row['TenSP'],
                'anh'=> $row['AnhSP'],
                "soluong"=>$sl,
                "size"=>$row['Size'],
                "price"=>$row['Gia']
            );

        }else{
            $_SESSION['cart'][$id]['soluong']+=$sl;
        }
        $url="detail.php?id=".$id."&num=".$sl;
        header("Location:".$url);
    }else{
        if(isset($_GET['idn']) && isset($_GET['numn'])){
            $sl= $_GET['numn'];
            $sl= (int) $sl;
            $id= $_GET['idn'];
            $id=(String) $id;
            $sql=(String) "SELECT * FROM sanpham WHERE ID_SP='".$id."'";
            $rerult=mysqli_query($con,$sql);
            $row =mysqli_fetch_array($rerult);
            if(!isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]= array(
                    'name'=> $row['TenSP'],
                    'anh'=> $row['AnhSP'],
                    "soluong"=>$sl,
                    "size"=>$row['Size'],
                    "price"=>$row['Gia']
                );
    
            }else{
                $_SESSION['cart'][$id]['soluong']+=$sl;
            }
            header("Location:cart.php");
        }
    }

?>