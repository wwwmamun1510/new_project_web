<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM blogs WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc ($select_img_result);

$delete_blog= "DELETE FROM  blogs WHERE id=$id";
$delete_blog_result = mysqli_query($db_connect, $delete_blog);

$_SESSION['delete_blog'] = "blog Deleted Successfully!";
header('location:blog.php');



?>