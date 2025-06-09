<?php
  include "conn.php";

  if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $amt = mysqli_real_escape_string($conn, $_POST['amt']);

    $sql = "INSERT INTO don_details (name, email, amt) VALUES ('$name', '$email', '$amt')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location: thankyou.php");
  }

// mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Help Drive Foundation</title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico.png">
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
      <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">
            

            <div class="site-logo">
              <a href="index.html" class="text-white">Help Drive Foundation</a>
            </div>


            <nav class="site-navigation text-left ml-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="about.php" class="nav-link">About Us</a></li>
                <li><a href="causes.php" class="nav-link">Our Causes</a></li>
                <!-- <li><a href="blog.php" class="nav-link">Blog</a></li> -->
                <li><a href="contact.php" class="nav-link">Contact</a></li>
              </ul>
            </nav>


            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>

            

          </div>
        </div>

      </header>




    <div class="owl-carousel-wrapper">

      

      <div class="box-92819">
        <h1 class="text-white mb-3">Join The Movement To end Child Poverty</h1>
        <p><a href="#donateusmod" class="btn btn-primary py-3 px-4 rounded-0">Donate Now</a></p>
      </div>

      <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_2.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_3.jpg');"></div>
        
      </div>
    </div>
    

    <div class="container">
      <div class="feature-29192-wrap d-md-flex" style="margin-top: -20px; position: relative; z-index: 2;">

        <a href="#" class="feature-29192 overlay-danger" style="background-image: url('images/img_3_gray.jpg');">
          <div class="text">
            <span class="meta">Livelihood</span>
            <h3 class="text-cursive text-white h1">Livelihood</h3>
          </div>
        </a>

        <a class="feature-29192 overlay-success" style="background-image: url('images/img_2_gray.jpg');">
          <div class="text">
            <span class="meta">Health</span>
            <h3 class="text-cursive text-white h1">Natural Remedies</h3>
          </div>
        </a>

        <div class="feature-29192 overlay-warning" style="background-image: url('images/img_1_gray.jpg');">
          <div class="text">
            <span class="meta">School</span>
            <h3 class="text-cursive text-white h1">New Class Rooms</h3>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section">
      <div class="container">
        
        <div class="row mb-5 align-items-st">
          <div class="col-md-4">
            <div class="heading-20219">
              <h2 class="title text-cursive">Latest Causes</h2>
            </div>
          </div>
          <div class="col-md-8">
            <p>At HelpDrive Foundation, our purpose is to be a beacon of compassion, dedicated to transforming the lives of the most vulnerable members of society.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
              <div class="cause shadow-sm">
              
                <a href="#" class="cause-link d-block">
                  <img src="images/img_1.jpg" alt="Image" class="img-fluid" height="200px">
                  <div class="custom-progress-wrap">
                    <span class="caption">80% complete</span>
                    <div class="custom-progress-inner">
                      <div class="custom-progress bg-danger" style="width: 80%;"></div>
                    </div>
                  </div>
                </a>

                <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                  <span class="badge-danger py-1 small px-2 rounded mb-3 d-inline-block">School</span>
                  <h3 class="mb-4"><a href="#">One school, many futures" Education funds</a></h3>
                  <div class="border-top border-light border-bottom py-2 d-flex">
                    <div>Donated</div>
                    <div class="ml-auto"><strong class="text-primary"> ₹32,000</strong></div>
                  </div>

                  <div class="py-4">
                    <div class="d-flex align-items-center">
                      <img src="images/person_1.jpg" alt="Image" class="rounded-circle mr-3" width="50">
                      <div class="">ved </div>
                    </div>
                  </div>
                </div>
              
              </div>
          </div>
          <div class="col-md-4">
            
            <div class="cause shadow-sm">
              
                <a href="#" class="cause-link d-block">
                  <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                  <div class="custom-progress-wrap">
                    <span class="caption">80% complete</span>
                    <div class="custom-progress-inner">
                      <div class="custom-progress bg-primary" style="width: 80%;"></div>
                    </div>
                  </div>
                </a>

                <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                  <span class="badge-primary py-1 small px-2 rounded mb-3 d-inline-block">Health</span>
                  <h3 class="mb-4"><a href="#">Building a Healthier Future, Today.</a></h3>
                  <div class="border-top border-light border-bottom py-2 d-flex">
                    <div>Donated</div>
                    <div class="ml-auto"><strong class="text-primary"> ₹40,000</strong></div>
                  </div>

                  <div class="py-4">
                    <div class="d-flex align-items-center">
                      <img src="images/person_1.jpg" alt="Image" class="rounded-circle mr-3" width="50">
                      <div class="">dron </div>
                    </div>
                  </div>
                </div>
              
              </div>

          </div>
          <div class="col-md-4">
            
            <div class="cause shadow-sm">
              
                <a href="#" class="cause-link d-block">
                  <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                  <div class="custom-progress-wrap">
                    <span class="caption">80% complete</span>
                    <div class="custom-progress-inner">
                      <div class="custom-progress bg-warning" style="width: 80%;"></div>
                    </div>
                  </div>
                </a>

                <div class="px-3 pt-3 border-top-0 border border ">
                  <span class="badge-warning py-1 small px-2 rounded mb-3 d-inline-block">Livelihood</span>
                  <h3 class="mb-4"><a href="#">"Breaking Barriers, Building Livelihoods."</a></h3>
                  <div class="border-top border-light border-bottom py-2 d-flex">
                    <div>Donated</div>
                    <div class="ml-auto"><strong class="text-primary"> ₹52,919</strong></div>
                  </div>

                  <div class="py-4">
                    <div class="d-flex align-items-center">
                      <img src="images/person_1.jpg" alt="Image" class="rounded-circle mr-3" width="50">
                      <div class="">rohan </div>
                    </div>
                  </div>
                </div>
              
              </div>

          </div>
        </div>
      </div>
    </div>

    <div class="bg-image overlay site-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-12">
            <div class="row mb-5">
              <div class="col-md-7">
                <div class="heading-20219">
                  <h2 class="title text-white mb-4 text-cursive">Why Choose Us</h2>
                  <p class="text-white">Our NGO is driven by a strong mission and a set of values that align with your own. We are committed to making a meaningful impact in the areas we serve, and we believe in the same principles that you do.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>1</span></div>
                  <div>
                    <h3>Proven Track Record</h3>
                    <p>Over the years, our NGO has consistently demonstrated its ability to make a positive difference. Our track record of successful projects and initiatives </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>2</span></div>
                  <div>
                    <h3>Transparency and Accountability:</h3>
                    <p>We pride ourselves on being transparent and accountable in all our actions. We believe in keeping our supporters well-informed about how their contributions are being utilized.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>3</span></div>
                  <div>
                    <h3>Community Engagement: </h3>
                    <p>Our NGO actively engages with the communities we serve. We work closely with local residents, understanding their needs, and involving them in the decision-making process to ensure sustainable change.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>4</span></div>
                  <div>
                    <h3>Diverse Programs:</h3>
                    <p>We offer a range of programs and initiatives that allow you to choose how you'd like to make a difference. Whether it's education, healthcare, environmental conservation, or other areas, we have opportunities for you to get involved.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="heading-20219 mb-5">
          <h2 class="title text-cursive">Latest Event</h2>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="event-29191 mb-5">
              <a href="#" class="d-block mb-3"><img src="images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="px-3 d-flex">

                <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                  <span class="text-white h3 m-0 d-block">22</span>
                  <span class="text-white small">Oct 2019</span>
                </div>

                <div>
                  <div class="mb-3">
                    <span class="mr-3"> <span class="icon-clock-o mr-2 text-muted"></span>9:30 AM &mdash; 11:30 AM</span>
                    <span> <span class="icon-room mr-2 text-muted"></span>surat gujarat</span>
                  </div>
                  <h3><a href="single.html">Sustainable Projects</a></h3>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="event-29191 mb-5">
              <a href="#" class="d-block mb-3"><img src="images/img_2.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="px-3 d-flex">

                <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                  <span class="text-white h3 m-0 d-block">22</span>
                  <span class="text-white small">Oct 2023</span>
                </div>

                <div>
                  <div class="mb-3">
                    <span class="mr-3"> <span class="icon-clock-o mr-2 text-muted"></span>9:30 AM &mdash; 11:30 AM</span>
                    <span> <span class="icon-room mr-2 text-muted"></span>adajan surat</span>
                  </div>
                  <h3><a href="single.html">Educational Workshops</a></h3>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="donateusmod" class="site-section bg-image overlay-primary" style="background-image: url('images/img_1.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-md-6">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid shadow">
          </div>
          <div class="col-md-6">
            <div class="bg-white h-100 p-4 shadow">
              <h3 class="mb-4 text-cursive">Donate Now</h3>
              <form action="" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name" required >
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" required >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="amt" placeholder="Amount in rupee" required >
                </div>
                <div class="form-group">
                  <input type="submit" value="Donate Now" name="submit" class="btn btn-primary" required >
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<style>
   table {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
      border: 2px solid #00a651;
  }

  th, td {
      border: 1px solid #ddd;
      padding: 4px;
      text-align: left;
  }

  th {
      background-color: #00a651;
      color: #fff;
  }

  tr:nth-child(even) {
      background-color: #f2f2f2;
  }
</style>
    <div id="doantepagination" class="site-section">
      <div class="container">
        <div class="row d-md-flex cta-20101 align-self-center bg-light p-5">
            <div class="col-md-12 ">
              <div class=""><h2 class="text-cursive">Donation Details till now</h2></div>
            </div>
            <div class="col-md-12">
              <?php
               $results_per_page = 5;
               $sql = "SELECT name, email, amt FROM don_details";
               $result = mysqli_query($conn, $sql);
               $number_of_results = mysqli_num_rows($result);
               $number_of_pages = ceil($number_of_results / $results_per_page);

               if (!isset($_GET['page'])) {
                   $page = 1;
               } else {
                   $page = $_GET['page'];
               }
           
               $this_page_first_result = ($page - 1) * $results_per_page;
           
               $sql = "SELECT name, email, amt FROM don_details LIMIT $this_page_first_result, $results_per_page";
               $result = mysqli_query($conn, $sql);
               if (mysqli_num_rows($result) > 0) {
                   echo '<table id="donationTable">';
                   echo '<thead>';
                   echo '<tr>';
                   echo '<th onclick="sortTable(0)" width="10%">Sr. No. <svg style="float:right;margin:5px 10px 0px 0px;" xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg></th>';
                   echo '<th onclick="sortTable(1)" width="30%">Name <svg style="float:right;margin:5px 10px 0px 0px;" xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg></th>';
                   echo '<th onclick="sortTable(2)" width="40%">Email <svg style="float:right;margin:5px 10px 0px 0px;" xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg></th>';
                   echo '<th onclick="sortTable(3)" width="20%">Amount ( ₹ ) <svg style="float:right;margin:5px 10px 0px 0px;" xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg></th>';
                   echo '</tr>';
                   echo '</thead>';
                  echo '<tbody>';
                   $sr_no = $this_page_first_result + 1;
                   while ($row = mysqli_fetch_assoc($result)) {
                       echo '<tr>';
                       echo '<td style="text-align:center;">' . $sr_no . '</td>';
                       echo '<td>';
                       if (!empty($row["name"])) {
                           echo $row["name"];
                       } else {
                           echo '--';
                       }
                       echo '</td>';
                       echo '<td>';
                       if (!empty($row["email"])) {
                           echo $row["email"];
                       } else {
                           echo '--';
                       }
                       echo '</td>';
                       echo '<td>';
                       if (!empty($row["amt"])) {
                           echo $row["amt"];
                       } else {
                           echo '--';
                       }
                       echo '</td>';
                       echo '</tr>';
                       $sr_no++;
                   }
           
                   echo '</tbody>';
                  echo '</table>';
                   echo '<div class="mt-4">';
                   for ($page = 1; $page <= $number_of_pages; $page++) {
                       echo '<a href="?page=' . $page . ' #doantepagination" class="btn btn-secondary mr-2">' . $page . '</a>';
                   }
                   echo '</div>';
               } else {
                   echo "No records found";
               }
               mysqli_close($conn);
              ?>
              </div>
            </div>
        
      </div>
    </div>
    
    <?php
    include "footer.php";
    ?>

    </div>
    <script>
     function sortTable(n) {
          var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
          table = document.getElementById("donationTable");
          switching = true;
          dir = "asc"; // Set the sorting direction to ascending
  
          while (switching) {
              switching = false;
              rows = table.getElementsByTagName("tr");
  
              for (i = 1; i < (rows.length - 1); i++) {
                  shouldSwitch = false;
  
                  x = rows[i].getElementsByTagName("td")[n];
                  y = rows[i + 1].getElementsByTagName("td")[n];
  
                  if (dir === "asc") {
                      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                          shouldSwitch = true;
                          break;
                      }
                  } else if (dir === "desc") {
                      if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                          shouldSwitch = true;
                          break;
                      }
                  }
              }
  
              if (shouldSwitch) {
                  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                  switching = true;
                  switchcount++;
              } else {
                  if (switchcount === 0 && dir === "asc") {
                      dir = "desc";
                      switching = true;
                  }
              }
          }
      }
  </script>
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