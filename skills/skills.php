<?php
session_start();
require '../session_check.php';
require '../dashboard_includes/header.php';

?>
<?php
require '../db.php';

$select_skills = "SELECT * FROM skills";
$select_skills_result = mysqli_query($db_connect, $select_skills);

// print_r($select_banners_result);
// die();
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
              <th scope="col">Skill Name</th>
              <th scope="col">Percentage</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($select_skills_result as $key=>$skill){?>
            <tr>
              <th scope="row"><?= $key+1?></th>

              <td><?=$skill['skill_name']?></td>
              <td><?=$skill['percentage']?></td>
             <td>

             <?php if($skill['skill_status'] == 1){?>
                     
              <a href="skill_status.php?id=<?= $skill['id']?>" class="btn btn-success">Active</a>
            <?php } else{?>
              <a href="skill_status.php?id=<?= $skill['id']?>" class="btn btn-secondary">Deactive</a>
            <?php } ?>
             </td>
              <td>
                 <a href="skill_edit.php?id=<?= $skill['id']?>" class="btn btn-secondary">Edit</a>
                 <a href='skill_delete.php?id=<?= $skill['id']?>' class="btn btn-danger">Delete</a>
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

<?php if(isset($_SESSION['delete_skill'])) {?>

<script>

Swal.fire({
  icon: 'Success',
  title: 'Your Skill Deleted',
  text: '<?= $_SESSION['delete_skill']?>',
 
})
</script>
<?php } unset($_SESSION['delete_skill']) ?>
