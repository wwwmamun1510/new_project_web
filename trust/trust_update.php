<?php 
session_start();
require '../db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$year = $_POST['year'];



    $update_trust = "UPDATE trusts SET title='$title', description='$description',year='$year' WHERE id=$id";
    $update_trust_result = mysqli_query($db_connect, $update_trust);

    $_SESSION['update_trust'] = 'trust Updated!';
    header('location:trust_edit.php?id='.$id);






?>