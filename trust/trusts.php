<?php
session_start();
require '../session_check.php';
require '../dashboard_includes/header.php';

?>
<?php
require '../db.php';

$select_trust= "SELECT * FROM trusts";
$select_trust_result = mysqli_query($db_connect, $select_trust);

// print_r($select_banners_result);
// die();
?>
<?php if($_SESSION['role'] != 0){?>
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
  </nav>

  <div class="sl-pagebody">
    <div class="row">
      <div class="col-lg-12 m-auto">
         <div class="card">
          <div class="card-header bg-primary text-center">
            <h3 class="text-white">Trust Policey Information<a href="../logout.php" class="btn btn-warning  float-right">Logout</a></h3>
      </div>
     <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Year</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($select_trust_result as $key=>$trust) { ?>
            <tr>
              <th scope="row"><?= $key+1?></th>
              <td><?=$trust['title']?></td>
              <td><?=$trust['description']?></td>
              <td><?=$trust['year']?></td>
              <td>
              <?php if($trust['trust_status']==1){?>
                      <a href="trust_status.php?id=<?=$trust['id'];?>" class="btn btn-success">Active</a>
                <?php } else{?>
                  <a href="trust_status.php?id=<?=$trust['id'];?>" class="btn btn-secondary">Deactive</a>
                <?php } ?>
                 <a href="trust_edit.php?id=<?= $trust['id']?>" class="btn btn-secondary">Edit</a>
                 <a href='trust_delete.php?id=<?= $trust['id']?>' class="btn btn-danger">Delete</a>
             </td>
            </tr>
           <?php }?>
          </tbody>
        </table>
      </div>
     </div>
  </div>
  </div>
  </div>
<?php }?>
<?php require '../dashboard_includes/footer.php'; ?>
<script>
  $('.delete_btn').click(function(){
  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
 if (result.isConfirmed) {
   window.location.href=$(this).attr('id');
  }
  })
  });
 </script>

<?php if(isset($_SESSION['delete_trust'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your Trust Deleted',
  text: '<?= $_SESSION['delete_trust']?>',
 
})
</script>
<?php } unset($_SESSION['delete_trust']) ?>
