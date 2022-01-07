<?php
session_start();
require 'dashboard_includes/header.php'; ?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav>

      <div class="sl-pagebody">
         <div class="sl-page-title ">
             <h1>Welcome To New_practice Admin Pannel</h1>
         </div>
      </div>
    </div>
    

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if(isset($_SESSION['login_complete'])){ ?>

<script>
  Swal.fire({
    position: 'center',
    icon: 'success',
    title: '<?=$_SESSION['login_complete'];?>',
    showConfirmButton: false,
    timer: 1500
  })
</script>

<?php } unset($_SESSION['login_complete']) ?>
<?php require 'dashboard_includes/footer.php'; ?>