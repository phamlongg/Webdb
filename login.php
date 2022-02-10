<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="login.css"/> 
</head> 
	<body>
		<div class = "login">
			<h1>HANOI STORE</h1> 
			<form action='login.php' class="dangnhap" method='POST'> 
				<h2>Tên đăng nhập :</h2>  <input type='text' name='username' placeholder="username" /> 
				<h2> Mật khẩu :</h2> <input type='password' name='password' placeholder="password"/> 
				<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
				<a href='dangky.php' title='Đăng ký'>Đăng ký</a> 

			<form> 
		</div>
		
	</body> 
</html>
<?php
	session_start();

	if(isset($_POST['dangnhap'])){
/*
		$severname = "localhost";
		$username = "root";
		$password = "";

		$con = new mysqli($severname,$username,$password);*/
		include('connect.php');
		$db = mysqli_select_db($con,'table_login');

		$a = $_POST['username'];
		$b = $_POST['password'];

		$sql = "select * from table_login where username = '$a' and password = '$b'";

		$rs = $con->query($sql);

		if($rs->num_rows != 0 )

			$_SESSION['username'] = $a;
		else{
			echo '<script type="text/javascript">  alert("Tài Khoản Không tồn tại"); </script>';

		}

		if($_SESSION['username']!= 'admin' ){
			if(isset($_SESSION['username'])){
				
				header('location:index.php');
				
			}
		}else{
			header('location:itemmanager.php');
		}
	}
?>