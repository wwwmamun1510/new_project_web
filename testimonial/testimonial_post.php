<?php

session_start();
require '../db.php';

$description= $_POST['description'];
$name= $_POST['name'];
$designation= $_POST['designation'];




        $insert_testimonial= "INSERT INTO `testimonials`( `description`,`name`,`designation`) VALUES ('$description','$name','$designation')";
        $insert_testimonial_result = mysqli_query($db_connect, $insert_testimonial);
        $_SESSION['testimonial_added'] = 'testimonial Added!';
        header('location:add_testimonial.php');
       
 ?>