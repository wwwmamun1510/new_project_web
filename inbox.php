<?php
session_start();
require 'db.php';
require 'dashboard_includes/header.php'; 

$select_message = "SELECT * FROM messages";
$select_message_result =  mysqli_query($db_connect, $select_message);

?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav>

      <div class="sl-pagebody">
      <div class="card">
            <div class="card-header">
            <h3>Messages</h3>
            <div class="card-body">
            <table class="table table-striped"> 
             <tr>
             <th>SL</th>
             <th>Name</th>
             <th>Email</th>
             <th>Message</th>
             <th>Action</th>
           </tr>
            <?php foreach($select_message_result as $key=>$message){?>
            <tr>
               <td><?=$key+1?></td>
               <td><?= $message['name']?></td>
               <td><?= $message['email']?></td>
               <td><?= $message['message']?></td>
               <td>
                   <a href="#" class="btn btn-danger">Delete</a>
               </td>
           </tr>
           <?php }?>
        </table>
            </div>
         </div>
      </div>
    </div>

    <?php
    require 'dashboard_includes/footer.php'; 
    ?>