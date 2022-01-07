<?php 
session_start();
require '../dashboard_includes/header.php'; 
require '../session_check.php';
require '../db.php';

$id = $_GET['id'];

$select_trust= "SELECT * FROM trusts WHERE id=$id";
$select_trust_result =  mysqli_query($db_connect, $select_trust);
$after_assoc = mysqli_fetch_assoc ($select_trust_result);

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
                    <h3>Edit Trust Information</h3>
                </div>
                <div class="card-body">
                <form action="trust_update.php" method="POST"> 
                <div class="form-group">
                <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                <label for="" class="form-label-control">title</label>
                <input value="<?=$after_assoc['title']?>" type="text" name="title" class="form-control">
                </div>
               <div class="form-group">
                <label for="" class="form-label-control">description</label>
                <input value=<?=$after_assoc['description']?> type="text" name="description" class="form-control">
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">Year</label>
                <input value=<?=$after_assoc['year']?> type="text" name="year" class="form-control">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Your Trust</button>
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
<?php if(isset($_SESSION['update_trust'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your trust Updated',
  text: '<?= $_SESSION['update_trust']?>',
 
 })
</script>
<?php } unset($_SESSION['update_trust']) ?>