<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <title>Thêm sản phẩm</title>
</head>
<body>
<?php

    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }else{
        $id='';
    }
    if(isset($_POST['pname'])){
        $pname=$_POST['pname'];
    }else{
        $pname='';
    }
    if(isset($_POST['pprice'])){
        $pprice=$_POST['pprice'];
    }else{
        $pprice='';
    }
    if(isset($_POST['psize'])){
        $psize=$_POST['psize'];
    }else{
        $psize='';
    }
    if(isset($_POST['psl'])){
        $psl=$_POST['psl'];
    }else{
        $psl='';
    }
    $checkid="";

    

    if (isset($_POST['upload'])) {
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

            //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));


            $expensions= array("jpeg","jpg","png");
            /*
            $id=$_POST['id'];
            $pname=$_POST['pname'];
            $pprice=$_POST['pprice'];
            $psize=$_POST['psize'];
            $psl=$_POST['psl'];
               
            if(in_array($file_ext,$expensions)=== false){
            $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
            }*/
               
            if($file_size > 2097152) {
            $errors[]='Kích thước file không được lớn hơn 2MB';
            }
            $image = $_FILES['image']['name'];
            $target = "images/".basename($image);
            if(($id=='')||($pname=='')||($pprice=='')||($psize=='')||($psl=='')||($image=='')){
                echo '<script language="javascript">alert("Bạn chưa điền đầy đủ thông tin!");</script>';
            }else{
                $sql=(String) "SELECT * FROM sanpham WHERE ID_SP='".$id."'";
                $rerult=mysqli_query($con,$sql);
                $total = mysqli_num_rows($rerult);
                if($total!=0){
                    $checkid="*";
                    echo '<script language="javascript">alert("Đã tồn tại id đó rồi");</script>';
                }else{
                    
                    $sql = "INSERT INTO sanpham (`ID_SP`, `TenSP`, `AnhSP`, `Gia`, `SoLuong`, `Size`) 
                VALUES ('$id','$pname','$image',$pprice,$psl,'$psize')";
                mysqli_query($con, $sql);
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                        header("location:itemmanager.php?amess=1");
                    }else{
                        echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
                    }
                }
            }
            
        }  
    ?>
<h1>Thêm sản phẩm</h1>
<div  class="additem">
    <form action="additem.php" method="POST" enctype="multipart/form-data">
    <p>Nhập ID Sản Phẩm: <span style="color: red;"><?php echo $checkid ?></span></p><input type="text"  name="id" value="<?php echo $id?>">
    <p>Nhập Tên Sản Phẩm: </p><input type="text" name="pname" value="<?php echo $pname?>">
    <input type="hidden" name="size" value="1000000"> 
    <p>Chọn Ảnh Sản Phẩm: </p><input type="file" name="image" >
    <p>Nhập Giá Sản Phẩm:</p><input type="number" name="pprice" value="<?php echo $pprice?>">
    <p>Nhập Size Sản Phẩm: </p><input type="text" name="psize" value="<?php echo $psize?>">
    <p>Nhập số lượng: </p><input type="number" name="psl" value="<?php echo $psl?>"><br>
    <button id="addcart" type="submit" name="upload">POST</button>
    <a id="cancel" href="itemmanager.php">Hủy</a>
    </form>
</div>
</body>
</html>
<?php
    mysqli_close($con);
    unset($psize,$psl,$sql,$target,$pname,$pprice,$id,$image,$expensions);
?>