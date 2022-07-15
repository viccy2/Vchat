<?php
session_start();
require 'dc.php';
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email']))
 {
 
 
?>
<!DOCTYPE html>
<html>
  <head>

    <title>V-Chat Chat | V-Chat</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" type="image/x-icon" href="favicon.ico">
   <link href="../md/css/sb-admin-2.min.css" rel="stylesheet">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
  <link href="../md/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/preloader.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/modal.css">
  <link rel="stylesheet" type="text/css" href="../css/post.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/dashboard_tabs.css">
  <link rel="stylesheet" href="../css/notifications/Lobibox.min.css">
  <link rel="stylesheet" href="../css/notifications/notifications.css">
    <link rel="stylesheet" type="text/css" href="../css/vchat_util.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/vchat_app_main.css">
  <script type="text/javascript" src="../css/bootstrap4/js/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="../css/bootstrap4/js/status.js"></script>

<!--===============================================================================================-->
 <script>
        new WOW().init();
</script>
<?php 
require 'dc.php';

?>
       <style type="text/css">
          body{
           background:url(<?php echo  $_SESSION['walpss']?>) no-repeat;
            background-size: cover;
            -moz-background-size: cover;
           -webkit-background-size: cover;
           -o-background-size: cover;
           width: 100%;
          min-height:100vh;
     max-height:1000vh;
          font-family:  'Poppins';
          font-size: 12px;
          overflow: hidden; 
         }
     </style>
    
   
</head>
<body>
<div>

  <nav class="navbar navbar-expand navbar-light  topbar mb-4 fixed-top " style=" color:<?php echo $_SESSION['color']; ?>;background-color: <?php echo $_SESSION['headerbgcolor']; ?>;height:70px">
<div>
   <a href="home"><i class=" fas fa-arrow-left fa-fw" style="color:white"></i></a>
</div>
         <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
           

            <!-- Nav Item - Video Call -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" >
            <div>
             <p style="text-align:center;color:white;margin-top:8px;font-size:14px;">Settings</p>
              <hr style='background-color:white;margin-top:-6px'></hr>
              </div>
              </a>
              <!-- Dropdown - MVideo Call-->
             
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small"></span>
                <img class="" >
                 <?php echo "<img src='".$_SESSION['pass']."'  style='width:40px;height:40px;border-radius: 50%' >";?>
              </a>
              <!-- Dropdown - User Information -->
             
            </li>

          </ul>

        </nav><br><br><br>
</div>
<!--===============================================================================================-->

 

  <div class=" animated zoomIn" style="background: -webkit-linear-gradient(top,<?php echo $_SESSION['headerbgcolor']?>,rgba(0, 0, 0, 0.15));opacity:0.9;min-height:100vh;
     max-height:1000vh;"><br>
     
  
     <div class="conta" style="color:white;background:white;color:<?php echo $_SESSION['color']?>;height:40px;">
      <p style="padding:10px">Account Settings</p>
    </div>
    
    <div class="" style="margin-top:15px">
  <a href="account_settings">
    <p class="container-fluid" style="color:white;">Account</p>
  </a>
      <hr style='background-color:white'></hr>
    </div>

   

<!--===============================================================================================-->
      <div class="" style="color:white;background:white;color:<?php echo $_SESSION['color']?>;height:40px;margin-top:-16px">
      <p style="padding:10px">Notification Settings</p>
    </div>
     <div class="" style="margin-top:15px">
       <p class="container-fluid" style="color:white;">Notification</p>
        <hr style='background-color:white'></hr>
      </div>
       <a href="#">
     <div class="">
      <p class="container-fluid" style="color:white">Sound</p>
      <hr style='background-color:white'></hr>
    </div>
  </a>
<!--===============================================================================================-->

    <div class="" style="color:white;background:white;color:<?php echo $_SESSION['color']?>;height:40px;margin-top:-20px">
      <p style="padding:10px">Others</p>
    </div>
     <div class="" style="margin-top:15px">
       <a href="terms">
    <p class="container-fluid" style="color:white;">Terms and Privacy</p>
  </a>
      <hr style='background-color:white'></hr>
    </div>
   <a href="about_vchat">
     <div class="">
      <p class="container-fluid" style="color:white">About Vchat</p>
      <hr style='background-color:white'></hr>
    </div>
  </a>
<!--===============================================================================================-->
 

   

   <!-- <hr clas style='background-color:white'></hr> -->
  </div>
    <footer class="fixed-bottom" style="height:30px;font-size:15px;color:#673AB7;background:<?php echo $_SESSION['bodybgcolor']; ?>;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Vchat 2021</span>
          </div>
        </div>
      </footer>
 <script src="../md/vendor/jquery/jquery.min.js"></script>
  <script src="../md/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../md/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
    <script src="../md/js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="../css/wowjs/dist/wow.min.js"></script>
    <script src="../vendor/animsition/js/animsition.min.js"></script>
    <script type="text/javascript" src="../css/bootstrap4/js/bootstrap.min.js"></script>
    <script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script>  
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="../vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/front.js"></script>
    <script src="../js/notifications/Lobibox.js"></script>
    <script src="../js/notifications/notification-active.js"></script>
    <script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script> 
    </body>
    </html>
  <?php
}
else{
  header("location:sign_in");
}
?>

