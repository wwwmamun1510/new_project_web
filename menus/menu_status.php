<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_skills = "SELECT * FROM skills WHERE id=$id";
$select_skills_result =  mysqli_query($db_connect, $select_skills);
$after_assoc = mysqli_fetch_assoc ($select_skills_result);


if($after_assoc['skill_status'] == 1){

   $update_skill_status = "UPDATE skills SET skill_status=0 WHERE id=$id";
   $update_skill_status_result =  mysqli_query($db_connect, $update_skill_status);
   header('location:skills.php');

}
else{

    $count_skill_status = "SELECT COUNT(*) as total_active FROM skills WHERE skill_status=1";
    $count_skill_status_result =  mysqli_query($db_connect, $count_skill_status);
    $after_count_assoc = mysqli_fetch_assoc($count_skill_status_result);
    if($after_count_assoc['total_active'] == 4){
    $_SESSION['limit'] ='You Can Not  Activate More Than 4 Skills'; 
    header('location:skills.php');

     }
     else{

        $update_skill_status = "UPDATE skills SET skill_status=1 WHERE id=$id";
        $update_skill_status_result =  mysqli_query($db_connect, $update_skill_status);
        header('location:skills.php');



     }

}

?>