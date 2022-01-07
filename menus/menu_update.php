<?php 
session_start();
require '../db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$percentage = $_POST['percentage'];



    $update_skills = "UPDATE skills SET skill_name='$name', percentage='$percentage' WHERE id=$id";
    $update_skills_result = mysqli_query($db_connect, $update_skills);

    $_SESSION['update_skill'] = 'skill Updated!';
    header('location:skill_edit.php?id='.$id);






?>