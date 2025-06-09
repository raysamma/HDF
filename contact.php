<?php
include "conn.php";

if (isset($_POST['submit'])) {
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $adds = mysqli_real_escape_string($conn, $_POST['adds']);
  $msg = mysqli_real_escape_string($conn, $_POST['msg']);
  // $sn_email = mysqli_real_escape_string($conn, $_POST['sn_email']);

  $sql = "INSERT INTO donar_revw (fname, lname, adds, msg) VALUES ('$fname', '$lname', '$adds', '$msg')";

  if (mysqli_query($conn, $sql)) {
      echo "Record inserted successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  header("Location: thankyou.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> HelpDrivefoundation&mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico.png">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      
      
      
      <!-- <div class="bg-primary py-3 top-bar shadow d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-md-left pl-0">
              <a href="#" class=" pr-3 pl-0">Home</a>
              <a href="#" class="p-3">Events</a>
              <a href="#" class="p-3">Become A Volunteer</a>
            </div>
            <div class="col-md-6 text-md-right">
              <a href="#" class="p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="p-3"><span class="icon-facebook"></span></a>
            </div>
          </div>
        </div>
      </div> -->
      <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">
            

            <div class="site-logo">
              <a href="index.html" class="text-white">Help Drive  Foundation</a>
            </div>


            <nav class="site-navigation text-left ml-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="about.php" class="nav-link">About Us</a></li>
                <li><a href="causes.php" class="nav-link">Our Causes</a></li>
                <!-- <li><a href="blog.html" class="nav-link">Blog</a></li> -->
                <li class="active"><a href="contact.php" class="nav-link">Contact</a></li>
              </ul>
            </nav>


            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>

            

          </div>
        </div>

      </header>




    <div class="owl-carousel-wrapper">

      

      <div class="box-92819">
        <h1 class="text-white mb-3">Contact</h1>
        <p class="lead text-white">A user-friendly form for visitors to submit inquiries or messages.</p>
      </div>

      
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_3.jpg');"></div>
      
    </div>
    
    
    <div class="site-section">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="" method="POST">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name" name="fname" required >
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" name="lname" required >
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address" name="adds" required >
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea id="" class="form-control" placeholder="Write your message." cols="30" rows="10" name="msg" required ></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" name="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send">
                </div>
              </div>
            </form>
            <!-- <form action="" method="POST" class="footer-suscribe-form">
              <h2 class="footer-heading mb-4"><br>OR <br><br> Subscribe to Newsletter</h2>
              <div class="input-group mb-3">
                  <input type="text" class="form-control rounded-0 border-secondary text-white bg-transparent" name="sn_email" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                   <button class="btn btn-primary text-white" type="button" id="button-addon2"  name="submit" >Subscribe</button> 
                    <input type="submit" name="submit" class="btn btn-primary text-white" value="Subscribe">
                  </div>
                </div>
          </form> -->
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-cursive mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-muted small text-uppercase font-weight-bold">Address:</span>
                  <span>kapodara surat gujarat</span></li>
                <li class="d-block mb-3"><span class="d-block text-muted small text-uppercase font-weight-bold">Phone:</span><span>t46656573536</span></li>
                <li class="d-block mb-3"><span class="d-block text-muted small text-uppercase font-weight-bold">Email:</span><span>22amtics493gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        
            <div class="d-md-flex cta-20101 align-self-center bg-light p-5">
              <div class=""><h2 class="text-cursive">Helping the Homeless, Hungry, and Hurtings Children</h2></div>
              <div class="ml-auto"><a href="#donateusmod" class="btn btn-primary">Donate Now</a></div>
            </div>
        
      </div>
    </div>
    
    <?php
    include "footer.php";
    ?>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>
