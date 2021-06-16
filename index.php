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
                  <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                  <li class="nav-item"><a href="doctors.php" class="nav-link">Doctors</a></li>
                  <li class="nav-item"><a href="nurse.php" class="nav-link">Nurse</a></li>
                  <li class="nav-item"><a href="department.php" class="nav-link">Departments</a></li>
                  <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
                  <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
                  <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                  <!-- <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li> -->
                  <li class="nav-item"><p class="mb-0 register-link"><a href="login.php" style="margin-top: 10px;" class="btn btn-primary">Login/Signup</a></p></li>

               </ul>
            </div>
         </div>
      </nav>
      <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
               <div class="col-lg-6 ftco-animate">
                  <div class="mt-5">
                     <h1 class="mb-4">The Most Valuable Thing is Your Health</h1>
                     <p class="mb-4">If we can get people to focus on fruits and vegetables and more healthy foods, we'll be better in terms of our healthcare situation.</p>
                     <p class="mb-4">The First Wealth is Health</p>
                     <div class="row">
                        <div class="col-md-7 col-lg-10">
                           <form action="user/user-login.php" class="appointment-form-intro ftco-animate">
                              <div class="d-flex">
                                 <div class="form-group">
                                    <div class="form-field">
                                       <div class="select-wrap">
                                          <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                          <select name="" id="" class="form-control">
                                             <option value="">Select Department</option>
                                             <option value="">Neurology</option>
                                             <option value="">Cardiology</option>
                                             <option value="">X-Ray</option>
                                             <option value="">Dental</option>
                                             <option value="">Ophthalmology</option>
                                             <option value="">Other Services</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <input type="submit" value="Book Appointment" class="btn-custom form-control py-3 px-4">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
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
                           <h2 class="mb-3">Welcome to <span>Jashore Health</span></h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                           <div class="media block-6 services d-flex">
                              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
                              <div class="media-body pl-md-4">
                                 <h3 class="heading mb-3">Emergency Help</h3>
                                 <p>The thousands of staff and volunteers of the Red Cross are here for you with emergency aid when you need it most, and also advice and assistance to help you recover from a disaster or become better prepared to face one in the future.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                           <div class="media block-6 services d-flex">
                              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ophthalmologist"></span></div>
                              <div class="media-body pl-md-4">
                                 <h3 class="heading mb-3">Qualified Doctors</h3>
                                 <p>When you need a doctor, it's good to know that Medinova can connect you with the most qualified physicians and specialists at all of our locations across the ...</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                           <div class="media block-6 services d-flex">
                              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-flag"></span></div>
                              <div class="media-body pl-md-4">
                                 <h3 class="heading mb-3">Location &amp; Directions</h3>
                                 <p>It is bordered by India to the west, Khulna District and Satkhira District to the south, Khulna and Narail to the east, and Jhenaidah District and Magura District to the north. Jessore is the capital of the district. Jessore district was established in 1781.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                           <div class="media block-6 services d-flex">
                              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
                              <div class="media-body pl-md-4">
                                 <h3 class="heading mb-3">Medical Treatment</h3>
                                 <p>Medical treatment means the management and care of a patient to combat disease or disorder. Medical treatment includes: All treatment not otherwise excluded (below). Using prescription medications, or use of a non-prescription drug at prescription strength.</p>
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
      <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
         <div class="container">
            <div class="row d-flex">
               <div class="col-md-6 col-lg-5 d-flex">
                  <div class="img w-100 d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);"></div>
               </div>
               <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                  <div class="py-md-5">
                     <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                           <h2 class="mb-4">We Are <span>Here</span> Your <span> Healthcare </span> Provider</h2>
                           <p>“The art of medicine consists of amusing the patient while nature cures the disease.”</br>― Voltaire</p>
                           <p><a href="user/" class="btn btn-primary py-3 px-4">Make an appointment</a> <a href="contact.php" class="btn btn-secondary py-3 px-4">Contact us</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-intro img" style="background-image: url(images/bg_3.jpg);">
         <div class="overlay"></div>
         <div class="container">
            <div class="row justify-content-end">
               <div class="col-md-7">
                  <h2>Your Health is Our Priority</h2>
                  <p>“Physical fitness is the first requisite of happiness.” </br>– Joseph Pilates</p>
                  <p class="mb-0"><a href="user/" class="btn btn-white px-4 py-3">Make An Appointment</a></p>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section">
         <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
               <div class="col-md-8 text-center heading-section ftco-animate">
                  <h2 class="mb-4">Jashore Health <span>Department</span></h2>
               </div>
            </div>
            <div class="row tabulation mt-4 ftco-animate">
               <div class="col-md-3">
                  <ul class="nav nav-pills nav-fill d-block w-100">
                     <li class="nav-item text-left">
                        <a class="nav-link active d-flex align-items-centere py-4" data-toggle="tab" href="#services-1"><span class="flaticon-health flaticon mr-3"></span> <span>Neurology</span></a>
                     </li>
                     <li class="nav-item text-left">
                        <a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#services-2"><span class="flaticon-health flaticon mr-3"></span> <span>Ophthalmology</span></a>
                     </li>
                     <li class="nav-item text-left">
                        <a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#services-3"><span class="flaticon-health flaticon mr-3"></span> <span>Nuclear Magnetic</span></a>
                     </li>
                     <li class="nav-item text-left">
                        <a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#services-4"><span class="flaticon-health flaticon mr-3"></span> <span>X-ray</span></a>
                     </li>
                     <li class="nav-item text-left">
                        <a class="nav-link py-4 d-flex align-items-center" data-toggle="tab" href="#services-5"><span class="flaticon-health flaticon mr-3"></span> <span>Surgical</span></a>
                     </li>
                     <li class="nav-item text-left">
                        <a class="nav-link d-flex align-items-centerm py-4" data-toggle="tab" href="#services-6"><span class="flaticon-health flaticon mr-3"></span> <span>Cardiology</span></a>
                     </li>
                     <li class="nav-item text-left">
                        <a class="nav-link d-flex align-items-centerm py-4" data-toggle="tab" href="#services-7"><span class="flaticon-health flaticon mr-3"></span> <span>Dental Clinic</span></a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-9">
                  <div class="tab-content pt-4 pt-md-0 pl-md-3">
                     <div class="tab-pane container p-0 active" id="services-1">
                        <div class="row">
                           <div class="col-md-5 img" style="background-image: url(images/dept-1.jpg);"></div>
                           <div class="col-md-7 text pl-md-4">
                              <h3><a href="#">Neurology</a></h3>
                              <p>Neurologists say that our brains are programmed much more for stories than for abstract ideas. Tales with a little drama are remembered far longer than any slide crammed with analytics.</p>
                              <p>We live well enough to have the luxury to get ourselves sick with purely social, psychological stress.</p>
                              <ul>
                                 <li><span class="fa fa-check"></span>Dreams are the royal road to the unconscious.</li>
                                 <li><span class="fa fa-check"></span>If you listen to neurologists and psychiatrists, you'd never fall in love.</li>
                                 <li><span class="fa fa-check"></span>Symptoms, then, are in reality nothing but a cry from suffering organs.</li>
                                 <li><span class="fa fa-check"></span>I be more hipper than a hippopotamus</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane container p-0 fade" id="services-2">
                        <div class="row">
                           <div class="col-md-5 img" style="background-image: url(images/dept-2.jpg);"></div>
                           <div class="col-md-7 text pl-md-4">
                              <h3><a href="#">Ophthalmology</a></h3>
                              <p>Our world-class team of professionals at OCLI can help you with the latest treatment options for you.</p>
                              <p>Discover and share Funny Ophthalmology Quotes. Explore our collection of motivational and famous quotes by authors you know and love.</p>
                              <ul>
                                 <li><span class="fa fa-check"></span>I have a mole in my eye, which is a very specific thing.</li>
                                 <li><span class="fa fa-check"></span>An eye for an eye only ends up making the whole world blind.</li>
                                 <li><span class="fa fa-check"></span>Language is to the mind more than light is to the eye.</li>
                                 <li><span class="fa fa-check"></span>Sometimes the heart sees what is invisible to the eye.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane container p-0 fade" id="services-3">
                        <div class="row">
                           <div class="col-md-5 img" style="background-image: url(images/dept-3.jpg);"></div>
                           <div class="col-md-7 text pl-md-4">
                              <h3><a href="#">Nuclear Magnetic</a></h3>
                              <p> Nuclear magnetic resonance spectroscopy depends on the absorption of energy when the nucleus of an atom is excited from its lowest energy spin state to the next higher one. The nuclei of several elements can be studied by NMR.</p>
                              <p>Nuclear Magnetic Resonance encompasses several powerful structural and analytical methodologies which are capable of providing atomic level information about molecules.</p>
                              <ul>
                                 <li><span class="fa fa-check"></span>Structural analysis of new compounds</li>
                                 <li><span class="fa fa-check"></span>Metabolite identification</li>
                                 <li><span class="fa fa-check"></span>Monitoring of enzymatic reactions</li>
                                 <li><span class="fa fa-check"></span>Understanding enzyme specificity and mode of action</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane container p-0 fade" id="services-4">
                        <div class="row">
                           <div class="col-md-5 img" style="background-image: url(images/dept-4.jpg);"></div>
                           <div class="col-md-7 text pl-md-4">
                              <h3><a href="#">X-Ray</a></h3>
                              <p>X-rays are a type of radiation called electromagnetic waves. X-ray imaging creates pictures of the inside of your body. The images show the parts of your body in different shades of black and white. This is because different tissues absorb different amounts of radiation</p>
                              <p>There are two types of X-ray generated: characteristic radiation and bremsstrahlung radiation.</p>
                              <ul>
                                 <li><span class="fa fa-check"></span>Cancers and tumors.</li>
                                 <li><span class="fa fa-check"></span>An enlarged heart.</li>
                                 <li><span class="fa fa-check"></span>Blood vessel blockages.</li>
                                 <li><span class="fa fa-check"></span>Fluid in lungs.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane container p-0 fade" id="services-5">
                        <div class="row">
                           <div class="col-md-5 img" style="background-image: url(images/dept-5.jpg);"></div>
                           <div class="col-md-7 text pl-md-4">
                              <h3><a href="#">Surgical</a></h3>
                              <p>“We priests are the surgeons of souls, and it is our duty to deliver them of shameful secrets they would fain conceal, with hands careful to neither wound no pollute.”</p>
                              <p>“The boy's death turned me into a person marked by war: it was the Sarajevo equivalent of a campaign medal, although not one to wear with pride.”</p>
                              <p>“Surgeons can cut out everything except cause.”</p>
                              <ul>
                                 <li><span class="fa fa-check"></span>Surgeons must be very careful when they take the knife! ..</li>
                                 <li><span class="fa fa-check"></span>Surgeons can cut out everything except cause. ..</li>
                                 <li><span class="fa fa-check"></span>A good surgeon operates with his hand, not with his heart.</li>
                                 <li><span class="fa fa-check"></span>He who wishes to be a surgeon should go to war.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane container p-0 fade" id="services-6">
                        <div class="row">
                           <div class="col-md-5 img" style="background-image: url(images/dept-6.jpg);"></div>
                           <div class="col-md-7 text pl-md-4">
                              <h3><a href="#">Cardiology</a></h3>
                              <p>A cardiologist is a medical doctor who studies and treats diseases and conditions of the cardiovascular system — the heart and blood vessels — including heart rhythm disorders, coronary artery disease, heart attacks, heart defects and infections, and related disorders.</p>
                              <p>Some people think plant-based diet, whole foods diet is extreme. Half a million people a year will have their chests opened up and a vein taken from their leg and sewn onto their coronary artery. Some people would call that extreme.</p>
                              <ul>
                                 <li><span class="fa fa-check"></span>My cranky cardiologist says I'm destined to die in the kitchen.</li>
                                 <li><span class="fa fa-check"></span>Electrocardiogram (ECG or EKG)</li>
                                 <li><span class="fa fa-check"></span>Magnetic Resonance Imaging (MRI)</li>
                                 <li><span class="fa fa-check"></span>The best prescription is knowledge.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane container p-0 fade" id="services-7">
                        <div class="row">
                           <div class="col-md-5 img" style="background-image: url(images/dept-7.jpg);"></div>
                           <div class="col-md-7 text pl-md-4">
                              <h3><a href="#">Dental Clinic</a></h3>
                              <p>Dental clinics focus on patient education to prevent disease and provide treatment options for the same procedures offered in general and (some) specialty practices. A clinic houses all dental equipment and tools in one place and is staffed by dentists, dental specialists, dental assistants, and dental hygienists.</p>
                              <p>A check-up allows your dentist to see if you have any dental problems and helps you keep your mouth healthy. Leaving problems untreated could make them more difficult to treat in the future, so it's best to deal with problems early, or, if possible, prevent them altogether.</p>
                              <ul>
                                 <li><span class="fa fa-check"></span>An aching tooth is better out than in.</li>
                                 <li><span class="fa fa-check"></span>The tongue is ever turning to the aching tooth.</li>
                                 <li><span class="fa fa-check"></span>Be true to your teeth or they will be false to you.</li>
                                 <li><span class="fa fa-check"></span>Love conquers all things except poverty and toothache.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container-fluid px-5">
            <div class="row justify-content-center mb-5 pb-2">
               <div class="col-md-8 text-center heading-section ftco-animate">
                  <h2 class="mb-4">Our Qualified Doctors</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="staff">
                     <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/doc-1.jpg);"></div>
                     </div>
                     <div class="text text-center">
                        <h3 class="mb-2">Professor Dr. Mahbubul Alam</h3>
                        <span class="position mb-2">Neurologist</span>
                        <div class="faded">
                           <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                           <ul class="ftco-social text-center">
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="staff">
                     <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
                     </div>
                     <div class="text text-center">
                        <h3 class="mb-2">Dr. Nargis Akther</h3>
                        <span class="position mb-2">Ophthalmologist</span>
                        <div class="faded">
                           <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                           <ul class="ftco-social text-center">
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="staff">
                     <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/doc-3.jpg);"></div>
                     </div>
                     <div class="text text-center">
                        <h3 class="mb-2">Dr.MD. Mahfuzur Rahman</h3>
                        <span class="position mb-2">Dentist</span>
                        <div class="faded">
                           <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                           <ul class="ftco-social text-center">
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="staff">
                     <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/doc-4.jpg);"></div>
                     </div>
                     <div class="text text-center">
                        <h3 class="mb-2">Dr. Sarmin Nahar</h3>
                        <span class="position mb-2">Pediatrician</span>
                        <div class="faded">
                           <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                           <ul class="ftco-social text-center">
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                              <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-facts img ftco-counter" style="background-image: url(images/bg_3.jpg);">
         <div class="overlay"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 p-4">
                     <div class="text">
                        <strong class="number" data-number="30">0</strong>
                        <span>Years of Experienced</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 p-4">
                     <div class="text">
                        <strong class="number" data-number="4500">0</strong>
                        <span>Happy Patients</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 p-4">
                     <div class="text">
                        <strong class="number" data-number="84">0</strong>
                        <span>Number of Doctors</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 p-4">
                     <div class="text">
                        <strong class="number" data-number="300">0</strong>
                        <span>Number of Staffs</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container-fluid px-md-5">
            <div class="row justify-content-center mb-5 pb-5">
               <div class="col-md-10 heading-section text-center ftco-animate">
                  <h2 class="mb-4">Latest Updates</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
               </div>
            </div>
            <div class="row d-flex">
               <div class="col-lg-4 ftco-animate">
                  <div class="blog-entry">
                     <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                     </a>
                     <div class="d-flex">
                        <div class="meta pt-3 text-right pr-2">
                           <div><a href="#"><span class="fa fa-calendar mr-2"></span>April. 20, 2021</a></div>
                           <div><a href="#"><span class="fa fa-user mr-2"></span>Admin</a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a></div>
                        </div>
                        <div class="text d-block">
                           <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                           <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
                           <p><a href="blog.html" class="btn btn-secondary btn-outline-secondary py-2 px-3">Read more</a></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 ftco-animate">
                  <div class="blog-entry">
                     <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                     </a>
                     <div class="d-flex">
                        <div class="meta pt-3 text-right pr-2">
                           <div><a href="#"><span class="fa fa-calendar mr-2"></span>April. 20, 2021</a></div>
                           <div><a href="#"><span class="fa fa-user mr-2"></span>Admin</a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a></div>
                        </div>
                        <div class="text d-block">
                           <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                           <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
                           <p><a href="blog.html" class="btn btn-secondary btn-outline-secondary py-2 px-3">Read more</a></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 ftco-animate">
                  <div class="blog-entry">
                     <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                     </a>
                     <div class="d-flex">
                        <div class="meta pt-3 text-right pr-2">
                           <div><a href="#"><span class="fa fa-calendar mr-2"></span>April. 20, 2021</a></div>
                           <div><a href="#"><span class="fa fa-user mr-2"></span>Admin</a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a></div>
                        </div>
                        <div class="text d-block">
                           <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                           <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
                           <p><a href="blog.html" class="btn btn-secondary btn-outline-secondary py-2 px-3">Read more</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section testimony-section img" style="background-image: url(images/bg_4.jpg);">
         <div class="overlay"></div>
         <div class="container">
            <div class="row justify-content-center pb-3">
               <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                  <span class="subheading">Read testimonials</span>
                  <h2 class="mb-4">Our Patient Says</h2>
               </div>
            </div>
            <div class="row ftco-animate justify-content-center">
               <div class="col-md-12">
                  <div class="carousel-testimony owl-carousel ftco-owl">
                     <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between">
                           <div class="user-img" style="background-image: url(images/person_1.jpg)">
                              <span class="quote d-flex align-items-center justify-content-center">
                              <i class="fa fa-quote-left"></i>
                              </span>
                           </div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                              <p class="name">Arif Rahman</p>
                              <span class="position">Patients</span>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between">
                           <div class="user-img" style="background-image: url(images/person_2.jpg)">
                              <span class="quote d-flex align-items-center justify-content-center">
                              <i class="fa fa-quote-left"></i>
                              </span>
                           </div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                              <p class="name">Kumar Sanu</p>
                              <span class="position">Patients</span>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between">
                           <div class="user-img" style="background-image: url(images/person_3.jpg)">
                              <span class="quote d-flex align-items-center justify-content-center">
                              <i class="fa fa-quote-left"></i>
                              </span>
                           </div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                              <p class="name">Mohammad Ali</p>
                              <span class="position">Patients</span>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between">
                           <div class="user-img" style="background-image: url(images/person_1.jpg)">
                              <span class="quote d-flex align-items-center justify-content-center">
                              <i class="fa fa-quote-left"></i>
                              </span>
                           </div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                              <p class="name">Shovon Ghosh</p>
                              <span class="position">Patients</span>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between">
                           <div class="user-img" style="background-image: url(images/person_3.jpg)">
                              <span class="quote d-flex align-items-center justify-content-center">
                              <i class="fa fa-quote-left"></i>
                              </span>
                           </div>
                           <div class="text">
                              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                              <p class="name">Partho Ghosh</p>
                              <span class="position">Patients</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include('footer.php'); ?>
   </body>
</html>
