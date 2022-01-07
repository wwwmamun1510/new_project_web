<?php
session_start();
require '../session_check.php';
require '../dashboard_includes/header.php';

?>
<?php
require '../db.php';

$select_experience = "SELECT * FROM experiences";
$select_experience_result = mysqli_query($db_connect, $select_experience);

?>
<?php if($_SESSION['role'] != 0){?>
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
  </nav>

  <div class="sl-pagebody">
     <div class="card mt-5">
      <div class="card-header bg-primary text-center">
        <h3 class="text-white">The Shadow Team(Joint Intelligence Community)<a href="../logout.php" class="btn btn-warning  float-right">Logout</a></h3>
      </div>
     <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Company Name</th>
              <th scope="col">Duration</th>
              <th scope="col">Designation</th>
              <th scope="col">Details</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($select_experience_result as $key=>$experience){?>
            <tr>
              <th scope="row"><?= $key+1?></th>
              <td><?=$experience['company_name']?></td>
              <td><?=$experience['duration']?></td>
              <td><?=$experience['designation']?></td>
              <td><?=$experience['details']?></td>
              <td>
                 <a href="experience_edit.php?id=<?= $experience['id']?>" class="btn btn-secondary">Edit</a>
                 <a href="experience_delete.php?id=<?= $experience['id']?>" class="btn btn-danger">Delete</a>
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

<?php if(isset($_SESSION['delete_experience'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your experience Deleted',
  text: '<?= $_SESSION['delete_experience']?>',
 
})
</script>
<?php } unset($_SESSION['delete_experience']) ?>
