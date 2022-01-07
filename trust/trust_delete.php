<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM trusts WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc ($select_img_result);

$delete_trust= "DELETE FROM  trusts WHERE id=$id";
$delete_trust_result = mysqli_query($db_connect, $delete_trust);

$_SESSION['delete_trust'] = "trust Deleted Successfully!";
header('location:trusts.php');



?>