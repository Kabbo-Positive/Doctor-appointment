<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <link href="css/style_l.css" rel="stylesheet" type="text/css"  media="all" />
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
         <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
               <ul class="navbar-nav m-auto">
                  <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                  <li class="nav-item"><a href="doctors.php" class="nav-link">Doctors</a></li>
                  <li class="nav-item"><a href="nurse.php" class="nav-link">Nurse</a></li>                  
                  <li class="nav-item"><a href="department.php" class="nav-link">Departments</a></li>
                  <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
                  <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
                  <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                  <!-- <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li> -->
                  <li class="nav-item"><p class="mb-0 register-link"><a href="login.php" style="margin-top: 10px;" class="btn btn-primary">Login/Signup</a></p></li>
               </ul>
            </div>
         </div>
      </nav>
      <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
               <div class="col-md-9 ftco-animate pb-5">
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Login/Signup <i class="fa fa-chevron-right"></i></span></p>
                  <h1 class="mb-3 bread">Login/Signup</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container-fluid px-md-5">
            <div class="content-grids">
               <div class="wrap">
                  <div class="section group">
                     <div class="listview_1_of_3 images_1_of_3" style="width: 15%;background-color: #3391e7;">
                     </div>
                     <div class="listview_1_of_3 images_1_of_3">
                        <div class="listimg listimg_1_of_2">
                           <img src="img/grid-img3.png">
                        </div>
                        <div class="text list_1_of_2">
                           <h3>Patients</h3>
                           <p>Register & Book Appointment</p>
                           <div class="button"><span><a href="user/user-login.php">Click Here</a></span></div>
                        </div>
                     </div>
                     <div class="listview_1_of_3 images_1_of_3">
                        <div class="listimg listimg_1_of_2">
                           <img src="img/grid-img1.png">
                        </div>
                        <div class="text list_1_of_2">
                           <h3>Doctors Login</h3>
                           <div class="button"><span><a href="user/doctor/">Click Here</a></span></div>
                        </div>
                     </div>
                     <div class="listview_1_of_3 images_1_of_3" style="width: 15%;background-color: #3391e7;">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include('footer.php'); ?>
   </body>
</html>
