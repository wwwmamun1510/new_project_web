<?php 
session_start();
require '../dashboard_includes/header.php'; 
require '../session_check.php';
require '../db.php';

$id = $_GET['id'];

$select_experience= "SELECT * FROM experiences WHERE id=$id";
$select_experience_result =  mysqli_query($db_connect, $select_experience);
$after_assoc = mysqli_fetch_assoc ($select_experience_result);

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
                    <h3>Edit Experience Information</h3>
                </div>
                <div class="card-body">
                <form action="experience_update.php" method="POST"> 
                <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                <div class="form-group">
                <label for="" class="form-label-control">company_name</label>
                <input value="<?=$after_assoc['company_name']?>" type="text" name="company_name" class="form-control">
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">duration</label>
                <input value=<?=$after_assoc['duration']?> type="text" name="duration" class="form-control">
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">designation</label>
                <input value=<?=$after_assoc['designation']?> type="text" name="designation" class="form-control">
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">details</label>
                <input value=<?=$after_assoc['details']?> type="text" name="details" class="form-control">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Your Experience</button>
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
<?php if(isset($_SESSION['update_experience'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your experience Updated',
  text: '<?= $_SESSION['update_experience']?>',
 
})
</script>
<?php } unset($_SESSION['update_experience']) ?>