<?php
require 'db.php';

//banners
$select_banners = "SELECT * FROM banners WHERE img_status=1";
$select_banners_result = mysqli_query($db_connect, $select_banners);
$after_assoc_banner = mysqli_fetch_assoc($select_banners_result);

//logo
$select_logo = "SELECT * FROM logo WHERE logo_status=1";
$select_logo_result = mysqli_query($db_connect, $select_logo);
$after_assoc_logo = mysqli_fetch_assoc($select_logo_result);

//skills
$select_skills = "SELECT * FROM skills WHERE skill_status=1 ";
$select_skills_result = mysqli_query($db_connect, $select_skills);

//Project
$select_project = "SELECT * FROM projects ";
$select_project_result = mysqli_query($db_connect, $select_project);

//Experience
$select_experience = "SELECT * FROM experiences";
$select_experience_result = mysqli_query($db_connect, $select_experience);

//Blogs
$select_blogs = "SELECT * FROM blogs";
$select_blogs_result = mysqli_query($db_connect, $select_blogs);

//Menu
$select_menus = "SELECT * FROM menus";
$select_menus_result = mysqli_query($db_connect, $select_menus);

//icons
$select_icon = "SELECT * FROM icons";
$select_icon_result = mysqli_query($db_connect, $select_icon);

//trusts
$select_trust = "SELECT * FROM trusts WHERE trust_status=1";
$select_trust_result = mysqli_query($db_connect, $select_trust);
$after_assoc_trust = mysqli_fetch_assoc($select_trust_result);


//services
$select_service = "SELECT * FROM services";
$select_service_result = mysqli_query($db_connect, $select_service);

//testimonials
$select_testimonial = "SELECT * FROM testimonials";
$select_testimonial_result = mysqli_query($db_connect, $select_testimonial);

//sponsors
$select_sponsor = "SELECT * FROM sponsors";
$select_sponsor_result = mysqli_query($db_connect, $select_sponsor);




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Richard. - Easy Onepage Personal Template">
    <meta name="author" content="Paul">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>(JIC)-Joint Intelligence Community</title>
  </head> 
<body>
   
   <!-- Loader -->
   <div class="loader">
    <div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>
   </div>
  
    <!-- Click capture -->
   <div class="click-capture d-lg-none"></div>

    <!-- Navbar -->  
    <nav id="scrollspy" class="navbar navbar-desctop">
        
      <div class="d-flex position-relative w-100">

        <!-- Brand-->
        <a class="navbar-brand" href="#"><img width="50" height="50" src="uploads/logos/<?=$after_assoc_logo['logo']?>" alt=""></a>
          <ul class="navbar-nav-desctop mr-auto d-none d-lg-block">
            <?php foreach($select_menus_result as $menu){ $menu_id = $menu['id'];?>
            <li><a class="nav-link" href="#home"><?=$menu['menu_name']?></a>
            <?php 
              $select_submenu = "SELECT * FROM submenus WHERE menu_id=$menu_id";
              $select_submenu_result = mysqli_query($db_connect, $select_submenu);
              $rows = mysqli_num_rows($select_submenu_result);
            ?>
            <?php if($rows > 0){?>
            <ul>
            <?php foreach($select_submenu_result as $submenu){ ?>
            <li><a  href="<?= $submenu['submenu_link']?>" class="text-white"><?= $submenu['submenu_name']?></a></li>
            <?php } ?>
           </ul>
           <?php } ?>
          </li>
            <?php }?>
         </ul>

        <!-- Social -->
        <ul class="social-icons mr-auto mr-lg-0 d-none d-sm-block">

           <?php foreach($select_icon_result as $icon){?>
           <li>
           <a target="_blank" href="<?=$icon['link']?>">
             <i class="fa <?=$icon['class_name'] ?> text-blue"></i>
          </a>
        </li>
       <?php } ?>
      </ul>

        <!-- Toggler -->
        <button class="toggler d-lg-none ml-auto">
          <span class="toggler-icon"></span>
          <span class="toggler-icon"></span>
          <span class="toggler-icon"></span>
        </button>
      </div>
    </nav>


    <!-- Navbar Mobile -->  
    <nav id="navbar-mobile" class="navbar navbar-mobile d-lg-none">
      <ion-icon class="close" name="close-outline"></ion-icon>

      <!-- Social -->
      <ul class="social-icons mr-auto mr-lg-0">
         <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
         <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
         <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
         <li><a href="#"> <ion-icon name="logo-instagram"></ion-icon></a></li>
      </ul>

      <ul class="navbar-nav navbar-nav-mobile">
        <li><a class="nav-link" href="#home">Home</a></li>
        <li><a class="nav-link" href="#about">About</a></li>
        <li><a class="nav-link" href="#experience">Experience</a></li>
        <li><a class="nav-link" href="#projects">Projects</a></li>
        <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
       </ul>
       <div class="navbar-mobile-footer">
        <p>© 2020 Richard. All Rights Reserved.</p>
       </div>
    </nav>

    <!-- Masthead -->  
    <main id="home" class="masthead jarallax" style="background-image:url('uploads/banners/<?= $after_assoc_banner['image']?>');" role="main">
      <div class="opener">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <h1><?= $after_assoc_banner['title']?></h1>
              <p class="lead mt-4 mb-5"><?= $after_assoc_banner['description']?></p>
              <button type="button" class="btn" data-toggle="modal" data-target="#send-request"><?= $after_assoc_banner['btn']?></button>
          </div>
          </div>
        </div>
      </div>
    </main>

    <!-- About -->
    <section id="about" class="section">
     <div class="container">
       <h2 data-aos="fade-up"><?=$after_assoc_trust['title']?></h2>
       <section class="mt-4">
          <div class="row">
          <div class="col-md-6 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
          <p><?= $after_assoc_trust['description']?></p>
              <div class="experience d-flex align-items-center">
              <div class="experience-number text-parallax"><?= $after_assoc_trust['year']?></div><div class="text-dark mt-3 ml-4">Years<br> of experience</div>
            </div>
        </div>
      <div class="col-md-5 offset-lg-2" data-aos="fade-in" data-aos-delay="50">

              <?php foreach($select_skills_result as $skill){?>
              <h6 class="mt-0"><?=$skill['skill_name']?></h6>
              <div class="progress mb-5">
                <div class="progress-bar" role="progressbar" data-aos="width" style="width:<?=$skill['percentage']?>%" aria-valuenow="<?=$skill['percentage']?>" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        </section>
      </div>
    </section>
    
    <section class="section bg-dark">
     <div class="container">
        <div class="container">
          <div class="row">
          <?php foreach($select_service_result as $service){?>
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-in">
              <img width="100" src="uploads/services/<?= $service['image']?>" alt="">
              <h6 class="text-white"><?= $service['title']?></h6>
              <p><?= $service['description']?></p>
            </div>
            <?php }?>
           </div>
        </div>
      </div>
    </section>
      
     <!-- Experience -->
     <section id="experience" class="section pb-0">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Experience of Different Project Company</h2></div>
          <div class="col-md-5 offset-md-1 text-md-right"><h6 class="my-0 text-gray"><a href="cv/cv.pdf" dwonload>Dwonload My CV...If You Can</a></h6></div>
        </div>
        <div class="mt-5 pt-5">
          <?php foreach($select_experience_result as $experience){ ?>
          <div class="row-experience row justify-content-between" data-aos="fade-up">
            <div class="col-md-4">
              <div class="h6 my-0 text-gray"><?= $experience['duration']?></div>
              <h5 class="mt-2 text-primary text-uppercase"><?= $experience['company_name']?></h5>
            </div>
            <div class="col-md-4">
              <h5 class="mb-3 mt-0 text-uppercase"><?= $experience['designation']?></h5>
            </div>
            <div class="col-md-4">
              <p><?= $experience['details']?></p>
            </div>
          </div>
          <?php }?>
         </div>
      </div>
    </section>
    <!-- Projects -->
    <section id="projects" class="section">
     <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up">
          <h2 class="mb-3 mb-md-0">Featured projects</h2>
          </div>
          <div class="col-md-5 offset-md-1 text-md-right">
          <h6 class="my-0 text-gray"><a href="#">View all projects</a></h6>
          </div>
        </div>
        <div class="mt-5 pt-5" data-aos="fade-in">
          <div class="carousel-project owl-carousel">
           <?php foreach($select_project_result as $project){?>
           <div class="project-item">
              <a href="#<?=$project['id']?>" class="popup-with-zoom-anim">
                <figure class="position-relative">
                  <img alt="" class="w-100" src="uploads/projects/<?=$project['image']?>">
                  <figcaption class="text-white">
                    <h3 class="mb-2 text-white"><?=$project['title']?></h3>
                    <p><?=$project['category']?></p>
                  </figcaption>
                </figure>
              </a>
           </div>
           <?php }?>
         </div>
        </div>
      </div>
    </section>
    <!-- Project Modal Dialog 1 -->
    <?php foreach($select_project_result as $project){?>
    <div id="<?=$project['id']?>" class="container mfp-hide zoom-anim-dialog">
      <h2 class="mt-0"><?=$project['title']?></h2>
      <div class="mt-5 pt-2 text-dark">
        <div class="row">
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Clients:</h6>
            <span><?=$project['client']?></span>
          </div>
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Completion:</h6>
            <span><?=$project['completion']?></span>
          </div>
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Project Type:</h6>
            <span><?=$project['type']?></span>
          </div>
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Authors</h6>
            <span><?=$project['author']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6 class="my-0">Budget:</h6>
            <span><?=$project['budget']?></span>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6 class="my-0">Authors</h6>
            <span><?=$project['author']?></span>
          </div>
        </div>
      </div>
      <img alt="" class="mt-5 pt-2 w-100" src="uploads/projects/<?=$project['image']?>">
    </div>
    <?php }?>
    <!-- Testimonials -->
    <section id="testimonials" class="testimonials section">
      <div class="container">
         <div class="carousel-testimonials owl-carousel">
         <?php foreach($select_testimonial_result as $testimonial){?>
           <div class="col-testimonial" data-aos="fade-up">
              <span class="quiote"></span>
              <p data-aos="fade-up"><?= $testimonial['description']?></p>
              <p class="mt-5 text-dark" data-aos="fade-up"><strong><?= $testimonial['name']?></strong><?= $testimonial['designation']?></p>
           </div>
           <?php }?>
         </div>
       </div>
    </section>

     <!-- News -->
    <section id="news" class="section bg-light">
     <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Latest news</h2></div>
          <div class="col-md-5 offset-md-1 text-md-right"><h6 class="text-gray my-0"><a href="#">View all news</a></h6></div>
        </div>
        <div class="mt-5 pt-5">
          <div class="row-news row">
            <?php foreach($select_blogs_result as $blog){?>
            <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="0">
              <figure class="position-relative">
                <div class="position-relative">
                  <a href=""><img alt="" class="w-100 d-block" src="uploads/blogs/<?=$blog['image']?>"></a>
                  <mark class="date"><?=$blog['created_at']?></mark>
                </div>
                <figcaption><h5><a href="blog_details.php?id=<?=$blog['id']?>"><?=$blog['title']?></a></h5><?= substr($blog['description'],0,120).'....Read More'?></figcaption>
              </figure>
            </div>
            <?php }?>
         </div>
        </div>
      </div>
    </section>

    <!-- Partners -->
    <section class="section-sm">
       <div class="container">
         <div class="row-partners row">
         <?php foreach($select_sponsor_result as $sponsor){ ?>
           <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in" data-aos-delay="50">
           <img alt="" src="uploads/sponsors/<?=$sponsor['image']?>">
           </div>
           <?php }?>
         </div>
       </div>
    </section>


    <!-- Footer -->  
    <footer>
      <div class="section bg-dark py-5 pb-0">
        <div class="container">
          <div class="row">
           <div class="col-md-6 col-lg-3">
             <h6 class="text-white mb-4">Phone:</h6>
             <p class="text-white mb-4">+88023156466:</p>
            </div>
            <div class="col-md-6 col-lg-3">
             <h6 class="text-white mb-4">Email:</h6>
             <p class="text-white mb-4">JIC@example.com</p>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6 class="text-white mb-4">Follow me:</h6>
              <ul class="social-icons">
              <?php foreach($select_icon_result as $icon){?>
            <li>
            <a target="_blank" href="<?=$icon['link']?>">
             <i class="fa <?=$icon['class_name'] ?> text-blue"></i>
          </a>
          </li>
         <?php } ?>
            </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6 class="text-white mb-4">Subscribe:</h6>
              <form class="js-subscribe-form">
                <div class="input-group">
                  <input id="mc-email" type="email" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                    <button class="btn" type="submit">Go</button>
                  </div>
                </div>
                <label class="mc-label" for="mc-email" id="mc-notification"></label>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copy section-sm">
        <div class="container">© Copyright 2022 JIC. All Rights Reserved</div>
       </div>
    </footer>
     
    <!-- Modal -->
    <div class="modal fade" id="send-request">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title mt-0">Send request</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Leave your contacts and our managers will contact you soon.</p>
           <form class="form-request" action="message_post.php" method="POST">
             <div class="form-group">
               <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
             <div class="form-group">
               <input type="email" name="email"  class="form-control" required="" placeholder="Email *">
             </div>
             <div class="form-group">
              <textarea rows="3" name="message"  class="form-control" placeholder="Message"></textarea>
             </div>
             <div class="message" id="success-message">Your message is successfully sent...</div>
             <div class="message" id="error-message">Sorry something went wrong</div>
             <div class="form-group mb-0 text-right">
               <button type="submit" class="btn">Submit</button>
             </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
<!-- Optional JavaScript -->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="js/jarallax.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/interface.js"></script>
</body>
</html>