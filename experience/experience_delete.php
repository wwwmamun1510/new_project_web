<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM experiences WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc ($select_img_result);

$delete_experience= "DELETE FROM  experiences WHERE id=$id";
$delete_experience_result = mysqli_query($db_connect, $delete_experience);

$_SESSION['delete_experience'] = "experience Deleted Successfully!";
header('location:experience.php');



?>