<?php 
session_start();
require '../db.php';

$company_name = $_POST['company_name'];
$duration = $_POST['duration'];
$designation = $_POST['designation'];
$details = $_POST['details'];



    $update_experience = "UPDATE experiences SET company_name='$company_name', duration='$duration', designation ='$designation', ddetails='$details' WHERE id=$id";
    $update_experience_result = mysqli_query($db_connect, $update_experience);

    $_SESSION['update_experience'] = 'experience Updated!';
    header('location:experience_edit.php?id='.$id);






?>