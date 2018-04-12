<?php

include ("database.php");

$ten = $_POST['ten_dang_nhap'];
$mk = $_POST['mat_khau'];
$xacnhan_mk = $_POST['xac_nhan_mat_khau'];
$e = $_POST['email_'];
$phone = $_POST['so_dien_thoai'];

$query_insert = "Insert Into nguoi_dung(ma_loai, ten_dang_nhap, mat_khau, email, so_dien_thoai) Values(
      '2', '$ten', '$mk', '$e', '$phone')";

if(mysqli_query($dbConn, $query_insert)){
    echo "New record successfully inserted";
}else{
    echo "Cannot insert record";
}

mysqli_close($dbConn);


?>