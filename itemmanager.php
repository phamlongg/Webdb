<?php
    include("connect.php");
   // session_start();
    $_SESSION['username']='admin';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/manager.css">
    <title>Quản lý sản phẩm</title>
</head>
<body>
<?php
    include("header.php");
?>

<div class="header">
    <h1>Quản lý sản phẩm<a href="additem.php">Thêm sản phẩm</a></h1>
</div>
<?php
    if($_SESSION['username']!="admin"){
        echo '<script language="javascript">alert("Xin lỗi bạn không phải là admin!");</script>';
        header("location:about.php");
    }else{
    if(isset($_GET['amess'])){
        echo '<script language="javascript">alert("Thêm thành công sản phẩm!");</script>';
    }
    $ppage=5;
    $sql="SELECT * FROM sanpham";
	$result = mysqli_query($con,$sql);
    $total = mysqli_num_rows($result);
    $maxpage = ceil($total/$ppage);
    
    if(isset($_GET['p'])){
		$page = $_GET['p'];
		$page = (int) $page;
		if($page>$maxpage){
			$page = $maxpage;
		}else if($page<=0){
			$page = 1;
		}
	}else{ 
		$page=1;
	}

    $start=$ppage*($page-1);
    $paping="LIMIT $start,$ppage";
	
?>
<div class="tablemanager">
<table>
	<tr>
			<th>STT</th>
            <th>ID Sản Phẩm</th>
            <th>Ảnh</th>
			<th>Tên Sản Phẩm</th>
			<th>Size</th>
			<th>Số lượng tồn</th>
			<th>Giá</th>
			<th>Xóa/Sửa</th>
		</tr>
	<?php
	$sql = "SELECT * FROM sanpham  $paping";
	$result = mysqli_query($con,$sql);
	$index = 1;
	//$row=mysqli_fetch_array($result);
	while($row=mysqli_fetch_array($result)){
    ?>    
        <tr>
			<td><?php echo $index ?></td>
			<td><?php echo $row['ID_SP']?></td>
			<td><img style="height:80px" src= <?php echo"'images/".$row['AnhSP']."'"?> alt="anh"></td>
			<td><?php echo $row['TenSP']?></td>
			<td><?php echo $row['Size']?></td>
            <td><?php echo $row['SoLuong']?></td>
            <td><?php echo number_format($row['Gia']*1000,0,",",".")?> VNĐ</td>
            <td><a href="deleteitem.php?id=<?php echo $row['ID_SP']?>&p=<?php echo $page?>" 
            onclick='<?php echo "javascript: return confirm(\"Bạn có chắc chắn muốn xóa?\");"?>'>Xóa</a>/   
            <a href="updateitem.php?id=<?php echo $row['ID_SP']?>&p=<?php echo $page?>">Sửa</a></td>
        
		</tr>
		
    <?php	
    $index++;
    }
    ?>	
</table>   
    <div class="nav">
    <?php
        for($i=1;$i<=$maxpage;$i++){
            if($i==$page){
                echo "<a style = 'color:red;font-size: 20'>$i</a> " ;
            }else{
                if($i==$maxpage){				
                    echo "<a href = 'itemmanager.php?p=$i'>Trang cuối</a><br>" ;
                }else if($i==1){
                    echo "<a href = 'itemmanager.php?p=$i'>Trang đầu</a> " ;
    
                }else{
                    if(($i>=$page-5) AND ($i<=$page+5))
                    echo "<a href = 'itemmanager.php?p=$i'>$i</a> " ;
                }
            }
        }
    }
    ?>
    </div>
</div>



</body>
</html>
<?php
    mysqli_close($con);
	unset($i,$page,$paping,$ppage,$result,$row,$sql,$start,$total,$maxpage);
?>