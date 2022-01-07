<?php
session_start();
require '../db.php';




$image = $_FILES['image'];
$title= $_POST['title'];
$description= $_POST['description'];
$uploaded_file=$_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$exetension = end($after_explode); 
$allowed_extension = array( 'png','jpg', 'jpeg', 'gif');

if(in_array($exetension, $allowed_extension)){
    if($Uploaded_file['size'] <= 1000000){

        $insert_service = "INSERT INTO `services`( `title`,`description`) VALUES ('$title','$description')";
        $insert_service_result = mysqli_query($db_connect, $insert_service);
       
        $id = mysqli_insert_id($db_connect);
        $file_name = $id.'.'.$exetension;
        $new_location = '../uploads/services/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_image = "UPDATE services SET  image='$file_name' WHERE id=$id";
        $update_image_result = mysqli_query($db_connect, $update_image);

             
        $_SESSION['service_added'] = 'Service Added Successfully!';
        header('location:add_service.php');
       
 }
    else{


        $_SESSION['size'] = 'Maximum File Size 1 MB';
        header('location:add_service.php');
    
    }

}
else{
    $_SESSION['invalid_extension'] = 'Image Type Should be (jpg, png, gif, jpeg)';
    header('location:add_service.php');

}

?>