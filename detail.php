<?php
  
  include("connect.php");
    if(isset($_GET['id'])){
        $id= (String) $_GET['id'];
        $sql=(String) "SELECT * FROM sanpham WHERE ID_SP='".$id."'";
        $result=mysqli_query($con,$sql);
        if ($result) {  
           $row = mysqli_fetch_array($result);
               
        } else {
            // Code xử lý lỗi
            echo "Xảy ra lỗi khi truy vấn dữ liệu";
        }
    }

    if(isset($_GET['num'])){
      $num=$_GET['num'];
    }else{
      $num=1;
    }
    include("header.php");
?>





<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HaNoiStore</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="./css/style-starter.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
  <link rel="stylesheet" href="./css/header.css">
  <!-- Template CSS -->

</head>
<body>

<section class="content-w-photo-6">
	<div class="content-photo-6-mian py-5">
		<div class="container py-lg-5">
			<div class="align-photo-6-inf-cols row">
				
				<div class="photo-6-inf-left col-lg-6" id="zoomIn">
					
          <img class="img-fluid" class="img-fluid" src=<?php echo"'images/".$row['AnhSP']."'"?> alt="anh<?php echo $row['AnhSP'] ?>">
				</div>
				<div class="photo-6-inf-right col-lg-6">

					<h3 class="hny-title text-left" style="color: #ff7315ce">Chi Tiết Sản Phẩm</h3>
					<form action="addcart.php" method="GET" class="signin-form mt-lg-5 mt-4">
            <input type="hidden" name="id" value="<?php echo $row['ID_SP']?>">
					<div class="product-content">
            <h4 class="title">Tên sản phẩm: <?php echo $row["TenSP"]?></h4>
            <h4>Size: <?php echo $row['Size']?></h4>
					</div>

					<div class="product-content">
          <span class="price">Giá: <?php echo number_format($row['Gia']*1000,0,",",".") ?> VNĐ</span>
					</div>
          <p>Số lượng: <input type="number" name="num" value="<?php echo $num   ?>"></p>
					<p style="color:  #ff7315ce;">Ghé thăm cửa hàng để xem những sáng tạo tuyệt vời từ các nhà thiết kế của chúng tôi.</p>
          <input class="addcart" type="submit" name="submit" value="Thêm vào giỏ hàng" > 
					<a id="addnow" href="addcart.php?idn=<?php echo $row['ID_SP']?>&numn=1" class="read-more btn">Mua Ngay</a>
					
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!--/login-->
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<!--//login-->
<script>
// optional
		$('#customerhnyCarousel').carousel({
				interval: 5000
    });
  </script>
 <!-- cart-js -->
 <script src="./assets/js/minicart.js"></script>
 <script>
     transmitv.render();

     transmitv.cart.on('transmitv_checkout', function (evt) {
         var items, len, i;

         if (this.subtotal() > 0) {
             items = this.items();

             for (i = 0, len = items.length; i < len; i++) {}
         }
     });
 </script>
 <!-- //cart-js -->
<!--pop-up-box-->
<script src="./assets/js/jquery.magnific-popup.js"></script>
<!--//pop-up-box-->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

  });
</script>
<!--//search-bar-->
<!-- tắt cuộn nội dung mà thanh điều hướng đang hoạt động -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- tắt cuộn nội dung mà thanh điều hướng đang hoạt động -->
<script src="./assets/js/bootstrap.min.js"></script>



