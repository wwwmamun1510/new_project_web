<?php

session_start();
require '../db.php';

$title= $_POST['title'];
$description= $_POST['description'];
$year= $_POST['year'];

 $insert_trust= "INSERT INTO `trusts`( `title`,`description`,`year`) VALUES ('$title','$description','$year')";
 $insert_trust_result = mysqli_query($db_connect,$insert_trust);
 $_SESSION['trust_added'] = 'trust Added!';
 header('location:add_trust.php');
       
 ?>    