<?php 
session_start();
require '../dashboard_includes/header.php'; 
require '../session_check.php';
require '../db.php';

$id = $_GET['id'];

$select_service= "SELECT * FROM services WHERE id=$id";
$select_service_result =  mysqli_query($db_connect, $select_service);
$after_assoc = mysqli_fetch_assoc ($select_service_result);

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
                    <h3>Edit Service Information</h3>
                </div>
                <div class="card-body">
                <form action="service_update.php" method="POST" enctype="multipart/form-data"> 
                <div class="form-group">
                <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">Description</label>
                <textarea name="description" class="form-control"><?=$after_assoc['description']?></textarea>
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">title</label>
                <input value=<?=$after_assoc['title']?> type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">Present Image</label>
                <br>
                <img width="300" src="../uploads/services/<?=$after_assoc['image']?>" alt="">
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">Service Image</label>
                <input type="file" name="image" class="form-control">
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

<?php if(isset($_SESSION['extension'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your service Updated',
  text: '<?= $_SESSION['extension']?>',
 
})
</script>
<?php } unset($_SESSION['extension']) ?>



<?php if(isset($_SESSION['file_size'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your service Deleted',
  text: '<?= $_SESSION['file_size']?>',
 
})
</script>
<?php } unset($_SESSION['file_size']) ?>
