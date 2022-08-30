<?php session_start();
if (isset($_GET['title'])) {
     include "database.php"; 
     $title  = mysqli_real_escape_string($conn, $_GET['title']);
      $sth = " DELETE  FROM blog  WHERE blog_video = '$title'";
   $connt = mysqli_query($conn,$sth);
     if (!$connt) {
         header("Location:admin.php?error=Unable To Delete"); 
     }else {
        header("Location:admin.php?errors=Deleted Successfully"); 
     }}

   if (isset($_GET['titles'])) {
      include "database.php"; 
      $title  = mysqli_real_escape_string($conn, $_GET['titles']);
       $sth = " DELETE  FROM portfolio  WHERE portfolio_picture = '$title'";
    $connt = mysqli_query($conn,$sth);
      if (!$connt) {
          header("Location:admin.php?error=Unable To Delete"); 
      }else {
         header("Location:admin.php?errors=Deleted Successfully"); 
      }}else {
       header("Location:index.php?"); 
    }