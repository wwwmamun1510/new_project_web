<?php 
session_start();
require '../dashboard_includes/header.php'; 
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
              <h5>Add Menu</h5>
              </div>
              <div class="card-body">
              <form action="menu_post.php" method= "POST">

            <div class="form-group">
            <label form="">Menu Name</label>
               <input type="text" name="menu_name" class="form-control">
           </div>
           <div class="form-group">
              <label form="">Menu Link</label>
               <input type="text" name="menu_link" class="form-control">
           </div>
          <div class="form-group">
           <button type="submit" class="btn btn-primary d-block">Add Menu</button>
           </div>
        </form>
     </div>
   </div>
</div>
<?php 
   require '../dashboard_includes/footer.php'; 
?>
<?php if(isset($_SESSION['menu_added'])) {?>

<script>

Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?= $_SESSION['menu_added']?>',
 
})
</script>
<?php } unset($_SESSION['menu_added']) ?>


