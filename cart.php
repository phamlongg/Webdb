

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/total-style.css">
    <link rel="stylesheet" href="./css/stylecss.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Giỏ hàng</title>
</head>

<body id="reset1" style="background-color: rgb(233,233, 233);">

<?php
    include("connect.php");
    include("header.php");

    if(isset($_SESSION['username'])){
        $idkh=$_SESSION['username'];
    }else{
        $idkh='unknow';
    }
    
    //unset($_SESSION['username']);

    if(isset($_GET['mess'])){
        echo '<script language="javascript">alert("Đã mua hàng thành công");</script>';
        
    }
?>


<?php
    $tongtien=0;
    $dem=0;
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key=> $value){
            $dem++;
        }
        
    }

    if(isset($_SESSION['username'])){
        $dn=1;
    }else{
        $dn=0;
    }

    if($dem==0){
        $message="Giỏ hàng trống!";
    }else{
         $message="";
    }
?>   
<div class="container">
    <h1 class="header-cart">Cart</h1>
    <p class="imfo-cart"><?php echo $message?></p>

    <div class="muathem">
        <a style="margin-left:200px" href="about1.php">Mua thêm</a>
        <a href="infocart.php">Đơn hàng</a>
    </div>

    <div class="cart row">

        <div class="table-container col-sm-8" >
        
        <table id="list-cart">
            <tr class="header-tr">
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Size</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>thành tiền</th>
                <th>Xóa</th>
            </tr>
        <?php
        $dem=0;
        if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key=> $value){
            $thanhtien= $value['price']*$value['soluong'];
            $tongtien+=$thanhtien;
            $dem++;
        ?>

            <tr>
                <td><?php echo $value['name']?></td>
                <td><img style="width: 50px;" src=<?php echo "'images/".$value['anh']."'" ?>></td>
                <td><?php echo  $value['size'] ?></td>
                <td class="input-sl" style="width: 150px;">
                <span class="t-g" ><button onclick="giamsl('<?php echo $key ?>')"><b>-</b></button></span>
                <input type="number" onchange="updateCart('<?php echo $key ?>')" id="cart_<?php echo $key?>" value="<?php echo $value['soluong']?>">
                <span class="t-g" ><button onclick="tangsl('<?php echo $key ?>')"><b>+</b></button></span>
                </td>
                <td><?php echo number_format($value['price']*1000,0,",",".")?>VNĐ</td>
                <td><?php echo number_format($thanhtien*1000,0,",",".") ?>VNĐ</td>
                <td class="spec"><a class="btn-del" href="updateCart.php?id_del=<?php echo $key?>">Xóa</a></td>
            </tr>
        <?php
        }
        ?>  
        </table>
        <?php
        }else{
            $message="Giỏ hàng trống";
        }
        ?>
        
        </div>

        <?php
        if(isset($_SESSION['cart'])){
        ?>
        <div class="tinhtoan col-sm-3" >
            <h1 style="background-color: white; margin-left:0">Chi tiết giá</h1>
            <p>Tổng tiền: <?php echo number_format($tongtien*1000,0,",",".")?> VNĐ</p>
            <a class="thanhtoan1" onclick="check(<?php echo $dem.','.$dn ?>)" href="total.php?kt=<?php echo $dem ?>&dn=<?php echo $dn?>"><b>Đặt hàng</b></a>
        </div>

        <?php
        }
        ?>
    </div>

</div>

<script>
    

    var xmlHttp = getHTTPObject();
	function getHTTPObject() {
		var xmlhttp;
		if (window.XMLHttpRequest) {
	
			xmlhttp = new XMLHttpRequest(); 
		} else if (window.ActiveXObject) {	     
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}	 
		return xmlhttp;
	}
	function stateChanged(){
		if (xmlHttp.readyState==4)
		 {	 
			document.getElementById("txt").innerHTML=xmlHttp.responseText
		 }
	}
    function gui(id, numb){
        xmlHttp = getHTTPObject();
		if (xmlHttp==null){
			alert ("Trình duyệt của bạn không hỗ trợ AJAX");
			return
        }
		var url="updateCart.php";
		url=url+"?id="+id+"&sl="+numb;
		xmlHttp.onreadystatechange=stateChanged;
		xmlHttp.open("GET",url,true)
        xmlHttp.send(null);
        location.reload();
        //$("#reset1").load( "http://localhost/baitap/cart.php")
    }


    function updateCart(id){
        var num = document.getElementById ("cart_"+id).value;
        gui(id,num);
    }
    function giamsl(id){
        var num = document.getElementById ("cart_"+id).value;
        var num=num-1;
        if(num>0){
           gui(id,num);
        }
    }
    function tangsl(id){
        var num = document.getElementById ("cart_"+id).value;
        num = Number(num);
        num = num + 1 ;
        gui(id,num);
    }

    function check(kt,dn){
       if(kt==0){
           alert("Bạn chưa mua hàng!");
       }
       if(dn==0){
           alert("Bạn chưa đăng nhập");
       }
    }

    </script>

   
</body>
</html>