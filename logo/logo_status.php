<?php 
require '../db.php';

$id = $_GET['id'];

$select_logo = "SELECT * FROM logo WHERE id=$id";
$select_logo_result =  mysqli_query($db_connect, $select_logo);
$after_assoc = mysqli_fetch_assoc ($select_logo_result);


if($after_assoc['logo_status'] == 1){

   $update_status = "UPDATE logo SET logo_status=0 WHERE id=$id";
   $update_status_result =  mysqli_query($db_connect, $update_status);
   header('location:logo.php');

}
else{

    $update_status1 = "UPDATE logo SET logo_status=0 ";
    $update_status_result1 =  mysqli_query($db_connect, $update_status1);

    $update_status = "UPDATE logo SET logo_status=1 WHERE id=$id";
    $update_status_result =  mysqli_query($db_connect, $update_status);
    header('location:logo.php');
 

}







?>