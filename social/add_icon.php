<?php 
session_start();
require '../dashboard_includes/header.php'; 
require '../db.php';

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
              <h5>Add Icon</h5>
              </div>
              <div class="card-body">
            <form action="icon_post.php" method= "POST">
           <div class="form-group">
            <label form="">Icon Name</label>
               <input type="text" name="icon_name" class="form-control">
           </div>
           <div class="form-group">
              <label form="">Icon Class</label>
               <input type="text" name="icon_class" class="form-control">
           </div>
           <div class="form-group">
              <label form="">Icon Link</label>
               <input type="text" name="icon_link" class="form-control">
           </div>
          <div class="form-group">
           <button type="submit" class="btn btn-primary d-block">Add Icon</button>
           </div>
        </form>
     </div>
   </div>
</div>
<?php 
   require '../dashboard_includes/footer.php'; 
?>
<?php if(isset($_SESSION['icon_added'])) {?>

<script>

Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?= $_SESSION['icon_added']?>',
 
})
</script>
<?php } unset($_SESSION['icon_added']) ?>


