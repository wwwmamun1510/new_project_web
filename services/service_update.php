<?php 
session_start();
require '../db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];


if( $_FILES['image'] ['name']!= ''){
    $uploaded_file = $_FILES['image'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extension = array( 'jpg','jpeg', 'png','gif');

     if(in_array($extension, $allowed_extension)){


          if($uploaded_file['size'] < 300000){
        
         
        
            $select_img = "SELECT * FROM services WHERE id=$id";
            $select_img_result = mysqli_query($db_connect, $select_img);
            $after_assoc = mysqli_fetch_assoc ($select_img_result);
            
            
            $delete_from = '../uploads/services/'.$after_assoc['image'];
            unlink($delete_from);
        
            $update_service = "UPDATE services SET title='$title', description='$description' WHERE id=$id";
            $update_service_result = mysqli_query($db_connect, $update_service);
            
        
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/services/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);
            $update_image = "UPDATE services SET image ='$file_name' WHERE id=$id";
            $update_image_result = mysqli_query($db_connect, $update_user);
        
            $_SESSION['update_service'] = 'service Updated!';
            header('location:service_edit.php?id='.$id);
        
        
        
        }
        else{
        
            $_SESSION['extension'] = 'File Size Too Large';
            header('location:service_edit.php?id='.$id);
          }
        
        }
        else{
        
            $_SESSION['file_size'] = 'Invalid Extension!';
            header('location:service_edit.php?id='.$id);
        }
}
else{

    $update_service = "UPDATE services SET title='$title', description='$description' WHERE id=$id";
    $update_service_result = mysqli_query($db_connect, $update_service);

    $_SESSION['update_service'] = 'service Updated!';
    header('location:service_edit.php?id='.$id);




}


?>