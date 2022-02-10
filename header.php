<?php
 session_start();
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- Template CSS -->

</head>
<body>

<section class="banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">

    <div class="top-header-content">

      <header class="tophny-header">
        <div class="container-fluid">
          <div class="top-right-strip row">
            <!--/left-->
            <div class="top-hny-left-content col-lg-6 pl-lg-0">
              <h6>GIẢM GIÁ 30% CHO TẤT CẢ CÁC SẢN PHẨM , <a href="#" target="_blank"> BẤM VÀO ĐÂY  
					<span class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> 
					<span class="hignlaite">ĐỂ BIẾT THÊM CHI TIẾT</span></a></h6>
            </div>
            <!--//left-->
            <!--/right-->
            <ul class="top-hnt-right-content col-lg-6">
              
              <li class="button-log usernhy">
                <a class="btn-open" href="#">
                  <span class="fa fa-user" aria-hidden="true"></span>
                </a>
              </li>
              <li class="transmitvcart galssescart2 cart cart box_1">
                <a style="border: 1px solid  #ff7315ce; background-color: #ff7315ce;padding:10px;
                font-size:17px;border-radius:15px;text-decoration: none;" href="cart.php">Giỏ hàng</a>
              </li>
            </ul>
            <!--//right-->
            <div class="overlay-login text-left">
              <button type="button" class="overlay-close1">
                <i class="fa fa-times" aria-hidden="true"></i>
              </button>
              <div class="wrap">
                <h5 class="text-center mb-4">ĐĂNG NHẬP</h5>
                <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
                   
                  <!--/login-form-->
                  <form action="login.php" method="post">
                   <!-- <div class="form-group">
                      <p class="login-texthny mb-2">Tên đăng nhập </p>
                      <input type="username" class="form-text" id="exampleInputEmail1" aria-describedby="username"
                        placeholder="" required="">
                      <small id="username" class="form-text text-muted">Chúng tôi sẽ không chia sẻ tài khoản này với bất kì ai.</small>
                    </div>
                    <div class="form-group">
                      <p class="login-texthny mb-2">Mật khẩu</p>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                    </div>
                    <div class="form-check mb-2">
                      <div class="userhny-check">
                          <label class="check-remember container">
                          <input type="checkbox" class="form-check"> <span class="checkmark"></span>
                          <p class="privacy-policy">Hãy nhớ mật khẩu</p>
                        </label>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <button type="submit"  class="submit-login btn mb-4">Đăng nhập</button>-->
                    
                   
                    <?php 
                        if(isset($_SESSION['username'])){

                    ?>
                      <button  type="submit"   class="submit-login btn mb-4" ><a href='logout.php' title='đăng xuát' >Đăng xuất</a></button> 
                   <?php
                      }else{
                     ?>
                         <button  type="submit"   class="submit-login btn mb-4" ><a href='login.php' title='Dangnhap' >Đăng nhập</a></button>
                    
                    <button  type="submit"   class="submit-login btn mb-4" ><a href='dangky.php' title='DangKy' >Đăng ký</a></button>
                        <?php
                      }
                   ?>
                  </form>
                  <!--//login-form-->
                </div>
                <!---->
              </div>
            </div>
          </div>
        </div>
        <!--/nav-->
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid serarc-fluid">
            <a class="navbar-brand" href="index.php">
              HaNoi<span class="lohny">S</span>tore</a>
            <div class="search-right">

              <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                <span class="search-text">Tìm kiếm</span></a>
              <!-- search popup -->


              <div id="search" class="pop-overlay">
                <div class="popup">

                  <form action="searchsp.php" method="get" class="search-box">
                    <input type="search" placeholder="Tìm kiếm sản phẩm..." name="search" required="required" autofocus="">
                    <button type="submit" name="ok" value="search" class="btn">Tìm kiếm</button>
                  </form>

                </div>

                <a class="close" href="#">×</a>
              </div>
              <!-- /search popup -->
            </div>
            <!--//search-right-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            	<span class="navbar-toggler-icon fa fa-bars"> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Trang Chủ</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.php">Giới Thiệu</a>
                </li>
               
                <li class="nav-item ">
                  <a class="nav-link" href="sanpham.php">Sản Phẩm</a>
                </li>
               

                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Liên Hệ</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
        <!--//nav-->
      </header>
      <div class="breadcrumb-contentnhy">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">Giới Thiệu Về Chúng Tối</h2>
            <ol class="breadcrumb mb-0">
              <li><a href="index.php">Trang Chủ</a>
                <span class="fa fa-angle-double-right"></span></li>
              <li class="active">Giới Thiệu</li>
            </ol>
          </nav>
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

<script src="./js/jquery-3.3.1.min.js"></script>
<!-- tắt cuộn nội dung mà thanh điều hướng đang hoạt động -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- tắt cuộn nội dung mà thanh điều hướng đang hoạt động -->
<script src="./js/jquery-2.1.4.min.js"></script>
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
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="./js/bootstrap.min.js"></script>
