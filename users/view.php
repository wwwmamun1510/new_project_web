<?php
require '../session_check.php'; 
require '../dashboard_includes/header.php';
require '../db.php';
$id = $_GET['id'];
$select_users = "SELECT * FROM users WHERE id = $id";
$select_users_result = mysqli_query($db_connect, $select_users);
$after_assoc = mysqli_fetch_assoc($select_users_result);

// print_r($after_assoc);
?>

<div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
<a class="breadcrumb-item" href="index.html">Dashboard</a>
</nav>
<div class="sl-pagebody">

 <div class="row">
            <div class="col-lg-8 m-auto">
               <div class="card">
                  <div class="card-header bg-primary text-center">
                     <h3 class="text-white">TEAM-Alpha</h3>
                  </div>
                  <div class="card-body">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td>Name:</td>
                              <td><?php echo $after_assoc['name']; ?></td>
                           </tr>
                           <tr>
                              <td>Email:</td>
                              <td><?php echo $after_assoc['email']; ?></td>
                           </tr>
                           <tr>
                              <td>profile_photo:</td>
                              <td>  <img width="150" src="../uploads/users/<?= $after_assoc['profile_photo']?>" alt=""></td>
                           </tr>
                           <tr>
                              <td>created at:</td>
                              <td><?php echo $after_assoc['created_at']; ?></td>
                           </tr>
             </tbody>
         </table>
         <a class="btn btn-primary" href="../users/users.php">Go Back</a> 
      </div>
   </div>
           
 </div>
</div>

</div>

</div>
<?php
 require '../dashboard_includes/footer.php'; 

?>
     