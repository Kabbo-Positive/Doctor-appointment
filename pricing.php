<?php
session_start();
error_reporting(0);
include("user/include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM users WHERE email='".$_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="user/dashboard.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
// For stroing log if user login successfull
$log=mysqli_query($con,"insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
   // For stroing log if user login unsuccessfull
$_SESSION['login']=$_POST['username']; 
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$_SESSION['errmsg']="Invalid username or password";
$extra="user-login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>


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
                  <li class="nav-item active"><a href="pricing.php" class="nav-link">Pricing</a></li>
                  <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
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
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Pricing <i class="fa fa-chevron-right"></i></span></p>
                  <h1 class="mb-3 bread">Pricing</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section">
         <div class="container">
            <div class="row">
               <div class="col-md-3 ftco-animate">
                  <div class="pricing-entry pb-5 text-center">
                     <div>
                        <h3 class="mb-4">Basic</h3>
                        <p><span class="price">300</span> <span class="per">/ session</span></p>
                     </div>
                     <ul>
                        <li>Diagnostic Services</li>
                        <li>Professional Consultation</li>
                        <li>Tooth Implants</li>
                        <li>Surgical Extractions</li>
                        <li>Teeth Whitening</li>
                     </ul>
                     <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
                  </div>
               </div>
               <div class="col-md-3 ftco-animate">
                  <div class="pricing-entry pb-5 text-center">
                     <div>
                        <h3 class="mb-4">Standard</h3>
                        <p><span class="price">500</span> <span class="per">/ session</span></p>
                     </div>
                     <ul>
                        <li>Diagnostic Services</li>
                        <li>Professional Consultation</li>
                        <li>Tooth Implants</li>
                        <li>Surgical Extractions</li>
                        <li>Teeth Whitening</li>
                     </ul>
                     <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
                  </div>
               </div>
               <div class="col-md-3 ftco-animate">
                  <div class="pricing-entry active pb-5 text-center">
                     <div>
                        <h3 class="mb-4">Premium</h3>
                        <p><span class="price">700</span> <span class="per">/ session</span></p>
                     </div>
                     <ul>
                        <li>Diagnostic Services</li>
                        <li>Professional Consultation</li>
                        <li>Tooth Implants</li>
                        <li>Surgical Extractions</li>
                        <li>Teeth Whitening</li>
                     </ul>
                     <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
                  </div>
               </div>
               <div class="col-md-3 ftco-animate">
                  <div class="pricing-entry pb-5 text-center">
                     <div>
                        <h3 class="mb-4">Platinum</h3>
                        <p><span class="price">850</span> <span class="per">/ session</span></p>
                     </div>
                     <ul>
                        <li>Diagnostic Services</li>
                        <li>Professional Consultation</li>
                        <li>Tooth Implants</li>
                        <li>Surgical Extractions</li>
                        <li>Teeth Whitening</li>
                     </ul>
                     <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
         <div class="container">
            <div class="row d-flex">
               <div class="col-md-7 py-5">
                  <div class="py-lg-5">
                     <div class="row justify-content-center pb-5">
                        <div class="col-md-12 heading-section ftco-animate">
                           <h2 class="mb-3">Make An <span>Appointment</span></h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                           <div class="media block-6 services d-flex">
                              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
                              <div class="media-body pl-md-4">
                                 <h3 class="heading mb-3">Emergency Help</h3>
                                 <p>We are Here</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                           <div class="media block-6 services d-flex">
                              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ophthalmologist"></span></div>
                              <div class="media-body pl-md-4">
                                 <h3 class="heading mb-3">Qualified Doctors</h3>
                                 <p>Jashore Health Providing best Qualified Doctors in our Country.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                           <div class="media block-6 services d-flex">
                              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-flag"></span></div>
                              <div class="media-body pl-md-4">
                                 <h3 class="heading mb-3">Location &amp; Directions</h3>
                                 <p>Jail Road , Jashore , Khulna.</p>
                                 <p> Contact Number: +8801700000000</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                           <div class="media block-6 services d-flex">
                              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
                              <div class="media-body pl-md-4">
                                 <h3 class="heading mb-3">Medical Treatment</h3>
                                 <p>We have best Medical Treatment.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5 d-flex">
                  <div class="appointment-wrap p-4 p-lg-5 d-flex align-items-center">
                     <form action="#" class="appointment-form ftco-animate">
                        <h3>Appointment Login Form</h3>
                        <div class="">
                           <div class="form-group">
                              <input type="text" name="username" class="form-control" placeholder="Username">
                           </div>
                           <div class="form-group">
                              <span class="input-icon">
                                 <input type="text" name="password" class="form-control" placeholder="Password">
                                 <i class="fa fa-lock"></i>
                              </span><a href="user/forgot-password.php">
                                 Forgot Password ?
                              </a>
                           </div>
                        </div>
                        <div class="">
                           <div class="form-group">
                              <input type="submit" name="submit" value="Login" class="btn btn-secondary py-3 px-4">
                           </div>
                        </div>
                        <div class="new-account">
                        Don't have an account yet?
                        <a href="user/registration.php">
                           Create an account
                        </a>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include('footer.php'); ?>
   </body>
</html>
