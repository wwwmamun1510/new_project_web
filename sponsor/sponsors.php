<?php
session_start();
require '../session_check.php';
require '../dashboard_includes/header.php';

?>
<?php
require '../db.php';

$select_sponsor = "SELECT * FROM sponsors";
$select_sponsor_result = mysqli_query($db_connect, $select_sponsor);

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
            <h3 class="text-white">Sponsor Information<a href="../logout.php" class="btn btn-warning  float-right">Logout</a></h3>
      </div>
     <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Sponsor_Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($select_sponsor_result as $key=>$sponsor) { ?>
              <tr>
              <td><?=$key+1?></td>
              <td>
                  <img width="100" src="../uploads/sponsors/<?= $sponsor['image']?>" alt="">
                </td>
                <td>
                 <a href="sponsor_edit.php?id=<?= $sponsor['id']?>" class="btn btn-secondary">Edit</a>
                 <a href='sponsor_delete.php?id=<?= $sponsor['id']?>' class="btn btn-danger">Delete</a>
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

<?php if(isset($_SESSION['sponsor_delete'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your sponsor Deleted',
  text: '<?= $_SESSION['sponsor_delete']?>',
 
})
</script>
<?php } unset($_SESSION['sponsor_delete']) ?>
