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
              <h5>Add Services</h5>
              </div>
              <div class="card-body">
          <form action="service_post.php" method= "POST"  enctype="multipart/form-data" >
          <div class="form-group">
                <label form="">Service Image</label>
                <input type="file" name="image" class="form-control">
           </div>
           <div class="form-group">
            <label form="">Title</label>
            <input type="text" name="title" class="form-control">
           </div>
           <div class="form-group">
              <label form="">Description</label>
              <textarea  name="description" class="form-control"> </textarea>
           </div>
          <div class="form-group">
           <button type="submit" class="btn btn-primary d-block">Add Service Record</button>
           </div>
        </form>
     </div>
   </div>
</div>
<?php 
   require '../dashboard_includes/footer.php'; 
?>
<?php if(isset($_SESSION['service_added'])) {?>

<script>

Swal.fire({
  icon: 'success',
  title: 'Congratulations....Service Added',
  text: '<?= $_SESSION['service_added']?>',
 
})
</script>
<?php } unset($_SESSION['service_added']) ?>


