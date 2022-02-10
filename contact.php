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
<!--<button  type="submit"   class="submit-login btn mb-4" ><a href='logout.php' title='Đăng xuất' >Đăng xuất</a></button>
-->
  <?php
    include('header.php');
  ?>
 <!-- contacts -->
 <section class="contacts-8">
    <div class="contacts-9 section-gap py-5">
      <div class="container py-lg-5">
        <div class="row top-map">
          <div class="col-lg-6 partners">
            <div class="cont-details">
              <h3 class="hny-title mb-0">Liên <span>Hệ</span></h5>
              <p class="mb-5">Chúng tôi sẵn sàng dẫn dắt bạn trong tương lai với Dịch vụ Doanh nghiệp</p>
              <p class="margin-top"><span class="texthny">Gọi cho chúng tôi: </span> <a href="tel:(+84) 098 1717 260">(+84)
                  098 1717 260</a></p>
              <p> <span class="texthny">Email : </span> <a href="mailto:hanoistore@gmail.com">
                  hanoistore@gmail.com</a></p>
              <p class="margin-top"> Số 26, Trần Thái Tông, Dịch Vọng, Cầu Giấy, Hà Nội. </p>
            </div>
            <div class="hours">
              <h3 class="hny-title">Giờ <span>Làm Việc</span></h5>
              <h6>Dịch vụ kinh doanh:</h6>
              <p> Thứ Hai đến Thứ Sáu: 8 giờ sáng - 6 giờ chiều</p>
              <p> Thứ Bảy và Chủ Nhật: Đóng Cửa</p>
              <h6 class="margin-top">Hỗ trợ khách hàng:</h6>
              <p> Thứ Hai đến Thứ Sáu: 8 giờ sáng - 6 giờ chiều</p>
              <p> Thứ Bảy: 10 giờ sáng - 4 giờ chiều</p>
              <p> Chủ nhật: Đóng cửa</p>
            </div>
          </div>
          <div class="col-lg-6 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9302652476435!2d105.78692921475562!3d21.03547608599477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab49e93f280f%3A0x9deb60ce2fb036a8!2zMjYgVHLhuqduIFRow6FpIFTDtG5nLCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1603272026990!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="map-content-9 form-bg-img">
      <div class="layer section-gap py-5">
        <div class="container py-lg-5">
          <div class="form">
            <h3 class="hny-title two text-center">ĐÁNH GIÁ.</h3>
            <form action="index.php"class="mt-md-5 mt-4" method="post">
              <div class="input-grids">
                <input type="text" name="Name" id="Name" placeholder="Tên">
                <input type="email" name="Sender" id="Sender" placeholder="Email" required="" />
                <input type="subject" name="Subject" id="Subject" placeholder="Chủ Đề" required="">
              </div>
              <div class="input-textarea">
                <textarea name="Message" id="Message" placeholder="Thông Điệp" required=""></textarea>
              </div>
              <button type="submit" class="btn">Gửi</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //contacts -->

<?php
  include('footer.php');
  ?>


  </body>

</html>
