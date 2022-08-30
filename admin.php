<?php session_start();
        
        if (isset($_POST["login_submit_btn"])) {
          $name= $_POST["name"];
          $password= $_POST["password"];
          
          if (empty($name) || empty($password) ) {
          header("Location:index.php?error=Please fill in the empty input fields!");
          } 
          else {   
          if (!preg_match("/^[a-zA-Z ]*$/",$name) ){
          header("Location:index.php?error=Only Letters Are Allowed!");
      
           } 
           else{
          if ($password != "valour123") {
          
          header("Location:login.php?error=wrong password");
      
          if ($name != "valour") {
              header("Location:login.php?error=wrong username");
          }
             
          } else{
                    
          
        
         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Affordable and Profesional Web Design">
    <meta name="keywords" content="Web Design, Affordable Web Design, Professional Web Design">
    <meta name="author" content="Adebayo Destiny Ehrumese">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valour Web Design | Admin</title>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body class="text-light">



<?php if (isset($_GET["error"])):?>  
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>  <strong>Holy guacamole!</strong>   <?php echo $_GET["error"]; ?> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif ?>

<?php if (isset($_GET["errors"])):?> 
       <div class="alert alert-success alert-dismissible fade show" role="alert">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>  <?php echo $_GET["errors"]; ?> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif ?>
 
<div class="container-fluid">
<div class="row">
  <div class="col-md-5 text-light my-md-3 text-center mx-md-5 w-md-50 mb-5 p-md-3" id="qoutes">
      <form class="w-md-50 mx-md-5 mb-5" action="upload.php" method="post" enctype="multipart/form-data">
        <br>
        <p class="text-capitalize h3">Upload New Blog Posts</p>
          <div class="form-floating">
           <input type="file" name="file" id="input" class="form-control my-3 w-100 " placeholder="File">
           <label for="file">File</label>
          </div>
           <div class="form-floating">
              <textarea type="text" name="description" id="message" style="height:100px" class="form-control my-3 "  placeholder="Enter blog description..."></textarea>
              <label for="message">Enter blog description...</label>
          </div>
          <button name="blog_submit_btn" type="submit" class="btn btn-success w-50">Upload</button>
      </form>
      </div>



      <div class="col-md-5 text-light my-md-3 text-center mx-md-5 w-md-50 mb-5 p-md-3" id="qoutes">
      <form class="w-md-50 mx-md-5 mb-5 " action="upload.php" method="post" enctype="multipart/form-data">
        <br>
        <p class="text-capitalize h3">Upload new Portfolios</p>
          <div class="form-floating">
           <input type="file" name="file" id="input" class="form-control my-3 w-100 " placeholder="File">
           <label for="name">File</label>
          </div>
          <div class="form-floating">
           <input type="text" name="pname" id="input" class="form-control my-3 w-100 " placeholder="PortFolio name">
           <label for="name">PortFolio name</label>
          </div>
          <div class="form-floating">
          <input type="text" name="link" id="input" class="form-control my-3 w-100 " placeholder="PortFolio link">
           <label for="name">PortFolio link</label>
          </div>
           <div class="form-floating">
              <textarea type="text" name="description" id="message" style="height:100px" class="form-control my-3 "  placeholder="Enter Message..."></textarea>
              <label for="message">Enter Message...</label>
          </div>
          <button name="portfolio_submit_btn" type="submit" class="btn btn-success w-50">send</button>
          
      </form>
      </div>
</div>

<br><br><br>
<br>
<form class="w-md-50 mx-md-5 mb-5 text-center" method="post">
<div class="text-success text-capitalize text-center h3">search and delete unwanted blog files</div>
<div class="form-floating">
           <input type="search" name="search" id="input" class="form-control my-3 w-5" placeholder="File"
           value="<?php if (isset($_POST['search'])) {echo $_POST['search'];} ?>" type="search" name="search"
            placeholder="search for an item....."
            id="searchtxt" >
           
           <label for="name">Search</label>
      </div>
<input name="submit" type="submit" class="btn btn-success w-50" value="Search">
</form>
<?php  
if (empty($_POST["search"])) {
  echo " ";
}else { 
  if (!preg_match("/^[a-zA-Z1-9 ]*$/",$_POST["search"])) {
    echo "Only Letters And Numbers Are Allowed";
  }else { 
   
   if (isset($_POST["submit"])) {
include "database.php";
      $str = mysqli_real_escape_string($conn, $_POST["search"]);
      $sth = "SELECT * FROM blog  WHERE blog_description  LIKE '%$str%'";
      $result = mysqli_query($conn, $sth);
      $queryResult = mysqli_num_rows($result);

      $amount = "There Are ".$queryResult." Results";
     if ( $queryResult > 0) { ?> 
     <p class="searchresults"><?php echo $amount;  ?></p>
     <div class="row">
      <?php
       
       while ($images = mysqli_fetch_assoc($result)) {
           ?>
             <div class="row mt-5 mx-md-5 ">

            <div class="col-md-4 text-center  my-3" id="blog_boxs">
      <video src="uploads/<?= $images['blog_video']?>" id="blog_box" class="img-responsive mt-3 w-100 justify-content-center" controls></video>
    <p class="text-center py-3 px-3 text-capitalize text-dark bg-light"> <small><?= $images['blog_description']?></small></p>
                <a href="delete.php?title=<?= $images['blog_video']?>" class="text-center" ><button name="delete" class="btn btn-success w-25  text-center">Delete</button></a> <?php } ?>
  </div> 





<?php }}  }}?> 
   </div>



   <br><br><br>
<br><br><br>

  
<form class="w-md-50 mx-md-5 mb-5 text-center" method="post">
  <div class="text-success text-center text-capitalize h3">search and delete unwanted portfolio files</div>
<div class="form-floating">
           <input type="search" name="search" id="input" class="form-control my-3 w-5" placeholder="File"
           value="<?php if (isset($_POST['search'])) {echo $_POST['search'];} ?>" type="search" name="search"
            placeholder="search for an item....."
            id="searchtxt" >
           
           <label for="name">Search</label>
      </div>
<input name="submit" type="submit" class="btn btn-success w-50" value="Search">
</form>
<?php  
if (empty($_POST["search"])) {
}else { 
  if (!preg_match("/^[a-zA-Z1-9 ]*$/",$_POST["search"])) {
    echo "Only Letters And Numbers Are Allowed";
  }else { 
   
   if (isset($_POST["submit"])) {
include "database.php";
      $str = mysqli_real_escape_string($conn, $_POST["search"]);
      $sth = "SELECT * FROM portfolio  WHERE portfolio_name  LIKE '%$str%'";
      $result = mysqli_query($conn, $sth);
      $queryResult = mysqli_num_rows($result);

      $amount = "There Are ".$queryResult."Results";
     if ( $queryResult > 0) { ?> 
     <p class="searchresults"><?php echo $amount;  ?></p>
     <div class="row">
     <div class="row mt-5 mx-md-5" >
      <?php
       
       while ($pimages = mysqli_fetch_assoc($result)) {
           ?>
        <div class="col-md-4 text-center ">
        <div id="hover-item"  class="bg-success text-left">
          <div class="card-header"><?= $pimages['portfolio_name']?></div>
             <div class="card-body"><?= $pimages['portfolio_description']?></div>
               
                    <div class="row mx-2">
                       <a href="<?= $pimages['portfolio_link']?>"><button class="btn btn-outline-warning w-100 text-center m-2 btn-sm">Visit</button></a>
                        <a class="text-center" href="#services"><button class="btn btn-light w-50 mx-auto text-center btn-sm">Hire Me</button></div></a>
        </div>
        <img src="uploads/<?= $pimages['portfolio_picture']?>" alt="photo" id="portfolio_pic" class="img-responsive img-fluid" >
                        <a href="delete.php?titles=<?= $pimages['portfolio_name']?>" class="text-center" ><button name="delete" class="btn btn-success w-50 text-center">Delete</button></a>

         </div>
         <?php  } }}}} ?>
            </div>

          </div>      
  




 <footer class="text-capitalize text-start p-md-5" id="footer_bg">

                <div class="text-center text-secondary m-5">&copy all rights reserved valour web design   2022 - 2022 <?php echo date("Y") ?> </div>


</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/popper.min.js"></script>

<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
<?php
}  }}}
else {
  header('Location:login.php');
}