
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="/new_practice/dashboard_assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/new_practice/dashboard_assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="/new_practice/dashboard_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">


  <link rel="stylesheet" href="/new_practice/dashboard_assets/css/starlight.css">
  <link rel="stylesheet" href="../users/style.css">
  </head>

  <body>

    
        <div class="sl-logo"><a href=""><i class="fa fa-id-card" aria-hidden="true"></i><a>Pro_Check</a></div>
        <div class="sl-sideleft">
          <div class="input-group input-group-search">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn"><i class="fa fa-search"></i></button>
            </span>
          </div>

          <label class="sidebar-label">Navigation</label>
          <div class="sl-sideleft-menu">
            <a href="/new_practice/admin.php" class="sl-menu-link">
              <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Home</span>
              </div>
            </a>
            <a href="/new_practice/inbox.php" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-inbox" aria-hidden="true"></i>
                <span class="menu-item-label">Inbox</span>
              </div>
            </a>
            <a href="/new_practice/users/register.php" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
                <span class="menu-item-label">Add User</span>
              </div>
              </a>
              <?php if($_SESSION['role'] != 0){?>
              <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-users" aria-hidden="true"></i>
                <span class="menu-item-label">Users</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
                <?php }?>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/users/users.php" class="nav-link">User Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/users/trash.php" class="nav-link">Trash</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-life-ring" aria-hidden="true"></i>
                <span class="menu-item-label">logo</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
                   <li class="nav-item"><a href="/new_practice/logo/logo.php" class="nav-link">Logo Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
                <li class="nav-item"><a href="/new_practice/logo/add_logo.php" class="nav-link">Add Logo</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-bookmark" aria-hidden="true"></i>
                <span class="menu-item-label">Banner</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/banners/banners.php" class="nav-link">Banner Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/banners/add_banner.php" class="nav-link">Add Banner</a></li>
              <li class="nav-item"><a href="/new_practice/banners/banner_trash.php" class="nav-link">Banner Trash</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-certificate" aria-hidden="true"></i>
                <span class="menu-item-label">Skills</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/skills/skills.php" class="nav-link">Skill Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/skills/add_skill.php" class="nav-link">Add Skill</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-ravelry" aria-hidden="true"></i>
                <span class="menu-item-label">Project</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/projects/projects.php" class="nav-link">Project Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/projects/add_project.php" class="nav-link">Add Project</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-etsy" aria-hidden="true"></i>
                <span class="menu-item-label">Experiences</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/experience/experience.php" class="nav-link">Experience Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/experience/add_experience.php" class="nav-link">Add Experience</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-rss" aria-hidden="true"></i>
                <span class="menu-item-label">Blogs</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/blogs/blog.php" class="nav-link">Blog Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/blogs/add_blog.php" class="nav-link">Add Blog</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
               <i class="fa fa-bars" aria-hidden="true"></i>
                <span class="menu-item-label">Menus</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/menus/menus.php" class="nav-link">Menu Info</a></li>
              <li class="nav-item"><a href="/new_practice/submenu/submenus.php" class="nav-link">SubMenu Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/menus/add_menu.php" class="nav-link">Add Menu</a></li>
              <li class="nav-item"><a href="/new_practice/submenu/add_submenu.php" class="nav-link">Add SubMenu</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-share-square-o" aria-hidden="true"></i>
                <span class="menu-item-label">Social Icons</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/social/icons.php" class="nav-link">Icons Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/social/add_icon.php" class="nav-link">Add Icon</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-handshake-o" aria-hidden="true"></i>
                <span class="menu-item-label">Trust</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/trust/trusts.php" class="nav-link">Trust Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/trust/add_trust.php" class="nav-link">Add Trust</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                <span class="menu-item-label">Service</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/services/services.php" class="nav-link">Service Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/services/add_service.php" class="nav-link">Add Service</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-address-card" aria-hidden="true"></i>
                <span class="menu-item-label">Testimonial</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/testimonial/testimonials.php" class="nav-link">Testimonial Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/testimonial/add_testimonial.php" class="nav-link">Add Testimonial</a></li>
              <?php }?>
            </ul> 
            <a href="#" class="sl-menu-link">
              <div class="sl-menu-item">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
                <span class="menu-item-label">Sponsor</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sl-menu-sub nav flex-column">
              <li class="nav-item"><a href="/new_practice/sponsor/sponsors.php" class="nav-link">Sponsor Info</a></li>
              <?php if($_SESSION['role'] != 0 && $_SESSION['role'] != 3 ){?>
              <li class="nav-item"><a href="/new_practice/sponsor/add_sponsor.php" class="nav-link">Add Sponsor</a></li>
              <?php }?>
            </ul> 
          </div>
     <br>
    </div>
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div>
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><?=$_SESSION['login_name']?></span>
              <img src="../../new_practice/uploads/users/<?=$_SESSION['login_img']?>" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="../../new_practice/users/admin_edit.php?id=<?= $_SESSION['login_id']?>"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href="../../new_practice/logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="/new_practice/dashboard_assets/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="/new_practice/dashboard_assets/img/img4.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="/new_practice/dashboard_assets/img/img7.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="/new_practice/dashboard_assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="/new_practice/dashboard_assets/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/new_practice/dashboard_assets/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/new_practice/dashboard_assets/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/new_practice/dashboard_assets/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/new_practice/dashboard_assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/new_practice/dashboard_assets/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/new_practice/dashboard_assets/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/new_practice/dashboard_assets/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/new_practice/dashboard_assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->