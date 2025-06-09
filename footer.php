<?php
  include "conn.php";

  if (isset($_POST['submit'])) {
    $sn_email = mysqli_real_escape_string($conn, $_POST['sn_email']);

    $sql = "INSERT INTO sn_detials (sn_email) VALUES ('$sn_email')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location: thankyou.php");
  }

// mysqli_close($conn);

?>
<footer class="site-footer bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>We are curious, passionate, and committed to helping nonprofits learn and grow.</p>

              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="" method="POST" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control rounded-0 border-secondary text-white bg-transparent" name="sn_email" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                  <input type="submit" name="submit" class="btn btn-primary text-white" value="Subscribe">
                  </div>
                </div>
            </div>


            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="pt-5">
              <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
