<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_blog = "SELECT * FROM blogs WHERE id=$id";
$select_blog_result =  mysqli_query($db_connect, $select_blog);
$after_assoc = mysqli_fetch_assoc ($select_blog_result);


if($after_assoc['blog_status'] == 1){

   $update_blog_status = "UPDATE blogs SET blog_status=0 WHERE id=$id";
   $update_blog_skill_status_result =  mysqli_query($db_connect, $update_blog_status);
   header('location:blog.php');

}
else{

    $count_blog_status = "SELECT COUNT(*) as total_active FROM blogs WHERE blog_status=1";
    $count_blog_status_result =  mysqli_query($db_connect, $count_blog_status);
    $after_count_assoc = mysqli_fetch_assoc($count_blog_status_result);
    if($after_count_assoc['total_active'] == 1){
    $_SESSION['limit'] ='You Can   Activate 1 blog'; 
    header('location:blog.php');

     }
     else{

        $update_blog_status = "UPDATE blogs SET blog_status=1 WHERE id=$id";
        $update_blog_status_result =  mysqli_query($db_connect, $update_blog_status);
        header('location:blog.php');



     }

}

?>