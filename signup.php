

<!DOCTYPE html>
<html>
<head>
  <?php 
    include 'config.php';
    include 'session.php';
   ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet">
</head>
<body style="background: url('images/background.gif') no-repeat center center ; background-size: cover; background-position:center top">
  <div class="navbar-fixed-top col-sm-12 container-fluid login-header">
    <div class="col-sm-6 container-fluid" style="height: 60px;">
      <h1 style="margin-left: 25px;margin-top: 17px;">Website Name</h1>
    </div>
    <div class="col-sm-6 container-fluid" style="height: 60px;">
      <button class="btn btn-default navigation-btn btn-lg "style="background-color: #ff4500;color:#222" onclick="location.href='signup.php';"><i style= "font-size: 24px;" class="fa fa-user-plus" aria-hidden="true"></i>  Sign-Up</button>
      <button class="btn btn-default navigation-btn btn-lg "style="background-color: #ff4500;color:#222" onclick="location.href='login.php';"><i style= "font-size: 24px;" class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
    </div>
  </div>
  


  <div class="col-sm-6 col-sm-offset-3 container-fluid" style="margin-top: 150px;">

    <div class="col-sm-12 container-fluid form-header">
      <h2 style="margin-left: 25px;margin-top: 15px;">Enter Details To Register</h2>
    </div>

    <form class="form-horizontal myform" method="POST" enctype="multipart/form-data" style="margin-top:60px;height: 630px;" action="process_signup.php">

        <div class="form-group" style="padding-top: 30px;">
          <div class="col-sm-3" style="background-color: #FF4500;border:1px solid #FF4500;color:#222;border-radius: 4px ;margin-left: 45px;"><h4>Enter Username</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="username">
          </div>
        </div>

        <div class="form-group" style="padding-top: 30px;">
          <div class="col-sm-3" style="background-color: #FF4500;border:1px solid #FF4500;color:#222;border-radius: 4px ;margin-left: 45px;"><h4>Enter Email</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="email">
          </div>
        </div>

        <div class="form-group" style="padding-top: 30px;">
          <div class="col-sm-3" style="background-color: #FF4500;border:1px solid #FF4500;color:#222;border-radius: 4px ;margin-left: 45px;"><h4>Enter Contact</h4>
          </div>
          <div class="col-sm-7">
            <input type="number" class="form-control" name="contact">
          </div>
        </div>


        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #FF4500;border:1px solid #FF4500;color:#222;border-radius: 4px ;margin-left: 45px;"><h4>Enter Password</h4>
          </div>
          <div class="col-sm-7">
            <input type="password" class="form-control" name="password">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #FF4500;border:1px solid #FF4500;color:#222;border-radius: 4px ;margin-left: 45px;"><h4>Confirm Password</h4>
          </div>
          <div class="col-sm-7">
            <input type="password" class="form-control" name="cpassword">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #FF4500;border:1px solid #FF4500;color:#222;border-radius: 4px ;margin-left: 45px;"><h4>Gender</h4>
          </div>
          <div class="col-sm-7">
            <select value="" type="text" name="gender">

              <option>MALE</option>
              <option>FEMALE</option>
              <option>OTHER</option>

            </select>
          </div>
        </div>
        <input type="hidden" name="action" value="register">
        

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="margin-left: 300px;">
            <button  name="submit" class=" btn-lg btn-block" style="background-color: #FF4500;border:1px solid #FF4500;color:#222;" ><i style= "font-size: 24px;" class="fa fa-user-plus" aria-hidden="true"></i> Sign-Up
            </button>
          </div>
        </div>

        <h1 style="color: #ff4500;font-size: 45px;margin-left: 266px;"><i class="fa fa-facebook-official" aria-hidden="true"></i> <i class="fa fa-instagram" aria-hidden="true"></i> <i class="fa fa-twitter-square" aria-hidden="true"></i> <i class="fa fa-linkedin-square" aria-hidden="true"></i></h1>

    </form>

  </div>



  
</body>
</html>
