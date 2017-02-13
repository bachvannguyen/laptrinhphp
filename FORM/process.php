<?php
$email= $_POST['u'];
$passwod= $_POST['p'];

$result= ($email=="admin" && $passwod=="123456") ? "Đăng nhập thành công" : "Đăng nhập thất bại";
echo $result;
?>