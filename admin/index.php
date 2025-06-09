<?php
include "conn.php";
?>
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge"> 
    <meta name="viewport" 
          content="width=device-width,  
                   initial-scale=1.0"> 
    <title>Administrator</title> 
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="responsive.css"> 
</head> 
  <style>
    
  </style>
<body> 
    
    <!-- for header part -->
    <header> 
  
        <div class="logosec"> 
            <div class="logo">HDF</div> 
            <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" 
                id="menuicn" 
                alt="menu-icon"> 
        </div> 
  
        <!-- <div class="searchbar"> 
            <input type="text" 
                   placeholder="Search"> 
            <div class="searchbtn"> 
              <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn" 
                    alt="search-icon"> 
              </div> 
        </div>  -->
  
        <!-- <div class="message"> 
            <div class="circle"></div> 
            <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" 
                 class="icn" 
                 alt=""> 
            <div class="dp"> 
              <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" 
                    alt="dp"> 
              </div>  -->
        </div> 
  
    </header> 
  
    <div class="main-container"> 
        <div class="navcontainer"> 
            <nav class="nav"> 
                <div class="nav-upper-options"> 
                    <div class="nav-option option1"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" 
                            alt="dashboard"> 
                        <h3> Dashboard</h3> 
                    </div> 
  
                    <!-- <div class="option2 nav-option"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img" 
                            alt="articles"> 
                        <h3> Articles</h3> 
                    </div> 
  
                    <div class="nav-option option3"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                            class="nav-img" 
                            alt="report"> 
                        <h3> Report</h3> 
                    </div> 
  
                    <div class="nav-option option4"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                            class="nav-img" 
                            alt="institution"> 
                        <h3> Institution</h3> 
                    </div> 
  
                    <div class="nav-option option5"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img" 
                            alt="blog"> 
                        <h3> Profile</h3> 
                    </div> 
  
                    <div class="nav-option option6"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                            class="nav-img" 
                            alt="settings"> 
                        <h3> Settings</h3> 
                    </div> 
  
                    <div class="nav-option logout"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img" 
                            alt="logout"> 
                        <h3>Logout</h3> 
                    </div> 
   -->
                </div> 
            </nav> 
        </div> 
        <div class="main"> 
  
            <div class="searchbar2"> 
                <input type="text" 
                       name="" 
                       id="" 
                       placeholder="Search"> 
                <div class="searchbtn"> 
                  <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn" 
                        alt="search-button"> 
                  </div> 
            </div> 
  
            <div class="box-container"> 
  
                <div class="box box1"> 
                    <div class="text"> 
                    <h2 class="topic-heading">
                    <?php
                      $sql = "SELECT COUNT(*) AS entry_count FROM don_details";
                      $result = mysqli_query($conn, $sql);
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            echo $row['entry_count'];
                        } else {

                            echo "Error: " . mysqli_error($conn);
                        }
                     ?>
                  </h2>
                  <h2 class="topic">Total Donations</h2>
                </div> 
                <img src= "images/inr-removebg-preview.png" class="img_nobg" alt="Views"> 
              </div>
              <div class="box box2"> 
                    <div class="text"> 
                        <h2 class="topic-heading"><?php
                      $sql = "SELECT COUNT(*) AS entry_count FROM donar_revw";
                      $result = mysqli_query($conn, $sql);
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            echo $row['entry_count'];
                        } else {

                            echo "Error: " . mysqli_error($conn);
                        }
                     ?></h2> 
                        <h2 class="topic">Contact Received</h2> 
                    </div> 
  
                    <img src= "images/chat-1873543_640 (1)_prev_ui.png" class="msg_nobg" alt="comments"> 
                </div> 
                <div class="box box3"> 
                    <div class="text"> 
                        <h2 class="topic-heading"><?php
                      $sql = "SELECT COUNT(*) AS entry_count FROM donar_revw";
                      $result = mysqli_query($conn, $sql);
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            echo $row['entry_count'];
                        } else {

                            echo "Error: " . mysqli_error($conn);
                        }
                     ?></h2> 
                        <h2 class="topic">---</h2> 
                    </div> 
  
                    <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png" 
                         alt="likes"> 
                </div> 
                <div class="box box4"> 
                    <div class="text"> 
                        <h2 class="topic-heading">70</h2> 
                        <h2 class="topic">Published</h2> 
                    </div> 
  
                    <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published"> 
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
            <div class="report-container"> 
                <div class="report-header"> 
                    <h1 class="recent-Articles">Recent Contact Received</h1> 
                    <!-- <button class="view">View All</button>  -->
                </div> 
  
                <?php
               $results_per_page = 25;
               $sql = "SELECT fname, lname, adds, msg FROM donar_revw";
               $result = mysqli_query($conn, $sql);
               $number_of_results = mysqli_num_rows($result);
               $number_of_pages = ceil($number_of_results / $results_per_page);

               if (!isset($_GET['page'])) {
                   $page = 1;
               } else {
                   $page = $_GET['page'];
               }
           
               $this_page_first_result = ($page - 1) * $results_per_page;
           
               $sql = "SELECT fname, lname, adds, msg FROM donar_revw LIMIT $this_page_first_result, $results_per_page";
               $result = mysqli_query($conn, $sql);
               if (mysqli_num_rows($result) > 0) {
                   echo '<table id="donationTable">';
                   echo '<tr>';
                   echo '<th onclick="sortTable(0)" >Sr. No. <svg style="float:right;margin:5px 10px 0px 0px;" xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg></th>';
                   echo '<th onclick="sortTable(1)" >First Name <svg style="float:right;margin:5px 10px 0px 0px;" xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg></th>';
                   echo '<th onclick="sortTable(2)" >Last Name <svg style="float:right;margin:5px 10px 0px 0px;" xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg></th>';
                   echo '<th onclick="sortTable(3)" >address <svg style="float:right;margin:5px 10px 0px 0px;" xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg></th>';
                   echo '<th onclick="sortTable(3)" width="20%">Message <svg style="float:right;margin:5px 10px 0px 0px;" xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"/></svg></th>';
                   echo '</tr>';
                   $sr_no = $this_page_first_result + 1;
                   while ($row = mysqli_fetch_assoc($result)) {
                       echo '<tr>';
                       echo '<td style="text-align:center;">' . $sr_no . '</td>';
                       echo '<td>';
                       if (!empty($row["fname"])) {
                           echo $row["fname"];
                       } else {
                           echo '--';
                       }
                       echo '</td>';                   
                       echo '<td>';
                       if (!empty($row["lname"])) {
                           echo $row["lname"];
                       } else {
                           echo '--';
                       }
                       echo '</td>';
                       echo '<td>';
                       if (!empty($row["adds"])) {
                           echo $row["adds"];
                       } else {
                           echo '--';
                       }
                       echo '</td>';
                       echo '<td>';

                      if (!empty($row["msg"])) {
                      echo '<textarea cols="30" rows="4" readonly>' . $row["msg"] . '</textarea>';
                      } else {
                        echo '--'; 
                      }echo '</td>';
                       echo '</tr>';
                       $sr_no++;
                   }
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
  
    <script src="./index.js"></script> 
</body> 
</html>