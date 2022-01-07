<?php
session_start();
require '../session_check.php';
require '../dashboard_includes/header.php';

?>
<?php
require '../db.php';

$select_submenus= "SELECT * FROM submenus";
$select_submenus_result = mysqli_query($db_connect, $select_submenus);

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
            <h3 class="text-white">Menu Information<a href="../logout.php" class="btn btn-warning  float-right">Logout</a></h3>
      </div>
     <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Menu_Name</th>
              <th scope="col">submenu_Name</th>
              <th scope="col">submenu_Link</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($select_submenus_result as $key=>$submenu){ $id=$submenu['menu_id']?>
            <tr>
              <th scope="row"><?= $key+1?></th>
              <td>
                <?php
                    $select_menu = "SELECT * FROM menus WHERE id=$id";
                    $select_menu_result = mysqli_query($db_connect, $select_menu);
                    $after_assoc = mysqli_fetch_assoc($select_menu_result);
                    echo $after_assoc['menu_name'];
                  ?>
              </td>
              <td><?=$submenu['submenu_name']?></td>
              <td><?=$submenu['submenu_link']?></td>
              <td>
                 <a href="submenu_edit.php?id=<?= $submenu['id']?>" class="btn btn-secondary">Edit</a>
                 <a href='submenu_delete.php?id=<?= $submenu['id']?>' class="btn btn-danger">Delete</a>
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
