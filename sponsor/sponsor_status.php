<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_sponsor = "SELECT * FROM sponsors WHERE id=$id";
$select_sponsor_result =  mysqli_query($db_connect, $select_sponsor);
$after_assoc = mysqli_fetch_assoc ($select_sponsor_result);


if($after_assoc['sponsor_status'] == 1){

   $update_sponsor = "UPDATE sponsors SET sponsor_status=0 WHERE id=$id";
   $update_sponsor_result =  mysqli_query($db_connect, $update_sponsor);
   header('location:sponsors.php');

}

else{

   $count_sponsor_status = "SELECT COUNT(*) as total_active FROM sponsors WHERE sponsor_status=1";
   $count_sponsor_status_result =  mysqli_query($db_connect, $count_sponsor_status);
   $after_count_assoc = mysqli_fetch_assoc($count_sponsor_status_result);
   if($after_count_assoc['total_active'] == 1){
   $_SESSION['limit'] ='You Can  Activate  1 sponsor'; 
   header('location:sponsors.php');

    }

     else{

        $update_sponsor_status = "UPDATE sponsors SET sponsor_status=1 WHERE id=$id";
        $update_sponsor_status_result =  mysqli_query($db_connect, $update_sponsor_status);
        header('location:sponsors.php');



     }

}

?>