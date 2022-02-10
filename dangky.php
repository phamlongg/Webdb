<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class = "dangki">
       <form method="POST" class="form">
         <h1>HANOI STORE</h1> 

         <h2>Đăng ký tài khoản</h2>
                
                Username: <input type="text" name="username" value="" required><br/>

                
                Password: <input type="text" name="password" value="" required/><br/>
                
                Email:    <input type="email" name="email" value="" required/><br/>

                
                Phone:    <input type="text" name="phone" value="" required/><br/>


                Birthday: <input type="text" name="ngaysinh" value="" required/><br/>

                Address:  <input type="text" name="diachi" value="" required/><br/> 
  
                 <input type="submit" class="button" name="dangky" value="Đăng Ký"/>
                 <a href='login.php' title='Đăng Nhập'>Đăng NHập</a> 
            
          </form>   
  </div>

  
</body>
</html>
<?php

    if(isset($_POST['dangky'])){
      include("connect.php");

      $db = mysqli_select_db($con,'table_login');
      
      $a = $_POST['username'];
      $b = $_POST['password'];
      $c = $_POST['phone'];
      $d = $_POST['email'];
      $e = $_POST['ngaysinh'];
      $f = $_POST['diachi'];
      
      $sql = "select * from table_login where username = '$a'";
      $rs = $con->query($sql);
      if($rs->num_rows!=0){
        echo '<script type="text/javascript">  alert("Tai khoan da ton tai"); </script>';
      }else{
        $sql = "insert into table_login values('null','$a','$b','$c','$d','$e','$f')";
        
        if($con->query($sql)===true)
        echo '<script type="text/javascript">  alert("Bạn đã đăng ký thành công"); </script>';
        else
          echo "Loi : ".$con_error;
      }
    }

?>