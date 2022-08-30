<?php
$sname = "localhost";
$uname = "root";
$password = "";

$dbname = "valourWD";
$conn = mysqli_connect($sname,$uname,$password,$dbname);
if (!$conn) {
    echo "error";
    exit();
}


if (isset($_POST["blog_submit_btn"])) {
  $file = $_FILES['file'];

  $name = $_FILES['file']['name'];
  $tmp = $_FILES['file']['tmp_name'];
  $type = $_FILES['file']['type'];
  $err = $_FILES['file']['error'];
  $size = $_FILES['file']['size'];
  $description= $_POST["description"];
  $ext = explode('.',$name);
  $newext = strtolower(end($ext));

  $allow = array('mp4');
   if (in_array($newext,$allow)) {
      if ($err === 0) {
             $new = uniqid('valourWD',true).'.'.$newext;
             $dest = 'uploads/'.$new;
           move_uploaded_file($tmp,$dest);
// insert into database
$sql = "INSERT INTO blog (blog_video, blog_description) VALUES ('$new', '$description');";
  mysqli_query($conn,$sql);
         header('Location:admin.php?errors= upload successful');
       
      } else {
        header('Location:admin.php?error= couldnt upload file');
      }

   } else {
      header('Location:admin.php?error=sorry you cannot upload this file type');
   }


   
}
   
   
   
   

   if (isset($_POST["portfolio_submit_btn"])) {
      $file = $_FILES['file'];
    
      $name = $_FILES['file']['name'];
      $tmp = $_FILES['file']['tmp_name'];
      $type = $_FILES['file']['type'];
      $err = $_FILES['file']['error'];
      $size = $_FILES['file']['size'];
      $description= $_POST["description"];
      $pname= $_POST["pname"];
      $link= $_POST["link"];


      $ext = explode('.',$name);
      $newext = strtolower(end($ext));
    

          if ($err === 0) {
                 $new = uniqid('valourWD',true).'.'.$newext;
                 $dest = 'uploads/'.$new;
               move_uploaded_file($tmp,$dest);
    // insert into database
    $sql = "INSERT INTO portfolio (portfolio_picture,portfolio_name, portfolio_description , portfolio_link) VALUES ('$new','$pname', '$description', '$link');";
      mysqli_query($conn,$sql);
             header('Location:admin.php?errors= uploaded successfully to portfolio DB');
          } else {
            header('Location:admin.php?error= couldnt upload file');
          }
    
       
    
       
    }
       
