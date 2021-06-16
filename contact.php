<?php
include_once('admin/include/config.php');
if(isset($_POST['submit']))
{
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$contactno =$_POST['contactno'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,subject,message) values('$fullname','$email','$contactno','$subject','$message')");
if($query)
{
   echo "<script>alert('Thanks for your Message. We will give you feedback soon.');</script>";
   //header('location:user-login.php');
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
                  <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
                  <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
                  <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                  <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
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
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
                  <h1 class="mb-3 bread">Contact us</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section contact-section">
         <div class="container">
            <div class="row d-flex contact-info mb-5">
               <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                  <div class="align-self-stretch box p-4 text-center bg-light">
                     <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-flag"></span>
                     </div>
                     <h3 class="mb-4">Address</h3>
                     <p>Jail Road , Jashore , Khulna</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                  <div class="align-self-stretch box p-4 text-center bg-light">
                     <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-phone-call"></span>
                     </div>
                     <h3 class="mb-4">Contact Number</h3>
                     <p><a href="tel://1234567920">+8801700000000</a></p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                  <div class="align-self-stretch box p-4 text-center bg-light">
                     <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-paper-plane"></span>
                     </div>
                     <h3 class="mb-4">Email Address</h3>
                     <p><a href="/cdn-cgi/l/email-protection#4d24232b220d3422383f3e243928632e2220"><span class="__cf_email__" data-cfemail="147d7a727b546d7b6166677d60713a777b79">[hridoy201996@gmail.com&#160;]</span></a></p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                  <div class="align-self-stretch box p-4 text-center bg-light">
                     <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-world-wide-web-on-grid"></span>
                     </div>
                     <h3 class="mb-4">Website</h3>
                     <p><a href="#">yoursite.com</a></p>
                  </div>
               </div>
            </div>
            <div class="row no-gutters block-9">
               <div class="col-md-6 order-md-last d-flex">
                  <form action="" class="bg-light p-5 contact-form" method="POST">
                     <div class="form-group">
                        <input type="text" class="form-control" name="fullname" placeholder="Your Name" required>
                     </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email">
                     </div>
                     <div class="form-group">
                        <input type="tel" class="form-control" name="contactno" placeholder="Your Phone Number" required>
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                     </div>
                     <div class="form-group">
                        <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                     </div>
                     <div class="form-group">
                        <input type="submit" name="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
                     </div>
                  </form>
               </div>
               <div class="col-md-6 d-flex">
                  <!-- <div id="map" class="bg-white"></div> -->
                  <div id="googleMap" style="width:100%;height:400px;"></div>
               </div>
            </div>
         </div>
      </section>
      <?php include('footer.php'); ?>
   </body>
</html>
