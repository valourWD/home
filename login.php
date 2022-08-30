<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Affordable and Profesional Web Design">
    <meta name="keywords" content="Web Design, Affordable Web Design, Professional Web Design">
    <meta name="author" content="Adebayo Destiny Ehrumese">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valour Web Design | LOGIN</title>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body class=" text-light" onload=" load_animations()">
<div class="animate_button" id="mydiv">

 
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
 <br><br><br>
    <div class="text-light my-md-3 text-center j mx-md-5 w-md-50 mb-5 p-md-3">
        <form class="p-md-5 mx-md-5 mb-5 justify-content-center" action="admin.php" method="post">
          <br>
          <p class="text-capitalize h3 text-danger">LOGIN</p>
            <div class="form-floating">
             <input type="text" name="name" id="input" class="form-control my-3 w-100 " placeholder="UserName">
             <label for="name">UserName</label>
            </div><br>
           <div class="form-floating">
            <input type="password" name="password" id="input" class="form-control my-3 w-100" placeholder="Password">
            <label for="email">Password</label>
           </div>
        
             <br>
            <button name="login_submit_btn" type="submit" class="btn btn-success w-50">login</button>
        </form>
        </div>
 <footer class="text-capitalize text-start p-md-5" id="footer_bg">

  

                <div class="text-center text-secondary m-5">&copy all rights reserved valour web design   2022 - 2022 <?php echo date("Y") ?> </div>


</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/popper.min.js"></script>

<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script>

var myvar;
function load_animations() {
     
     myvar =  setTimeout(showpage,3000 );}
    function showpage() {
        document.getElementById("loader").style.display="none";
        document.getElementById("mydiv").style.display="block";
    }

   </script><div id="loader"></div>
</body>
</html>