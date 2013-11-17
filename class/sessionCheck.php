<?php 
    if (empty($noSession)){
        session_start();
        if (!isset($_SESSION['Student'])){
            echo "<script> alert('您的登录已过期，请重新登录') </script>";
            exit();
        }else{
            //session_cache_expire(1);
        }
    }
?>