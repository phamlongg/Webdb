
<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HANOISTORE</title>
    <link rel="stylesheet" href="./css/sanpham.css" type="text/css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css" >
 <style>
 
   /* CSS SP */
   .items{
    margin-left:160px;width:1180px; background-color: #00000021;height:1280px;margin-top:0px;padding-left:45px;
   }
  
   .item{
    display: inline-flex; margin:30px 20px 60px 20px;height: 330px;width: 230px;
    
  }

   .item-name{
    margin-left:-230px;margin-top:280px;  height: 40px;width: 230px;background-color:black;    text-align: center;
    color:white;
     padding-top:5px;
     
  }
   .item-price{
    margin-left:-230px;margin-top:320px;height: 40px;width: 230px;background-color:orangered; text-align: center;
   color:white;
   padding-top:5px;
  }
   .details{
    margin-left:-230px;margin-top:360px;height: 35px;width: 230px;background-color:#00000078; text-align: center;padding-top:5px;
    color:white;
    font-weight:bold;
   }
   .item h2{
    color:white;
   }




.details {
    font-size:10px;
}

.item img:hover {
  transform: scale(1.15);
  border-radius: 15px;
  transition: 1s;
}
.item .item-name:hover h2{
  color:orangered;
}

.item .details:hover h2{
  color:orangered;
}
.pagination a{
  color:white;
  font-family:tahoma;
}

.pagination a:hover{
  color:yellow;
  font-family:tahoma;
  
}




/* end hover SP*/




 </style>


</head>


<body>
<?php
        include('header.php');
              ?>
<!-- phần live chat messenger -->
<style>.fb-livechat, .fb-widget{display: none}.ctrlq.fb-button, .ctrlq.fb-close{position: fixed;top:500px;right:24px; cursor: pointer}.ctrlq.fb-button{z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom: 30px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; right: 54px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%;}.bubble-msg{width: 120px; left: -140px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style><div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page" data-href="https://www.facebook.com/tamlong.nguyen.39" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div><div class="fb-credit"> <a href="https://www.facebook.com/" target="_blank" >Powered by TT</a> </div><div id="fb-root"></div></div><a href="https://m.me/tamlong.nguyen.39" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> <div class="bubble">1</div><div class="bubble-msg">Bạn cần hỗ trợ?</div></a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script>jQuery(document).ready(function($){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script>
<!-- END -->












<!-- phần đầu trang -->
   

       
  <!-- END -->
<div class="body">


     



<!-- Phần sản phẩm -->
<!-- phan thuat toan phan trang -->
<?php
   
    $ppage=12;
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
<!-- het phan thuat toan -->
<!-- phan hien thi phan trang-->
  <div class="container" style="margin-top:100px;margin-left:10px;">
   <!-- phan hien thi san pham -->
   <div class="items">
   <?php
	$sql = "SELECT * FROM sanpham  $paping";
	$result = mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    ?>    
 
	<div class="item" >
    <a href="#"><img style="  height: 280px;width: 230px;" src= <?php echo"'images/".$row['AnhSP']."'"?> alt="anh" > </a>
        <div class="item-name" >
          <a href="#" style="text-decoration: none;"><h2 style="font-size:20px;font-weight:bold;"><?php echo $row['TenSP']?> </h2></a>
        
        </div>
        <div class="item-price" >
          <a href="#" ><h2 style="font-size:20px;font-weight:bold;"><?php echo number_format($row['Gia']*1000,0,",",".")?> VND</h2></a>
        
        </div>
        <div class="details" >
        <a href="detail.php?id=<?php echo $row['ID_SP']?>"  style="text-decoration: none;">
          <h2 style="font-size:20px;font-weight:bold;"><?php echo "MUA NGAY"?></h2>  
          </a>

        </div>
		
            
  </div>
		
    
		
    <?php	
    
    }
    ?>	
   
   </div>
   </div>
   <!-- het phan hien thi -->
	<!-- phan pagination -->
  <div class="pagination" style="  display:flex;justify-content: center;margin:50px 0px 50px 250px;font-size:30px;background-color:#000000cc; width:1055px;border-radius:8px;">
    <?php
        for($i=1;$i<=$maxpage;$i++){
          
            if($i==$page){
                echo "<a style = 'color:orangered;font-size: 20;text-decoration: none;'><i class='fa fa-circle 'style='font-size:8px;' aria-hidden='true'></i> $i <i class='fa fa-circle 'style='font-size:8px;' aria-hidden='true'></i></a> " ;
            }else{
                if($i==$maxpage){				
                    echo "<a href = 'sanpham.php?p=$i' style = 'text-decoration: none;' > Trang cuối <i class='fa fa-arrow-circle-right' aria-hidden='true'></i></a><br>" ;
                }else if($i==1){
                    echo "<a href = 'sanpham.php?p=$i ' style = 'text-decoration: none;'><i class='fa fa-arrow-circle-left' aria-hidden='true'></i> Trang đầu </a> " ;
                
                }else{
                    if(($i>=$page-5) AND ($i<=$page+5))
                    echo "<a href = 'sanpham.php?p=$i' style = 'text-decoration: none; margin:0px 5px 0px 5px'> $i</a> " ;
                }
            }
        }
    
    ?>
    </div>
    <!-- het phan pagination -->

<!-- het phan hien thi phan trang -->



 <!-- Hết phần body -->
 <!-- Phần footer -->
 <div class="blank" >
 <marquee width="70%" style="margin-left: 250px;  color: beige;font-family: tahoma;font-size: 25px;">GIẢM GIÁ 30% CHO TẤT CẢ CÁC SẢN PHẨM</marquee>

 </div >
<!--  -->

<div class="contact" >
<div class="call-mobile2">
<a data-animate="fadeInDown" href="https://chat.zalo.me/" target="_blank" class="button success1" style="border-radius:99px;text-decoration: none;" data-animated="true">
<span>Chat Zalo </span></a>
</div>

<div class="call-mobile1">
<a data-animate="fadeInDown" href="https://www.facebook.com/tamlong.nguyen.39" target="_blank" class="button success2" style="border-radius:99px;text-decoration: none;" data-animated="true">
<span>Chat Facebook</span></a>
</div>

<div class="call-mobile"style="text-align:center;">
<a id="callnowbutton" href="tel:0366710050" >Gọi 0366 710 050</a>
</div>

</div>
 

<style>
  /* css contact */
.success1.is-underline:hover, .success1.is-outline:hover, .success1 {
background-color: #1E73BE;
padding: 0 5px;
color: white !important;
}
.success2.is-underline:hover, .success2.is-outline:hover, .success2 {
background-color: #ff4800;
padding: 0 5px;
color: white !important;
}
.call-mobile {
background: #00a63f;
position: fixed;
bottom: 10px;
height: 40px;
line-height: 40px;
padding: 7px 0px 0 0px;
border-radius: 40px;
color: #fff;
left: 1345px;
z-index: 99999;

}
.call-mobile1 {
position: fixed;
bottom: 55px;
height: 40px;
line-height: 40px;
padding: 0 0px 0 0px;
border-radius: 40px;
color: #fff;
left: 1370px;
z-index: 99999;
}
.call-mobile2 {
position: fixed;
bottom: 100px;
height: 40px;
line-height: 40px;
padding: 0 0px 0 0px;
border-radius: 40px;
color: #fff;
left: 1400px;
z-index: 99999;


}
.call-mobile i {
font-size: 20px;
line-height: 40px;
background: #B52026;
border-radius: 100%;
width: 40px;
height: 40px;
text-align: center; 
float: right;
}
.call-mobile a {
color: #fff;
font-size: 15px;
font-weight: bold; 
text-decoration: none;
margin-right: 10px; 
padding-left: 10px;}
.button span {
text-transform: initial;
font-weight: 400;
font-family: poppins;
}
a#callnowbutton {
font-family: poppins;
font-weight: 400;
}


/* hover cho contact*/
.call-mobile:hover{
  transform: scale(1.5);
  transition:1.5s;
}
.call-mobile2:hover{
  transform: scale(1.5);
  transition:1.5s;
}
.call-mobile1:hover{
  transform: scale(1.5);
  transition:1.5s;
}
/* End hover */
</style>
<?php 
  include('footer.php');
?>
</body>




</html>