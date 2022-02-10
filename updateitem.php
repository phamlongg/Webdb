<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa</title>
    <link rel="stylesheet" href="./css/manager.css">
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
    <h1>Chỉnh sửa sản phẩm</h1>
<?php
    include('connect.php');
    if(isset($_GET['id']) && isset($_GET['p'])){
        $id = $_GET['id'];
        $id = (String) $id;
        $p=$_GET['p'];
        $p= (String) $p;
        
    }else{
        $p=$_GET['p'];
        $p= (String) $p;
        $url="itemmanager.php?p=".$p;
        echo "<script>alert('Không tồn tại bản ghi đã chọn');</script>";
		//header("Location: ".$url);
    }
    $sql="SELECT * FROM sanpham where ID_SP='$id'";

    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result)
?>
<div class="tablemanager">
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name='id_old' value = '<?php echo $id;?>'>
    <input type="hidden" name='p' value="<?php echo $p ?>">
    <input type="hidden" name="pimage" value="<?php echo $row['AnhSP']?>">
    <table style="width:1100px" border = 1 cellspacing = 0 >
		<tr>
			<th>ID Sản Phẩm</th>
            <th>Ảnh</th>
            <th>Ảnh mới</th>
			<th>Tên Sản Phẩm</th>
			<th>Size</th>
			<th>Số lượng tồn</th>
			<th>Giá</th>
			
        </tr>
        <tr>
            <td><input style="width:50px" type="text" name="id_new" value="<?php echo $row['ID_SP']; ?>"></td>
            <td><img style="height:80px" src= <?php echo"'images/".$row['AnhSP']."'"?> alt="anh"></td>
            <td><input type="file" name="image">
            <input type="hidden" name="size" value="1000000"> 
            </td>
            <td><input type="text" name="pname" value="<?php echo $row['TenSP']; ?>"S></td>
            <td><input style="width:50px "type="text" name="psize" value="<?php echo $row['Size'];?>"></td>
            <td><input style="width:50px" type="number" name="psl" step = 1  min = 0  value="<?php echo $row['SoLuong']; ?>" ></td>
            <td><input style="width:50px;float:left" type="text" name="pprice" value="<?php echo $row['Gia']; ?>">.000 VNĐ</td>
        </tr>

        <tr>
            
            <td colspan=7><input id="submit" type="submit" value="Sửa" name = 'edited'></td>
        </tr>
    </table>
</form>
    <a style="margin-left:700px" id="cancel" href="itemmanager.php?p=<?php echo $p?>">Hủy</a>
</div>

<?php
    if(isset($_POST['id_old'])){
        $id_index=$_POST['id_old'];
        $id_index=(String) $id_index;
    }else{
        $id_index="";
    }

    if(isset($_POST['id_new'])){
        $id = $_POST['id_new'];
    }else{
        $id="";
    }

    if(isset($_POST['pname'])){
        $pname = $_POST['pname'];
    }else{
        $pname = '';
    }
    if(isset($_POST['psize'])){ 
        $psize = $_POST['psize'];
        
    }else{
        $psize = "";
    }
    if(isset($_POST['psl'])){
        $psl = $_POST['psl'];
    }else{
        $psl = 0;
    }
    if(isset($_POST['pprice'])){
        $pprice =$_POST['pprice'];
    }else{
        $pprice=0;
    }
    if(isset($_POST['p'])){
        $p =$_POST['p'];
        $p=(String) $p;
    }else{
        $p=1;
    }
    if(isset($_POST['pimage'])){
        $pimage=$_POST['pimage'];
    }else{
        $pimage="0";
    }
    $imgg='';
    $url="Location:itemmanager.php?p=".$p;

if(isset($_POST['edited'])){
    if($imgg ==''){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));


        $expensions= array("jpeg","jpg","png");
               
        if(in_array($file_ext,$expensions)=== false){
            $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
        }
               
        if($file_size > 2097152) {
            $errors[]='Kích thước file không được lớn hơn 2MB';
        }

        $image = $_FILES['image']['name'];
        $target = "images/".basename($image);

        if($image==''){
            $image=$pimage;
        }else{
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }

        
        $sql = "UPDATE sanpham SET ID_SP='$id', TenSP='$pname', AnhSP = '$image',Gia = '$pprice',SoLuong='$psl',Size='$psize' WHERE ID_SP='$id_index'";
        mysqli_query($con, $sql);
        if(mysqli_query($con,$sql)){
            echo "<script>alert('Sửa thành công 1 bản ghi vào CSDL');</script>";
            header($url);
        }else{
            echo "Có lỗi khi sửa bản ghi. Lỗi: ".mysqli_error($con);
        }
        
        
    }
    
}
    
?>
</body>
</html>