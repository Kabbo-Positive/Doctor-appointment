<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
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
                  <li class="nav-item active"><a href="gallery.php" class="nav-link">Gallery</a></li>
                  <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                  <!-- <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li> -->
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
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Gallery <i class="fa fa-chevron-right"></i></span></p>
                  <h1 class="mb-3 bread">Gallery</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section">
         <div class="container">
            <div class="row no-gutters">
               <div class="col-md-3">
                  <a href="images/image_1.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(images/image_1.jpg);">
                  <span class="overlay"></span>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="images/image_2.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(images/image_2.jpg);">
                  <span class="overlay"></span>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="images/image_3.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(images/image_3.jpg);">
                  <span class="overlay"></span>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="images/image_4.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(images/image_4.jpg);">
                  <span class="overlay"></span>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="images/image_5.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(images/image_5.jpg);">
                  <span class="overlay"></span>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="images/image_6.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(images/image_6.jpg);">
                  <span class="overlay"></span>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="images/dept-1.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(images/dept-1.jpg);">
                  <span class="overlay"></span>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="images/dept-2.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(images/dept-2.jpg);">
                  <span class="overlay"></span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <?php include('footer.php'); ?>
</html>
