<?php 
session_start();
require '../db.php';


$id = $_POST['id'];
$title = $_POST['title'];
$category = $_POST['category'];
$client = $_POST['client'];
$completion = $_POST['completion'];
$type = $_POST['type'];
$author = $_POST['author'];
$budget = $_POST['budget'];
$image= $_FILES['image'];


    $update_projects = "UPDATE projects SET title='$title', category='$category' , client='$client' , completion ='$completion' , type='$type', author='$author', budget='$budget',image='$image' WHERE id=$id";
    $update_projects_result = mysqli_query($db_connect, $update_projects);

    $_SESSION['update_project'] = 'project Updated!';
    header('location:project_edit.php?id='.$id);






?>