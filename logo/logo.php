<?php
session_start();
require '../session_check.php';
require '../dashboard_includes/header.php';

?>
<?php
require '../db.php';

$select_logos = "SELECT * FROM logo WHERE status=0 ";
$select_logos_result = mysqli_query($db_connect, $select_logos);

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
              <th scope="col">Image</th>
              <th scope="col">status</th>
              <th scope="col">Action</th>
              
              
            </tr>
          </thead>
          <tbody>

            <?php foreach($select_logos_result as $key=>$logo){?>
              <tr>
           <td><?=$key+1?></td>
              <td>
                  <img width="100" src="../uploads/logos/<?= $logo['logo']?>" alt="">
                </td>

                <?php if($logo['logo_status']==1){?>
                  <td>
                       <a href="logo_status.php?id=<?=$logo['id'];?>" class="btn btn-success">Active</a>
                       </td>
                <?php } else{?>
                  <td>
                  <a href="logo_status.php?id=<?=$logo['id'];?>" class="btn btn-secondary">Deactive</a>
                  </td>
                <?php } ?>
              
                <td>
                <?php if($_SESSION['role'] != 3 ){?>
                     <a href="logo_edit.php?id=<?= $logo['id']?>" class="btn btn-secondary">Edit</a>
                <?php }?>
                <?php if($_SESSION['role'] == 1 ){?>
                      <a href='logo_delete.php?id=<?= $logo['id']?>' class="btn btn-danger ">Delete</a>
                <?php }?>
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




 <?php if(isset($_SESSION['delete_logo'])){?> 
 <script>
  Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
</script>
 <?php } unset($_SESSION['delete_logo']) ?> 

  