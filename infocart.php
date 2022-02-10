
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylecss.css">
    <title>Thông tin đơn hàng</title>
</head>
<body>
    <?php
        include('header.php');
        include("connect.php");
        if(isset($_SESSION['username'])){
             $username=$_SESSION['username'];
        }else
            $username='admin';
    ?>
<?php
    if(isset($_GET['idcartdel'])){
        $idd= $_GET['idcartdel'];
        $sqld = "DELETE FROM hoadon WHERE id_cart='$idd'";
        $url="infocart.php";
        if (mysqli_query($con,$sqld)) {
            header('Location:'.$url);
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }
    }
?>
<div class="container">
<h4>Danh sách đơn hàng</h4>
<div class="row">
    
    <div class="table1 col-sm-7">
    <table id="list-cart">
        <tr class="header-tr">
            <th>Giỏ hàng</th>
            <th>Tên KH</th>
            <th>Ngày ĐH</th>
            <th>Tổng sp</th>
            <th>Tổng tiền</th>
            <th>Xem chi tiết</th>
            <th>Hủy</th>
        </tr>
        <?php
            $index = 1;
            $sql="SELECT * FROM hoadon WHERE id_kh='".$username."'";
            $result=mysqli_query($con,$sql);
            while($row =mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $index ?></td>
            <td><?php echo $row['tenkh'] ?></td>
            <td><?php echo $row['ngaydathang'] ?></td>
            <td><?php echo $row['sl_sp'] ?></td>
            <td><?php echo number_format($row['tongtien']*1000,0,",",".")?> VND</td>
            <td><a href="infocart.php?idcart=<?php echo $row['id_cart']?>">Xem</a></td>
            <td><a onclick='<?php echo "javascript: return confirm(\"Bạn có chắc chắn muốn xóa?\");"?>'
             href="infocart.php?idcartdel=<?php echo $row['id_cart']?>">Hủy</a></td>
        </tr>

        <?php
            $index++;
            }
        ?>

    </table>
    </div>

    <div class="table2 col-sm-5"  >
    
    <h4>Chi tiết đơn hàng</h4>
    <table id="list-cart">
        <tr class="header-tr">
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Size</th>
            <th>Số lượng</th>
        </tr>
        <?php
        if(isset($_GET['idcart'])){
            $idcart=$_GET['idcart'];
            $sqltt="SELECT * FROM chitiethoadon WHERE id_cart=".$idcart;
            $resultt=mysqli_query($con,$sqltt);
            while($rowtt =mysqli_fetch_array($resultt)){
                $sqlct="SELECT * FROM sanpham WHERE TenSP='".$rowtt['TenSP']."'";
                $resulct=mysqli_query($con,$sqlct);
                $rowct =mysqli_fetch_array($resulct);
        ?>
        <tr>
            <td><?php echo $rowtt['TenSP']?></td>
            <td><img style="width: 50px;" src=<?php echo "'images/".$rowct['AnhSP']."'" ?>></td>
            <td><?php echo $rowtt['size']?></td>
            <td><?php echo $rowtt['sl']?></td>
        </tr>
        <?php
            }
        }
        ?>
 
    </table>
    </div>

    </div>

</div>

</body>
</html>