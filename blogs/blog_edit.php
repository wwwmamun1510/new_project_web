<?php 
session_start();
require '../dashboard_includes/header.php'; 
require '../session_check.php';
require '../db.php';

$id = $_GET['id'];

$select_blog= "SELECT * FROM blogs WHERE id=$id";
$select_blog_result =  mysqli_query($db_connect, $select_blog);
$after_assoc = mysqli_fetch_assoc ($select_blog_result);

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
                    <h3>Edit Blog Information</h3>
                </div>
                
                <div class="card-body">
                <form action="blog_update.php" method="POST" enctype="multipart/form-data"> 
                <div class="form-group">
                <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                <div class="form-group">
                <label for="" class="form-label-control">Title</label>
                <input value="<?=$after_assoc['title']?>" type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">description</label>
                <textarea name="description" class="form-control"><?=$after_assoc['description']?></textarea>
                </div>
                <div class="form-group">
                <label for="" class="form-label-control">Image</label>
                <input value="<?=$after_assoc['image']?>" type="file" name="image" class="form-control">
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
<?php if(isset($_SESSION['update_blog'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your blog Updated',
  text: '<?= $_SESSION['update_blog']?>',
 
})
</script>
<?php } unset($_SESSION['update_blog']) ?>

