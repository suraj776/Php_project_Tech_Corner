
<?php
print_r($_POST);
include 'config.php';
include 'session.php';

$nameError ="";
$emailError ="";
$passwordError="";
$genderError ="";
$conatctError ="";



if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=='POST')
{
  //print_r($_POST);
  echo"form submitted";

$username = $_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=md5($_POST['password']);
$cpassword=md5($_POST['cpassword']);
$gender=$_POST['gender'];
$currentDate = date('Y-m-d');


 if(empty($username) && !preg_match("/^([a-zA-Z']+)$/","$username"))
      {
        $usernameErro="fill name or invalid characters";
       echo"fill name or invalid characters"."<br>";
      }
   else if(empty($email) && !filter_var($email,FILTER_VALIDATE_EMAIL))
   {
     $emailError="not correct email";
    echo"not correct email"."<br>";

   }
  else if(!preg_match('/^[0-9]{10}+$/', $contact))
  {
      $conatctError="wrong mobile number";
       echo"wrong mobile number";
 }
 else if(empty($password) && !preg_match("/^[a-zA-Z]\w{3,14}$/","$password"))
 {
   $passwordError="choose A-Z,a-z,special characters,0-9";
    echo"correct password";
 }
 else if($password!=$cpassword)
 {
   $passwordError="passwords not matching";
    echo"passwords not matching";
 }
 else {
    $exist="select 1 from users LIMIT 1";
    $sql=mysqli_query($conn,$exist);
    if($sql==FALSE)
    {

      $sqli="CREATE TABLE users(userid INT(6) AUTO_INCREMENT PRIMARY KEY,username varchar(30),email varchar(100) NOT NULL,gender varchar(10) NOT NULL,contact varchar(30) NOT NULL,password varchar(30) NOT NULL,created_at date)";
      if(mysqli_query($conn,$sqli))
      {
        echo"Table users created successfully";
        $data="INSERT INTO users values('$username','$gender','$email','$contact','user','$password','$currentDate')";
        if(mysqli_query($conn,$data))
        {
          echo"data is inserted successfully";
        }
        else {
          die("error".mysqli_error($conn));
        }
      }
    }
      else
        {
          $data="INSERT INTO users(`username`,`gender`,`email`,`contact`,`type`,`password`,`created_at`) values('$username','$gender','$email','$contact','user','$password','$currentDate')";
          if(mysqli_query($conn,$data))
          {
            echo"data is inserted successfully";
            header('location:login.php');
          }
          else
          {
            $error=mysqli_error($conn);
            die("error".mysqli_error($conn));

          }
         }
      }
    }

else
{

  $error=mysqli_error($conn);
  print_r($error);
  $_SESSION['error'] = $error;
    header('location:home.php');
}




?>
