<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM sponsors WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc ($select_img_result);

$delete_sponsor= "DELETE FROM  sponsors WHERE id=$id";
$delete_sponsor_result = mysqli_query($db_connect, $delete_sponsor);

$_SESSION['delete_sponsor'] = "sponsor Deleted Successfully!";
header('location:sponsors.php');



?>