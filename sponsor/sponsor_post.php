<?php
session_start();
require '../db.php';



$image= $_FILES['image']['name'];


$uploaded_file = $_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$exetension = end($after_explode); 
$allowed_extension = array( 'png','jpg', 'jpeg', 'gif');
if(in_array($exetension, $allowed_extension)){
    if($Uploaded_file['size'] <= 1000000){

        $insert_sponsor = "INSERT INTO `sponsors`( `image`) VALUES ('$image')";
        $insert_sponsor_result = mysqli_query($db_connect, $insert_sponsor);
       
        $id = mysqli_insert_id($db_connect);
        $file_name = $id.'.'.$exetension;
        $new_location = '../uploads/sponsors/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_image = "UPDATE sponsors SET image='$file_name' WHERE id=$id";
        $update_image_result = mysqli_query($db_connect, $update_image);

             
        $_SESSION['success'] = 'sponsor Added Successfully!';
        header('location:add_sponsor.php');
       
 }
    else{


        $_SESSION['size'] = 'Maximum File Size 1 MB';
        header('location:add_sponsor.php');
    
    }

}
else{
    $_SESSION['invalid_extension'] = 'Image Type Should be (jpg, png, gif, jpeg)';
    header('location:add_sponsor.php');

}

?>