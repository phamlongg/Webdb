<?php
    include("connect.php");
    include("header.php");
?>
<table border="1">
    <tr>
        <th>name</th>
        <th>ảnh</th>
        <th>price</th>
        <th>mua</th>
    </tr>
    <?php
        $sql="SELECT * FROM sanpham";
        $result= mysqli_query($con,$sql);
        while( $row=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row['TenSP']?></td>
        <td><img style="width: 80px;" src=<?php echo"'images/".$row['AnhSP']."'"?>></td>
        <td><?php echo $row['Gia']?></td>
        <td><a href="detail.php?id=<?php echo $row['ID_SP']?>">Mua</a></td>
    </tr>
    <?php
        }
    ?>
    <a href="cart.php">Giỏ hàng</a>
</table>