<?php 
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="db_btl";
$con= new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($con->connect_error){
	die("connection failed: ".$con->connect_error);
}
 ?>

 <?php
  
?>
<?php
    
    /*$sql="CREATE TABLE IF NOT EXISTS SanPham(ID_SP varchar(5) not null primary key,
    TenSP varchar(50),
    AnhSP varchar(200),
    Gia bigint,
    SoLuong int,
    Size char(3)
)";
if(mysqli_query($con,$sql)){
    echo "Tạo Bảng thành công ";
}else{
    echo "<br>Có lỗi tạo Bảng".mysqli_error($con);
}$sql="CREATE TABLE IF NOT EXISTS chitiethoadon(
        id_cart int ,
        id_kh varchar(200),
        ID_SP varchar(5),
        TenSP varchar(50),
        size char(3),
        sl int,
        gia bigint,
        thanhtien bigint,
        ngaydathang date
    )";
    if(mysqli_query($con,$sql)){
        echo "Tạo Bảng thành công ";
    }else{
        echo "<br>Có lỗi tạo Bảng".mysqli_error($con);
    }$sql="CREATE TABLE IF NOT EXISTS hoadon(
        id_cart int primary key not null AUTO_INCREMENT,
        id_kh varchar(100),
        tenkh varchar(80),
        sl_sp int,
        tongtien bigint,
        ngaydathang date,
        sdt int,
        email varchar(50),
        diachi varchar(200),
        ghichu varchar(200)
    )";
    if(mysqli_query($con,$sql)){
        echo "Tạo Bảng thành công ";
    }else{
        echo "<br>Có lỗi tạo Bảng".mysqli_error($con);
    }
    //Tạo sản phẩm của long
        //TẠO DATABASE
      
    $sql="CREATE DATABASE IF NOT EXISTS PTUDW";
            if(mysqli_query($con,$sql)){
            echo "tạo database thành công";
        }
        else{
            echo "tạo database không thành công".mysqli_error($con);
        }
        


        //TẠO BẢNG
        
   *//* $sql="CREATE TABLE IF NOT EXISTS Table_SanPham(ID_SP varchar(5) not null primary key,
            TenSP varchar(50),
            AnhSP varchar(200),
            Gia bigint,
            SoLuong int,
            Size char(3)
        )";
        if(mysqli_query($con,$sql)){
            echo "Tạo Bảng thành công ";
        }else{
            echo "<br>Có lỗi tạo Bảng".mysqli_error($con);
        }
        


        //THÊM DỮ LIỆU
         $sql="INSERT INTO `sanpham`(`ID_SP`, `TenSP`, `AnhSP`, `Gia`, `SoLuong`, `Size`) VALUES
        ('AD_01', 'Áo Dài Nữ', 'shop-4.jpg', 479, 9, 'M'),
        ('AD_02', 'Áo Dài Đỏ', 'shop-6.jpg', 379, 5, 'M'),
        ('AD_03', 'Áo Dài Nữ 3', 'banner3.jpg', 365, 28, 'M L'),
        ('AN_01', 'Áo Nữ Đỏ Mận', 'shop-1.jpg', 899, 10, 'M'),
        ('AN_02', 'Áo Nữ Xanh Đậm', 'shop-3.jpg', 649, 15, 'S'),
        ('AN_03', 'Áo Nam Vàng', 'shop-5.jpg', 199, 10, 'XXL'),
        ('AN_04', 'Áo Phông Trắng', 'shop-7.jpg', 200, 30, 'XL'),
        ('AN_05', 'Áo Len Nữ', 'shop-8.jpg', 899, 5, 'L'),
        ('AN_06', 'Áo Khoác Nữ', 'left1.jpg', 599, 8, 'L'),
        ('CV_01', 'Cà Vạt (Nâu)', 'grid4.jpg', 230, 30, 'L'),
        ('DH_03', 'Đồng Hồ ', 'grid3.jpg', 455, 30, 'M L'),
        ('GD_01', 'Giày Vải Nam', 'grid2.jpg', 798, 10, '40'),
        ('GN_01', 'Giày Nữ', 'bg3.jpg', 455, 30, 'M'),
        ('HD_01', 'Áo Hoodie (Vàng)', 'left2.jpg', 375, 42, 'M L'),
        ('KQ_01', 'Khăn Quàng', 'banner1.jpg', 250, 40, 'M'),
        ('K_01', 'Kính Đen', 'team2.jpg', 115, 50, 'M L'),
        ('K_02', 'Kính Râm (Đen)', 'shop-5.jpg', 135, 55, 'M L'),
        ('K_03', 'Kính Nam (Đen)', 'c1.jpg', 145, 55, 'M L'),
        ('K_04', 'Kính Râm (Nữ) ', '3.jpg', 155, 38, 'M L'),
        ('K_05', 'Kính Nữ (Đen)  ', 'bg1.jpg', 155, 38, 'M'),
        ('K_06', 'Kính TT (Nam)', 'cart4.jpg', 195, 37, 'L'),
        ('NH_01', 'Nước Hoa Hồng', 'grid6.jpg', 1999, 5, 'M'),
        ('QJ_01', 'Quần Jean', 'cart3.jpg', 350, 45, 'M L'),
        ('QL_01', 'Quần Lửng', 'bg2.jpg', 165, 25, 'M L'),
        ('QV_01', 'Quần Vải (NAM)', '1.jpg', 355, 25, 'M L'),
        ('SM_01', 'Áo Sơ Mi Hồng Nam', 'shop-2.jpg', 599, 20, 'L'),
        ('SM_02', 'Áo Trắng ', 'shop-22.jpg', 300, 32, 'M L'),
        ('TX_01', 'Túi Xách Đen', 'grid1.jpg', 299, 10, 'S'),
        ('TX_02', 'Túi Xách Hồng', 'grid5.jpg', 299, 7, 'S'),
        ('TX_03', 'Túi Xách Đan', 'banner3.jpg', 255, 35, 'M'),
        ('TX_04', 'Túi Xách (Trắng)', '2.jpg', 300, 32, 'M L'),
        ('VN_02', 'Vest Nam', 'left3.jpg', 899, 4, 'XL'),
        ('VN_03', 'Vest Nam (XÁM)', 'team3.jpg', 545, 15, 'L'),
        ('VN_04', 'Vest Nam (ĐEN)', 'team1.jpg', 565, 25, 'L'),
        ('VN_05', 'Vest Kẻ', 'grid4.jpg', 655, 43, 'L'),
        ('VN_06', 'Vest Nam (Đỏ)', '1.jpg', 755, 35, 'M L');";
                //bỏ đoạn này
                                     /*  for($i=0;$i<14;$i++){
                                        $id=array('AN_01','SM_01','AN_02','AD_01','AN_03','AD_02','AN_04','AN_05','TX_01','GD_01',
                                        'TX_02','NH_01','AN_06','VN_02');
                                        $ten=array('Áo Nữ Đỏ Mận','Áo Sơ Mi Hồng Nam','Áo Nữ Xanh Đậm','Áo Dài Nữ','Áo Nam Vàng',
                                        'Áo Dài Đỏ','Áo Phông Trắng','Áo Len Nữ','Túi Xách Đen','Giày Vải Nam','Túi Xách Hồng',
                                        'Nước Hoa Hồng','Áo Khoác Nữ','Vest Nam');
                                        $anh=array('shop-1.jpg','shop-2.jpg','shop-3.jpg','shop-4.jpg','shop-5.jpg','shop-6.jpg',
                                        'shop-7.jpg','shop-8.jpg','grid1.jpg','grid2.jpg','grid5.jpg','grid6.jpg','left1.jpg',
                                        'left3.jpg');
                                        $gia=array(899,599,649,479,199,379,200,899,299,798,299,1999,599,899);
                                        $soluong=array(10,20,15,9,10,5,30,5,10,10,7,5,8,4);
                                        $size=array('M','L','S','M','XXL','M','XL','L','S','40','S','M','L','XL');
                                        echo $soluong[$i]."<br>";
                                       
                                        */ /*$sql="INSERT INTO `sanpham` (`ID_SP`, `TenSP`, `AnhSP`, `Gia`, `SoLuong`, `Size`) VALUES ('$id[$i]', '$ten[$i]', '$anh[$i]', '$gia[$i]', '$soluong[$i]', '$size[$i]');";
           *//* if(mysqli_query($con,$sql)){
                echo "Thêm thành công 1 bản ghi vào CSDL";
            }else{
                echo "<br>Có lỗi khi thêm bản ghi. Lỗi: ".mysqli_error($con);
            }
        /*}
        // tạo bằng các randum
        //Tạo database của đăng nhập
     /*$sql="CREATE DATABASE IF NOT EXISTS PTUDW";
            if(mysqli_query($con,$sql)){
            echo "tạo database thành công";
        }
        else{
            echo "tạo database không thành công".mysqli_error($con);
        }
        //tạo bẳng 
                $sql="CREATE TABLE IF NOT EXISTS `Talbe_login` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `username` varchar(15) NOT NULL,
            `password` varchar(50) NOT NULL,
            `phone` varchar(15) NOT NULL,
            `email` varchar(100) NOT NULL,
            `ngaysinh` varchar(20) NOT NULL,
            `diachi` varchar(15) NOT NULL,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1 ;";
            if(mysqli_query($con,$sql)){
            echo "Tạo Bảng thành công ";
        }else{
            echo "<br>Có lỗi tạo Bảng".mysqli_error($con);
        }
        //them du lieu vào bảng
     $sql ="INSERT INTO `talbe_login` (`id`, `username`, `password`, `phone`, `email`, `ngaysinh`, `diachi`) VALUES (NULL, 'admin', 'damin', '034798825', 'vuvietquyen789@gmail.com', '10/11/2000', 'hanoi');";
        $sql1 ="INSERT INTO `talbe_loginr` (`id`, `username`, `password`, `phone`, `email`, `ngaysinh`, `diachi`) VALUES (NULL, 'vvq12', '12345', '034798825', 'nguyenvanA@gmail.com', '18/1/200', 'hanoi');";
        $sql2 ="INSERT INTO `talbe_login` (`id`, `username`, `password`, `phone`, `email`, `ngaysinh`, `diachi`) VALUES (NULL, 'admin', '12345', '034798825', 'kieumanhquan@gmail.com', '18/12/200', 'hanoi');";
        $sql3 ="INSERT INTO `talbe_login` (`id`, `username`, `password`, `phone`, `email`, `ngaysinh`, `diachi`) VALUES (NULL, 'admin', '12345', '034798825', 'vuvietquyen789@gmail.com', '15/6/200', 'hanoi');";
        if(mysqli_query($con,$sql)){
                echo "Thêm thành công 1 bản ghi vào CSDL";
            }else{
                echo "<br>Có lỗi khi thêm bản ghi. Lỗi: ".mysqli_error($con);
            }
    
                //TẠO DATABASE
        
    /* $sql="CREATE DATABASE IF NOT EXISTS  PTUDW ";
            if(mysqli_query($con,$sql)){
            echo "tạo database thành công";
        }
        else{
            echo "tạo database không thành công".mysqli_error($con);
        }
        */
        //TẠO DATABASE
        //Tạo bảng hóa đơn 
    /*
        $sql="CREATE DATABASE IF NOT EXISTS PTUDW";
        if(mysqli_query($con,$sql)){
            echo "tạo database thành công";
        }
        else{
            echo "tạo database không thành công".mysqli_error($con);
        }
        
      */
      /*  $sql="CREATE TABLE IF NOT EXISTS Table_hoadon(
            id_cart int primary key not null AUTO_INCREMENT,
            id_kh int,
            tenkh varchar(80),
            sl_sp int,
            tongtien bigint,
            ngaydathang date,
            sdt int,
            email varchar(50),
            diachi varchar(200),
            ghichu varchar(200)
        )";
        if(mysqli_query($con,$sql)){
            echo "Tạo Bảng thành công ";
        }else{
            echo "<br>Có lỗi tạo Bảng".mysqli_error($con);
        }
        */
        // Tạo bảng chi tiết đơn hàng
        
    /*    $sql="CREATE TABLE IF NOT EXISTS Talbe_chitiethoadon(
            id_cart int ,
            ID_SP varchar(5),
            TenSP varchar(50),
            size char(3),
            sl int,
            gia bigint,
            thanhtien bigint,
            ngaydathang date
        )";
        if(mysqli_query($con,$sql)){
            echo "Tạo Bảng thành công ";
        }else{
            echo "<br>Có lỗi tạo Bảng".mysqli_error($con);
        
        }
        */
  
?>
