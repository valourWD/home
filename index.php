<?php session_start();
include "database.php";
include "validation.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Affordable and Profesional Web Design">
    <meta name="keywords" content="Web Design, Affordable Web Design, Professional Web Design">
    <meta name="author" content="Adebayo Destiny Ehrumese">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valour Web Design | Welcome</title>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="jquery-3.6.0.min.js"></script> 
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body class=" text-light">
<a href="#home_bg" id="nav" class="bg-light m-3 text-dark text-center pt-3">⬆</a>

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
 <section  id="home_bg">
<nav class="navbar navbar-expand-lg mx-2 " >
<br><br>
  <div class="container-fluid">
  <br><br>

      <a class="navbar-brand text-light" href="#">
    <img id="logo"  src="image/favicon.png" alt="photo">
    <small><span class="valour h5 ">Valour</span> WD
</small>
</a>

     <button class="navbar-toggler btn   btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list text-light" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>  
  </button>

 

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-primary" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="#services"> Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="#about"> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="#portfolio"> Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="#blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="#contact">Contact</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            language
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"> German</a></li>
            <li><a class="dropdown-item" href="services.html"> Spanish</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"> English</a></li>
          </ul>
        </li> -->
      </ul>
<div class="my-3 ">
<a  href="https://www.facebook.com/destiny.adebayo.12"><i  class="fab fa-facebook text-light"></i></a>
<a class="mx-2"  href="https://twitter.com/valour2005?t=XKc5pnRSbpoYL5y226iPKA&s=09"><i  class="fab fa-twitter text-light"></i></a>
<a  class="mx-2" href="https://wa.me/+2348121872520"><i  class="fab fa-whatsapp text-light"></i></a>
<a  class="mx-2" href="https://www.instagram.com/invites/contact/?i=1hp01z2tvdjye&utm_content=lucazii"><i class="fab fa-instagram text-light"></i></a>
<a  class="mx-2" href="https://github.com/Valour2005"><i class="fab fa-github text-light"></i></a>
<a  class="mx-2" href="https://t.me/Valour11"><i class="fab fa-telegram text-light"></i></a>



</div>

       <a href="login.php"> <button class="btn btn-outline-success " type="submit">Login</button></a>
      
    </div>
  </div>
</nav>

 
<div class="container-fluid">

<div class="row mt-md-5">
  
<div id="mypic_container" class="col-md-5 text-center mb-5 " >
  <div id="mypic" class="text-center mx-auto">  </div>
<!-- <img id="mypic" class="img-responsive mt-5" src="image/showcase.jpg" alt="profile pic"> -->

<p class="text-info text-capitalize text-center mx-5 mt-3">
  Hi! am Destiny a young web developer that loves to build interesting and dynamic websites
</p>
<a href="image/logo_css.png">
<a href="#services"><button class="btn btn-outline-info w-50">Hire Me</button></a>
</a>
</div>

<div class="col-md-7" id="showcase">

<h2>
    affordable professional web design
</h2>
<p class="mx-5">looking for where to get that affordable and professional web design? <br>
  then look no further because valour web design's got you covered <br>
   i offer the best in designing websites,mobile applictaions softwares, graphics and lots more!
</p>
<a href="#portfolio"><button class="btn btn-outline-success w-50 my-5 text-capitalize" type="download">view portfolio ➡</button></a>

 <h2 class="text-primary mt-5">lets get connected...</h2>

 <div class="mx-5 ">
  <a  href="https://www.facebook.com/destiny.adebayo.12"><i  class="fab fa-facebook text-light"></i></a>
  <a class="mx-2"  href="https://twitter.com/valour2005?t=XKc5pnRSbpoYL5y226iPKA&s=09"><i  class="fab fa-twitter text-light"></i></a>
  <a  class="mx-2" href="https://wa.me/+2348121872520"><i  class="fab fa-whatsapp text-light"></i></a>
  <a  class="mx-2" href="https://www.instagram.com/invites/contact/?i=1hp01z2tvdjye&utm_content=lucazii"><i class="fab fa-instagram text-light"></i></a>
  <a  class="mx-2" href="https://github.com/Valour2005"><i class="fab fa-github text-light"></i></a>
  <a  class="mx-2" href="https://t.me/Valour11"><i class="fab fa-telegram text-light"></i></a>

</div>
<br>

<!-- 
<div class="row text-capitalize px-md-5">
  <div class="col-md-6 h5 text-center mt-1"> subscribe to my news letter</div>
  <div id="inputs" class="col-md-6 text-center"> 
      <form action="#" method="post">
          <div class="row">
          <input class="col-md-8" type="email" name="text" placeholder="Enter E-mail......">
          <button class="col-md-4 btn btn-success btn-small" type="submit">Subscribe</button>
      </form>
  </div>
</div>       -->
  </div>
</div>


<br>
</section>
<section id="services" class="mt-5 mb-5 ">
<br><br>
  <h1 class="h1 text-uppercase text-center my-5 ">my <span class="text-success">services</span> </h1>


<div class="row mx-3">
<div class="col-md-6 text-capitalize md-text-center mx-md-5">
<div class="col-md-12  text-light px-3 py-3 my-3 md-text-center">

<p  class="h5  my-2 text-capitalize text-info ">website design</p>
Hi! looking for where to get that amazing dream websites you wish for? <br>
worry no more because i've got you covered. <br>

i can help get you that sweet looking dynamic website at an Affordable price
send me a message using the form below this page. <br> <br>
</div>

<div class="col-md-12  text-light px-3 py-3 my-3 md-text-center">
<p  class="h5  my-2 text-capitalize text-info ">website management</p>
Hi! looking for who to help manage your websites? <br>
look no further because valour web design is a suitable pioneer for this job <br>
you can send us your informations using the form below this page. <br> <br>
</div>
<div class="col-md-12  text-light px-3 py-3 my-3 md-text-center">
<p  class="h5  my-2 text-capitalize text-info ">website hosting</p>
Hi! looking for who to help host your amazing websites? <br>
then you've got the right man for the job, i can help host that amazing website of yours with high immunity 
from hackers and also protect your website with the best security, contact me using the form below . <br> <br>
</div>
</div>

<div class="col-md-4 text-light my-3 text-center mx-md-5" id="qoute" ><br>
<p class="h4 text-success "> <b> Hire Me! </b></p>




<form class="w-md-50" action="validation.php" method="post">
    <div class="form-floating">
    <input type="text" name="name" id="input" class="form-control my-3 w-100 " placeholder="Name" required>
    <label for="name">Name</label>
    </div>
<div class="form-floating">
    <input type="email" name="email" id="input" class="form-control my-3 w-100" placeholder="E-mail" required>
    <label for="email">E-mail</label>
  </div>

    <div class="form-floating">
        <input 
        type="text"
        name="message" 
        id="message" 
        required
        style="height:100px"
        class="form-control my-3 " 
        placeholder="Enter Message..."
>
        <label for="message">Enter Message...</label>
</div>
    <button name="service_submit_btn" type="submit" class="btn btn-outline-success w-50">send</button>
</form>






</div>
</div>
</div>
</section>
<section id="about" class="mt-5 mb-5">
  <br><br>
  <h1 class="h1 text-uppercase text-center my-5">about <span class="text-success">me</span> </h1>
  <div class="row mx-3 my-5">
  
  <div class="col-md-6 mb-5">
  <h3 class="h3 text-capitalize"> information about me
  </h3>
  
  <div class="mt-3">Adebayo Destiny Ehrumese is an 18years old male programmer who has had many experiences in the web development field from age 14,
    he has built many world class websites using the latest technologies available. </div>
  <div class="mt-5">
   He is a TO BE masters degree holder in computer science currently studying  in the Federal University Of Petroleum Resource Effurun Delta state, Nigeria
   He was a self taught web designer until he attained his degree in computer science.
  </div>
  
  <div class="row text-center  my-3">
  <div class="col-md-6 my-2">
  <a href="#"><button class="btn btn-outline-success w-100 col-4" type="download">Download CV</button></a>
  </div>
  <div class="col-md-6 my-2">
  <a href="#blog"><button class="btn btn-outline-success w-100 col-4" type="download">Hire Me</button></a>
  </div>
  
  </div>
  </div>
  
  <div class="col-md-6 ">
  <div class="row">
  
  <div id="about_cards" class="col-md-5 text-left mx-md-5 my-3 p-3"> <b class="h1 text-success">650+ </b>
  <div class="card-body text-capitalize mx-3">--- projects completed</div></div>
  <br><br>
  <div id="about_cards" class="col-md-5 text-left px-3 my-3 p-3"> <b class="h1 text-success">400+ </b>
  <div class="card-body text-capitalize mx-3">--- happy clients</div></div></div>
  
  <div class="row my-5">
  <div id="about_cards" class="col-md-5 text-left mx-md-5 my-3 p-3"> <b class="h1 text-success">5+ </b>
  <div class="card-body text-capitalize mx-3">---years of  experience</div></div>
  <br><br>
  
  <div id="about_cards" class="col-md-5 text-left  px-3 my-3 p-3"> <b class="h1 text-success">200+ </b>
  <div class="card-body text-capitalize mx-3">--- client revievs</div></div>
  </div>
  
  </div>
  
  </div>
  
  
  
  <h1 class="h1 text-uppercase text-center my-5">my <span class="text-success">skills</span> </h1>
  
  <div class="row justify-content-center my-5">
  
  <div class="col-4">
  HTML5 <span class="text-success">85%</span> 
  <div class="progress ">
  <div class="progress-bar  bg-success" role="progressbar" arial-valuenow="85" arial-valuemin="0" arial-valuemax="100" style="width:85%"> 
  </div>
  </div>
  </div>
  
  <div class="col-4">
  CSS3  <span class="text-success">90%</span> 
  <div class="progress ">
  <div class="progress-bar  bg-success" role="progressbar" arial-valuenow="90" arial-valuemin="0" arial-valuemax="100" style="width:90%"> 
  </div>
  </div>
  </div>
  </div>
  
  
  <div class="row justify-content-center my-5">
  
  <div class="col-4">
  JS <span class="text-success">75%</span> 
  <div class="progress ">
  <div class="progress-bar  bg-success" role="progressbar" arial-valuenow="75" arial-valuemin="0" arial-valuemax="100" style="width:75%"> 
  </div>
  </div>
  </div>
  
  <div class="col-4">
  PHP  <span class="text-success">80%</span> 
  <div class="progress ">
  <div class="progress-bar  bg-success" role="progressbar" arial-valuenow="80" arial-valuemin="0" arial-valuemax="100" style="width:80%"> 
  </div>
  </div>
  </div>
  </div>
  
  
  <div class="row justify-content-center my-5">
  
  <div class="col-4">
  Bootstap<span class="text-success">85%</span> 
  <div class="progress ">
  <div class="progress-bar  bg-success" role="progressbar" arial-valuenow="85" arial-valuemin="0" arial-valuemax="100" style="width:85%"> 
  </div>
  </div>
  </div>
  
  <div class="col-4">
  SQL  <span class="text-success">70%</span> 
  <div class="progress ">
  <div class="progress-bar  bg-success" role="progressbar" arial-valuenow="70" arial-valuemin="0" arial-valuemax="100" style="width:70%"> 
  </div>
  </div>
  </div>
  </div>
  <br><br>
</section>

<section id="blog" class="mt-5 mb-5 bg-danger">
<br><br>

  <h1 class="h1 text-uppercase text-center my-md-5 my-3">my <span class="text-success">blog</span> </h1>
<form method="post" class="text-center text-light "  >
  <input type="search" name="search" class="w-25 bg-none border-none input-primary" id="input" placeholder="search...">
  <button name="search_btn" class="btn btn-primary">Search</button>
</form>

<div class="row mt-5 mx-md-5 ">

  <?php  

   if (isset($_POST["search_btn"])) {
      $str = mysqli_real_escape_string($conn, $_POST["search"]);
      $sth = "SELECT * FROM blog  WHERE blog_description  LIKE '%$str%'";
      $result = mysqli_query($conn, $sth);
      $queryResult = mysqli_num_rows($result);
      $amount = "There Are ".$queryResult." Search Results";
      if ( $queryResult > 0) { ?> 
      <p class="text-center text-success"><?php echo $amount;  ?></p>
       <?php
        while ($images = mysqli_fetch_assoc($result)) {
            ?>
  <div class="col-md-4 text-center  my-3" id="blog_boxs">
      <video src="uploads/<?= $images['blog_video']?>" id="blog_box" class="img-responsive mt-3 w-100 justify-content-center" controls></video>
    <p class="text-center py-3 px-3 text-capitalize text-dark bg-light"> <small><?= $images['blog_description']?></small></p>
  </div>
  <?php }}else {?> 
    <p class="text-center text-success">Not Available</p>
  <?php
  }}  ?> 
  </div>

</div>
    </div>


<div id="available">


  <div class="row mt-5 mx-md-5 ">

  <?php 
                              $sql = "SELECT * FROM blog ORDER BY blog_id DESC";
                              $res = mysqli_query($conn,$sql);

                              if (mysqli_num_rows($res) > 0) {
                                while ($images = mysqli_fetch_assoc($res)) { ?>
  <div class="col-md-4 text-center  my-3" id="blog_boxs">
      <video src="uploads/<?= $images['blog_video']?>" id="blog_box" class="img-responsive mt-3 w-100 justify-content-center" controls></video>
    <p class="text-center py-3 px-3 text-capitalize text-dark bg-light"> <small><?= $images['blog_description']?></small></p>
  </div>

  <?php  }
   } else{ ?> <p class="h4 text-center text-secondary text-capitalize">oops no blogs available yet</p>  <?php    } ?></div>

    </div>           <button id="show" onclick="show()" ondblclick="hide()" class="btn btn-info w-25 mx-5" >More  ⬇</button>

        </div>
  
        </div>                      



      </section>

<section id="portfolio" class="mt-5 mb-5">
<br><br>
  <div class="container-fluid">
    <h1 class="h1 text-uppercase text-center">my <span class="text-success">portfolio</span> </h1>
    <p class="text-capitalize text-center">here are some of my work that i've done in various programming languages <br>
      <i class="text-capitalize text-center text-info">click on any image to see More!!!</i>
    </p>
    <div  id="availables">
    <div class="row mt-5 mx-md-5" >
                            <?php 
                              $sql = "SELECT * FROM portfolio ORDER BY portfolio_id DESC";
                              $res = mysqli_query($conn,$sql);
                              if (mysqli_num_rows($res) > 0) {
                                while ($pimages = mysqli_fetch_assoc($res)) { ?>
       <div class="col-md-4 text-center ">
        <div id="hover-item"  class="bg-success text-left">
          <div class="card-header"><?= $pimages['portfolio_name']?></div>
             <div class="card-body"><?= $pimages['portfolio_description']?></div>
               
                    <div class="row mx-2">
                       <a href="<?= $pimages['portfolio_link']?>"><button class="btn btn-outline-warning w-100 text-center m-2 btn-sm">Visit</button></a>
                        <a class="text-center" href="#services"><button class="btn btn-light w-50 mx-auto text-center btn-sm">Hire Me</button></div></a>
        </div>
        <img src="uploads/<?= $pimages['portfolio_picture']?>" alt="photo" id="portfolio_pic" class="img-responsive img-fluid" >
         </div>   

         <?php  } }else{ ?> <p class="text-center h4 text-secondary text-capitalize">oops no portfolio available yet</p>  <?php    } ?>
            </div>
           </div>
             <button id="shows" onclick="shows()" ondblclick="hides()" class="btn btn-info w-25 mx-5" >More   ⬇</button>

          </div>      
</div>                      

        </section>



<section id="contact" class="mt-5 mb-5">
  <br><br>
  <h1 class="h1 text-uppercase text-center my-md-5 my-3"> <span class="text-success">contact</span> me </h1>

  <div class="row mx-3 justify-content-center"> 
       <div class="col-md-6">
          <p class="h3 text-capitalize m-md-2" >contact me here</p>
          <p>Hi!  every information you may need inorder to contact me is available below, you can also send me an email message 
            using the form below this page, am looking forward to meeting you and ofcourse working with you .</p>
  
  
  
              <div class="row text-capitalize mt-5 text-small">
  <div class="col-7">
   
    
  </div>
  </div>
  
  
  <div class="table-responsive text-center text-light">
    <table class="table  text-light justify-content-center text-capitalize align-items-center">
        <tr>
            <td class="text-start w-100"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
      </svg> phone:</td>
            <td class="text-end">+2348121872520</td>
        </tr>
        <tr>
          <td class="text-start w-100">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers" viewBox="0 0 16 16">
        <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
      </svg>language:</td>
          <td class="text-end">english</td>
      </tr>
      <tr>
        <td class="text-start pt-3 w-100">  
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
      </svg> email:</td>
        <td class="text-end text-lowercase">adebayodestiny217@gmail.com</td>
    </tr>
    </table>
  </div>
  
  
  <div class="mb-5 ">
    <a  href="https://www.facebook.com/destiny.adebayo.12"><i  class="fab fa-facebook text-light"></i></a>
    <a class="mx-2"  href="https://twitter.com/valour2005?t=XKc5pnRSbpoYL5y226iPKA&s=09"><i  class="fab fa-twitter text-light"></i></a>
    <a  class="mx-2" href="https://wa.me/+2348121872520"><i  class="fab fa-whatsapp text-light"></i></a>
    <a  class="mx-2" href="https://www.instagram.com/invites/contact/?i=1hp01z2tvdjye&utm_content=lucazii"><i class="fab fa-instagram text-light"></i></a>
    <a  class="mx-2" href="https://github.com/Valour2005"><i class="fab fa-github text-light"></i></a>
    <a  class="mx-2" href="https://t.me/Valour11"><i class="fab fa-telegram text-light"></i></a>
    
    </div>
      </div>
  
  <div class="col-md-5 text-light my-md-3 text-center mx-md-5 w-md-50 mb-5 p-md-3" id="qoutes">
      <form class="w-md-50 mx-md-5 mb-5" action="validation.php" method="post">
        <br>
        <p class="text-capitalize h3">get in touch</p>
          <div class="form-floating">
           <input type="text" name="name" id="input" class="form-control my-3 w-100 " placeholder="Name">
           <label for="name">Name</label>
          </div>
         <div class="form-floating">
          <input type="email" name="email" id="input" class="form-control my-3 w-100" placeholder="E-mail">
          <label for="email">E-mail</label>
         </div>
      
           <div class="form-floating">
              <textarea type="text" name="message" id="message" style="height:100px" class="form-control my-3 "  placeholder="Enter Message..."></textarea>
              <label for="message">Enter Message...</label>
          </div>
          <button name="contact_submit_btn" type="submit" class="btn btn-success w-50">send</button>
      </form>
      </div>
      </div>
    
  </div>
  
</section>
 <footer class="text-capitalize text-start p-md-5" id="footer_bg">

  

                <div class="text-center text-secondary m-5">&copy all rights reserved valour web design   2022 - 2022 <?php echo date("Y") ?> </div>


</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
<script>
  var btn = document.getElementById("show");
  var btns = document.getElementById("shows");

  var availables = document.getElementById("available");
  var availables = document.getElementById("availables");

function show() {
available.style.height="auto";
document.getElementById("show").innerHTML=" Less ✖";
}
function hide() {
available.style.height="580px";
document.getElementById("shows").innerHTML=" More   ⬇";

}
function shows() {
availables.style.height="auto";
document.getElementById("shows").innerHTML=" Less ✖";
}
function hides() {
availables.style.height="580px";
document.getElementById("shows").innerHTML=" More   ⬇";

}
</script>
</body>
</html>