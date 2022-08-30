<?php 
 try {
     $username ="root";
     $password = "";
     $dbh = new PDO('mysql:host=localhost',$username, $password);
     

     $sqli = "CREATE DATABASE IF NOT EXISTS valourWD";
     $dbh->exec($sqli);
      }  
     catch (PDOException  $e) {
        print "Error!: ".$e->getMessage() . "<br/>";
         die();
    };



 try {
     $username ="root";
     $password = "";
     $dhh = new PDO('mysql:host=localhost;dbname=valourWD', $username, $password);
     

     $sql = "CREATE TABLE IF NOT EXISTS blog (
          blog_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
          blog_video TINYTEXT not null,
          blog_description LONGTEXT not null
          
)";
     $dhh->exec($sql);
      
    
   }
    catch (PDOException  $e) {
       print "Error!: ".$e->getMessage() . "<br/>";
        die();
   }
 

   try {
    $username ="root";
    $password = "";
    $dhh = new PDO('mysql:host=localhost;dbname=valourWD', $username, $password);
    

    $sql = "CREATE TABLE IF NOT EXISTS portfolio (
         portfolio_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
         portfolio_picture TINYTEXT not null,
         portfolio_name TINYTEXT not null,
         portfolio_description LONGTEXT not null,
         portfolio_link LONGTEXT not null

         
)";
    $dhh->exec($sql);
     
   
  }
   catch (PDOException  $e) {
      print "Error!: ".$e->getMessage() . "<br/>";
       die();
  }





























if (isset($_POST["service_submit_btn"])) {
$name= $_POST["name"];
$email= $_POST["email"];
$message= $_POST["message"];

if (empty($name) ||empty($email) || empty($message) ) {
header("Location:index.php?error=Please fill in the empty input fields!");
} 
else {   
if (!preg_match("/^[a-zA-Z ]*$/",$name) || !preg_match("/^[a-zA-Z ]*$/",$message) ){
header("Location:index.php?error=Only Letters Are Allowed!");

 } 
 else{
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

header("Location:index.php?error=Invalid E-Mail Address!");
   
} else{
    $names = $_POST["name"];
    $mailfrom = $_POST["email"];
    $message = $_POST["message"];
    
    $mailto = "deenkush22@gmail.com";
    $headers = "From :".$mailfrom;
    $txt = $names."Sent a message"."<br>".$message;
    
    $mail = mail($mailto,$txt,$headers);
    if ($mail) {
  header("Location:index.php?errors=Message Sent Successfully!");
    }else {
        header("Location:index.php?error=Message not Sent!");
    }

}}}}
  










if (isset($_POST["contact_submit_btn"])) {
    $name= $_POST["name"];
    $email= $_POST["email"];
    $message= $_POST["message"];
    
    if (empty($name) ||empty($email) || empty($message) ) {
    header("Location:index.php?error=Please fill in the empty input fields!");
    } 
    else {   
    if (!preg_match("/^[a-zA-Z ]*$/",$name) || !preg_match("/^[a-zA-Z ]*$/",$message) ){
    header("Location:index.php?error=Only Letters Are Allowed!");
    
     } 
     else{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    header("Location:index.php?error=Invalid E-Mail Address!");
       
    } else{
    
     
            $names = $_POST["name"];
            $mailfrom = $_POST["email"];
            $message = $_POST["message"];
            
            $mailto = "deenkush22@gmail.com";
            $headers = "From :".$mailfrom;
            $txt = $names."Sent a message"."<br>".$message;
            
            $mail = mail($mailto,$txt,$headers);
            if ($mail) {
          header("Location:index.php?errors=Message Sent Successfully!");
            }else {
                header("Location:index.php?error=Message not Sent!");
            }
          
    
    }}}}
   

    






   

