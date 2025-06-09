<?php 
$conn = mysqli_connect("localhost", "root", "", "practical_6");
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
?>