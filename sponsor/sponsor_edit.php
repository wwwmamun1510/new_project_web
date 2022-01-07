<?php 
session_start();
require '../dashboard_includes/header.php'; 
require '../session_check.php';
require '../db.php';

$id = $_GET['id'];

$select_sponsor= "SELECT * FROM sponsors WHERE id=$id";
$select_sponsor_result =  mysqli_query($db_connect, $select_sponsor);
$after_assoc = mysqli_fetch_assoc ($select_sponsor_result);

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
                    <h3>Edit sponsor Information</h3>
                </div>
                <div class="card-body">
                <form action="sponsor_update.php" method="POST" enctype="multipart/form-data"> 
               <input name="id" class="d-none" value="<?=$after_assoc['id']?>" type="text">
                <div class="form-group">
                <label for="" class="form-label-control">Present Image</label>
                <br>
                <img width="300" src="../uploads/sponsors/<?=$after_assoc['image']?>" alt="">
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">Sponsor Image</label>
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
<?php if(isset($_SESSION['update_sponsor'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your sponsor Updated',
  text: '<?= $_SESSION['update_sponsor']?>',
 
})
</script>
<?php } unset($_SESSION['update_sponsor']) ?>


<?php if(isset($_SESSION['extension'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your sponsor Updated',
  text: '<?= $_SESSION['extension']?>',
 
})
</script>
<?php } unset($_SESSION['extension']) ?>


<?php if(isset($_SESSION['file_size'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your sponsor Updated',
  text: '<?= $_SESSION['file_size']?>',
 
})
</script>
<?php } unset($_SESSION['file_size']) ?>