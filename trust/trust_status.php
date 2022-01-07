<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_trust = "SELECT * FROM trusts WHERE id=$id";
$select_trust_result =  mysqli_query($db_connect, $select_trust);
$after_assoc = mysqli_fetch_assoc ($select_trust_result);


if($after_assoc['trust_status'] == 1){

   $update_trust_status = "UPDATE trusts SET trust_status=0 WHERE id=$id";
   $update_trust_status_result =  mysqli_query($db_connect, $update_trust_status);
   header('location:trusts.php');

}
else{

    $count_trust_status = "SELECT COUNT(*) as total_active FROM trusts WHERE trust_status=1";
    $count_trust_status_result =  mysqli_query($db_connect, $count_trust_status);
    $after_count_assoc = mysqli_fetch_assoc($count_trust_status_result);
    if($after_count_assoc['total_active'] == 1){
    $_SESSION['limit'] ='You Can Activate 1 trust'; 
    header('location:trusts.php');

     }
     else{

        $update_trust_status = "UPDATE trusts SET trust_status=1 WHERE id=$id";
        $update_trust_status_result =  mysqli_query($db_connect, $update_trust_status);
        header('location:trusts.php');



     }

}

?>