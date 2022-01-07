<?php
session_start();
require '../session_check.php';
require '../dashboard_includes/header.php';
 ?>
<?php
require '../db.php';
$id = $_GET['id'];
$select_users = "SELECT * FROM users WHERE id = $id";
$select_users_result = mysqli_query($db_connect, $select_users);
$after_assoc = mysqli_fetch_assoc($select_users_result);

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
        </nav>
         <div class="sl-pagebody">
         <div class="row">
            <div class="col-lg-6 m-auto">
             <div class="card">
            <div class="card-header">
            <h3>Edit TEAM-Alpha(Shadow Commanders)</h3>
            </div>
        
               <div class="card-body">
                 <form action="update.php" method="POST" enctype="multipart/form-data">
                 <div class="mb-3">
                <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input value="<?=$after_assoc['name']?>" type="text" name="name" class="form-control">
                 <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                 <input value="<?=$after_assoc['email']?>" type="email" name="email"  class="form-control">
                 </div>
                 <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input  type="password" name="password"  class="form-control">
                 </div>
                 <div class="mb-3">
                    <img class="w-50" src ="../uploads/users/<?=$after_assoc['profile_photo']?>" alt="">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">profile photo</label>
                <input type="file" name="profile_photo"  class="form-control">
                 </div>

      <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Country</label>
      <select name="country" class="form-control">
      <option value="">-- Select Your Country --</option>
      <option value="Bangladesh" <?=($after_assoc['country'] == 'Bangladesh'? 'selected': '')?>>Bangladesh</option>
      <option value="Pakistan" <?=($after_assoc['country'] == 'Pakistan'? 'selected': '')?>>Pakistan</option>
      <option value="India" <?=($after_assoc['country'] == 'India'? 'selected': '')?>>India</option>
      <option value="USA"<?=($after_assoc['country'] == 'USA'? 'selected': '')?>>USA</option>
      </select>
      </div>

                <button type="submit" class="btn btn-primary d-block">Submit</button>
                 </form>
                 <a class="btn btn-success float-right" href="../users/users.php">Go Back</a> 
            </div>
            
        </div>
        
     </div>
  </div>
 <?php 

 require '../dashboard_includes/footer.php';
        
 ?>

