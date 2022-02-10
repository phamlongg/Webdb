<?php
    session_start();
  /*  session_start();
    if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
}*/
    echo "hello";
    echo " <pre>";
    print_r($_SESSION['username']);
    
?>