<?php 
session_start();
require '../db.php';

$id = $_POST['id'];


if( $_FILES['image'] ['name']!= ''){
    $uploaded_file = $_FILES['image'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extension = array( 'jpg','jpeg', 'png','gif');

     if(in_array($extension, $allowed_extension)){


          if($uploaded_file['size'] < 300000){
     
        
            $select_img = "SELECT * FROM sponsors WHERE id=$id";
            $select_img_result = mysqli_query($db_connect, $select_img);
            $after_assoc = mysqli_fetch_assoc ($select_img_result);
            
            
            $delete_from = '../uploads/sponsors/'.$after_assoc['image'];
            unlink($delete_from);
        
           
            
        
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/sponsors/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);
            $update_image = "UPDATE sponsors SET image='$file_name' WHERE id=$id";
            $update_image_result = mysqli_query($db_connect, $update_image);
        
            $_SESSION['update_sponsor'] = 'sponsor Updated!';
            header('location:sponsor_edit.php?id='.$id);
        
        
        
        }
        else{
        
            $_SESSION['extension'] = 'File Size Too Large';
            header('location:sponsor_edit.php?id='.$id);
          }
        
        }
        else{
        
            $_SESSION['file_size'] = 'Invalid Extension!';
            header('location:sponsor_edit.php?id='.$id);
        }
}



?>