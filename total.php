<?php
    session_start();
    include("connect.php");
    //$username=$_SESSION['username'];
    //$username='admin';
    if(isset($_SESSION['username'])){
        $username=$_SESSION['username'];
    }else{
        $username='unknow';
    }
    $errorNumber=$errorName=$errorAddress='';
    if(isset($_GET['kt'])){
        $kt=$_GET['kt'];
        $kt= (int) $kt;
        if($kt==0){
            header('Location:about.php');
        }
        if(isset($_GET['dn'])){
            $dn=$_GET['dn'];
            $dn= (int) $dn;
            if($dn==0){
                header('location:cart.php');
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/total-style.css">
</head>
<body>

<?php  
//thanh toán


    if(isset($_POST['fname'])){
        $fname= $_POST['fname'];
    }else{
        $fname='';
    }
    if(empty($_POST['fname'])){
        $errorName="*";
    }
    if(isset($_POST['fnumber'])){
        $fnumber= $_POST['fnumber'];
    }else{
        $fnumber='';
    }
    if(empty($_POST['fnumber']) ){
        $errorNumber="*";
    }
    if(isset($_POST['mail'])){
        $mail= $_POST['mail'];
    }else{
        $mail='';
    }
    if(isset($_POST['address'])){
        $address= $_POST['address'];
    }else{
        $address='';
    }
    if(empty($_POST['address'])){
        $errorAddress="*";
    }
    if(isset($_POST['note'])){
        $note= $_POST['note'];
    }else{
        $note='';
    }
    if(isset($_POST['submit'])){
        if($fname =='' || $fnumber==0 || $address==''){
            echo '<script language="javascript">alert("Bạn chưa điền đủ thông tin");</script>';
        }else{
            $date= date("Y-m-d");
            $id_kh=$username;
            $tongtien=0;
            $demsp=0;
        
            foreach($_SESSION['cart'] as $key =>$val){
                $demsp=$demsp+ $val['soluong'];
                $thanhtien= $val['price']*$val['soluong'];
                $tongtien+=$thanhtien;
            }
            $sql="INSERT INTO hoadon (id_kh, tenkh, sl_sp, tongtien, ngaydathang, sdt, email, diachi, ghichu)
            VALUES ('$username', '$fname', $demsp, $tongtien, '$date', $fnumber, '$mail', '$address', '$note')";
            if(mysqli_query($con,$sql)){
                $id=mysqli_insert_id($con);
                foreach($_SESSION['cart'] as $key =>$val){
                    $namett= $val['name'];
                    $demsp= $val['soluong'];
                    $id_sp= $key;
                    $sl_sp=$val['soluong'];
                    $size_sp=$val['size'];
                    $price_sp=$val['price'];
                    $thanhtien= $val['price']*$val['soluong'];
                    $sql="INSERT INTO chitiethoadon (id_cart,id_kh ,ID_SP, TenSP, size, sl, gia, thanhtien, ngaydathang)
                    VALUES ($id,'$id_kh','$id_sp' ,'$namett','$size_sp','$sl_sp',$price_sp,$thanhtien,'$date')";
                    mysqli_query($con,$sql);
                }
                unset($_SESSION['cart'],$id,$id_sp,$size_sp,$sl_sp,$price_sp,$thanhtien,$date);
                
                header('location:cart.php?mess=1');
            }
        }
    }

         
     
?>
<div class="form">
    <h4>Điền thông tin vào bảng sau:</h4>
    <form action="" method="POST">
        <span class="namef">Họ và tên: <span class="red"><?php echo $errorName?></span></span><br><input  type="text" name="fname" value="<?php echo $fname?>">
        <span class="namef">Số điện thoại: <span class="red"><?php echo $errorNumber?></span></span><br><input type="number" name="fnumber" value="<?php echo $fnumber?>"><br>
        <span class="namef">Mail: </span><br><input type="text" name="mail" value="<?php echo $mail?>"><br>
        <span class="namef">Địa chỉ: <span class="red"><?php echo $errorAddress?></span></span><br><input type="text" value="<?php echo $address?>" name="address"> <br>
        <span class="namef">Ghi chú: </span><br><textarea name="note"  cols="30" rows="10" ><?php echo $note?></textarea><br>
        <input class="submit" type="submit" name="submit"  value="Thanh toán">
    </form>   
</div>
    
</body>
</html>
