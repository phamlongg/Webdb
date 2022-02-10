<?php 
 /*  $severname = "localhost";
    $username = "root";
    $password = "";
    $con = new mysqli($severname,$username,$password);*/
    
    session_start();
    include("connect.php");
     $db = mysqli_select_db($con,'table_login');
     
     if (isset($_SESSION['username']))
     {
         unset($_SESSION['username']);
     }
      header('location:index.php');   
     echo '<script type="text/javascript">  alert("đăng xuất thành công"); </script>'; 


?>