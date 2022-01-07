<?php 
session_start();
require '../dashboard_includes/header.php'; 
require '../session_check.php';
require '../db.php';

$id = $_GET['id'];

$select_skills= "SELECT * FROM skills WHERE id=$id";
$select_skills_result =  mysqli_query($db_connect, $select_skills);
$after_assoc = mysqli_fetch_assoc ($select_skills_result);

?>
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Dashboard</a>
         </nav>
          <div class="sl-pagebody">
          <div class="row">
            <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Skill Information</h3>
                </div>
                <?php if(isset($_SESSION['update_banner'])){?>
                  <div class="alert alert-success">
                     <?=$_SESSION['update_banner']?>
                  </div>
               <?php }unset($_SESSION['update_banner']) ?>
                <div class="card-body">
                <form action="skill_update.php" method="POST" enctype="multipart/form-data"> 
                <div class="form-group">
                <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                <label for="" class="form-label-control">skill_name</label>
                <input value="<?=$after_assoc['skill_name']?>" type="text" name="name" class="form-control">
                </div>
               
                <div class="form-group">
                <label for="" class="form-label-control">percentage</label>
                <input value=<?=$after_assoc['percentage']?> type="text" name="percentage" class="form-control">
                </div>

               <?php if(isset($_SESSION['file_size'])){?>
                  <div class="alert alert-warning">
                     <?=$_SESSION['file_size']?>
                  </div>
               <?php } unset($_SESSION['file_size']) ?>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
                </div>
             </div>
         </div>
      </div>
    </div>
  </div>
<?php
require '../dashboard_includes/footer.php';
?>
<?php if(isset($_SESSION['update_skill'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your Skill Updated',
  text: '<?= $_SESSION['update_skill']?>',
 
})
</script>
<?php } unset($_SESSION['update_skill']) ?>