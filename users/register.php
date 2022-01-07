<?php
session_start();
require '../session_check.php';
require '../dashboard_includes/header.php';

?>
<?php if($_SESSION['role'] == 1){ ?>
  <div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
<a class="breadcrumb-item" href="index.html">Dashboard</a>
</nav>
<div class="sl-pagebody">
    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Pro_Check<span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Professional Admin Template Design</div>


        <form action="post.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter your fullname">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter your password">
          </div>
          <div class="form-group">
            <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">country</label>
            <div class="row row-xs">
                <select class="form-control" name="country" data-placeholder="Month">
                  <option value="">Select Country</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="India">India</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="USA">USA</option>
                </select>
            </div>
            </div>
            <div class="form-group">
               <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Role</label>
                   <div class="row row-xs">
                     <select class="form-control" name="role" data-placeholder="Month">
                        <option value="">Select Role</option>
                        <option value="1">Admin</option>
                        <option value="2">Moderator</option>
                        <option value="3">Viewer</option>
                        <option value="0">Nutral</option>
                </select>
            </div>
          </div>
          <div class="form-group">
          <input  name="images" type="file" class="form-control" >
          </div>
          <div class="form-group tx-12">Dear Users,by clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
          <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>


  <div class="mg-t-40 tx-center">Already Have An Account??<a href="../login.php" class="tx-info">Sign In</a></div>
  </div>
  </div>
  </div>
  </div>
  
  <?php require '../dashboard_includes/footer.php';?>

<?php }else{
  header('location:../login.php');
}?>
 
<?php
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['password']);

?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(isset($_SESSION['success'] )){ ?>

<script>
    Swal.fire({
    position: 'center',
    icon: 'success',
    title: '<?=$_SESSION['success'];?>',
    showConfirmButton: false,
    timer: 1500
     })
</script>
<?php } unset($_SESSION['success']) ?>