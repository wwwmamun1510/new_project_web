<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_experience = "SELECT * FROM experiences WHERE id=$id";
$select_experience_result =  mysqli_query($db_connect, $select_experience);
$after_assoc = mysqli_fetch_assoc ($select_experience_result);


if($after_assoc['experience_status'] == 1){

   $update_experience_status = "UPDATE experiences SET experience_status=0 WHERE id=$id";
   $update_experience_status_result =  mysqli_query($db_connect, $update_experience_status);
   header('location:experience.php');

}
else{

    $count_experience_status = "SELECT COUNT(*) as total_active FROM experiences WHERE experience_status=1";
    $count_experience_status_result =  mysqli_query($db_connect, $count_experience_status);
    $after_count_assoc = mysqli_fetch_assoc($count_experience_status_result);
    if($after_count_assoc['total_active'] == 2){
    $_SESSION['limit'] ='You Can Not  Activate More Than 2 Skills'; 
    header('location:experience.php');

     }
     else{

        $update_experience_status = "UPDATE experiences SET experience_status=1 WHERE id=$id";
        $update_experience_status_result =  mysqli_query($db_connect, $update_experience_status);
        header('location:experience.php');



     }

}

?>