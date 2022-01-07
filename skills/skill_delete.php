<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM skills WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc ($select_img_result);

$delete_skills= "DELETE FROM  skills WHERE id=$id";
$delete_skills_result = mysqli_query($db_connect, $delete_skills);

$_SESSION['delete_skill'] = "skill Deleted Successfully!";
header('location:skills.php');



?>